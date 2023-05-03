<?php


namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title', 'name_role', 'code'
    ];

    protected static function booted()
    {
        static::created(function ($group) {
            $group->save();
        });
    }
}