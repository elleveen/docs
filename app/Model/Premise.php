<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['id', 'name', 'number', 'number_seates', 'square', 'id_subdivision', 'id_type' ];


}
