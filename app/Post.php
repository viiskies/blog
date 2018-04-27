<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title', 'content', 'date', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
