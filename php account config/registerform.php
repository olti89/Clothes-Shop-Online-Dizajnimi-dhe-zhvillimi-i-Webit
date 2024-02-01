<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" />
    <title>Register form</title>
    <link rel="stylesheet" href="projekti.css">


 
    <div class="banneriregjisterit">
        <img src="reg7.jpg" alt="img">

    </div>

    

</head>
<style>
    body{
        font-family: Arial, sans-serif;
       background-color:azure;
       display: flex;
       justify-content: center;
       align-items: center;
       height: 100vh;
       margin: 0;

    }


</style>
<body>

<?php


        require_once('modeliklientit.php');
        
        if(isset($_POST['save'])){
           $regjistrim=new user();
           $regjistrim->setEmri($_POST['emri']);
           $regjistrim->setEmail($_POST['email']);
           $regjistrim->setAge($_POST['age']);

       
           $insertSuccess = $regjistrim->insertDhenat();

    if ($insertSuccess) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['is_logged_in'] = true;

        echo "<script>
                alert('dhenat jane ruajtur me sukses,Ju lutem kyquni perseri');   
                document.location = 'index.php';
            </script>";
        exit();
    } else {
        $error_message = "Failed to register. Please try again.";
    }
}
       
       
       ?>
    
     
    <form class="form2"  method="POST" onsubmit="return validateform()">
        <label for="emri">Name</label>
        <input type="text" id="emri" name="emri" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="password2">Confirm Password</label>
        <input type="password" id="password2" name="password" required>

        <label for="gender">Male</label>
        <input type="radio" id="gender" name="gender" value="male" required>

        <label for="gende">Female</label>
        <input type="radio" id="gende" name="gender" value="female" required>

        <button name='save'  action="registerform.php" >Register</button>
      
       

      



    </form>
    <div class="banneriregjisterit">
    <img src="reg2.jpg" alt="img">
    </div>

    <script>
      function validateform(){
     
        const nameInput=document.getElementById('emri');
        const email=document.getElementById('email').value;
        const ageInput=document.getElementById('age');
        const password=document.getElementById('password').value;
        const password2=document.getElementById('password2').value;

        if(nameInput.value===""){
            alert("Ju lutem shenoni emrin e plot");
            nameInput.focus();
            return false;
        }

        if(!/^[A-Z][a-z]*$/.test(nameInput.value)){
            alert("Ju lutem Filloni emrin me Shkronje te madhe");
            nameInput.focus();
            return false;
        }

        let emailfunksioni=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(!emailfunksioni.test(email)){
            alert("Ju lutem shtypni nje email address valide");
            email.focus();
            return false;
        }
      

        const age = parseInt(ageInput.value, 10);
    if ( age <= 10){
            alert("Duheni te jeni 10+ vjeq  per te hapur nje llogari");
        ageInput.focus();
        return false;
        }

        if(password.length < 8){
            alert("Passwordi duhet te jete minimum 8 shkronja/numra , dhe nuk duhet te permbaj hapsira");
            password.focus();
            return false;
        }

        if(password !== password2){
            alert("Passwordi nuk perputhet ju lutem shtypni te njejtin password ne te dy fushat");
            password2.focus();
            return false;
        }

        return true;
         


    }


    </script>
   
    
</body>
</html>