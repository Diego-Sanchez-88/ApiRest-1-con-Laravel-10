<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'postalCode'
    ];

    /**
     * Get all of the invoices for the Customer
     * 
     * @return \Illiminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
