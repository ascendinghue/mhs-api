<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class NameTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /names [GET]
     */
    public function testShouldReturnAllNames(){

        $this->get("/api/v1/names", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => ['*' =>
                [
                    'id',
                    'family_name',
                    'given_name',
                    'middle_name',
                    'maiden_name',
                    'suffix',
                    'keywords',
                    'date_of_birth',
                    'date_of_death',
                    'public_notes',
                    'staff_notes',
                    'bio_filename',
                    'name_key',
                    'aliases'
                ]
            ]
        ]);
    }

    /**
     *      /names/id [GET]
     */
    public function testShouldReturnName(){
        $this->get("/api/v1/names/6", []);
        $this->seeStatusCode(200);        
    }    
}
