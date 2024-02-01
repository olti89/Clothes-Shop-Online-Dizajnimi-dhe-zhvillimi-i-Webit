<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Woman</title>
    <link rel="stylesheet" href="projekti.css" />
</head>
<body>
    <div class="fotografit">

        <div class="Woman">
            <a href="fprodukti1.php?id=1">
            <img src="img29.jpg" alt="img" onclick="addProductToDatabase1()">
            <p>50€</p>
            <p>FAUX LEATHER PUFFER COAT </p>
            <p>Black</p>
</a>
           </div>

           <div class="Woman">
           <a href="fprodukti2.php?id=2">
            <img src="img30.jpg" alt="img" onclick="addProductToDatabase2()">
            <p>60€</p>
            <p>FAUX LEATHER PUFFER GILEt </p>
            <p>Black</p>
</a>
           </div>

           <div class="Woman">
           <a href="fprodukti3.php?id=3">
            <img src="img31.jpg" alt="img" onclick="addProductToDatabase3()">
            <p>40€</p>
            <p>RUBBERIZED PUFFER VEST WITH HOOD </p>
            <p>White</p>
</a>
           </div>
        
           
       <div class="Woman">
       <a href="fprodukti4.php?id=3">
        <img src="img17.jpg" alt="img" onclick="addProductToDatabase4()">
        <p>14€</p>
        <p>Long T-Shirt</p>
        <p>Grey</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti5.php?id=3">
        <img src="img18.jpg" alt="img" onclick="addProductToDatabase5()">
        <p>15€</p>
        <p>Long T-shirt</p>
        <p>blue indigo</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti6.php?id=3">
        <img src="img19.jpg" alt="img" onclick="addProductToDatabase6()">
        <p>15€</p>
        <p>Long T-shirt</p>
        <p>Black</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti7.php?id=3">
        <img src="img20.jpg" alt="img" onclick="addProductToDatabase7()">
        <p>15€</p>
        <p>Long T-shirt</p>
        <p>Dark Green</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti8.php?id=3">
        <img src="img21.jpg" alt="img" onclick="addProductToDatabase8()">
        <p>20€</p>
        <p>LONG SLEEVE POLYAMIDE TOP</p>
        <p>White</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti9.php?id=3">
        <img src="img22.jpg" alt="img" onclick="addProductToDatabase9()">
        <p>15€</p>
        <p>POLYAMIDE TOP WITH THIN STRAPS </p>
        <p>Cream</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti10.php?id=3">
        <img src="img23.jpg" alt="img" onclick="addProductToDatabase10()">
        <p>10€</p>
        <p>POLYAMIDE TOP WITH THIN STRAPS </p>
        <p>White</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti11.php?id=3">
        <img src="img24.jpg" alt="img"  onclick="addProductToDatabase11()">
        <p>20€</p>
        <p>POLYAMIDE TOP WITH THIN STRAPS </p>
        <p>grey</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti12.php?id=3">
        <img src="img25.jpg" alt="img"  onclick="addProductToDatabase12()">
        <p>30€</p>
        <p>TOP WITH LONG RAGLAN SLEEVES  </p>
        <p>White</p>
</a>
       </div>
       
       <div class="Woman">
       <a href="fprodukti13.php?id=3">
        <img src="img26.jpg" alt="img"  onclick="addProductToDatabase13()">
        <p>30€</p>
        <p>TOP WITH LONG RAGLAN SLEEVES  </p>
        <p>Grey</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti14.php?id=3">
        <img src="img27.jpg" alt="img" onclick="addProductToDatabase14()">
        <p>10€</p>
        <p>Strappy Top  </p>
        <p>Grey</p>
</a>
       </div>

       <div class="Woman">
       <a href="fprodukti15.php?id=3">
        <img src="img28.jpg" alt="img" onclick="addProductToDatabase15()">
        <p>20€</p>
        <p>T-shirt  </p>
        <p>white</p>
       </div>

       






    </div>
    <script>
     function addProductToDatabase1(productId) {

fetch('fprodukti1.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}

function addProductToDatabase2(productId) {

fetch('fprodukti2.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase3(productId) {

fetch('fprodukti3.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase4(productId) {

fetch('fprodukti4.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase5(productId) {

fetch('fprodukti5.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase6(productId) {

fetch('fprodukti6.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase7(productId) {

fetch('fprodukti7.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase8(productId) {

fetch('fprodukti8.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase9(productId) {

fetch('fprodukti9.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase10(productId) {

fetch('fprodukti10.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase11(productId) {

fetch('fprodukti11.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase12(productId) {

fetch('fprodukti12.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase13(productId) {

fetch('fprodukti13.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase14(productId) {

fetch('fprodukti14.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}
function addProductToDatabase15(productId) {

fetch('fprodukti15.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `id=${productId}`,
})


}


</script>
</body>
</html>