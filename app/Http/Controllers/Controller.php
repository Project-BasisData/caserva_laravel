<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

/**
 * $table->foreignId('cafe_id')
                  ->references('id')
                  ->on('cafes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('name_menu', 255);
            $table->decimal('price', $precision = 8);
            $table->string('image_menu', 255);
            $table->text('description');
 */