@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{$person['firstname'].' '.$person['lastname']}} - Details</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2"><strong>Email:</strong></div>
            <div class="col-xs-10"> {{ $person['email'] }}<br></div>
        </div>

        <div class="row">
            <div class="col-xs-2"><strong>ID:</strong></div>
            <div class="col-xs-10"> {{ $person['id'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Created at:</strong></div>
            <div class="col-xs-10"> {{ $person['created_at'] }}<br></div>
        </div>
        <div class="row">
            <div class="col-xs-2"><strong>Updated at:</strong></div>
            <div class="col-xs-10"> {{ $person['updated_at'] }}<br></div>
        </div>
        <br>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Operating System</td>
                <td>Issue</td>
                <td>Submission Status</td>
                <td>Show</td>
                <td>Edit</td>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $key => $value)
                <tr class="@if ($value['submissionstatus'] == "Pending") info
                @elseif($value['submissionstatus'] == "In Progress") warning
                @elseif($value['submissionstatus'] == "Unresolved") danger
                @elseif($value['submissionstatus'] == "Resolved") success
                @endif">
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['operatingsystem'] }}</td>
                    <td>{{ $value['issue'] }}</td>
                    <td>{{ $value['submissionstatus'] }}</td>
                    <td><a class="btn btn-new azure" href="{{ URL::to('ticket/' . $value['id']) }}">Show this Ticket</a></td>
                    <td><a class="btn btn-new green" href="{{ URL::to('ticket/' . $value['id'] . '/edit') }}">Edit this ticket</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection