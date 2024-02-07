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
                "nombre" => "www.xnxx.com"
            ],
            [
                "nombre" => "www.xvideos.com"
            ],
            [
                "nombre" => "www.pornhub.com"
            ],
            [
                "nombre" => "www.xnxx.com"
            ],
            [
                "nombre" => "www.xhamster.com"
            ],
            [
                "nombre" => "www.xnxx.com"
            ]
        ];
        foreach ($webs as $web) {
            Web::create($web);
        }
    }
}
