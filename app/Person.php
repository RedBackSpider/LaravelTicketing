<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['email','firstname', 'lastname'];
    protected $table = 'person';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Gets all tickets this customer made
     */
    public function ticket_bookings() {
        return $this->hasMany('App\Ticket');
    }
}
