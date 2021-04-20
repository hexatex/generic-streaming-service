<?php

namespace App\Models\Media\Type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model implements Videoable
{
    use HasFactory;

    /*
     * Relationships
     */
    public function video()
    {
    	return $this->morphOne(Video::class);
    }
}
