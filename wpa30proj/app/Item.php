<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ["name", "count", "price"];
    public function categories() {
        return $this->belongsToMany("App\Category", "item_category", "item_id", "category_id");
    }
}
