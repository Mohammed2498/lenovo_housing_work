<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $fillable = [
        'image',
        'apartments_number', 'address', 'name', 'description'
    ];

    public function apartments()
    {
        return $this->hasMany(Apartment::class, 'building_id', 'id');
    }
}
