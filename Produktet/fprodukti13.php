<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .bill {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }
        img {
            max-width: 70%;
            height: auto;
            margin-bottom: 1px;
        }
    </style>
</head>
<body>

<div class="bill">
    <h2>Thank you for your order !</h2>
    
    <?php
    include('dbconnect.php');

    $db = new dbconnect();
    $conn = $db->connectdb();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
        $productId = $_POST["id"];

        $stmt = $conn->prepare("INSERT INTO produktett (price, category, color) VALUES (30, 'TOP WITH LONG RAGLAN SLEEVES', 'Grey')");

        if ($stmt->execute()) {
            echo "<p>Product added successfully</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }

    $conn = null;
    ?>

    <img src="img26.jpg" alt="Product Image">
    <p>Product ID: 26</p>
    <p>Price: 30€</p>
    <p>Category: TOP WITH LONG RAGLAN SLEEVES</p>
    <p>Color: Grey </p>
</div>

</body>
</html>
