<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'content',
        'category_id',
        'user_id',
        'status',
    ];

    // Un blog appartient à une catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un blog appartient à un utilisateur (auteur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
