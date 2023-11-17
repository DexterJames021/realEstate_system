<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    use HasFactory;
    protected $table = 'leads';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone','address'];

}
