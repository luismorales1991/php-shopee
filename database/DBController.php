<?php
    class DBController {
        public $servername = "localhost";
        public $username = "root";
        public $password = "admin";
        public $dbname = "shopee";
        public $conn = null;


        public function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
            if ($this->conn->connect_error) {
              die("Connection failed: " . $this->connect_error);
            }
        }

        public function __destruct()
        {
            $this->closeConnection();
        }

        protected function closeConnection(){
            if($this->conn!=null){
                $this->conn->close();
                $this->conn = null;
            }
        }
    }
?>