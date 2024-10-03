<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Service extends Model
{
    use HasFactory,HasApiTokens;
     // Specify the table name if it's not the plural of the model name
     protected $table = 'services';

     // Define the fillable fields
     protected $fillable = ['name','description'];
}
