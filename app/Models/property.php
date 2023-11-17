<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $fillable = [
        'coverImage',
        'residencialName', // seiraa
        'unitType', // 1br 2br
        'category', //sold, reserve
        'totalPrize'// 22m 1 br, 66 2br, studio
    ];
}
