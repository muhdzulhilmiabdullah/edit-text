@extends('layouts.app')

@section('content')

  <div style="max-width: 100%; width: 500px; margin: auto; margin-top: 100px; border: solid 1px; padding: 20px; border-radius: 10px;">


      <form class="form-horizontal" method="POST" action="{{action('TextController@update', $id)}}">
      <center><img src="http://makna.org.my/wp-content/uploads/2013/04/MAKNA-Logo-Colour-Small.jpg" height="100" width="100" style="margin-top: -5px; margin-right:10px; margin-bottom: 10px;"></center>
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
          <label for="project_name">Project Name</label>
          <input type="text" class="form-control" name="project_name" placeholder="Project Name" value="{{$projects->project_name}}">
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Place Project Name here.</small>
        </div>

        <div class="form-group">
          <label for="project_code">Project Code</label>
          <input type="number" class="form-control" name="project_code" placeholder="Project Code" value="{{$projects->project_code}}">
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Place Project Code here.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Text</label>
          <textarea rows="10" type="text" class="form-control" name="project_text" aria-describedby="emailHelp" placeholder="New text">{{$projects->project_text}}</textarea>
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Place new text here.</small>
        </div>
        
        <button type="submit" class="btn btn-success">Save</button>
      </form>
  </div>


@endsection