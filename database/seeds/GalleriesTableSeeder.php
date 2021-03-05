<?php

use App\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Gallery::truncate();

        Gallery::insert([
            [ 
                'gallery_photo' => 'zvxAzPxrCvTuTmw6YlOMoicHcRVDxA0AE9DwmXlA.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'Nwddl1D1XMM0uKM6Ac9YVOskhzfVcPfpvrKZExAU.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => '27EeV23trLQDd0agdjOWEpyHThHXdrHzegFuBTSe.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'NKErEsnrRMa7p1XiGjYgOCd8e57bMZXOXhlD1snU.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'awkaw5BaKonc04AiG3eRND5zo90aR6gi6mVgD1nU.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'lDGDiOmI2hOseDKbfrQpOCkZND7HOrNGb1v9QFhQ.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'Y6GwuFLRof8YVzTDSta28pO962SJP4AoZDO7DDyZ.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'ryqJl9nMdcq40ca0Y7Foj5WOT5YCkGieIeMMY4I9.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => '1lTGfNcAVOSFQdLCaprQ0VGgDVbzN7R0pNbQqlxG.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'cSLAuAj4nWH9bFbDoK90pfmIm2D3pWqChJA8vxrb.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'pyuP6zCPO2lXkwirvrkIeOF206oAhbLhNVURAu8q.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'ehmhSmar2w48Snc3NaBX5dveFLhanRdOa6a5qkNL.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => '5Hl9g3Aa6iWvx3Jr3P7D61Yqk507EIAyV9SQE8GQ.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'lFVAuJKIN5DUQdRt630gxj7sCRFgw9bgAh4Uioby.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'mbSyjLCyO2EasGFCtgCsn7hC6ez17FlcKIAiRj3H.jpg',
                'created_at' => now(),
            ],
            [ 
                'gallery_photo' => 'mnCjKfzq9pdLLyJTd9yd5txPzoeZIyV6y9rdiVKf.jpg',
                'created_at' => now(),
            ],
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
