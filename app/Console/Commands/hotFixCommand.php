<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Storage;

class HotFixCommand extends Command
{

    protected $signature = "hotfix:do";
    protected $description = "";

    public function handle()
    {
        echo app()->basePath('public/docs/images/mhs_logo.png');exit();
        $names = (new FastExcel)->import('docs/djqa-names-sample.xlsx');
        foreach($names as $name){
            if ($name['First Name'] != '??') {
                Models\Name::create([
                    'given_name' => $name['First Name'],
                    'family_name' => $name['']
                ]);
                dd($name);
            }
        }
    }

}