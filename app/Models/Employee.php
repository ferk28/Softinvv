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
        'name_employee', 'controlnum', 'status', 'boss_id',
    ];
    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }
}
