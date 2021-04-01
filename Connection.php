<?php

class Connection{
    protected $hostname;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;
    public function __construct()
    {
        $this->hostname='localhost';
        $this->user='root';
        $this->password='';
        $this->db_name='php_test';
        $this->connect();
    }

    private function connect(){
        $this->conn = new mysqli($this->hostname,$this->user,$this->password,$this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function insert($table,$columns,$values){
        $this->connect();
        $sql = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
        $sql=$this->conn->query($sql);
        if($sql == true){
            return $sql;
        }else{
            return false;
        }
    }

    function getUsers($table){
        $this->connect();
        $sql = "SELECT * FROM ".$table;
        $results = $this->conn->query($sql);
        if($sql == true){
            return $results;
        }else{
            return false;
        }
    } 
}