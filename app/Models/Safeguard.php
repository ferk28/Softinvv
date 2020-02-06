<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Safeguard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'folio', 'status', 'user_id', 'employee_id', 'product_id',
    ];
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
