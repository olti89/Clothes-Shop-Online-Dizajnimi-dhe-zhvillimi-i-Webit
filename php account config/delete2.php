

<?php
require_once('modeliklientit.php');

// Assuming $emri is passed as a GET parameter
if (isset($_GET['emri'])) {
    $emri = $_GET['emri'];

    $db = new dbconnect();
    $conn = $db->connectdb();

    $dhenat2 = new Contactus($conn);
    $dhenat2->deleteDhenat2($emri);

    $conn = null;
}

  ?>
  
