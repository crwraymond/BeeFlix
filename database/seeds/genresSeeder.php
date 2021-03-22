<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name'=> 'DRAMA'
            ],
            [
                'name'=> 'KIDS'
            ],
            [
                'name'=> 'TV SHOW'
            ]
        ]);
        
    }
}
