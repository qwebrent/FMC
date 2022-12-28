<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';
    // protected $fillable = [
    //     'package_name',
    //     'package_price',
    // ];
    public $guarded = [];
}
