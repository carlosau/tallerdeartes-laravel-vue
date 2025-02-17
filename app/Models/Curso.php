<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['id_hotmart', 'ad_status', 'title', 'slug', 'description', 'vsl', 'author', 'date', 'rating', 'category', 'format', 'subscription', 'language', 'comission', 'cashback', 'price'];
}
