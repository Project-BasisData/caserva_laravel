<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cafe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function owners()
    {
        return $this->belongsTo(Owner::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function searchs()
    {
        return $this->hasMany(Search::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
