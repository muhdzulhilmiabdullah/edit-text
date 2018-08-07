@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>

 <div id="app">
        @include('flashm')

        @yield('content')
    </div>
         <a href="{{ route('htmltopdfview',['download'=>'pdf']) }}" class="btn btn-warning">Download PDF</a>
        <a href="/addtext" class="btn btn-success" style="margin: 20px;" >Add new text</a>

<div class="bordertext">
            <table id="example" class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Project Code</th>
                    <th>Project Text</th>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td class="center-td">{{ $project->project_name }}</td>
                        <td class="center-td">{{ $project->project_code }}</td>
                        <td class="text_justify">{{ $project->project_text }}</td>
                        <td><a href="{{action('TextController@view', $project['id'])}}" class="btn btn-primary">View</a></td>
                        <td><a href="{{action('TextController@edit', $project['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td>
                              <form action="{{action('TextController@destroy', $project['id'])}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
</div>

@endsection

