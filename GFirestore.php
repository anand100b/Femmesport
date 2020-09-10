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
        $arr = [];
        return $this->db->collection($this->name)->document($name)->snapshot()->data();
    }
    public function getWhere(string $field, string $operator, $value){
        $arr = array();
        $items = array();
        
        $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
        if(!empty($query)){
            foreach($query as $items){
                //$arr[] = $items->data();
                //array_push($arr, $items->data());
                $arr[] = array('id' => $items['id'], 'title' => $items['title'], 'author' => $items['author'], 'date' => $items['date'], 'image' => $items['image'], 'details' => $items['details'], 'article' => $items['article']);
            }
        }
        //$arr['total'] = count( $arr );
        return $arr;
    }
}