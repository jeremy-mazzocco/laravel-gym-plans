<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'date_of_birth',
        'address',
        'kind_of_subscription',
        'end_subscription',
        'main_picture',
        'goal'
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function accounting()
    {
        return $this->hasOne(Accounting::class);
    }
}
