<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainBonus extends Model
{
    protected $table = 'trains_bonus';
    use HasFactory;
    public $timestamps = true;
}
