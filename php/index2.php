<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Projekti</title>
    <link rel="stylesheet" href="projekti.css" />
    
</head>
<body>
    
    <header>
      
    


       </div>
       
       <div class="headeri">
    
        <img src="cover.png" alt="img" height="100%"> </a>
        

       <div class="home">
       
        <a href="index.php">Home </a>
        <br>
        <a href="Aboutus.php"> About us</a>
        <br>
        <a href="man.php">Products </a>
        <br>
        <a href="News.html"> News</a>
        <br>
        <a href="Contactus.php"> Contact us</a>
        <br>
        
        
       </div>
        <div class="loginform">
           <a href="myaccount.php">My Account</a>
           <br>
     

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