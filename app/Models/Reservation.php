<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "reservations";
    protected $primaryKey = "id";
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'email',
        'phone',
        'validId_image',
        'tax_image',
        'poi_image',
        'monthlyIncome',
        'annualPayment',
        'paymentTerm'
    ];
}