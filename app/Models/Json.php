<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    use HasFactory;
    protected $fillable = ['Viloyat', 'Tuman', 'MFY_nomi', 'Qaror_bilan_tasdiqlangan', 'Shape_Length', 'Shape_Area', 'Mahalla_ID', 'geometry'];
    protected $table = 'mahalla';
}
