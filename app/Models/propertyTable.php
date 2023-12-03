<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class propertyTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'coverImage',
        'propertyName', // seiraa
        'unitType', // 1br 2br
        'category', //sold, reserve
        'totalPrize',// 22m 1 br, 66 2br, studio
        'reservation_id'
    ];
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
