@extends('layouts.app')

@section('content')
  
	<div>
		<img align="right" src="http://makna.org.my/wp-content/uploads/2013/04/MAKNA-Logo-Colour-Small.jpg" height="100" width="100" style="margin-top: -5px; margin-right:10px;"/>
		<div style="line-height:6px;font-size:smaller;font-weight:600;font-style: italic;">
			<p style="margin-bottom:25px">$todate</p>
            <p>{{$prints->ic}}</p>
            <p id="pre_add1">{{$prints->add1}}</p>
            <p id="pre_add2">{{$prints->add2}}</p>
            <p id="pre_add23">{{$prints->add3}}</p>
            <p id="pre_add3">{{$prints->postcode}}, {{$prints->add4}}, {{strtoupper($prints->state)}}</p>
            <p id="pre_attn" style="margin-top:15px;"></p>
            <br>
	</div>
	<div style="font-size:14px; text-align: justify; text-justify: inter-word;">
            <p>Dear {{strtoupper($prints->account_holder)}}</p>
            <p style="color:#d8609e; font-size: medium;"><b> THANK YOU FOR YOUR KINDNESS</b></p>
            <p>project_text</p> 
          </div>
        </div>

        <p align="left" style="margin-top:50px; filter: grayscale(100%);"><img src="http://makna.org.my/images/dato_chop.jpg" height="90" width="280"/></p>
          <p align="left" style="margin-top:10px; margin-right: 25px;">
            Dato’ Mohd Farid Ariffin<br>
            Founder & President, MAKNA<br>
          </p>

           <p style="border-bottom: 2px dashed #000000;margin-top:1px;"></p>
        <div style="font-size:smaller">
        <img align="left" src="http://makna.org.my/wp-content/uploads/2013/04/MAKNA-Logo-Colour-Small.jpg" height="100" width="100" style="margin-top: -5px; margin-bottom:5px;"/>
          <div style="line-height:6px;font-size:smaller;font-weight:600;font-style: italic;">
          <p style="font-size:16px; color:#000; margin-right: 100px;"  align="right" >{{$prints->trans_year}} TAX EXEMPT RECEIPT</p>
            <p style="margin-top:20px;"align="right">
            Receipt No: $id<span id="receipt_copy"></span><br><br>
            Date of Donation: {{$prints->trans_date}}</p>
        </div>

        <div align:"left" style="font-size:smaller">
          <table style="width:100%">
            <tr style="height:40px;">
              <td style="width:30%;">Diterima dari<br>
                      <i>Received from</i></td>
              <td style="border-bottom: 1px solid #000000;">{{strtoupper($prints->account_holder)}}</td>
            </tr>

             <tr style="height:40px;">
              <td style="width:30%;" id="nric_title">No. Kad Pengenalan/Pasport<br>
                      <i>NRIC/Passport</i></td>
             <td style="border-bottom: 1px solid #000000;" id="nric">{{strtoupper($prints->ic)}}</td>
            </tr>

            <tr style="height:40px;">
              <td style="width:30%;">sebanyak Ringgit Malaysia<br>
                  <i>amount of Ringgit Malaysia</i></td>
              <td style="border-bottom: 1px solid #000000;">$amount_in_words</td>
            </tr>

            <tr style="height:40px;">
              <td style="width:30%;">untuk<br><i>for</i></td>
              <td style="border-bottom: 1px solid #000000; font-size: 16px; font-weight: bold; color: #d8609e;  " class="donationYearNiceName">DERMA- DERMA DEBIT DIRECT PROGRAMME </td>
           </tr>
          </table>
        </div>

        <div style="font-size:small">
          <p align="left" style="margin-top:20px;">
            RM  <span style="border-bottom: 1px solid #000000;padding-left:60px;padding-right:60px;font-size: large;">
                  <strong>{{$prints->amount}}/=</strong>
                </span><br>
            <span id="paymentMode"><strike>Tunai</strike> / Perbankan Internet / <strike>Cek </strike> <br>
            <strike>Cash</strike> / Internet Banking / <strike>Cheque </strike></span>
          </p>
          <p align="right" style="margin-top:-70px; filter: grayscale(100%);"><img src="http://makna.org.my/images/dato_chop.jpg" height="90" width="280"/></p><br>
          <p align="right" style="margin-top:-30px; margin-right: 25px;">
            dato<br>
            president<br>
            makna
          </p>
          <p style="text-align:center;font-size:12px;background-color: #d8609e; padding: 10px; color: #fff;">
            <strong>Potongan Di Bawah Subseksyen 44(6) Akta Cukai Pendapatan 1967:&nbsp;  RUJ:LHDN.01/35/42/51/179-6.4232 Berkuatkuasa 1 Mac 1995 &nbsp; No.Warta Kerajaan: 2153 Bertarikh 30 Mac 1995 <br></strong> Majlis Kanser Nasional (MAKNA), BG 03A & 05, Ground Floor, Megan Ambassy,(D – Villa Residence Kuala Lumpur), 225, Jalan Ampang, 50450 Kuala Lumpur
              Tel: 03-2162 9178 &nbsp;&nbsp;&nbsp; Fax: 03-2162 9203 &nbsp;&nbsp;&nbsp; 
            
          </p>
        </div>
       
        <p style="border-bottom: 2px dashed #000000;margin-top:1px;" class="page-break"></p>
        <p style="font-size:14px; font-weight:bold; color:#000">Derma- DERMA DEBIT DIRECT PROGRAMME</p>
        <p style="font-size:14px; font-weight:bold; color:#000; margin-top: -10px;">{{$prints->trans_year}} STATEMENT</p>

        

  <!--  -->

      
      </div>
    </div>

</body> 
</html>