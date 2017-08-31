<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model
{
    protected $fillable = ['comment_text', 'comment_maker'];
    protected $table = 'ticket_comment';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Gets the ticket this comment is related to
     */
    public function ticket_id() {
        return $this->belongsTo('App\Ticket');
    }
}
