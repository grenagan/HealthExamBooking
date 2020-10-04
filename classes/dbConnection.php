<?php

    class Db
    {
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'diagnosi';

        public function connect()
        {
            try
               {
                $conn = new PDO("mysql:host=" . $this->servername.";dbname=" . $this->dbname,$this->username,$this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "connected";
                return $conn;
                } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                }

            

        }



    }
    

?>