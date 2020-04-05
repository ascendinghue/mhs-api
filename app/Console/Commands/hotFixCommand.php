<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class HotFixCommand extends Command
{

    protected $signature = "hotfix:do";
    protected $description = "";

    public function handle()
    {
        $parent = \Models\Subject::findorfail('3');
        // $child = \Models\Subject::findorfail('5');

        // $parent->appendNode($child);

        print_r($parent->descendants);exit();
    }

}