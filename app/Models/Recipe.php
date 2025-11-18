<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'ingredients', 'steps', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
