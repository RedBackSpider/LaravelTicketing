@extends('layouts/masterlayout')
@section('title', 'Frequently asked questions')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>FAQ</h1>
        </div>
        <div class="panel">
            <div class="panel-heading">
                Question 1: Why does the user need to create a user before they can send a ticket and not while they send the ticket
            </div>
            <div class="panel-body">Answer: A user could have multiple tickets, meaning that the form would have to change depending on if
            the user has made a ticket before or not. The system was designed more so that their personal details represented an account.</div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                Question 2: Why did you choose the colors and design aspects that you did
            </div>
            <div class="panel-body">Answer: Most were based around the RMIT website, however the
                RMIT Brand guide found <a href="http://mams.rmit.edu.au/2dcdyb3ky5fd.pdf">here</a> helped with color design choices</div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                Question 3: What do the colors in the Ticket table mean?
            </div>
            <div class="panel-body">Depending on the submission status of the ticket, it will have a different color
            depending on the ticket. Blue means that it is pending, If yellow then it is in progress, Red means that it was
            unresolved and green is a resolved ticket</div>
        </div>
    </div>
@endsection