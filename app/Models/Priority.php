<?php 

namespace App\Priority;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'priority';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Table relations
     */
    public function ticket() 
    {
        return $this->belongsTo('App\Ticket');
    }

}