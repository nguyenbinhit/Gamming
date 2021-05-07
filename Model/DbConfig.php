<?php 
    class Database{
        private $serverName = "localhost";
        private $username = "root";
        private $password = "";
        private $databaseName = "game";

        private $connection = NULL;
        private $result = NULL;

        // database connection
        public function connect()
        {
            try {
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
                $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->databaseName", $this->username, $this->password, $options); 
            }catch (PDOException $e) {
                $e->getMessage();
                // header("Localtion: ");
                exit(); 
            }
        }

        // execute the query
        public function execute($sql) {
            try {
                $this->result = $this->connection->query($sql);
                return $this->result;

            }  catch (PDOException $e) {
                echo $e->getMessage();
                exit(); 
            }
        }

        // method of getting data
        public function getData() {
            if($this->result) {
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        // method to get all of the data
        public function getAllData() {
            if(!$this->result) {
                $data = 0;
            }else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
    }
?>