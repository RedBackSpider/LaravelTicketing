<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Person;
use App\TicketComment;
use Illuminate\Support\Collection;

class TicketController extends Controller
{
    public function create()
    {
        $ticket = new Ticket();
        $ids = Person::pluck('email','id');
        return view('ticket.create', [ 'ticket' => $ticket ])->with('ids',$ids);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'id'=> 'required',
            'operatingsystem'=> 'required',
            'issue' => 'required',
            'comment' => 'required'
        ]);
        $ticket = new Ticket();
        $ticket->operatingsystem = $request->operatingsystem;
        $ticket->issue = $request->issue;
        $ticket->submissionstatus = "Pending";
        $ticket->person_id = $request->id;
        $ticket->save();
        $ticketcomment = new TicketComment();
        $ticketcomment->comment_text = $request->comment;
        $ticketcomment->ticket_id = $ticket->id;
        $ticketcomment->comment_maker = Person::find($request->id)->email;
        $ticketcomment->save();
        return redirect()->route('ticket.create') ->with('success', 'Ticket added Successfully');
    }
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.index')->with('tickets',$tickets);
    }
    public function show($id)
    {
        $ticket = Ticket::find($id);
        $ticketcomments = $ticket->ticket_comments()->get();
        return view('ticket.show')->with('ticket', $ticket)->with('comments',$ticketcomments);
    }
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket.edit')->with('ticket',$ticket);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'submissionstatus' => 'required',
        ]);
        $ticket = Ticket::find($id);
        $ticket->submissionstatus = $request->submissionstatus;
        $ticket->save();
        if($request->comment != null) {
            $ticketcomment = new TicketComment();
            $ticketcomment->comment_text = $request->comment;
            $ticketcomment->ticket_id = $ticket->id;
            $ticketcomment->comment_maker = "ITS Staff";
            $ticketcomment->save();
        }
        return redirect()->route('ticket.index') ->with('success', 'Ticket altered Successfully');
    }
}
