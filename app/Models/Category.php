<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $fillable = ['name','type','description','image','alt','status','trash','created_by','updated_by'];

    use HasFactory;
}
