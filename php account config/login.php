<?php
session_start();

$servername = "localhost";
$dbname = "projekti";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $stmt = $conn->prepare("SELECT email, password, is_admin FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_email, $db_password, $is_admin);
        $stmt->fetch();

        if (password_verify($password, $db_password) && $is_admin) {
            $_SESSION["email"] = $email;
            $_SESSION["is_admin"] = true;
            header("Location: displaytedhenat.php");
            exit();
        } else {
            $error_message = "Invalid email or password";
        }
    } else {
        $error_message = "Invalid email or password";
    }
    

    $stmt->close();

    $stmt = $conn->prepare("SELECT email FROM userss WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION["email"] = $email;
        header("Location: index2.php");
        exit();
    } else {
        $error_message = "Invalid email or password";
    }

    $stmt->close();
}




$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Log In form</title>
    <link rel="stylesheet" href="projekti.css" />
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0
    }
</style>

<body>
    <form class="form" onsubmit="return validateform()" action="" method="post">
        <label for="Email">Email</label>
        <input type="email" id="email" name="Email" required>

        <label for="Password">Password</label>
        <input type="password" id="password" name="Password" required>

        <button type="submit">Log in</button>

        <a href="registerform.php" class="button">Register</a>
    </form>

    <div class="bannerl">
        <img src="imglogin.jpg" alt="img">
    </div>

    <script>
        function validateform() {
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            let emailfunksioni = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailfunksioni.test(email)) {
                alert("Ju lutem shtypni nje email address valide");
                return false;
            }

            if (password.length < 8) {
                alert("Passwordi duhet te jete minimum 8 shkronja");
                return false;
            }
            if (typeof loginSuccess !== 'undefined' && loginSuccess) {
            window.location.replace('displaytedhenat.php');
        }

            return true;
            

        }
      
    </script>
</body>
</html>
