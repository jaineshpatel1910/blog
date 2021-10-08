<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['category_name', 'created_by'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->belongsTo(Post::class);
    }
}