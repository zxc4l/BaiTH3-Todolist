<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'loanhvan';
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'completed',
        'created_at',
        'updated_at',
    ];
}
