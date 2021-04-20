<?php

namespace Media\Models\Media\Type\Series;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    /*
     * Relationships
     */
    public function seasons()
    {
    	return $this->hasMany(Season::class)->orderBy('season_number');
    }
}
