<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaView extends Model
{
    use HasFactory;

    protected $table = "idea_view";

    protected $fillable = [
        'user_id', 
        'idea_id', 
    ];
}
