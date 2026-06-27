<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $fillable = [
    'name',
    'message',
    'photo_path',
    'is_public',
];
}
