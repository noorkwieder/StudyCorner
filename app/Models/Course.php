<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="courses";
    protected $primaryKey="id";
    protected $fillable = [
      'name',
      'hi ahoood' , 'woorr',
            
    ];
}
