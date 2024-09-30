<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['status'];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}