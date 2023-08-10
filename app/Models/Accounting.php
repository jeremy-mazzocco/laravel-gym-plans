<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;

    protected $fillable = [
        'Month_of_the_year',
        'IBAN',
        'paid',
        'method_paid',

    ];

    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class);
    }
}
