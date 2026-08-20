<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'title',
        'slug',
        'description',
        'youtube_id',
        'thumbnail_url',
        'is_live',
        'is_featured',
        'duration',
        'views'
    ];

    protected $casts = [
        'is_live' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
