<?php

namespace Series\Models\Media\Type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    /*
     * Relationships
     */
    public function video()
    {
    	$this->morphOne(Video::class);
    }
}
