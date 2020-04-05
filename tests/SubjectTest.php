<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class SubjectTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /subjects [GET]
     */
    public function testShouldReturnAllSubjects(){

        $this->get("/api/v1/subjects", []);
        $this->seeStatusCode(200);
    }

    /**
     *      /subjects [POST]
     */
    public function testShouldCreateSubject(){

        $payload = [
            'subject_name' => 'testing subjects',
            'display_name' => 'test'
        ];

        $this->post("/api/v1/subjects/", $payload, []);
        $this->seeStatusCode(201);
    }    

    /**
     *      /subjects/id [GET]
     */
    public function testShouldReturnSubject(){
        $this->get("/api/v1/subjects/3", []);
        $this->seeStatusCode(200);        
    }

    /**
     *      /subjects/id [PATCH]
     */
    public function testShouldUpdateSubject(){

        $payload = [
            'subject_name' => 'testing subjects',
            'display_name' => 'test'
        ];

        $this->patch("/api/v1/subjects/3", $payload, []);
        $this->seeStatusCode(204);
    }

    /**
     *      /subjects/id [DELETE]
     */
    public function testShouldDeleteSubject(){
        $this->delete("/api/v1/subjects/3", []);
        $this->seeStatusCode(204);        
    }    

    /**
     *      /subjects/id [GET]
     */
    public function testShouldReturnSubjectProjects(){
        $this->get("/api/v1/subjects/3/projects", []);
        $this->seeStatusCode(200);        
    }

}
