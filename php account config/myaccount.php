<?php
session_start();
require_once('dbconnect.php');

if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}
$host = "localhost";
$username = "root";
$password = '';
$dbname = "projekti";

$conn=new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$email=$_SESSION['email'];

$stmt=$conn->prepare('SELECT emri,email,age FROM userss Where email=?');
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->bind_result($db_emri,$db_email,$db_age);
$stmt->fetch();


$conn->close();


?>

<html>

<head>

<body>
<h1>Welcome to your Account info</h1>
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: rgb(255 237 213);
            margin: 100px;
            padding: 5px;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            margin-top: 10px;
            font-family: Arial, sans-serif;
        }

        #r {
            font-size:20px;
            background-color: rgb(249 115 22);
            padding: 10px;
            text-align: center;
            margin: 20px auto;
            max-width: 400px;
            border-radius: 50px;
            color: white;
        }

        button {
            font-size:20px;
            background-color: #3498db;
            color: white;
            padding: 20px;
            cursor: pointer;
            border: solid;
            border-radius: 20px;
            display:block;
            margin:30px auto;
            
        }

        @media screen and (max-width:600px){
            h1{
                font-size:30px;
            }
            #r{
                max-width:90%;
            }
        }
          
          #s{
            margin-left: 20px; 

            padding:10px;
          }
</style>


</body>
<div id="r">
<p>Name: <?php echo $db_emri;?></p>
 <p>Email: <?php echo $db_email; ?></p>
 <p >Age: <?php echo $db_age; ?> </p>
</div>


<form action="logout.php" method="post">
        <button type="submit">Log Out</button>
    </form>
    <div id="s">
    <form  action="back.php" method="post">
      <button id="s" type="submit">Back Shopping</button>
    </form>  
        </div>
</head>
</html>
