<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'title',
        'content',
        'video_url',
        'category_id',
        'views_count',
        'likes_count',
        'comments_count',
        'shared_count',
        'published_at',
        'fetched_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Other relationships and methods...
}
