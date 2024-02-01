<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Man</title>
    <link rel="stylesheet" href="projekti.css" />
</head>
<body>
 

    <div class="fotografit">
       <div class="man" id="product1">
         <a href="produktet.php?id=1">
         <img src="img1.jpg" alt="img" onclick="addProductToDatabase(1)">
          <div class="cmimi">
           <p>20€</p>
           <p>T-Shirt</p>
           <p>White</p>
         </a>
        </div>
        </div>  
        


        <div class="man" id="product2">
        <a href="produkti2.php?id=2">
        <img src="img2.jpg" alt="img" onclick="addProductToDatabase2(2)">
            <div class="cmimi">
                <p>20€</p>
                <p>T-shirt</p>
                <p>Black</p>
       
            </div>
        </a>
    </div>

        <div class="man">
            <a href="produkti3.php?id=3">
            <img src="img3.jpg" alt="img" onclick="addProductToDatabase3()">
            <div class="cmimi">
                <p>20€</p>
                <p>T-shirt</p>
                <p>Brown</p> 
</a>
            </div>
            </div>

            <div class="man">
                <a href="produkti4.php?id=4">
                <img src="img4.jpg" alt="img" onclick="addProductToDatabase4()">
                <div class="cmimi">
                    <p>20€</p>
                    <p>T-shirt</p>
                    <p>Dark Blue</p> 
</a>
                </div>
                </div>

                <div class="man">
                    <a href="produkti5.php?id=5">
                    <img src="img5.jpg" alt="img" onclick="addProductToDatabase5()">
                    <div class="cmimi">
                        <p>20€</p>
                        <p>T-shirt</p>
                        <p>Light Blue</p> 
</a>
                    </div>
                    </div>

                    <div class="man">
                        <a href="produkti6.php?id=6">
                        <img src="img6.jpg" alt="img" onclick="addProductToDatabase6()">
                        <div class="cmimi">
                            <p>20€</p>
                            <p>T-shirt</p>
                            <p>light Brown</p>
</a> 
                        </div>
                        </div>

                        <div class="man">
                            <a href="produkti7.php?id=7">
                            <img src="img8.jpg" alt="img" onclick="addProductToDatabase7()">
                            <div class="cmimi">
                                <p>25€</p>
                                <p>Hoodie</p>
                                <p>Black</p> 
</a>
                            </div>
                            </div>

                            
                        <div class="man">
                            <a href="produkti8.php?id=8">
                            <img src="img9.jpg" alt="img" onclick="addProductToDatabase8()">
                            <div class="cmimi">
                                <p>25€</p>
                                <p>Hoodie</p>
                                <p>Dark Blue</p> 
</a>
                            </div>
                            </div>

                            
                        <div class="man">
                            <a href="produkti9.php?id=9">
                            <img src="img10.jpg" alt="img" onclick="addProductToDatabase9()">
                            <div class="cmimi">
                                <p>25€</p>
                                <p>Hoodie</p>
                                <p>Grey</p> 
</a>
                            </div>
                            </div>

                            
                        <div class="man">
                            <a href="produkti10.php?id=10">
                            <img src="img11.jpg" alt="img" onclick="addProductToDatabase10()">
                            <div class="cmimi">
                                <p>25€</p>
                                <p>Hoodie</p>
                                <p>Dark green</p> 
</a>
                            </div>
                            </div>


                            
                        <div class="man">
                            <a href="produkti11.php?id=11">
                            <img src="img12.jpg" alt="img" onclick="addProductToDatabase11()">
                            <div class="cmimi">
                                <p>25€</p>
                                <p>Hoodie</p>
                                <p>White</p> 
</a>
                            </div>
                            </div>

                            <div class="man">
                                <a href="produkti12.php?id=12">
                             <img src="img13.jpg" alt="img" onclick="addProductToDatabase12()">
                             <div class="cmimi">
                            <p>50€</p>
                            <p>Puffer</p>
                            <p>Black</p>
</a>
                             </div>
                            </div>

                            <div class="man">
                                <a href="produkti13.php?id=13">
                                <img src="img14.jpg" alt="img" onclick="addProductToDatabase13()">
                                <div class="cmimi">
                               <p>50€</p>
                               <p>Puffer</p>
                               <p>White</p>
</a>
                                </div>
                               </div>

                               <div class="man">
                                <a href="produkti14.php?id=14">
                                <img src="img15.jpg" alt="img" onclick="addProductToDatabase14()">
                                <div class="cmimi">
                               <p>50€</p>
                               <p>Puffer</p>
                               <p>Cream</p>
</a>
                                </div>
                               </div>

                               <div class="man">
                                <a href="produkti15.php?id=15">
                                <img src="img16.jpg" alt="img" onclick="addProductToDatabase15()">
                                <div class="cmimi">
                               <p>50€</p>
                               <p>Puffer</p>    
                               <p>Light Padded</p>
</a>
                                </div>
                               </div>


                               <script>
       function addProductToDatabase(productId) {

    fetch('produktet.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `id=${productId}`,
    })


}

function addProductToDatabase2(productId) {

fetch('produkti2.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}
function addProductToDatabase3(productId) {

fetch('produkti3.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase4(productId) {

fetch('produkti4.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase5(productId) {

fetch('produkti5.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase6(productId) {

fetch('produkti6.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}


function addProductToDatabase7(productId) {

fetch('produkti7.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase8(productId) {

fetch('produkti8.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase9(productId) {

fetch('produkti9.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase10(productId) {

fetch('produkti10.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase11(productId) {

fetch('produkti11.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}


function addProductToDatabase12(productId) {

fetch('produkti12.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase13(productId) {

fetch('produkti13.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}

function addProductToDatabase14(productId) {

fetch('produkti14.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}
function addProductToDatabase15(productId) {

fetch('produkti15.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})

}


</script>


    </div>


       </div>


    </div>
    
</body>
</html>