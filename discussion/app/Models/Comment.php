<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = [
        'comment', 
        'anonymity', 
        'idea_id', 
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function idea()
    {
        return $this->belongsTo('App\Models\Idea','idea_id');
    }
}

