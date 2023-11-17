<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'Appointments';
    protected $primaryKey = 'id';
    protected $fillable = [
        "date",
        "timeSlot",
        "property",
        "firstName",
        "lastName",
        "email",
        "mobileNo",
    ];
}
