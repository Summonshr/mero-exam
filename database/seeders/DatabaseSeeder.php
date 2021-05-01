<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $i = 0 ;
	    while(true){
		    \App\Models\Content::factory(100)->create();
		    echo $i++;
		    echo PHP_EOL;
	    }
    }
}
