<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory,SoftDeletes;

    public function states():HasMany{
        return $this->hasMany(State::class);
    }
    public function cities():HasMany{
        return $this->hasMany(City::class);
    }
}
