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
        'status', 'user_id', 'employee_id', 'product_id',
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
