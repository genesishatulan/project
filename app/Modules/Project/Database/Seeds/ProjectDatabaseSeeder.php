<?php

namespace App\Modules\Project\Database\Seeds;

use DB;
use Illuminate\Database\Seeder;

class ProjectDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //And now, let's create a few project in our datanbase
        for($i = 0; $i < 30; $i++)
        {
            DB::table('projects')->insert([
                'name' => $faker->name(),
                'description' => $faker->text(),
                'note' => $faker->text(),
                'status' => $faker->text(),
                'date_started' => $faker->date(),
                'date_finished' => $faker->date(),
                'deadline'  => $faker->date(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
