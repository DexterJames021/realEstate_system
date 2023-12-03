<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\propertyTable;

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
        'paymentTerm'
    ];
    public function property(){
        return $this->hasMany(propertyTable::class,'reservations_id','id');
    }
}
