<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $table ='blog';
    use HasFactory;
    protected $guarded=[];
}
