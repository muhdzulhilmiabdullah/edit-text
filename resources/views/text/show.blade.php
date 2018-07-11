@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">Show</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('text.index') }}">{{ $projects->project_name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('text.show', $interaction) }}">{{ $interaction->subject }}</a>
                    </li>
                    <li class="active">
                        Details
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
                    <li><a href="{{ route('admin.interaction.index') }}"><i class="fa fa-list"></i> List</a></li>
                    <li><a href="{{ route('admin.interaction.edit', $interaction) }}"><i class="fa fa-edit"></i> Edit</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#interaction"><i class="fa fa-trash"></i> Delete</a></li>
                </ul>
                <h4 class="m-t-0 header-title"><b>{{ $interaction->subject }}</b></h4>
                <p class="text-muted font-14 m-b-20">
                    Interaction Details
                </p>
            {!! Form::model($interaction, ['route' => ['admin.interaction.edit', $interaction], 'method' => 'put']) !!}
                <div class="row">
                    <div class="col-md-6 form-group">
                        {{ Form::label('subject', 'Subject') }}
                        {{ Form::input('text', 'subject', null, ['class' => 'form-control', 'disabled']) }}
                    </div>
                    <div class="col-md-6 form-group">
                        {{ Form::label('department', 'Department') }}
                        {{ Form::input('text', 'department', null, ['class' => 'form-control', 'disabled']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        {{ Form::label('notes', 'Notes') }}
                        <div class="well">
                            {!! $interaction->notes !!}
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interaction" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are You Sure Want To Delete?</h4>
            </div>
            <div class="modal-body">
                <p>
                    You are about to delete
                    <strong>{{ $interaction->subject }}</strong>. 
                    Click the <span class="label label-danger">Delete</span> button to proceed.
                </p>
                {!! Form::open(['id' => 'delete-interaction', 'route' => ['admin.interaction.destroy', $interaction], 'method' => 'delete']) !!}
                {!! Form::hidden('id', $interaction->id) !!}
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" form="delete-interaction" class="btn btn-danger">Delete</button>    
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <ul class="block-options">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#contacts">
                            <i class="fa fa-edit"></i> 
                            @if (count($interaction->contacts) > 0) 
                            Edit
                            @else
                            Assign
                            @endif
                        </a>
                    </li>
                </ul>
                <h4 class="m-t-0 header-title"><b>Contacts</b></h4>
                <p class="text-muted font-14 m-b-20">
                    All contacts for this interaction
                </p>
                <div class="row">
                @foreach ($interaction->contacts as $contact)
                    <div class="col-md-4">
                        <div class="panel panel-default panel-border">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $contact->name }}</h3>
                            </div>
                            <div class="panel-body">
                                <p class="text-muted">{{ $contact->email }}</p>
                            </div>
                        </div>
                    </div>
                    @if ($loop->iteration % 3 == 0)
                    </div><div class="row">
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contacts" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Assigning Contact For Interaction</h4>
            </div>
            <div class="modal-body">
                {!! Form::model($interaction, ['route' => ['admin.interaction.assign_contact', $interaction], 'id' => 'assign-contact', 'method' => 'put']) !!}
                <div class="row">
                @foreach ($contacts as $contact)
                    <div class="col-md-4 form-group">
                        @php 
                            $isChecked = isset($checked[$contact->id]) ? $checked[$contact->id] : ''; 
                        @endphp
                        {!! Form::checkbox('contact_id[]', $contact->id, null, [$isChecked]) !!}
                        {{ Form::label('contact_id[]', $contact->name . ' (' . $contact->email . ')') }} 
                    </div>
                    @if ($loop->iteration % 3 ==0)
                    </div><div class="row">
                    @endif
                @endforeach
                {!! Form::close() !!}
                </div>
            <div class="row">
                <div class="col-md-12">
                    You are about to assign the contacts for this interaction. 
                    Click the <span class="label label-success">Assign</span> button to proceed.
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" form="assign-contact" class="btn btn-success">Assign</button>    
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Messages</b></h4>
                <p class="text-muted font-14 m-b-20">
                    All messages related to this interaction
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Subject</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Received On</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($interaction->messages as $message)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $message->interaction->subject }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td class="text-center">{{ $message->phone }}</td>
                                <td class="text-center">
                                    {{ date('d M Y, h:ia', strtotime($message->created_at)) }}
                                </td>
                                <td class="text-center">
                                @if ($message->status == 'New')
                                    <span class="label label-info">{{ strtoupper($message->status) }}</span>
                                @else
                                    <span class="label label-success">{{ strtoupper($message->status) }}</span>
                                @endif
                                </td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ route('admin.message.show', $message) }}" 
                                            class="btn btn-xs btn-default" 
                                            data-toggle="tooltip" 
                                            data-placement="top"
                                            data-original-title="View Details"
                                        >
                                            <i class="fa fa-eye"></i><span> View</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
