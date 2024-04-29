<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

    public function getReadingTime()
    {
        $mins= round(str_word_count($this->body) / 250);
        return ($mins < 1) ? 1 : $mins;

    }

    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 150);
        // substr($this->body, 0, 150) . '...';
    }
}
