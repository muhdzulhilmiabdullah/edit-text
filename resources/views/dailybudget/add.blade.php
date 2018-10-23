@extends('layouts.app')

@section('content')

 <div style="max-width: 100%; width: 500px; margin: auto; margin-top: 100px; border: solid 1px; padding: 23px; border-radius: 10px;background-color:#fff;">


      <form class="form-horizontal" method="POST" action="{{ url('ter/storeText')}}">
      	<center><img src="https://merabheja.com/wp-content/uploads/2016/10/39cb1e90c7d901332b0236c13a486f67.gif" height="100" width="150" style="margin-bottom: 20px; margin-top: -20px"></center>
     

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
          <label for="date">Date:&nbsp;</label>
          <input type="date" class="form-control" name="date ">
        </div>

        <div class="form-group">
          <label for="food">Food:&nbsp;</label>
          <input type="number" class="form-control" name="food" placeholder=" In RM">
        </div>

        <div class="form-group">
          <label for="transport">Transport:&nbsp;</label>
          <input type="text" class="form-control" name="transport" placeholder=" In RM">
        </div>

        <div class="form-group">
          <label for="miscellaneous">Miscellaneous:&nbsp;</label>
          <input type="text" class="form-control" name="miscellaneous" placeholder=" In RM">
        </div>

        <div class="form-group">
          <label for="miscellaneous">Comment:&nbsp;</label>
          <textarea  rows="10" type="text" class="form-control" name="project_text" aria-describedby="emailHelp" placeholder="Add comment"></textarea>
        </div>



       <!--  <div class="form-group">
          <label for="project_code">Project Code</label>
          <input type="number" class="form-control" name="project_code" placeholder="Add project code" autocomplete="On">
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Place Project Code here.</small>
        </div> -->

        <button type="submit" class="btn btn-success" style="float:right;">Save</button>
        <a href="/dailybudget/home" class="btn btn-danger">Cancel</a>
      </form>
  </div>






























@endsection