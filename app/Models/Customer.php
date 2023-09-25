<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'd_customer';
    protected $primaryKey = 'ID_CUS';
    protected $filltable =[
        'ID_CUS',
        'CUS_NAME',
        'CUS_PHONE',
        'CUS_AOM',
        'CUS_TIME_START',
        'CUS_TIME_END',
        'CUS_CREATE_TIME',
        'STATUS',
    ];
}
