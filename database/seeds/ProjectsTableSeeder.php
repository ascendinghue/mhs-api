<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Models\Project::class, 5)->create()->each(function ($name) {
            // $name->aliases()->save(
            //     factory(Models\Alias::class)->make()
            // );

            // $name->links()->createMany(
            //     factory(Models\Link::class, mt_rand(1,6))->make()->toArray()
            // );            
        });
    }
}
