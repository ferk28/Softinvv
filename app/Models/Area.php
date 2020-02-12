<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_area',
    ];
    // Relations one-Many etc
    public function boss()
    {
        return $this->belongsTo('App\Models\Boss');
    }
}
