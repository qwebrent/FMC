<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'event_type',
        'event_date',
        'package_num',
        'modeOfPayment',
        'referenceNum',
    ];
}
