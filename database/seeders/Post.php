<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('App\Models\Post');
        for($i=1;$i<=30;$i++){
	        DB::table('posts')->insert([
	        	'title'=>$faker->sentence(),
	        	'content'=>$faker->paragraph(),
	        	//'created_at'=>\Carbon\Carbon:now(),
	        ]);
	    }
    }
}
