<?php

    include_once "dbConnection.php";
    class SignUp
    {


        public function CreateUser($email,$first_name,$last_name,$phone,$password)
        {
            try
            {
                $Db = new Db();
                $conn = $Db->connect();

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // prepare sql and bind parameters
                $stmt = $conn->prepare("INSERT INTO users (email, first_name, last_name,phone, pwd )
                VALUES (?, ?, ?, ?, ?)");
                
                $stmt->execute([$email,$first_name,$last_name,$phone,$password]);
                

            }
            catch(PDOException $e) 
            {
                
                throw  $e;
            }
            



        }

    }
    

?>