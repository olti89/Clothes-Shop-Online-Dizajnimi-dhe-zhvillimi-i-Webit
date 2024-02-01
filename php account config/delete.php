

    <?php
  require_once('modeliklientit.php');

  $dhena=new user();

  if(isset($_GET['emri'])){
    $dhena->setEmri($_GET['emri']);
        $myemri=$dhena->getEmri();
        $dhena->deleteDhenat($myemri);
  }



    ?>
    
