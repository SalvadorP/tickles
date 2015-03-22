<?php 

namespace App\TicketLog;

use Illuminate\Database\Eloquent\Model;

class TicketLog extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ticket_log';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ticket_id', 'log', 'assigned_user_id'];

    /**
     * Table relations
     */
    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }

}