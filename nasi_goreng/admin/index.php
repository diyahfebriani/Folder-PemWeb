<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<style>
body{
  color: black;
}
nav{
  margin-left: 25px;
  margin-right: 25px;
  text-align: center;
  margin-top: 25px;
  margin-bottom: 10px;
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
  font-size: 30px;
}
/* Add a black background color to the top navigation */
.topnav {
    background-color: lightgrey;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
</style>
</head>
<body>
	<?php 
        session_start();
    
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:../login.php");
        }
	?>
	 <div class="topnav">
	  <div class="topnav-right">
	    <a href="logout.php">Logout</a>
	  </div>
	</div> 
	<aside>
	  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#makanan">Tambah Makanan</button><br><br>
	  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#minuman">Tambah Minuman</button><br><br>
	</aside>
	
	<div class="row">
		<div class="container">
			<div class="modal fade" id="makanan" tabindex="-1" role="dialog" aria-labelledby="makananModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="makananModal">Tambah Makanan</h5>
				</div>
				<div class="modal-body">
					<form method="post" action="makan.php" enctype="multipart/form-data">
		          	<div class="form-group">
				      <label for="gambar_makan">Gambar:</label>
				      <input type="file" class="form-control" id="gambar_makan" name="gambar_makan">
				    </div>
				    <div class="form-group">
				      <label for="judul">Judul:</label>
				      <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul">
				    </div>
				    <div class="form-group">
				      <label for="deskripsi">Deskripsi Makanan:</label>
				      <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Makanan" name="deskripsi">
				    </div>
				    <div class="form-group">
				      <label for="harga">Harga Makanan:</label>
				      <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Makanan" name="harga">
				    </div>
				    <button type="submit" class="btn btn-primary">Save</button>
				    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        	</form>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	
	<div class="row">
		<div class="container">
			<div class="modal fade" id="minuman" tabindex="-1" role="dialog" aria-labelledby="minumanModal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="minumanModal">Tambah Minuman</h5>
				</div>
				<div class="modal-body">
					<form method="post" action="minum.php" enctype="multipart/form-data">
		          	<div class="form-group">
				      <label for="gambar_minum">Gambar:</label>
				      <input type="file" class="form-control" id="gambar_minum" name="gambar_minum">
				    </div>
				    <div class="form-group">
				      <label for="judulminuman">Judul:</label>
				      <input type="text" class="form-control" id="judulminuman" placeholder="Masukkan Judul" name="judulminuman">
				    </div>
				    <div class="form-group">
				      <label for="deskripsiminuman">Deskripsi Minuman:</label>
				      <input type="text" class="form-control" id="deskripsiminuman" placeholder="Masukkan Deskripsi Minuman" name="deskripsiminuman">
				    </div>
				    <div class="form-group">
				      <label for="hargaminuman">Harga Minuman:</label>
				      <input type="text" class="form-control" id="hargaminuman" placeholder="Masukkan Harga Minuman" name="hargaminuman">
				    </div>
				    <button type="submit" class="btn btn-primary">Save</button>
				    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        	</form>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	<section>
		<div class="row">
    <div class="container">
      <div class="row" id="minuman">
        <?php 
                include "../koneksi.php";
                $menu_pak = mysqli_query($koneksi, "SELECT * FROM menu");
                $nomor = 1;
                while($mamat = mysqli_fetch_array($menu_pak)){
            ?>
        <div class="col-sm-3">
          <div class="card">
          <img src="../image/<?=$mamat['gambar']?>" width="200px" max-height="200px">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $mamat['judul']; ?></h5>
              <p class="card-text"><?= $mamat['deskripsi']; ?></p>
              <p class="card-text">Rp <?= $mamat['harga']; ?></p>
              <p class="small"> Jenis: <?= $mamat['jenis'];?></p>
              <button class="btn btn-warning" type="button"><a href="edit.php?id=<?php echo $mamat['id_menu']; ?>" style="color: white"><i class="fa fa-edit"></i> Edit </a></button>
	        	<button class="btn btn-danger" type="button"><a onclick="return confirm('Yakin untuk menghapus?')" href="delete.php?id=<?php echo $mamat['id_menu']; ?>" style="color: white"><i class="fa fa-trash"></i>Hapus </a></button>
            </div>
          </div><br>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
		
	</section>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>