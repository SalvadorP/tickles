<?php 

namespace App\TicketProgress;

use Illuminate\Database\Eloquent\Model;

class TicketProgress extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ticket_progress';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ticket_id', 'description', 'assigned_user_id'];

    /**
     * Table relations
     */
    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }

}