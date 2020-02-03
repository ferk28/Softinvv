<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'trademark', 'model', 'quality', 'serialnumber', 'ram', 'so', 'status', 'description',
    ];
    public function safeguard()
    {
        return $this->belongsTo('App\Models\Safeguard');
    }
}
