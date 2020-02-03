<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'controlnum', 'status', 'boss_id',
    ];
    public function bosses()
    {
        return $this->belongsTo('App\Models\Boss');
    }
    public function safeguards()
    {
        return $this->HasMany('App\Models\Safeguard');
    }
    
}
