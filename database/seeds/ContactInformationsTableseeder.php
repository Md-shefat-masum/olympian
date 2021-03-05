<?php

use App\ContactInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ContactInformationsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        ContactInformation::truncate();

        ContactInformation::insert([
            [ 
                'ci_phone1' => '666 888 0000',
                'ci_phone2' => '',
                'ci_email1' => 'needhelp@sintix.com',
                'ci_email2' => '',
                'ci_add1' => '88 road, broklyn street',
                'ci_add2' => 'new york, usa',
                'ci_status' => 1,
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
