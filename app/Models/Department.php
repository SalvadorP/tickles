<?php 

namespace App\Department;

use Illuminate\Database\Eloquent\Model;

class Department extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'department';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization_id', 'name', 'description'];


    /**
     * Table relations
     */
    public function organization() 
    {
        return $this->belongsTo('App\Organization');
    }

    public function projects() 
    {
        return $this->hasMany('App\Project');
    }

}
