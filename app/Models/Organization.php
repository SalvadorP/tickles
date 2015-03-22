<?php 

namespace App\Organization;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'organization';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Table relations
     */
    public function departments() 
    {
        return $this->hasMany('App\Department');
    }

}