<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Idea extends Model
{
    use HasFactory;

    protected $table = 'idea';

    protected $fillable = [
        'user_id',
        'name',
        'cat_id',
        'subject',
        'idea',
        'file',
        'photo',
        'anonymous',
        'number_of_view'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
