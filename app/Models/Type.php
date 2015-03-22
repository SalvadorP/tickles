<?php 

namespace App\Type;

use Illuminate\Database\Eloquent\Model;

class Type extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'type';

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