<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /links [GET]
     */
    public function testShouldReturnAllLinks(){

        $this->get("/api/v1/links", []);
        $this->seeStatusCode(200);
    }

    /**
     *      /links [POST]
     */
    public function testShouldCreateLinks(){

        $payload = [
            'linkable_id' => '4',
            'linkable_type' => 'Models\\Subject',
            'type' => 'source',
            'authority' => 'snac',
            'authority_id' => '12345', 
            'display_title' => 'this is a link',
            'url' => 'www.testing.com',
            'notes' => ''
        ];

        $this->post("/api/v1/links/", $payload, []);
        $this->seeStatusCode(201);
    }    
}