<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable  = ['name_subdivision', 'number_cabinets', 'square', 'address' ];
}
