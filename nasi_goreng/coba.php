<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body{
  color: black;
}
#more {display: none;}
#mores {display: none;}
.navbar{
  margin-left: 25px;
  margin-right: 25px;
}
aside {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 0;
  top: 0;
  left: 0;
  margin-right: 12px;
  margin-top: 80px;
  overflow-x: hidden;
  padding-top: 20px;
}
section{
  margin: 55px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu Makanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<aside>
<h2>Artikel Nasi Goreng</h2>
<p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.


</aside>
<section>
  <div class="row"> 
    <div class="container"> 
      <h2>Artikel Nasi Goreng</h2>
      <p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.<span id="dots">...</span><span id="more"> Nasi goreng Indonesia aromanya berbeda dengan nasi goreng dari negara asia lain, baunya lebih bersahaja dan berbau asap, hal ini karena nasi goreng di Indonesia diberi kecap manis atau kadang kala terasi, dan rasanya lebih kuat dan pedas dibanding nasi goreng cina. Nasi goreng biasanya dihidangkan dengan krupuk dan bawang goreng untuk memberikan rasa renyah.
      Bahan utama nasi goreng antara lain nasi yang telah masak, kecap manis, bubuk terasi (pasta udang), garam, bawang putih, bawang merah, cabe rawit, daun bawang, pala, kunyit, minyak sayur, bawang merah, gula, pasta jahe, dan irisan mentimun serta tomat untuk hiasan. Beberapa resep bisa menambahkan lada hitam, saus ikan, atau kaldu bubuk sebagai penambah bumbu dan rasa. Telur bisa dicampur menjadi nasi goreng atau digoreng secara terpisah, baik sebagai telur ceplok/telur mata sapi, atau telur dadar (omelet), dan juga telur rebus. Penambahan telur atau tidak biasanya merupakan pilihan, nasi goreng yang dihidangkan dengan telur goreng sering dinamakan nasi goreng spesial atau nasi goreng khusus yang diberi topping telur goreng. </p></span>

  <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
    </div>
  </div> 
</section>
<section><div class="row"> 
    <div class="container"> 
      <h2>Artikel Nasi Goreng</h2>
      <p>Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin, atau mentega. Biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya; seperti telur, ayam, dan kerupuk.<span id="dotss">...</span><span id="mores"> Nasi goreng Indonesia aromanya berbeda dengan nasi goreng dari negara asia lain, baunya lebih bersahaja dan berbau asap, hal ini karena nasi goreng di Indonesia diberi kecap manis atau kadang kala terasi, dan rasanya lebih kuat dan pedas dibanding nasi goreng cina. Nasi goreng biasanya dihidangkan dengan krupuk dan bawang goreng untuk memberikan rasa renyah.
      Bahan utama nasi goreng antara lain nasi yang telah masak, kecap manis, bubuk terasi (pasta udang), garam, bawang putih, bawang merah, cabe rawit, daun bawang, pala, kunyit, minyak sayur, bawang merah, gula, pasta jahe, dan irisan mentimun serta tomat untuk hiasan. Beberapa resep bisa menambahkan lada hitam, saus ikan, atau kaldu bubuk sebagai penambah bumbu dan rasa. Telur bisa dicampur menjadi nasi goreng atau digoreng secara terpisah, baik sebagai telur ceplok/telur mata sapi, atau telur dadar (omelet), dan juga telur rebus. Penambahan telur atau tidak biasanya merupakan pilihan, nasi goreng yang dihidangkan dengan telur goreng sering dinamakan nasi goreng spesial atau nasi goreng khusus yang diberi topping telur goreng. </p></span>

  <button onclick="myFunctions()" id="myBtns" class="btn btn-primary">Read more</button>
    </div>
  </div> 
</section>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<script>
function myFunctions() {
  var dots = document.getElementById("dotss");
  var moreText = document.getElementById("mores");
  var btnText = document.getElementById("myBtns");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>