<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntriUmum extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_antrian',
        'status',
    ];
}
