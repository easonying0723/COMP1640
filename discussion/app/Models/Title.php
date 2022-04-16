<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $primaryKey = 'title_id';

    protected $table = 'title_details';
    public $timestamps = false;
    protected $fillable = [
        'title_name',
        'id',
        
    ];
}
