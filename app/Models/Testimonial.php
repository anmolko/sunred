<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table ='testimonials';
    protected $fillable = ['id','name','position','rating','description','image','created_by','updated_by'];

}
