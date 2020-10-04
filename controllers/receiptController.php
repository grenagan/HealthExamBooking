<?php
    session_start();

    include_once "../classes/receipt.php";

    $rcpt = new  receipt();
    $userData = $rcpt->getUserData();
    $tableRows = $rcpt->getTestData($_POST['testsArray']);


    $innerHTML = "<div class='row' style='font-family: courier;'>
                    <div class='ml-1'>
                    Όνομα: ".$userData['first_name']."<br>
                    Επώνυμο: ".$userData['last_name']."<br>
                    Τηλέφωνο: ".$userData['phone']."<br>
                    Email: ".$userData['email']."<br>
                    Ημερομηνία: ".date('d/m/Y')."<br>
                    </div>
                    <div class='container' style='font-family: courier;'>

                        <h5 class='d-flex justify-content-center mt-2'>Απόδειξη Εξετάσεων</h5><br>
                        <table class='table mb-2'>
                            <thead class='thead-dark'>
                                <tr>
                                <th scope='col'></th>
                                <th scope='col'>Κατηγορία Εξέτασης</th>
                                <th scope='col'>Τιμή</th>
                                <th scope='col'>ΦΠΑ</th>
                                </tr>
                            </thead>
                            <tbody>";
     $cnt = 1;
     $totals = 0;
     $netValue = 0;
     $fpa = 0;
    foreach($tableRows as $row => $rcptLine)
    {
        $innerHTML.="<tr>
                        <th scope='row'>".$cnt."</th>
                        <td>".$rcptLine['testDescription']."</td>
                        <td class='text-right'>".$rcptLine['testPrice']."</td>
                        <td class='text-right'>24%</td>
                    </tr>";
        $totals += $rcptLine['testPrice'];
        $cnt++;
            
    }

    $fpa = $totals * 0.24;
    $netValue = $totals - $fpa;

    $innerHTML.="<tr>
                    <th scope='row'></th>
                    <td>Σύνολο</td>
                    <td class='text-right'>".$netValue."</td>
                    <td class='text-right'>".$fpa."</td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>";

    $_SESSION['totals'] = $totals;

    echo $innerHTML;
                                

    