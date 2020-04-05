<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AliasTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /aliases [GET]
     */
    public function testShouldReturnAllAliases(){

        $this->get("/api/v1/aliases", []);
        $this->seeStatusCode(200);
    }

    /**
     *      /aliases [POST]
     */
    public function testShouldCreateAlias(){

        $payload = [
            'family_name' => 'testing',
            'type' => 'role',
            'id', 6
        ];

        $this->post("/api/v1/aliases/", $payload, []);
        $this->seeStatusCode(201);
    }    

    /**
     *      /aliases/id [GET]
     */
    public function testShouldReturnAlias(){
        $this->get("/api/v1/aliases/3", []);
        $this->seeStatusCode(200);        
    }

    /**
     *      /aliases/id [PATCH]
     */
    public function testShouldUpdateAlias(){

        $payload = [
            'family_name' => 'testing',
            'type' => 'role',
            'id', 6
        ];

        $this->patch("/api/v1/aliases/3", $payload, []);
        $this->seeStatusCode(204);
    }

    /**
     *      /aliases/id [DELETE]
     */
    public function testShouldDeleteAlias(){
        $this->delete("/api/v1/aliases/3", []);
        $this->seeStatusCode(204);        
    }    
}
