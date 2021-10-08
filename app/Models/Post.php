<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use willvincent\Rateable\Rateable;

class Post extends Model
{
    use Rateable;
    use HasFactory;
    
    protected $table = 'posts';
    protected $fillable = ['title', 'body', 'category_id', 'created_by'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->hasMany(Category::class);
    }
}