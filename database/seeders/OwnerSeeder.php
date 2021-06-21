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
            ],
            [
                'name_owner' => 'Tante Ayu Tantri',
                'username_owner' => 'ayutantri',
                'email_owner' => 'ayutantri@example.com',
                'password_owner' => bcrypt('321ayutantri321'),
            ],
            [
                'name_owner' => 'Mas Oksi',
                'username_owner' => 'oksigencafe',
                'email_owner' => 'oksigencafe@example.com',
                'password_owner' => bcrypt('321oksigencafe321'),
            ],
            [
                'name_owner' => 'Om Klasik',
                'username_owner' => 'coklasik',
                'email_owner' => 'coklasik@example.com',
                'password_owner' => bcrypt('321coklasik321'),
            ],
            [
                'name_owner' => 'Loe Min Toe',
                'username_owner' => 'lumintu',
                'email_owner' => 'lumintu@example.com',
                'password_owner' => bcrypt('321lumintu321'),
            ],
            [
                'name_owner' => 'Bang Brewok',
                'username_owner' => 'warkopbrewok',
                'email_owner' => 'warkopbrewok@example.com',
                'password_owner' => bcrypt('321warkopbrewok321'),
            ],
            [
                'name_owner' => 'Bapak Deli',
                'username_owner' => 'delightcafe',
                'email_owner' => 'delightcafe@example.com',
                'password_owner' => bcrypt('321delightcafe321'),
            ],
            [
                'name_owner' => 'Tante Labira',
                'username_owner' => 'laborecafe',
                'email_owner' => 'laborecafe@example.com',
                'password_owner' => bcrypt('321laborecafe321'),
            ],
            [
                'name_owner' => 'Kang Ngopi',
                'username_owner' => 'bijikopi',
                'email_owner' => 'bijikopi@example.com',
                'password_owner' => bcrypt('321bijikopi321'),
            ],
            [
                'name_owner' => 'Juragan99',
                'username_owner' => 'heritagecafe',
                'email_owner' => 'heritagecafe@example.com',
                'password_owner' => bcrypt('321heritagecafe321'),
            ],
        ];
        foreach ($owner as $key => $value) {
            Owner::create($value);
        }
    }
}
