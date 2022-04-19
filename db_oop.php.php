<?php
    class Database{
        public $server="localhost";
        public $username="root";
        public $password="";
        public $database="form8";

        public function connection(){
            mysqli_connect($this->server, $this->username, $this->password, $this->database);
        }
    }

    $object=new Database();
    $object->connection();
    var_dump($object);