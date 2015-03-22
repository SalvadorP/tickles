<?php 

namespace App\Ticket;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ticket';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['project_id', 'priority_id', 'status_id', 'type_id', 'requester_id', 'assigned_user_id'];

    /**
     * Table relations
     */
    public function project() 
    {
        return $this->belongsTo('App\Project');
    }

    public function logs()
    {
        return $this->hasMany('App\Logs');        
    }

    public function progresses()
    {
        return $this->hasMany('App\Progress');        
    }

    public function priority()
    {
        return $this->hasOne('App\Priority');        
    }

    public function status()
    {
        return $this->hasOne('App\Status');        
    }

    public function type()
    {
        return $this->hasOne('App\Type');        
    }

}