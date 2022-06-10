<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';
    protected $fillable = ['owner', 'building_id', 'number'];

    public function building()
    {
        return $this->belongsTo(Building::class,
        'building_id', 'id')->withDefault();
    }
}
