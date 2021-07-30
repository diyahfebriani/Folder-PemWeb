<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body{
  color: black;
}
aside {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  margin-top: 120px;
  overflow-x: hidden;
  padding-top: 20px;
}
section{
  margin: 25px;
}
</style>
</head>
<body>
  <br>
  <h3 align="center">Nasi Goreng Mas Pur</h3>
<br>
<aside>
  <a href="#makanan" class="btn btn-secondary">Daftar Makanan</a><br><br>
  <a href="#minuman" class="btn btn-secondary">Daftar Minuman</a>
</aside>
<section>
  <div class="row">
    <div class="container">
      <div class="row" id="makanan">
        <?php 
            include "koneksi.php";
            $menu_pak = mysqli_query($koneksi, "SELECT * FROM menu where jenis='makanan' ");
            $nomor = 1;
            while($mamat = mysqli_fetch_array($menu_pak)){
        ?>
        <div class="col-sm-3">
          <div class="card">
          <img src="image/<?=$mamat['gambar']?>" width="200px">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $mamat['judul']; ?></h5>
              <p class="card-text"><?= $mamat['deskripsi']; ?></p>
              <p class="card-text">Rp <?= $mamat['harga']; ?></p>
              <a href="https://wa.me/085886224786" class="btn btn-primary">  Pesan sekarang </a>
              <p class="small"> <?= $mamat['jenis'];?></p>
            </div>
          </div><br>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div class="container">
      <div class="row" id="minuman">
        <?php 
                include "koneksi.php";
                $menu_pak = mysqli_query($koneksi, "SELECT * FROM menu where jenis='minuman' ");
                $nomor = 1;
                while($mamat = mysqli_fetch_array($menu_pak)){
            ?>
        <div class="col-sm-3">
          <div class="card">
          <img src="image/<?=$mamat['gambar']?>" width="200px">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $mamat['judul']; ?></h5>
              <p class="card-text"><?= $mamat['deskripsi']; ?></p>
              <p class="card-text">Rp <?= $mamat['harga']; ?></p>
              <a href="https://wa.me/085886224786" class="btn btn-primary">  Pesan sekarang </a>
              <p class="small"> <?= $mamat['jenis'];?></p>
            </div>
          </div><br>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
</section>
</body>
</html>
