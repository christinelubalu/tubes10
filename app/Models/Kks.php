<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kks extends Model
{
    use HasFactory;

    protected $fillable = ['nokk', 'statusaktif'];
}
