@extends('layouts.app')

@section('content')

 <div id="app">
        @include('flashm')


        @yield('content')
    </div>


        <a href="{{ route('text.create') }}" class="btn btn-success" style="margin: 20px;" >Add new text</a>

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
                        <td><a href="{{ route('text.edit', $project) }}" class="btn-success">Edit</a></td>
                        <td><a href="{{ route('text.delete', $project) }}" class="btn-success">Delete</a></td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
</div>



@endsection

