<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    
    use HasFactory;

    protected $fillable = ['code', 'discount', 'min_purchase', 'expires_at'];

    // Relationship with Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
