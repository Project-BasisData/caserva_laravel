<?php

namespace Database\Seeders;

use App\Models\Cafe;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owners = Owner::all();
        foreach ($owners as $key => $owner) {
            Cafe::create(
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Kopitani',
                    'latitude' => -7.91732,
                    'longitude' => 112.588623
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Oksigen Cafe',
                    'latitude' => -7.91732,
                    'longitude' => 112.588623
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Ayu Tantri',
                    'latitude' => -7.92526,
                    'longitude' => 112.587196
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Cokelat Klasik Cafe and Garden',
                    'latitude' => -7.9414,
                    'longitude' => 112.59814
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Loe Min Toe',
                    'latitude' => -7.92526,
                    'longitude' => 112.587196
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Warkop Brewok',
                    'latitude' => -7.95189,
                    'longitude' => 112.634239
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Bukit Delight',
                    'latitude' => -7.94261,
                    'longitude' => 112.602341
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Labore Cafe',
                    'latitude' => -7.94115,
                    'longitude' => 112.629791
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Biji Kopi Cafe',
                    'latitude' => -7.90353,
                    'longitude' => 112.60664
                ],
                [
                    'owner_id' => $owner->id,
                    'name_cafe' => 'Golden Heritage Cafe',
                    'latitude' => -7.96624,
                    'longitude' => 112.60978
                
                ]
            );
        }
    }
}
