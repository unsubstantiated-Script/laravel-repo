<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    //Primary Key can change it here...
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
