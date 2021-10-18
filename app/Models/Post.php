<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    protected $fillable = ['title', 'excerpt', 'body'];
    // protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {

        return $this->belongsTo(User::class, 'user_id');
    }
}