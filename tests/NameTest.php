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
    }

    /**
     *      /names [POST]
     */
    public function testShouldCreateName(){

        $payload = [
            'family_name' => 'testing',
            'given_name' => 'test'
        ];

        $this->post("/api/v1/names/", $payload, []);
        $this->seeStatusCode(201);
    }    

    /**
     *      /names/id [GET]
     */
    public function testShouldReturnName(){
        $this->get("/api/v1/names/6", []);
        $this->seeStatusCode(200);        
    }

    /**
     *      /names/id [PATCH]
     */
    public function testShouldUpdateName(){

        $payload = [
            'family_name' => 'testing',
            'given_name' => 'test'
        ];

        $this->patch("/api/v1/names/6", $payload, []);
        $this->seeStatusCode(204);
    }

    /**
     *      /names/id [DELETE]
     */
    public function testShouldDeleteName(){
        $this->delete("/api/v1/names/6", []);
        $this->seeStatusCode(204);        
    }    
}
