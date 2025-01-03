<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
