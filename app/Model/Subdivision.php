<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['id', 'name_subdivision', 'number_cabinets', 'id_type', 'square', 'address' ];
}