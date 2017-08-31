@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create User</h2>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {!! Form::model($person, ['action' => 'PersonController@store']) !!}

    <div class="form-group">
        {!! Form::label('email', 'Your E-mail Address') !!}
        {!! Form::text('email', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('firstname', 'Your First Name') !!}
        {!! Form::text('firstname', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Your Last Name') !!}
        {!! Form::text('lastname', '', ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <button class="btn btn-new rmitred" type="submit">Add the Person!</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection