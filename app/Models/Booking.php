<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    //  protected $guarded=['id'];
    protected $fillable = ['name', 'email', 'count', 'date', 'time', 'special_request'];
}
