<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $guarded = false;
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
