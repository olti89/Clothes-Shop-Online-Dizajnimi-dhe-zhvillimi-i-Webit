<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>kids</title>
    <link rel="stylesheet" href="projekti.css" />
</head>

<body>

    <div class="fotografit">
        

        <div class="kids">
        <a href="kprodukti1.php?id=1">
            <img src="img32.jpg" alt="img"  onclick="addProductToDatabase1()">
              <p>EMBROIDERED VARSITY SWEATSHIRT</p>
              <p>17€</p>
              <p>Blue</p>
</a>
              </div>
              

              <div class="kids">
              <a href="kprodukti2.php?id=1">
                <img src="img33.jpg" alt="img" onclick="addProductToDatabase2()">
                  <p>PLUSH TROUSERS WITH SLOGAN</p>
                  <p>7€</p>
                  <p>Dark Blue</p>
</a>
                  </div>

                  <div class="kids">
                  <a href="kprodukti3.php?id=1">
                <img src="img34.jpg" alt="img" onclick="addProductToDatabase3()">
                  <p>FLOCKED MICKEY MOUSE © DISNEY</p>
                  <p>20€</p>
                  <p>Cream</p>
</a>
                  </div>

                  <div class="kids">
                  <a href="kprodukti4.php?id=1">
                    <img src="img35.jpg" alt="img" onclick="addProductToDatabase4()">
                      <p>LOGO HOODIE</p>
                      <p>12€</p>
                      <p>Brown</p>
</a>
                      </div>

                      <div class="kids">
                      <a href="kprodukti5.php?id=1">
                        <img src="img36.jpg" alt="img" onclick="addProductToDatabase5()">
                          <p>BLUEY © LUDO STUDIO SWEATSHIRT</p>
                          <p>19.99€</p>
                          <p>Red</p>
</a>
                          </div>

                          <div class="kids">
                          <a href="kprodukti6.php?id=1">
                            <img src="img37.jpg" alt="img" onclick="addProductToDatabase6()">
                              <p>SLOGAN SWEATSHIRT </p>
                              <p>10€</p>
                              <p>Grey</p>
</a>
                              </div>

                              
                          <div class="kids">
                          <a href="kprodukti7.php?id=1">
                            <img src="img38.jpg" alt="img" onclick="addProductToDatabase7()">
                              <p>NEW YORK BEAR HOODIE </p>
                              <p>20€</p>
                              <p>Black</p>
</a>
                              </div>

                                   
                          <div class="kids">
                          <a href="kprodukti8.php?id=1">
                            <img src="img39.jpg" alt="img" onclick="addProductToDatabase8()">
                              <p>PLUSH SWEATSHIRT AND TROUSERS  </p>
                              <p>10€</p>
                              <p>Green</p>
</a>
                              </div>

                              <div class="kids">
                              <a href="kprodukti9.php?id=1">
                                <img src="img40.jpg" alt="img" onclick="addProductToDatabase9()">
                                  <p>PLUSH SWEATSHIRT AND TROUS  </p>
                                  <p>19€</p>
                                  <p>Green</p>
</a>
                                  </div>

                                  
                              <div class="kids">
                              <a href="kprodukti10.php?id=1">
                                <img src="img41.jpg" alt="img" onclick="addProductToDatabase10()">
                                  <p>PLUSH TROUSERS WITH SLOGAN  </p>
                                  <p>15€</p>
                                  <p>Green</p>
</a>
                                  </div>

                                  <div class="kids">
                                  <a href="kprodukti11.php?id=1">
                                    <img src="img42.jpg" alt="img" onclick="addProductToDatabase11()">
                                      <p>MICKEY MOUSE AND FRIENDS © DISNEY  </p>
                                      <p>18€</p>
                                      <p>White</p>
</a> 
                                      </div>

                                      <div class="kids">
                                      <a href="kprodukti12.php?id=1">
                                        <img src="img44.jpg" alt="img" onclick="addProductToDatabase12()">
                                          <p>MICKEY MOUSE AND FRIENDS © DISNEY </p>
                                          <p>18€</p>
                                          <p>Grey</p>
</a>
                                          </div>

                                          <div class="kids">
                                          <a href="kprodukti13.php?id=1">
                                            <img src="img45.jpg" alt="img" onclick="addProductToDatabase13()">
                                              <p>BLUEY © LUDO STUDIO TROUSERS </p>
                                              <p>18€</p>
                                              <p>Grey</p>
</a>
                                              </div>

                                              <div class="kids">
                                              <a href="kprodukti14.php?id=1">
                                                <img src="img46.jpg" alt="img" onclick="addProductToDatabase14()">
                                                  <p>LOW FIT RIPPED JEANS </p>
                                                  <p>16€</p>
                                                  <p>Blue</p>
</a>
                                                  </div>

                                               </div>
                
         </div>

        </body>
        <script>
      function addProductToDatabase1(productId) {

fetch('kprodukti1.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}

function addProductToDatabase2(productId) {

fetch('kprodukti2.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase3(productId) {

fetch('kprodukti3.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase4(productId) {

fetch('kprodukti4.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase5(productId) {

fetch('kprodukti5.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase6(productId) {

fetch('kprodukti6.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase7(productId) {

fetch('kprodukti7.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase8(productId) {

fetch('kprodukti8.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase9(productId) {

fetch('kprodukti9.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase10(productId) {

fetch('kprodukti10.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase11(productId) {

fetch('kprodukti11.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase12(productId) {

fetch('kprodukti12.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase13(productId) {

fetch('kprodukti13.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase14(productId) {

fetch('kprodukti14.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}


</script>

        </html>
    




