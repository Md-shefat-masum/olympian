<?php

use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClientsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Client::truncate();

        Client::insert([
            [ 
                'client_name' => 'Beauty Box',
                'client_photo' => 'kld0JyO8PpkjJNS985WfvVQMNvoG8w4VFvpYEWOq.png',
                'created_at' => now(),
            ],
            [ 
                'client_name' => 'Yoga Baby',
                'client_photo' => 'OuMom4jDTVOzIvCcpUSJsp9swnrTld6Q0ODtF3IC.png',
                'created_at' => now(),
            ],
            [ 
                'client_name' => "Croft's Accountants",
                'client_photo' => 'Jld61L74M2xaZH8wEfzKtkIIHCZ2ndKsh2zCOrFe.png',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
