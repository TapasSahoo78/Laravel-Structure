<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory,SoftDeletes;
    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }
    public function cities():HasMany{
        return $this->hasMany(City::class);
    }
}
