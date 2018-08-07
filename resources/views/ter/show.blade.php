@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>{{$prints->account_holder}}</h1>


<!-- <div class="modal-content" style="color:#3377A7;padding:10px">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title-edit">Transaction detail</h4>
        </div>
        <div class="tdm_modal-body" style>
          <div id="tdm_modal_error" style="color:red"></div>
          <input type="hidden" id="tdm_tmp_attn_name">
          <input type="hidden" id="tdm_tmp_attn_desi">

          <div class="table-responsive">
            <table class="table" style="color:#3377a7">
              <tbody class="applicant_detail">
                <tr>
                  <td><label class="control-label" for="receipt_for">Tax Receipt For:</label></td>
                  <td>
                    <select class="form-control" name="receipt_for" id="tdm_receipt_for">
                      <option>Individual</option>
                      <option>Corporate</option>
                    </select>
                  </td>
                </tr>
                <tr class="attn_company row1">
                </tr>
                <tr class="attn_company row2">
                </tr>
                <tr>
                  <td><label class="control-label" for="account_holder">Donor:</label></td>
                  <td><input class="form-control" type="text" id="tdm_account_holder"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="nric">NRIC/Passport:</label></td>
                  <td><input class="form-control modal_error" type="text" id="tdm_nric"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="project">Project:</label></td>
                  <td>
                    <select class="form-control" name="tdm_project" id="tdm_project">
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><label class="control-label" for="add1">Add1:</label></td>
                  <td><input class="form-control modal_error" type="text" id="tdm_add1"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="add2">Add2:</label></td>
                  <td><input class="form-control" type="text" id="tdm_add2"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="add3">Add3:</label></td>
                  <td><input class="form-control" type="text" id="tdm_add3"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="add4">Add4:</label></td>
                  <td><input class="form-control" type="text" id="tdm_add4"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="postcode">Postcode:</label></td>
                  <td><input class="form-control modal_error" type="number" id="tdm_postcode" min="10000" step="1"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="state">State:</label></td>
                  <td>
                    <select class="form-control" name="state" id="tdm_state">
                      <option>Kuala Lumpur</option>
                      <option>Johor</option>
                      <option>Kedah</option>
                      <option>Kelantan</option>
                      <option>Labuan</option>
                      <option>Melaka</option>
                      <option>Negeri Sembilan</option>
                      <option>Pahang</option>
                      <option>Penang</option>
                      <option>Perak</option>
                      <option>Perlis</option>
                      <option>Putrajaya</option>
                      <option>Sabah</option>
                      <option>Sarawak</option>
                      <option>Selangor</option>
                      <option>Terengganu</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><label class="control-label" for="trans_date">Transaction Date:</label></td>
                  <td><input class="form-control" type="text" id="trans_date" readOnly></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="amount">Amount:</label></td>
                  <td><input class="form-control" type="number" id="tdm_amount"  min="0" step="0.01"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="channel">Channel:</label></td>
                  <td>
                    <select class="form-control" name="tdm_channel" id="tdm_channel">
                      <option>N/A</option>
                      <option>Affin Bank</option>
                      <option>Alliance Bank</option>
                      <option>AmBank</option>
                      <option>Asian Finance Bank</option>
                      <option>Bank Islam</option>
                      <option>Bank Muamalat</option>
                      <option>Bank Rakyat</option>
                      <option>BillPlz</option>
                      <option>BSN</option>
                      <option>CIMB</option>
                      <option>Citi Bank</option>
                      <option>Deutsche Bank</option>
                      <option>Hong Leong Bank</option>
                      <option>HSBC</option>
                      <option>Maybank</option>
                      <option>OCBC</option>
                      <option>Paypal</option>
                      <option>PeopleGiving</option>
                      <option>Public Bank</option>
                      <option>RHB</option>
                      <option>SimplyGiving</option>
                      <option>Standard Chartered Bank</option>
                      <option>UOB</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><label class="control-label" for="payment_mode">Payment Mode:</label></td>
                  <td>
                    <select class="form-control" name="tdm_payment_mode" id="tdm_payment_mode">
                      <option>ATM/Counter</option>
                      <option>Cash</option>
                      <option>Cheque</option>
                      <option>Credit Card</option>
                      <option>Malaysian Postal Order</option>
                      <option>Online Transfer</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><label class="control-label" for="remarks">Remarks:</label></td>
                  <td><input class="form-control" type="text" id="tdm_remarks"></td>
                </tr>
                <tr>
                  <td><label class="control-label" for="email">Donor's Email:</label></td>
                  <td><input class="form-control" type="text" id="tdm_email"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary save_edited_ter">Save</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div> -->

</body>
</html>

@endsection