<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    public $guarded;

    public function reservation(){
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
}
