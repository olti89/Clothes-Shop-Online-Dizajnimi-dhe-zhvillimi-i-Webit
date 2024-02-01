<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Contact us form</title>
    <link rel="stylesheet" href="projekti.css" />

</head>

<img src="contact.jpg" alt="img">

<style>
        body{
            background-color: azure;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
       display: flex;
       justify-content: left;
       margin-top:100px;
       

    }

    
</style>

<?php


  include('dbconnect.php');

  $db= new dbconnect();
  $conn=$db->connectdb();

  


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $comment = isset($_POST['text']) ? $_POST['text'] : '';



    $sql = "INSERT INTO contactuss (emri, mbiemri, email, comment) VALUES ('$name', '$surname', '$email', '$comment')";

    if($conn->query($sql)==TRUE){
        echo"";

    }else{
        echo"ERror " .$sql. "<br>" .$conn->error;
    }

    

    $conn=null;





  }





?>


<body>



 
    <form class="form" onsubmit="return validateform()" action="Contactus.php" method="post">

      <label for="name">Your First Name</label>
      <input type="text" id="name" name="name"  autocomplete="given-name">

      <label for="surname">Your Last Name</label>
      <input type="text" id="surname" name="surname"  autocomplete="family-name">


      <label for="email">Email</label>
      <input type="email" id="email" name="email"  autocomplete="email">

      <p>Write us your idea  here and we will contact you soon</p>

      <label for="comment">Comment/Description/Idea</label>
      <input type="text" id="comment" name="text"   autocomplete='text'>
    

      

      <button type="submit">Send</button>
     

    </form>
    <br>

    <script>
        
    function validateform(){

      const nameInput=document.getElementById('name');
      const surnameInput=document.getElementById('surname');
      const email=document.getElementById('email').value;
      const comment=document.getElementById('comment').value;
       
     
    
      if(nameInput ==""){
        alert("Ju lutem shenoni emrin e plote")
        nameInput.focus();
        return false;

      }
        
        


      if(!/^[A-Z][a-z]*$/.test(nameInput.value)){
            alert("Ju lutem Filloni emrin me Shkronje te madhe");
            nameInput.focus();
            return false;
        }

        if(!/^[A-Z][a-z]*$/.test(surnameInput.value)){
            alert("Ju lutem filloni Mbiemrin me Shkronje te madhe");
            surnameInput.focus();
            return false;
        }

        let emailfunksioni=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(!emailfunksioni.test(email)){
            alert("Ju lutem shtypni nje email address valide");
            email.focus();
            return false;
        }

        if(comment.length <30){
            alert("Ju lutem shkruani nje paragraf i cili permban 30+ karaktere");
            comment.focus();
            return false;

        }

        return true;








    }



    </script>







</body>

