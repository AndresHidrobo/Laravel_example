<?php

namespace App\Models;
use Database\Factories\EditorialFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Editorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}