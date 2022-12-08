<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reservations';
    protected $fillable = [
        'lname',
        'fname',
        'mname',
        'fullname',
        'phone',
        'email',
        'event_type',
        'event_date',
        'package',
        'persons',
        'message',
        'isCustomized',
        'isConfirmed',
        'isRefused',
        'isFinished',
        'isPaymentPending',
        'isOngoing',
];
    public function menus(){
        return $this->hasMany(Menu::class, 'reservation_id');
    }
}
