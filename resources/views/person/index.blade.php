@extends('layouts.masterlayout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show all People</h2>
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
                <td>Email</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Show</td>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $key => $value)
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['email'] }}</td>
                <td>{{ $value['firstname'] }}</td>
                <td>{{ $value['lastname'] }}</td>
                <td>
                    <a class="btn btn-new azure" href="{{ url('person/'.$value['id']) }}">Show this Person</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-new pink" href="{{ URL::to('person/create') }}">Add Person</a>
            </div>
        </div>
    </div>
@endsection