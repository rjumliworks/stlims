<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        /* Styles for the footer */
        @page {
           
        }

        html * {
            font-family:Arial, Helvetica, sans-serif;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9px;
        }

        .content {
            margin-bottom:55px; /* Space for the footer */
        }

        table,
        td,
        th {
            border: .5px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            padding: 3px;
            vertical-align: top;
        }
        td {
            padding: 3px;
            /* vertical-align: top; */
            /* text-align: center; */
        }
        input[type=checkbox] {
            transform: scale(.7);
        }
        .a {
            width: 55px; 
            height: 55px;
        }
        label {
            display: block;
            padding-left: 15px;
            text-indent: -15px;
        }
        input {
            width: 13px;
            height: 13px;
            padding: 0;
            margin:0;
            vertical-align: bottom;
            position: relative;
            top: -5px;
            left: 7px;
            *overflow: hidden;
        }
        input[type=checkbox] { display: inline; }
        input[type=checkbox]:before { font-family: DejaVu Sans; }
        label {
            display: inline-block;
        }
        .footer {
            position: fixed;
            bottom: -10;
            width: 100%;
            left: 0;
            margin-left: auto;
            margin-right: auto;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<?php 

    $form = $configuration['form'] = $configuration['form'];

    $tsr = json_encode($tsr); 
    $tsr = json_decode($tsr, true);   

    $pages = [
        [
            'name' => 'ACCOUNTING COPY',
            'color' => '#CE2F14'
        ],
        [
            'name' => 'CUSTOMER COPY',
            'color' => '#f3b700'
        ],
        [
            'name' => 'LABORATORY COPY',
            'color' => '#762EAF'
        ],
    ];

    $loopcount = 0;
?>
<body>
    
    <div class="footer">
        <table style="border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="width: 40%; text-align: left; font-weight: bold; color: <?php echo $color; ?>;"><hr/></td>
            </tr>
        </table>
        <table style="margin-top: -5px; border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="border-right-style: hidden; width: 3%; text-align: right;"> <img src="<?php echo $qrCodeImage; ?>"  width="30" height="30" alt="QR Code"></td>
                <td style="border-right-style: hidden;" style="width: 50%; text-align: left; font-size: 10px;"><br/> <span style="font-weight: bold; color: #072388;">{{$tsr['code']}}</span></td>
                <td style="border-left-style: hidden; width: 50%; text-align: right; font-size: 10px;">OP-007-F1 (front page) <br/>Rev 13 l Feb 01, 2025</td>
                
            </tr>
        </table>
    </div>


    <div class="content">
        @foreach($pages as $page)
        <div style="font-family:Arial;">
            <img src="{{ public_path('images/logo-sm.png') }}" alt="tag" style="position: absolute; top: -4; left: 60; width: 50px; height: 50px;">
            <center style="font-size: 10px; margin-bottom: 0px; text-transform: uppercase;">{{$configuration['agency']['member']['name']}}</center>
            <center style="font-size: 11px; margin-bottom: 0px; font-weight: bold;">REGIONAL STANDARDS AND TESTING LABORATORIES</center>
            <center style="font-size: 11px;">{{$form['address']}} | {{$form['contact']}} | {{$form['email']}}</center>
            <br/>
            <center style="margin-top: 8px; font-size: 12px;  color:#000; font-weight: bold; padding: 2px;">{{$form['form_name']}}</center>
            <center style="font-size: 10px; background-color: <?php echo $page['color']; ?>; color:#fff; font-weight: bold; padding: 2px;">{{$page['name']}}</center>
        </div>

        <table style="border: 1px solid black; font-size: 10px; margin-top: 15px;">
            <tbody>
                <tr>
                    <td width="25%">TSR Number : </td>
                    <td width="25%"><span style="font-weight: bold; color: #072388;">{{$tsr['code']}}</span></td>
                    <td width="25%">Date and Time :</td>
                    <td width="25%"><span style="color: #072388;">{{$tsr['date']}}</span></td>
                </tr>
            </tbody>
        </table>
        <table style="border: 1px solid black; font-size: 10px; margin-top: 10px;">
            <tbody>
                <tr>
                    <td width="25%">Customer : </td>
                    <td colspan="3" width="75%"><span style="font-weight: bold; text-transform: uppercase; color: #072388;">{{$tsr['customer']['name']}}</span></td>
                </tr>
                <tr>
                    <td width="25%">Address : </td>
                    <td colspan="3" width="75%"><span style="text-transform: uppercase; color: #072388;">{{$tsr['customer']['address']}}</span></td>
                </tr>
                <tr>
                    <td width="25%">Contact Number : </td>
                    <td width="25%"><span style="color: #072388;">{{$tsr['customer']['contact_no']}}</span></td>
                    <td width="25%">Email : </td>
                    <td width="25%"><span style="color: #072388;">{{$tsr['customer']['email']}}</span></td>
                </tr>
            </tbody>
        </table>
        <h6 style="font-size: 10px; margin-top: 12px;">1.TESTING OR CALIBRATION SERVICES</h6>
        <table style="border: 1px solid black; font-size: 10px; margin-top: -22px;">
            <thead style="background-color:#c8c8c8; padding: 5px; font-size: 9px;">
                <tr>    
                    <th style="text-align: left; vertical-align: middle;" width="12%">Code</th>
                    <th style="vertical-align: middle;" width="16%">Sample</th>
                    <th style="vertical-align: middle;" width="20%">Test/Calibration Requested</th>
                    <th style="vertical-align: middle;" width="26%">Test/Calibration Method</th>
                    <th style="vertical-align: middle;" width="6%">No. of Samples</th>
                    <th style="vertical-align: middle;" width="10%">Unit Cost</th>
                    <th style="text-align: center; vertical-align: middle;" width="10%">Total</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tsr['samples'] as $index=>$sample)
                <tr style="text-align: center; font-size: 9px; color: #072388;">
                    <td style="text-align: left;">{{$sample['samplecode']}}</td>
                    <td>{{$sample['samplename']}}</td>
                    <td>{{$sample['testname']}}</td>
                    <td>{{(isset($sample['methodShort'])) ? $sample['methodShort'] : $sample['method']}}</td>
                    <td>{{$sample['count']}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($sample['fee'],'₱ ')}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{number_format(trim(str_replace(',','',$sample['fee']),'₱ ')*$sample['count'],2,".",",")}}</td>
                </tr>
                @if(isset($sample['additional']))
                <tr style="text-align: center; font-size: 9px; color: #072388;">
                    <td colspan="4" style="text-align: left;">{{$sample['additional']['name']}}</td>
                    <td>{{$sample['additional']['quantity']}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($sample['additional']['fee'],'₱ ')}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{number_format(trim(str_replace(',','',$sample['additional']['fee']),'₱ ')*$sample['additional']['quantity'],2,".",",")}}</td>
                </tr>
                @endif
            @endforeach
            @if(isset($tsr['service']))
                <tr style="text-align: center; font-size: 9px; color: #072388;">
                    <td style="text-align: left;" colspan="4">{{$tsr['service']['name']}} ({{$tsr['service']['description']}})</td>
                    <td>{{$tsr['service']['quantity']}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{number_format(trim(str_replace(',','',$tsr['service']['fee']),'₱ '),2,".",",")}}</td>
                    <td style="text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{number_format(trim(str_replace(',','',$tsr['service']['fee']),'₱ ')*$tsr['service']['quantity'],2,".",",")}}</td>
                </tr>
            @endif
            </tbody>
            <tfoot style="text-align: center; padding: 3px; font-weight: bold; background-color:#c8c8c8;">
                <tr>
                    <td colspan="5"></td>
                    <td style="font-size: 8px;">SUBTOTAL</td>
                    <td style="font-size: 9px; text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($tsr['payment']['subtotal'],'₱ ')}}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td style="font-size: 8px;">DISCOUNT</td>
                    <td style="font-size: 9px; text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($tsr['payment']['discount'],'₱ ')}}</td>
                </tr>
                @if(isset($payment['type']))
                    @if($payment['type']['name'] == 'Wallet')
                    <tr>
                        <td colspan="5" style="font-weight: regular; text-align: left;"><i>Debited {{trim($payment['total'],'₱ ')}} from customers e-wallet</i></td>
                        <td style="font-size: 8px;">E-WALLET</td>
                        <td style="font-size: 9px; text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($payment['total'],'₱ ')}}</td>
                    </tr>
                    @endif
                @endif
                <tr>
                    <td colspan="5"></td>
                    <td style="font-size: 8px;">TOTAL</td>
                    <td style="font-size: 9px; text-align: right;"><span style="font-family: DejaVu Sans;">&#8369;</span>{{trim($tsr['payment']['total'],'₱ ')}}</td>
                </tr>
            </tfoot>
        </table>
        <h6 style="font-size: 10px; margin-top: 12px;">2. DESCRIPTION OF THE SAMPLE(S) / REMARK(S)</h6>
        <table style="border: 1px solid black; font-size: 9px; margin-top: -22px;">
            <tbody>
                <tr>
                    <td>
                        <ul style="margin-left: -30px; list-style: none; color: #072388; ">
                            @foreach($tsr['descriptions'] as $desc)
                                <li>{{$desc['code']}} : <i>{{$desc['customer_description']}}</i>, {{$desc['description']}}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <h6 style="font-size: 10px; margin-top: 12px;">3. CUSTOMER WALLET</h6>
        <table style="border: 1px solid black; font-size: 9px; margin-top: -22px;">
            <tbody>
                <tr>
                    <td>
                        <?php echo trim($wallet,'₱ '); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h6 style="font-size: 10px; margin-top: 12px;">4. DISCUSSED WITH CUSTOMER INCLUDING THE TERMS AND CONDITIONS AT THE BACK</h6>
        <table style="border: 1px solid black; font-size: 10px; margin-top: -22px; page-break-inside: avoid;">
            <tbody>
                <tr>
                    <td style="min-height: 50px; border-bottom-style: hidden;"><span style="font-size:9px; color: #606060;">Conforme:</span></td>
                    <td style="min-height: 50px; border-bottom-style: hidden;"><span style="font-size:9px; color: #606060;">Sample(s) received by:</span></td>
                    <td style="min-height: 50px; border-bottom-style: hidden;"><span style="font-size:9px; color: #606060;">Sampel(s) reviewed by:</span></td>
                </tr>
                <tr>
                    <td style="min-height: 50px; padding: 15px; border-bottom-style: hidden;"></td>
                    <td style="min-height: 50px; padding: 15px; border-bottom-style: hidden;"></td>
                    <td style="min-height: 50px; padding: 15px; border-bottom-style: hidden;"></td>
                </tr>
                <tr style="text-align: center;">
                    <td width="33.3%"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">{{$tsr['customer']['conforme']['name']}}</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Customer / Authorized Representative</td>
                    <td width="33.3%"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">{{$tsr['receiver']}}</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Customer Relation Officer </td>
                    <td width="33.3%"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">{{$manager}}</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Technical Manager </td>
                </tr>
            </tbody>
        </table>
        <table style="border: 1px solid black; font-size: 10px; margin-top: 10px; page-break-inside: avoid;">
            <tbody>
                <tr>
                    <td width="25%">Report due date : </td>
                    <td colspan="3" width="75%" style="color: #072388;">
                        {{$tsr['due_at']}}  /  <span>{{$form['time']}} (<i>or the next working day shall the due date falls on a holiday</i>)</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="border: 1px solid black; font-size: 10px; margin-top: 10px; page-break-inside: avoid;">
            <tbody>
                <tr>
                    <td width="25%">Report number : </td>
                    <td colspan="3" width="75%"><span style="text-transform: uppercase; color: #072388;"></span></td>
                </tr>
            </tbody>
        </table>
        <div style="page-break-inside: avoid;">
            <center style="margin-top: 15px; font-size: 8px; background-color: #000; color:#fff; font-weight: bold; padding: 2px;">FOR CASHIERING UNIT ONLY</center>
            <table style="border: 1px solid black; font-size: 10px; margin-top: 0px;">
                <tbody>
                    <tr>
                        <td style="border-right-style: hidden;" width="20%">Date Paid</td>
                        <td></td>
                        <td style="border-bottom-style: hidden;"><span style="font-size:9px; color: #606060;">Payment received by:</span></td>
                    </tr>
                    <tr>
                        <td style="border-right-style: hidden;">Amount Paid</td>
                        <td></td>
                        <td style="border-bottom-style: hidden;"></td>
                    </tr>
                    <tr>
                        <td style="border-right-style: hidden;">OR Number</td>
                        <td></td>
                        <td style="border-bottom-style: hidden;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom-style: hidden; border-right-style: hidden;">Mode of Payment</td>
                        <td style="border-bottom-style: hidden;">
                            <input type="checkbox" id="a" style="margin-top: 22px;"/>&nbsp;&nbsp;<label for="a">Cash</label>
                            <input type="checkbox" id="a" style="margin-top: 22px;"/>&nbsp;&nbsp;<label for="a">Cheque</label>
                            <input type="checkbox" id="a" style="margin-top: 22px;"/>&nbsp;&nbsp;<label for="a">Bank Deposit/Transfer</label>
                        </td>
                        <td width="33.3%" style="text-align: center;" rowspan="2">
                            <span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">{{$cashier}}</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Cashier 
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right-style: hidden;">Excess payment </br><span style="font-size: 9px;">(to debit on customer's wallet)</span></td>
                        <td>
                            <input type="checkbox" id="a" style="margin-top: 22px;"/>&nbsp;&nbsp;<label for="a">No</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="a" style="margin-top: 22px;"/>&nbsp;&nbsp;<label for="a">Yes</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount: ________________
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @if($loopcount < 2)
        <div class="page-break"></div>
        @endif
        @php $loopcount++; @endphp
        @endforeach
    </div>
</body>
</html>