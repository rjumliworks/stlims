<?php

namespace App\Services\Laboratory\Release;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\UserRole;
use App\Models\TsrRelease;
use App\Jobs\SmsJob;
use App\Http\Resources\Operation\ReleaseResource;

class ReleasingClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->roles = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
    }

    public function lists($request){
        $keyword = $request->keyword;
        $laboratory = $request->laboratory;
        $data = ReleaseResource::collection(
            TsrRelease::with('tsr.customer:id,name_id,name,is_main','tsr.customer.customer_name:id,name,has_branches')
            ->with('user.profile')
            ->whereHas('tsr', function ($query) use ($laboratory){
                $query->where('agency_id',$this->agency);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
            })
            ->when($request->keyword, function ($query) use ($keyword){
                $query->whereHas('tsr', function ($query) use ($keyword){
                    $query->where('code', 'LIKE', "%{$keyword}%")->where('status_id', 4)->where('agency_id',$this->agency)
                    ->orWhereHas('customer',function ($query) use ($keyword) {
                        $query->whereHas('customer_name',function ($query) use ($keyword) {
                            $query->where('name', 'LIKE', "%{$keyword}%");
                        });
                    });
                });
            })
            ->when($request->type, function ($query, $type) {
                switch($type){
                    case 'For Released':
                        $query->where('created_at','>=', Carbon::now()->subDays(30));
                    break;
                    case 'Unclaimed Reports':
                        $query->where('created_at','<=', Carbon::now()->subDays(30));
                    break;
                }
            })
            ->orderBy('status_id','ASC') 
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function filter($request){
        $laboratory = $request->laboratory;
        $data = ReleaseResource::collection(
            TsrRelease::with('tsr.customer:id,name_id,name,is_main','tsr.customer.customer_name:id,name,has_branches','tsr.conforme')
            ->with('user.profile')
            ->where('status_id',26)
            ->whereHas('tsr', function ($query) use ($laboratory){
                $query->where('agency_id',$this->agency);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : $query->whereIn('laboratory_id',$this->roles);
            })
            ->when($request->type, function ($query, $type) {
                switch($type){
                    case 'For Release':
                        $query->where('created_at','>=', Carbon::now()->subDays(30));
                    break;
                    case 'Unclaimed Reports':
                        $query->where('created_at','<', Carbon::now()->subDays(30));
                    break;
                }
            })
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function save($request){
        $count = TsrRelease::where('tsr_id',$request->tsr_id)->count();
        if($count === 0){
            $data = TsrRelease::create(array_merge($request->all(),[
                'status_id' => 26
            ]));
            $contact = Tsr::with('customer.contact')->where('id',$request->tsr_id)->first()?->customer?->contact?->contact_no;
            $code = Tsr::where('id',$request->tsr_id)->first()?->code;
            $message = "Good day. This message is from the Department of Science and Technology- Regional Standards and Testing Laboratory. (DOST-RSTL). \n\nWe are pleased to inform you that the Test/Calibration Report for the Technical Service Request Number `$code` is now ready for pick up at the DOST IX Office, Pettit Barracks, Zamboanga City starting 4:00 PM today and the succeeding weekdays (except public holidays) between 8:00 AM- 5:00 PM. \n\nKindly present the Customer’s Copy of the Technical Service Request and Valid ID when claiming, and filled-out authorization slip if applicable.\n\nThank you!"; 
            dispatch(new SmsJob($contact, $message));
        }else{
            $data = [];
        }
        return [
            'data' => $data,
            'message' => 'TSR ready to release successful!', 
            'info' => "You've successfully mark tsr for release."
        ];
    }

    public function update($request){
        $data = TsrRelease::where('id',$request->id)->update([
            'released_at' => $request->released_at,
            'user_id' => \Auth::user()->id,
            'status_id' => 27
        ]);

        $data = TsrRelease::with('tsr.customer:id,name_id,name,is_main','tsr.customer.customer_name:id,name,has_branches')
            ->with('user.profile')
            ->where('id',$request->id)->first();
            
        return [
            'data' => new ReleaseResource($data),
            'message' => 'TSR was released successful!', 
            'info' => "You've successfully released the tsr."
        ];
    }
}
