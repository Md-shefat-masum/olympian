<?php

use App\Newsletter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class NewslettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Newsletter::truncate();

        Newsletter::insert([
            [ 
                'email' => 'news1@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'ewns1@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'wesn1@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'wnse1@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'e1nws@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'e1wsn@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'w1esn@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'w1sen@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'w1nes@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 's1enw@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 's1new@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 's1we@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 's1wne@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 's1en@voila.com',
                'created_at' => now(),
            ],
            [ 
                'email' => 'n1swe@voila.com',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
