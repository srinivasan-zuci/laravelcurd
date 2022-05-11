<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactmodel extends Model
{
    protected $table= 'contacts';
    protected $primarykey ='id';
    protected $fillable=['name','address','mobile'];
}
