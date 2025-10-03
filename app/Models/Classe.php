<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'total_rating',
        'price',
        'category_id',
        'mentor_id',
        'tag_id',
    ];
}