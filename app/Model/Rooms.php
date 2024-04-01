<?php
namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'room_types_id',
        'square',
        'places',
        'building_id'
    ];
}