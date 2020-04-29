<?php

namespace App\Console\Commands;

use Faker\Generator as Faker;
use Illuminate\Console\Command;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Storage;

class HotFixCommand extends Command
{

    protected $signature = "hotfix:do";
    protected $description = "";

    public function handle(Faker $faker)
    {
        echo $faker->suffix;
    }

}