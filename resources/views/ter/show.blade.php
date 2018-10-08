<!DOCTYPE html> 
<html>
<head>
    <title>MAKNA TAX Receipt</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

</head>
<body style="max-width: 100%; width: 1080px; margin:auto; padding: 20px; ">

    <div>
        <img align="right" src="http://makna.org.my/wp-content/uploads/2013/04/MAKNA-Logo-Colour-Small.jpg" height="100" width="100" style="margin-top: -5px; margin-right:10px;"/>
        <div style="line-height:6px;font-size:smaller;font-weight:600;font-style: italic;">
            <p style="margin-bottom:25px">$todate</p>
            <p>{{$account_holder}}</p>
            <p id="pre_add1">{{$add1}}</p>
            <p id="pre_add2">{{$add2}}</p>
            <p id="pre_add23">{{$add3}}</p>
            <p id="pre_add3">{{$postcode}}, {{$add4}}, {{strtoupper($state)}}</p>
            <p id="pre_attn" style="margin-top:15px;"></p>
            <br>
    </div>
    <div style="font-size:14px; text-align: justify; text-justify: inter-word;">
            <p>Dear {{strtoupper($account_holder)}}</p>
            <p style="color:#d8609e; font-size: medium;"><b> THANK YOU FOR YOUR KINDNESS</b></p>
            <p>project_text</p> 
          </div>
        </div>

        <p align="left" style="margin-top:50px;"><img src="http://makna.org.my/images/dato_chop.jpg" height="90" width="280"/></p>
          <p align="left" style="margin-top:10px; margin-right: 25px;">
            Dato’ Mohd Farid Ariffin<br>
            Founder & President, MAKNA<br>
          </p>

           <p style="border-bottom: 2px dashed #000000;margin-top:1px;"></p>
        <div style="font-size:smaller">
        <img align="left" src="http://makna.org.my/wp-content/uploads/2013/04/MAKNA-Logo-Colour-Small.jpg" height="100" width="100" style="margin-top: -5px; margin-bottom:5px;"/>
          <div style="line-height:6px;font-size:smaller;font-weight:600;font-style: italic;">
          <p style="font-size:16px; color:#000; margin-right: 100px;"  align="right" >{{$trans_year}} TAX EXEMPT RECEIPT</p>
            <p style="margin-top:20px;"align="right">
            Receipt No: <span id="receipt_copy"></span><br><br>
            Date of Donation: {{$trans_date}}</p>
        </div>

        <div align:"left" style="font-size:smaller">
          <table style="width:100%">
            <tr style="height:40px;">
              <td style="width:30%;">Diterima dari<br>
                      <i>Received from</i></td>
              <td style="border-bottom: 1px solid #000000;">{{strtoupper($account_holder)}}</td>
            </tr>

             <tr style="height:40px;">
              <td style="width:30%;" id="nric_title">No. Kad Pengenalan/Pasport<br>
                      <i>NRIC/Passport</i></td>
             <td style="border-bottom: 1px solid #000000;" id="nric">{{strtoupper($ic)}}</td>
            </tr>

            <tr style="height:40px;">
              <td style="width:30%;">sebanyak Ringgit Malaysia<br>
                  <i>amount of Ringgit Malaysia</i></td>
              <td style="border-bottom: 1px solid #000000;">amount_in_words</td>
            </tr>

            <tr style="height:40px;">
              <td style="width:30%;">untuk<br><i>for</i></td>
              <td style="border-bottom: 1px solid #000000; font-size: 16px; font-weight: bold; color: #d8609e;  " class="donationYearNiceName">DERMA- {{$project_code}} </td>
           </tr>
          </table>
        </div>

        <div style="font-size:small">
          <p align="left" style="margin-top:20px;">
            RM  <span style="border-bottom: 1px solid #000000;padding-left:60px;padding-right:60px;font-size: large;">
                  <strong>{{$totalAmount}}/=</strong></p>
                  @if($payment_mode == 'ATM/Counter')
                  <p align="left" style="font-size:16px; margin-left: 6vh; margin-top: -10px;">ATM/Counter</p>
                  @elseif($payment_mode == 'Credit Card')
                  <p align="left" style="font-size:16px; margin-left: 3vh; margin-top: -10px;">Kad Kredit/Credit Card</p>
                  @elseif($payment_mode == 'Cheque')
                  <p align="left" style="font-size:16px; margin-left: 6.5vh; margin-top: -10px;">Cek/Cheque</p>
                  @elseif($payment_mode == 'Malaysian Postal Order')
                  <p align="left" style="font-size:16px; margin-left: 5vh; margin-top: -10px;">WPM/MPO</p>
                  @elseif($payment_mode == 'Online Transfer')
                  <p align="left" style="font-size:16px; margin-top: -10px;">Perbankan Internet/Internet Banking</p>
                  @else
                  <p align="left" style="font-size:16px; margin-left: 5vh; margin-top: -10px;">Cash</p>
                  @endif
          <p align="right" style="margin-top:-70px;"><img src="http://makna.org.my/images/dato_chop.jpg" height="90" width="280"/></p><br>
          <p align="right" style="margin-top:-30px; margin-right: 25px;">
            $dato<br>
            $president<br>
            $makna
          </p>
          <p style="text-align:center;font-size:12px;background-color: #d8609e; padding: 10px; color: #fff;">
            <strong>Potongan Di Bawah Subseksyen 44(6) Akta Cukai Pendapatan 1967:&nbsp;  RUJ:LHDN.01/35/42/51/179-6.4232 Berkuatkuasa 1 Mac 1995 &nbsp; No.Warta Kerajaan: 2153 Bertarikh 30 Mac 1995 <br></strong> Majlis Kanser Nasional (MAKNA), BG 03A & 05, Ground Floor, Megan Ambassy,(D – Villa Residence Kuala Lumpur), 225, Jalan Ampang, 50450 Kuala Lumpur
              Tel: 03-2162 9178 &nbsp;&nbsp;&nbsp; Fax: 03-2162 9203 &nbsp;&nbsp;&nbsp; 
            
          </p>
        </div>
       
        <p style="border-bottom: 2px dashed #000000;margin-top:1px;" class="page-break"></p>
        <p style="font-size:14px; font-weight:bold; color:#000">Derma- DERMA {{$project_code}}</p>
        <p style="font-size:14px; font-weight:bold; color:#000; margin-top: -10px;">{{$trans_year}} STATEMENT</p>

   <div class="row">
      <div class="col-md-12">
        @foreach ($printGroupByICs as $ic => $printGroupByIC)
        
        
        <div class="panel panel-color panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $ic }}</h3>
                    
                    
                </div>
                <div class="panel-body">
                  @php


                    $groupByMonthYears = $printGroupByIC->groupBy(function($receipt) {
                return \Carbon\Carbon::createFromFormat('Y-m-d', $receipt->trans_date)->format('Y-m');


                });

                  $groupByProjectCodes = $printGroupByIC->groupBy(function($receipt){
                  return $receipt->project_code;
                });

                  @endphp

                    <table class="table table-striped">
                        <thead style="background-color: #d8609e">
                            <tr>
                                <th  class="text-center">MONTH / YEAR</th>
                                <th class="text-center">AMOUNT (RM)</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($groupByMonthYears as $monthYear => $groupByMonthYear)
                        @foreach ($groupByProjectCodes as $projectcode => $groupByProjectCode)
                          @php
                            $totalAmount = $groupByProjectCode->sum(function($receipt) {
                        return $receipt->amount;
                        
                });
                          @endphp
                            <tr>
                                <td class="text-center">{{ date('F Y', strtotime($monthYear)) }}</td>
                                <td class="text-center">{{ number_format($totalAmount, 2) }}</td>
                            </tr>
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          
        @endforeach

      
      </div>
    </div>

</body> 
</html>