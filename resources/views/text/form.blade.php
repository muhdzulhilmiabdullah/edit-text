<form>
<div class="row">
    <div class="col-md-6 form-group required{{ $errors->has('project_name') ? ' has-error' : '' }}">
        {{ Form::label('project_name', 'Project Name') }}
        {{ Form::input('text', 'project_name', null, ['class' => 'form-control']) }}
        @if ($errors->has('project_name'))
        <span class="help-block">{{ $errors->first('project_name') }}</span>
        @endif
    </div>
    <div class="col-md-6 form-group required{{ $errors->has('project_code') ? ' has-error' : '' }}">
        {{ Form::label('project_code', 'Project Code') }}
        {{ Form::input('number', 'project_code', null, ['class' => 'form-control']) }}
        @if ($errors->has('project_code'))
        <span class="help-block">{{ $errors->first('project_code') }}</span>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12 form-group{{ $errors->has('project_text') ? ' has-error' : '' }}">
        {{ Form::label('project_text', 'Project Text') }}
        {!! Form::textarea('project_text', null, ['id' => 'project_text', 'class' => 'form-control', 'style' => 'resize: none;']) !!}
        @if ($errors->has('project_text'))
        <span class="help-block">{{ $errors->first('project_text') }}</span>
        @endif
    </div>
</div>

</form>