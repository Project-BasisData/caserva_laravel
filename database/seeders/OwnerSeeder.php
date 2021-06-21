<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = [
            [
                'name_owner' => 'Mister Kopitani',
                'username_owner' => 'kopitani',
                'email_owner' => 'kopitani@example.com',
                'password_owner' => bcrypt('321kopitani321'),
            ]
        ];
        foreach ($owner as $key => $value) {
            Owner::create($value);
        }
    }
}
