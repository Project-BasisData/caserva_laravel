<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function cafes()
    {
        return $this->belongsTo(Cafe::class);
    }
}
