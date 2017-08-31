@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Ticket</h2>
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

    {!! Form::model($ticket, ['action' => 'TicketController@store']) !!}

    <div class="form-group">
        {!! Form::label('id', 'Person Email') !!}
        {!! Form::select('id', $ids, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('operatingsystem', 'Operating System') !!}
        {!! Form::text('operatingsystem', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('issue', 'Issue') !!}
        {!! Form::text('issue', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment','Comments') !!}
        {!! Form::textarea('comment', '', ['class' => 'form-control']) !!}
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <button class="btn btn-new rmitred" type="submit">Add the Ticket!</button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@endsection