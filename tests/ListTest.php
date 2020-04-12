<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ListTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /lists [GET]
     */
    public function testShouldReturnAllLists(){

        $this->get("/api/v1/lists", []);
        $this->seeStatusCode(200);
    }

    /**
     *      /lists [POST]
     */
    public function testShouldCreateList(){

        $payload = [
            'project_id' => '123-456-789',
            'name' => 'testing',
            'type' => 'subject'
        ];

        $this->post("/api/v1/lists/", $payload, []);
        $this->seeStatusCode(201);
    }    
}