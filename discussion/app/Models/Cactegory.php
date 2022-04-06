<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cactegory extends Model
{
    use HasFactory;

    protected $table = 'category_details';
    public $timestamps = false;
    protected $fillable = [
        'cate_name',
        'cate_option',
        
    ];
}
