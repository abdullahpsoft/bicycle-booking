<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provider;

class Biker extends Model
{
    protected $table='biker';
    protected $fillable = [
        'name','return_date', 'return_time', 'phone', 'origin_location', 'destination_location','no_passenger', 'issue_date', 'issue_time','status', 'fare'
    ];
}