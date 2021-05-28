<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Events extends Model
{
    use HasFactory, SoftDeletes;
    
    //table name
    protected $table = "events";
    //fields
     protected $fillable = [

       'title',
       'location',
       'date',
       'description',
       'entrance_fee',
    
     ];
}
