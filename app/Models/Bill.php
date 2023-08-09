<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'subscription_cost',
        'shop_purchase',
        'discount'
    ];

    public function accountings()
    {
        return $this->hasMany(Accounting::class);
    }
}
