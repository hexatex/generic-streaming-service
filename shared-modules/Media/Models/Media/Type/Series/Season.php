<?php

namespace Media\Models\Media\Type\Series;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Media\Models\Video;

class Season extends Model implements Videoable
{
    use HasFactory;

    /*
     * Relationships
     */
    public function series()
    {
    	return $this->belongsTo(Series::class);
    }

    public function videos()
    {
    	$this->morphMany(Video::class, 'videoable')->orderBy('display_order');
    }
}
