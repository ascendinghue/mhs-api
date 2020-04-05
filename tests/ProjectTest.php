<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    use DatabaseTransactions;

    /**
     *      /projects [GET]
     */
    public function testShouldReturnAllProjects(){

        $this->get("/api/v1/projects", []);
        $this->seeStatusCode(200);
    }

    /**
     *      /projects [POST]
     */
    public function testShouldCreateProject(){

        $payload = [
            'project_id' => '123-456-789',
            'name' => 'testing projects',
            'description' => 'test'
        ];

        $this->post("/api/v1/projects/", $payload, []);
        $this->seeStatusCode(201);
    }    

    /**
     *      /projects/id [GET]
     */
    public function testShouldReturnProject(){
        $this->get("/api/v1/projects/10", []);
        $this->seeStatusCode(200);        
    }

    /**
     *      /projects/id [PATCH]
     */
    public function testShouldUpdateProject(){

        $payload = [
            'project_id' => '123-456-789',
            'name' => 'testing',
            'description', 'test'
        ];

        $this->patch("/api/v1/projects/10", $payload, []);
        $this->seeStatusCode(204);
    }

    /**
     *      /projects/id [DELETE]
     */
    public function testShouldDeleteProject(){
        $this->delete("/api/v1/projects/10", []);
        $this->seeStatusCode(204);        
    }    

    /**
     *      /projects/id/subjects [GET]
     */
    public function testShouldReturnProjectSubjects(){
        $this->get("/api/v1/projects/10/subjects", []);
        $this->seeStatusCode(200);        
    }

    /**
     *      /projects/id/subjects [POST]
     */
    public function testShouldCreateProjectSubject(){
        $payload = [
            'subject_id' => 3
        ];

        $this->post("/api/v1/projects/10/subjects", $payload, []);
        $this->seeStatusCode(201);   
    }
    
    /**
     *      /projects/id [DELETE]
     */
    public function testShouldDeleteProjectSubject(){
        $payload = [
            'subject_id' => 3
        ];        
        $this->delete("/api/v1/projects/10/subjects", $payload, []);
        $this->seeStatusCode(204);        
    } 
}
