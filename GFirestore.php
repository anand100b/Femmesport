<?php

require_once 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

class GFirestore{
    protected $db;
    protected $name;
    public function __construct(string $collection){
        $this->db = new FirestoreClient([
            'projectId' => 'femme-sport'
        ]);

        $this->name = $collection;
    }

    public function getDocument(string $name){
        $this->db->collection($this->name)->document($name)->snapshot()->data();
    }
}