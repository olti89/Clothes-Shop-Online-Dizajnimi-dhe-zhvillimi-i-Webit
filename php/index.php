<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Projekti</title>
    <link rel="stylesheet" href="projekti.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    
    <header>
      
    


       </div>
       
       <div class="headeri">
        <a href="registerform.php" > 
        <img src="cover.png" alt="img" height="100%"> </a>
        

       <div class="home">
       
        <a href="index.php">Home </a>
        <br>
        <a href="Aboutus.php"> About us</a>
        <br>
        <a href="man.php">Products </a>
        <br>
        <a href="News.php"> News</a>
        <br>
        <a href="Contactus.php"> Contact us</a>
        <br>
        
        
       </div>
        <div class="loginform">
           <a href="login.php">Log in</a>
           <br>
            <a href="registerform.php">Register</a>


        </div>
       



       
       <div class="types">
       
        <a href="man.php">Man </a>
        <a href="woman.php">Woman </a>
        <a href="kids.php"> Kids</a>

       
        </div>
    
    </header>

   <script>
    let i=0;
    let imgArray=[
    

     "img2.jpg",
     "slideri2.png",
     "slideri.png",
     "img5.jpg",
     "img10.jpg",
     "img16.jpg",
     "img19.jpg",
     "img21.jpg",
     "img29.jpg",
     "img33.jpg",
     "img7.jpg",
     "img12.jpg",
     "img24.jpg",


    ];
    function ndrroImg() {
        document.getElementById('slideshow').src=imgArray[i];
        if(i < imgArray.length -1) {
            i++;
        }else{
            i=0;
        }


    }


   </script>
   
<div id="kontenti">
      <header>
        <h2>Shop Now </h2>
        <img name="mySlide" id="slideshow" />
    </header>
    <button onclick="ndrroImg()">Next</button>
    </div>
    <div id="fo0teri">


    <style>

@media screen and (max-width: 700px) {
body {
background-color: red;
}
    }

    @media screen and (max-width: 400px) {
body {
background-color: green;
}
    }
    </style>
    
 
</body>
</html>