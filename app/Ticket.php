<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['operatingsystem','issue', 'submissionstatus'];
    protected $table = 'ticket'; //'customer'
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Gets the person that this ticket was made by
     */
    public function person() {
        return $this->belongsTo('App\Person');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Gets any ticket comments connected to the user
     */
    public function ticket_comments()
    {
        return $this->hasMany('App\TicketComment');
    }
}
