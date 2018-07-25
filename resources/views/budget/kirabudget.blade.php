
@extends('layouts.app')

@section('content')

<center><h2 style="background-color: #000; color: #fff;">Kira Budget v1.0</h2></center>

<script language="JavaScript" type="text/javascript">
function calcpayments()

{
var salary=document.forms[0].salary.value*1;

var saving=document.forms[0].saving.value*1;
var food=document.forms[0].food.value*1;
var transport=document.forms[0].transport.value*1;
var phone=document.forms[0].phone.value*1;
var loans=document.form[0].loans.value*1;
var house_bills=document.for[0].house_bills.value*1;




//var result=(nprice*(salestax/100 +1)-dpayment)*((interest/100)/12) / (1-Math.pow((1+(interest/100)/12),(-t))); 

var salaryminussaving = salary - saving;
var foodplustransport = (food*4) + (transport*4);
var billcalculation = phone + loans + house_bills;
var totalcalculation = foodplustransport + billcalculation;
var calculation = salaryminussaving - totalcalculation;
var result = calculation; 



document.getElementById("monthlypayment").innerHTML=result;

}

</script>

<div align="left" style="max-width: 100%; width: 100vh; margin: auto; margin-top: 100px;  padding: 10px; border: solid 1px; border-radius: 30px;">

<div id="calclpayment">
        <form style="max-width: 100%">
        	<center><h3 >Kira budget bulanan anda !</h3></center>
        <strong>
          <br />How much can you spend a amount?:</strong> <br />
<br />
<table width="100%" style="margin: auto;">
          <td ><div align="left">How much is your salary?</div>
          	<input type= "text" name="salary" placeholder="RM" /></td>
      </tr>
          <tr>
            <td><div>How much do you want to save perMonth?</div>
        	<input type="text" name="saving" placeholder="RM"/></td>
        
      </tr>
          <tr>
            <td><div>How much do you spend for food in a week?</div>
        	<input type="text" name="food" placeholder="RM"/></td>
        
      </tr>
          <tr>
            <td><div >How much do you spend for transportation in a week?</div>
          <input type="irate" name="transport" placeholder="RM"/></td>
      </tr>
          <tr>
            <td><div >How much is your bills perMonth? </div>
          <input type="downpayment" name="phone" placeholder="Phone bills" />
        <input type="downpayment" name="loans" placeholder="Loans" />
          <input type="downpayment" name="house_bills" placeholder="House bills" /></td>    
      </tr>
          <tr>
            <td>&nbsp;</td>
        <td><input name="Input" type="button" value="Calculate " onclick="calcpayments()"/></td>
        <td><input name="reset2" type="reset" value="Clear" /></td>
      </tr>
          </table>
   <br />
  <b>Your estimated monthly balance:</b>  <br />
  <br />

  <p id="monthlypayment" style="font-size: 25px;background-color:#333; 
font-weight: bold; width: 100px; padding: 5px; color:#FFF; margin: auto;" > 0  </p>
      </form>
  
  </div>
          <br />
          <br />
        </p>
    </div>

@endsection
