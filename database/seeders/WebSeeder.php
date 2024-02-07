<?php

namespace Database\Seeders;

use App\Models\Web;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webs = [
            [
                "nombre" => "xnxx"
            ],
            [
                "nombre" => "xvideos"
            ],
            [
                "nombre" => "pornhub"
            ],
            [
                "nombre" => "facebook"
            ],
            [
                "nombre" => "xhamster"
            ]
        ];
        foreach ($webs as $web) {
            Web::create($web);
        }
    }
}
