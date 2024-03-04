<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table='table_districts';
    protected $fillable = [
        'label',
        'district',
        'region',
        'soato',
        'nomi_lot',
        'name',
        'geometry',
    ];
}
