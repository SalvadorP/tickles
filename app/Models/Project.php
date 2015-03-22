<?php 

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['department_id', 'name', 'description'];

    /**
     * Table relations
     */
    public function department() 
    {
        return $this->belongsTo('App\Department');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');        
    }

}