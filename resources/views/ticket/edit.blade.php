@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ITS Staff - Edit Ticket</h2>
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

    {!! Form::model($ticket, ['method'=> 'PUT' , 'action' => ['TicketController@update',$ticket->id]]) !!}

    <div class="form-group">
        {!! Form::label('submissionstatus', 'New Submission Status') !!}
        {!! Form::select('submissionstatus', ['Pending'=>'Pending','In Progress'=>'In Progress',
                            'Unresolved'=>'Unresolved', 'Resolved'=>'Resolved'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment','Add Comment') !!}
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