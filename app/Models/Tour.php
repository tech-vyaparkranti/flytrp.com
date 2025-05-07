<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory;
    
    protected $table = "tour";

    const ID = "id";
    const IMAGE = "image";
    const TITLE = "title";
    const CONTENT = "content";
    const META_TITLE = "meta_title";
    const META_KEYWORD = "meta_keyword";
    const META_DESCRIPTION = "meta_description";
    // const Tour_DATE = "tour_date";
    const TOUR_STATUS = "tour_status";
    const TOUR_SORTING = "tour_sorting";
    const STATUS = "status";
    const CREATED_BY = "created_by";
    const UPDATED_BY = "updated_by";
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";

    const TOUR_STATUS_LIVE = "live";
    const TOUR_STATUS_DISABLED = "disabled";
    #"live","disabled"

    protected static function boot() {
        parent::boot();
        static::creating(function ($tour) {
            $tour->slug = Str::slug($tour->title, '-');
        });
    }
}
