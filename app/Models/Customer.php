<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name_cust',
        'username_cust',
        'is_online',
        'email_cust',
        'password_cust',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'customer_id');
    }
}
