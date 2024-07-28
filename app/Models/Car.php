<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Car extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $table = 'cars';

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }


}
