<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
            [
                'name_cust' => 'Iqbal',
                'username_cust' => 'iqbaludinm',
                'email_cust' => 'iqbal@example.com',
                'password_cust' => bcrypt('123iqbal123'),
            ],
            [
                'name_cust' => 'Habib',
                'username_cust' => 'habibah',
                'email_cust' => 'habib@example.com',
                'password_cust' => bcrypt('11habib11'),
            ]
        ];
        foreach ($customer as $key => $value) {
            Customer::create($value);
        }
    }
}
