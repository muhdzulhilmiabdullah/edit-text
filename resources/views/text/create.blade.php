@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Create page</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('text.index') }}">Home</a>
                    </li>
                    <li class="active">
                        Create Text
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <ul class="block-options">
                    <li><a href="{{ route('text.index') }}"><i class="fa fa-list"></i> List</a></li>
                </ul>
                <h4 class="m-t-0 header-title"><b>New Text</b></h4>
                <p class="text-muted font-14 m-b-20">
                    Create New Text
                </p>
        @section('form')
            {!! Form::open(['url' => route('text.create'), 'files' => true]) !!}
        @endsection
            @include('text.form')
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <a class="btn btn-default" href="{{ route('text.index') }}">CANCEL</a>&nbsp;&nbsp;
                            <input class="btn btn-success" value="CREATE" type="submit">
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
