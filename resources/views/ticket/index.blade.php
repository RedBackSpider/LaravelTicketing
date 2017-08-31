@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Tickets</h2>
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

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Operating System</td>
                <td>Issue</td>
                <td>Submission Status</td>
                <td>Person Email</td>
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
            @endif
            ">
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['operatingsystem'] }}</td>
                <td>{{ $value['issue'] }}</td>
                <td>{{ $value['submissionstatus'] }}</td>
                <td>{{ $value->person['email'] }}</td>
                <td><a class="btn btn-new azure" href="{{ URL::to('ticket/' . $value['id']) }}">Show this Ticket</a></td>
                <td><a class="btn btn-new green" href="{{ URL::to('ticket/' . $value['id'] . '/edit') }}">Edit this ticket</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-new pink" href="{{ URL::to('ticket/create') }}">Add Ticket</a>
            </div>
        </div>
    </div>
@endsection