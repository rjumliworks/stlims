<template>
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" v-model="filter.keyword" placeholder="Search Purchase Request" class="form-control" style="width: 60%;">
                <span @click="refresh()" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button type="button" variant="primary" @click="goCreatePage()">
                    <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                </b-button>
            </div>
        </b-col>
    </b-row>
    <div>
        <table class="table table-nowrap mb-0">
            <thead class="table-light">
                <tr class="fs-11">
                    <th>#</th>
                    <th>Request #</th>
                    <th>Request Purpose</th>
                    <th>Division</th>
                    <th>Requested By</th>
                    <th>PO #</th>
                    <th class="text-center">PAP Code</th>
                    <th class="text-center">Quotation Count</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                    <template v-for="(list, index) in lists" :key="index">
                        <!-- Main Row -->
                        <tr class="custom-hover-row" v-b-toggle="'collapse-' + index">
                            <td>{{ index + 1 }}</td>
                            <td>{{ list.name }}</td>
                            <td>{{ list.name }}</td>
                            <td>{{list.name }}</td>
                            <td>
                                {{list.name}} 
                                {{list.name }}. 
                                {{ list.name }} 
                                {{list.name }}
                            </td>
                            <td></td>
                            <td class="d-flex justify-content-center align-items-center flex-wrap">
                              
                            </td>
                            <td class="text-center">{{list.name }}</td>
                            <td>
                               
                            </td>
                            <td @click.stop >
                               
                            </td>
                        </tr>

                        <!-- Collapse Row -->
                      <tr>
                        <td class="p-0 m-0 border-0" :colspan="10">
                            <b-collapse :id="'collapse-' + index" >
                            <b-card>
                                <table class="table text-center">
                                    <thead >
                                        <th>#</th>
                                        <th>Request #</th>
                                        <th>Item Nos.</th>
                                        <th>Quotation Count</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                       <tr >
                                        <td>
                                           1
                                        </td>
                                        <td>
                                           asd
                                        </td>
                                        <td></td>
                                        <td>
                                            asdsa
                                        </td>
                                        <td  class="text-center">
                                            <b-badge variant="success">
                                                asd
                                            </b-badge>
                                        </td>
                                        <td>
                                            
                                        </td>
                                       </tr>
                                    </tbody>
                                </table>
                               
                            </b-card>
                            </b-collapse>
                        </td>

                     </tr>
                    </template>
              
            </tbody>
     
        </table>
    </div> 
   
</template>
<script>
import _ from 'lodash';
import { router } from '@inertiajs/vue3';
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [
                {name: 'wew','id' : 1},
                 {name: 'wew2','id' : 2}
            ],
            rebid_lists: [],
            meta: {},
            links: {},
            filter: {
                keyword: null,
            },
            index: null
        }
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal);
        }
    },

    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){ 
            page_url = page_url || '/faims/purchase-requests';
            axios.get(page_url,{
                params : {
                    keyword: this.filter.keyword,
                    option: 'lists',
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));

        },

    
        goCreatePage(){
            router.get('/faims/purchase-requests/create');
        },
        editIPR(data){
            router.get('/faims/purchase-requests/'+data.id, {option: 'edit' });
        },
        reviewPR(data){
            router.get('/faims/purchase-requests/'+data.id, { option: 'review' });
        },
        approvePR(data){
            router.get('/faims/purchase-requests/'+data.id, { option: 'approve' });
        },

        bidsPR(data){
            if(data.status.slug == 'for-rebid'){ // if PR status is "For Rebid"
               router.get('/faims/bac-resolutions/'+data.id, { option: 'bac_resolutions' });
            }
            else{
                router.get('/faims/bids/'+data.id, { option: 'bids' });
            }
            
        },
        quotationsPR(data){
             if(data.status.slug == 'for-rebid'){ // if PR status is "For Rebid"
               router.get('/faims/bac-resolutions/'+data.id, { option: 'bac_resolutions' });
            }
            else{
               router.get('/faims/quotation-requests/'+data.id, { option: 'quotations' });
            }
        },

        rebidQuotationPR(data){
            router.get('/faims/rebid-quotation-requests/'+data.id , { option: 'rebid_quotations'});
        },

        rebidForBidsPR(data){
            router.get('/faims/rebids/'+data.id , { option: 'rebids' , purchase_request_id: data.purchase_request_id });
        },

        bacResolutionsPR(data){
            router.get('/faims/bac-resolutions/'+data.id, { option: 'bac_resolutions' });
        },
         
        rebidBACResolutionsPR(data){
            router.get('/faims/rebid-bac-resolutions/'+data.id, { option: 'rebid_bac_resolutions' });
        },
        
        NoticeOfAward(data){
            router.get('/faims/notice-of-awards/'+data.id, { option: 'notice_of_awards' });
        }, 
     
        RebidNoticeOfAward(data){
            router.get('/faims/rebid-notice-of-awards/'+data.id, { option: 'rebid_notice_of_awards' });
        }, 
        

        UpdateStatus(data){
            this.$refs.updateStatus.edit(data);
        },

        openPRRebids(data){
             this.$refs.openPRRebids.edit(data);
        },

        openAction(data,index){
            this.index = index;
            this.$refs.create.edit(data , 'action');
        },
        updateData(data){
            this.lists[this.index] = data;
        },

        getBadgeVariant(status_slug) {
            switch (status_slug) {
                case 'created':
                    return 'warning'; // Maps to Bootstrap's warning variant
                case 'reviewed':
                    return 'info';    // Maps to Bootstrap's info variant
                case 'approved':
                    return 'success';  // Maps to Bootstrap's success variant
                case 'for-bids':
                    return 'success'; 
                case 'for-bac-resolution':
                    return 'success'; 
                case 'for-approval-of-bac-resolution':
                    return 'success'; 
                case 'for-noa':
                    return 'success'; 
                case 'ongoing-rebid':
                    return 'success'; 
                default:
                    return 'secondary'; // Default variant if none match
            }
        },

        printPR(data){
          window.open('/faims/purchase-request/print/'+data.id+'?pr_id='+ data.id +'&purchase_request_number='+data.purchase_request_number );
        },
    }
}
</script>

<style scoped>
.custom-hover-row:hover {
    background-color: hsl(0, 29%, 97%); 
}

</style>