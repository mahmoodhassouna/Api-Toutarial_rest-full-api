<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='Categories';
    protected $fillable = ['name_ar','name_en','created_at','updated_at','active'];
}
