<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price= [
            [
                'package_name' => 'Package One',
                'package_price' => '44,990',
            ],
            [
                'package_name' => 'Package Two',
                'package_price' => '24,990',
            ],
            [
                'package_name' => 'Package Three',
                'package_price' => '420',
            ],
            [
                'package_name' => 'Package Four',
                'package_price' => '490',
            ],
            [
                'package_name' => 'Package Five',
                'package_price' => '560',
            ],
            [
                'package_name' => 'Package Six',
                'package_price' => '15,000',
            ],
            [
                'package_name' => 'Package Seven',
                'package_price' => '25,000',
            ],
        ];

        foreach ($price as $key => $value) {
            Price::create($value);
        }
    }
}
