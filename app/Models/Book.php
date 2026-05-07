<?php

namespace App\Models;
use Database\Factories\BookFactory;
use App\Models\Author;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author_id',
        'editorial_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}