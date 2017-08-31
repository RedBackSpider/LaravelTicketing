@extends('layouts/masterlayout')
@section('title', 'Home')
@section('content')
    <div class="container">
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
            <div class="page-header">
                <h2>About ITS and this App</h2>
            </div>
            <div class="content">
                The RMIT Service and Support page is supposed to be a page that can easily help users submit requests for help
                and report issues with RMIT IT services, with the ability to track how their requests are being responded to.
                It is not a well designed site, so this application was built as a prototype as a replacement for
                RMIT's original site, using modern web development techniques and services, most notably Laravel.
                <br><br>
                Aside from the usual front-end technologies that are used in almost every website (HTML,CSS and Javascript)
                as well as PHP for the backend and MySQL for storing data, This site also uses relatively new Frameworks and
                design techniques. For frameworks, I used Bootstrap for the responsive components and premade CSS changes,
                and the Laravel PHP framework for it's MVC design and structure, Eloquent ORM model and the blade templating
                engine, as well as it's ability to quickly validate data. Using laravel also led to me using a more well
                documented architecture.
                <br>
            </div>
    </div>
@endsection
@section('header')
    <div class = "jumbotron">
        <div class = "container">
            <div class="page-header">
                <h1>Home</h1>
            </div>
            <div class="row">
                <div class="col-md-3"><a class="btn btn-new yellow" href="{{url('ticket/create')}}">Create Ticket</a></div>
                <div class="col-md-3"><a class="btn btn-new green" href="{{url('person/create')}}">Create Person</a></div>
                <div class="col-md-3"><a class="btn btn-new azure" href="{{url('ticket')}}">View All Tickets</a></div>
                <div class="col-md-3"><a class="btn btn-new pink" href="{{url('person')}}">View All People</a></div>
            </div>
        </div>
    </div>
@endsection