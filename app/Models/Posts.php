<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'video',
        'description',
        'content',
        'source_name',
        'source_url',
        'created_at',
        'updated_at'
    ];
    
}
