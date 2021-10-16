<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'blogger';
    protected $fillable = ['type_of_blog', 'experience', 'created_by','accepted', 'status'];
}