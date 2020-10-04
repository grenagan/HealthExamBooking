<?php
session_start();

include_once "dbConnection.php";

public function CreateTest($email,$date,$totalValue,$paymentMethod,$tests)
        {
            try
            {
                $Db = new Db();
                $conn = $Db->connect();

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // prepare sql and bind parameters
                $stmt = $conn->prepare("INSERT INTO bookedtests (email, date, totalValue, paymentMethod)
                VALUES (?, ?, ?, ?, ?)");
                
                $stmt->execute([$email,$date,$totalValue,$paymentMethod]);
                
                $stmt->execute('SELECT id FROM bookedtests ORDER BY id DESC LIMIT 1');
                $id = $stmt->fetch(PDO::FETCH_ASSOC);

                foreach($tests as $test)
                {
                    $stmt->prepare("INSERT INTO bookedtestcategories (id, testCode)
                    VALUES (?, ?)");
                    $stmt->execute([$id,$test]);
                }



            }
            catch(PDOException $e) 
            {
                
                throw  $e;
            }
            



        }

?>