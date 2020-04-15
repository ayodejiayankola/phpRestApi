<?php

class Category{


    //db stuff
    private $conn;
    private $table= 'categories';

    //post properties
     public $id;
     public $name;
     public $created_at;

     //constructor with db connection

     public function __construct($db){
        $this->conn = $db;


     }

      
    //getting posts from the database
    public function read(){
        //create query
        $query = 'SELECT 
                *
                FROM
                ' . $this->table  ;
                

        //prepare statement
     $stmt = $this->conn->prepare($query) ;
        //excute query
        $stmt->execute();

        return $stmt;

       
    }

}
?>