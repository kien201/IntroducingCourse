<?php
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $DBname = 'courseproject';

        private $conn = "";
        
        function __construct(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->DBname);
            if($this->conn->connect_error){
                die("Connection failed: ".$this->conn->connect_error);
            }
        }

        function __destruct(){
            $this->conn->close();
        }

        public function executeSelect($query){
            $result = $this->conn->query($query);
            $data = array();
            if($result!=NULL){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function executeUpdate($query){
            if($this->conn->query($query)===TRUE) return TRUE;
            return FALSE;
        }
    }