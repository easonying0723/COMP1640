<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $table = 'title_details';
   // public $timestamps = false;
    protected $fillable = [
        'title_name',
        'title_duration_start',
        'title_duration_end',
        'id',
        
    ];
}
