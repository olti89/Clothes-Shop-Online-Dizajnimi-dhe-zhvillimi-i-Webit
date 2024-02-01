<!DOCTYPE html>
<html>

    <?php
    require_once('modeliklientit.php');
    
    $dhenat=new user();   
    $alldata=$dhenat->lexodhenat(); 




?>
    <head>
  
        <title>Shfaq dhenat</title>
        
    </head>
    <body>
        <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
.table-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

#a1 {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
}

h3 {
    color: #333;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
    cursor: pointer;
}

#r {
    background-color: #3498db;
}

#d, #e {
    background-color: #e74c3c;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #3498db;
    color: white;
}




</style>
        <div id="a1" class="table-container">
            <header>
                
                <h1>Dashboard i Adminit</h1>
                <p>Kthehu te faqja kryesore</p>
                <a href="index2.php"><button id='r'>FAQJA KRYESORE</Button></a>
                <hr>
                <h3>Shtypni Regjistrohu per tu regjistruar</h3>
                <a href="registerform.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <table class="table">
            <hr>
            <p>Lista e Perdoruesve te regjistruar:</p>
                    <tr>
                        <th>Emri</th>
                        <th>email</th>
                        <th>age</th>

                 
                    </tr>
                    <tr>
                      <?php
                    foreach($alldata as $key=>$value){
                        
                
                   ?>

                        <td><?php echo isset($value['emri']) ? $value['emri'] : ''; ?></td>
                         <td><?php echo isset($value['email']) ? $value['email'] : ''; ?></td>
                         <td><?php echo isset($value['age']) ? $value['age'] : ''; ?></td>
                         <td> <a href="delete.php?emri=<?php echo $value['emri']; ?>"><button id="d">DELETE</button></a>
                      
                    </tr>
                  <?php
                        }

                  ?>
                   </div>
                   
            </table>
            <table class="table">
            <div class="table-container">
            <hr>
            <?php
         require_once('modeliklientit.php');
         require_once('dbconnect.php');
         $db = new dbconnect();
         $conn = $db->connectdb();

         $dhenat2 = new Contactus($conn);
         $alldata2 = $dhenat2->lexodhenat2();

      
    $conn = null;

            ?>


            <p>Lista e perdoruesve qe na kan kontaktuar ne Contact us:</p>
            <a href="Contactus.php"><button id='r'>Contact Us </button></a>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>email</th> 
                <th>Comment</th>
            </tr>
 
           <?php
                          foreach($alldata2 as $key=>$value){


?>
            <tr>
            <td><?php echo isset($value['emri']) ? $value['emri'] : ''; ?></td>
            <td><?php echo isset($value['mbiemri']) ? $value['mbiemri'] : ''; ?></td>
            <td><?php echo isset($value['email']) ? $value['email'] : ''; ?></td>
            <td><?php echo isset($value['comment']) ? nl2br($value['comment']) : ''; ?></td>

            <td> <a href="delete2.php?emri=<?php echo $value['emri']; ?>"><button id="d">DELETE</button></a>
                           


           </tr>
           <?php
                          }
           ?>
           </div>
                        </table>
           
    </body>
</html>