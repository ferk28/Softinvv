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
        'name', 'controlnum', 'status', 'extension', 'area_id', 'user_id',
    ];
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
