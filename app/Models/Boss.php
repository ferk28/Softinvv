<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_boss', 'controlnum', 'status', 'extension', 'area_id',
    ];
    public function area()
    {
        return $this->HasOne('App\Models\Area');
    }
    public function employees()
    {
        return $this->HasMany('App\Models\Employee');
    } 
}
