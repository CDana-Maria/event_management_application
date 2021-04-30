<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'short_description',
        'content',
        'image_id'
    ];

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function image() {
        return $this->hasOne(Image::class);
    }

    public function tag() {
        return $this->belongsToMany(Tag::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
