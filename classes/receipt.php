<?php
    

    include_once "dbConnection.php";
    class receipt{

        public function getTestData($tests)
        {
            try
                {
                    $Db = new Db();
                    $conn = $Db->connect();

                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT * FROM testcategories WHERE testCode IN (  ?" . str_repeat(',?', count($tests) - 1) . ")";
                    
                    // prepare sql and bind parameters
                    $stmt = $conn->prepare($sql);
                    
                    $stmt->execute($tests);
                    
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $result;

                }
                catch(PDOException $e) 
                {
                    
                    throw  $e;
                }
        }


        public function getUserData()
        {
            try
                {
                    $Db = new Db();
                    $conn = $Db->connect();

                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT * FROM users WHERE email = ?";
                   
                    // prepare sql and bind parameters
                    $stmt = $conn->prepare($sql);
                    
                    $stmt->execute([$_SESSION["email"]]);
                    
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    return $result;

                }
                catch(PDOException $e) 
                {
                    
                    throw  $e;
                }
            
        }
    }
?>