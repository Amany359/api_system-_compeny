<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Option extends Model
{
    use HasFactory ,HasApiTokens ;
    protected $table = 'options';
    protected $fillable = ['title'];
}
