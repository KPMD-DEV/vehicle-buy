<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle_subcategory extends Model
{
    use HasFactory;
    protected $table = 'vehicle_subcategories';
    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}
