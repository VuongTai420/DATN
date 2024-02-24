<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'catergory';
    protected $primaryKey = 'categoryID';
    protected $fillable = [ 
        'categoryID',
        'name',
    ];
}
