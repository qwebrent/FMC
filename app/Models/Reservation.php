<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

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
];
    public function menus(){
        return $this->hasMany(Menu::class, 'reservation_id');
    }
}
