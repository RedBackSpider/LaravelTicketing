@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ticket Details</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2"><strong>Person's Email:</strong></div>
            <div class="col-xs-10"> {{ $ticket->person->email }}<br></div>
        </div>

        <div class="row">
            <div class="col-xs-2"><strong>Ticket ID:</strong></div>
            <div class="col-xs-10"> {{ $ticket['id'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Operating System:</strong></div>
            <div class="col-xs-10"> {{ $ticket['operatingsystem'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Issue:</strong></div>
            <div class="col-xs-10"> {{ $ticket['issue'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Submission Status:</strong></div>
            <div class="col-xs-10"> {{ $ticket['submissionstatus'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Created at:</strong></div>
            <div class="col-xs-10"> {{ $ticket['created_at'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Updated at:</strong></div>
            <div class="col-xs-10"> {{ $ticket['updated_at'] }}<br></div>
        </div>
        <br>
        @foreach($comments as $key=>$value)
            <div class="panel">
                <div class="panel-heading">
                    {{$value['comment_maker'].' , '.$value['created_at']}}
                </div>
                <div class="panel-body">
                    {{$value['comment_text']}}
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-new pink" href="{{ URL::to('ticket/'.$ticket['id'].'/edit') }}">Edit this ticket</a>
                </div>
            </div>
        </div>
    </div>
@endsection