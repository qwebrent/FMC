<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact= [
            [
                'address'=>'162, Cpammms Ville Balayhangin Calauan, Laguna',
                'shopHours'=>'8:00 AM - 5:00 PM',
                'phone'=>'0905 368 1574',
                'email'=>'fmccateringservices@gmail.com',
            ],
        ];

        foreach ($contact as $key => $value) {
            Contact::create($value);
        }
    }
}
