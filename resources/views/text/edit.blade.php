@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <ul class="block-options">
                    <li><a href="{{ route('text.index') }}"><i class="fa fa-list"></i> List</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#interaction"><i class="fa fa-trash"></i> Delete</a></li>
                </ul>
                <h4 class="m-t-0 header-title"><b>{{ $project->project_name }}</b></h4>
                <p class="text-muted font-14 m-b-20">
                    Edit Projects Details
                </p>
        @section('form')
            {!! Form::model($project, ['route' => ['text.edit', $project], 'method' => 'put', 'files' => true]) !!}
        @endsection
            @include('text.form')
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <a class="btn btn-default" href="{{ route('text.index', $project) }}">CANCEL</a>&nbsp;&nbsp;
                            <input class="btn btn-success" value="UPDATE" type="submit">
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>

