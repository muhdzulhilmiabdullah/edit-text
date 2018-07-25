@extends('layouts.app')

@section('content')

  <center><h2 style="background-color: #000; color: #fff;">Kira Budget v2.0</h2></center>

  <div style="max-width: 100%; width: 60vh; margin: auto; margin-top: 100px; border: solid 1px; padding: 20px; border-radius: 10px;">


      <form class="form-horizontal" method="POST" action="{{ url('/storebudget')}}">

                {{csrf_field()}}

                @if (count($errors) > 0)
             <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  

           
        <div class="form-group">
          <label for="project_name">Salary </label>
          <input type="text" class="form-control" name="salarymonth" placeholder="perMonth">
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Your salary RM perMonth.</small>
        </div>

        <div class="form-group">
          <label for="project_code">Bank</label>
          <select class="form-control" name="bank">
            <option>CIMB</option>
            <option>MAYBANK</option>
            <option>BANK ISLAM</option>
            <option>BSN</option>
          </select>
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Choose your Bank.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Month working</label>
         <input type="text" class="form-control" name="month_working"  placeholder="Working by Month">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total working by Months.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Bills</label>
         <input type="text" class="form-control" name="bill"  placeholder="Bills">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total bills paid a month.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Loans</label>
         <input type="text" class="form-control" name="loans"  placeholder="Loans">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total loans paid a month.</small>
        </div>

         <div class="form-group">
          <label for="project_text">Food</label>
         <input type="text" class="form-control" name="food"  placeholder="Food">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total RM food/week.</small>
        </div>


         <div class="form-group">
          <label for="project_text">Transport</label>
         <input type="text" class="form-control" name="transport"  placeholder="Transport">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total RM transport/week.</small>
        </div>

         <div class="form-group">
          <label for="project_text">Parents</label>
         <input type="text" class="form-control" name="parents"  placeholder="Parents">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total RM to parents.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Family</label>
         <input type="text" class="form-control" name="family"  placeholder="Family">
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Total RM to family.</small>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
      </form>
  </div>

@endsection