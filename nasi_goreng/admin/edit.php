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
	include "../koneksi.php";
	$id=$_GET['id'];
	$koleksi = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu='$id'");
	$menu = mysqli_fetch_array($koleksi);
	$id=$menu['id_menu'];
	$judul = $menu['judul'];
	$gambar = $menu['gambar'];
	$deskripsi = $menu['deskripsi'];
	$harga = $menu['harga'];
	$jenis = $menu['jenis'];
		?>
	 <div class="topnav">
	  <div class="topnav-right">
	    <a href="logout.php">Logout</a>
	  </div>
	</div> 
	<section>
		<div class="row">
    <div class="container">
      <div class="row" id="minuman">
        <div class="col-sm-3">
          <div class="card">
          <img src="../image/<?=$menu['gambar']?>" width="200px">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
            	
              	<form method="post" action="proses-edit.php" enctype="multipart/form-data">
		          	<div class="form-group">
		          		<input type="text" class="form-control" value="<?php echo $menu['id_menu'] ?>" name="id_menu" hidden>
				      <label for="gambar_makan">Gambar:</label>
				      <input type="file" class="form-control" id="gambar_makan" name="gambar_makan">
				    </div>
				    <div class="form-group">
				      <label for="judul">Judul:</label>
				      <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="<?= $menu['judul'];?>">
				    </div>
				    <div class="form-group">
				      <label for="deskripsi">Deskripsi Makanan:</label>
				      <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Makanan" name="deskripsi" value="<?= $menu['deskripsi'];?>">
				    </div>
				    <div class="form-group">
				      <label for="harga">Harga Makanan:</label>
				      <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Makanan" name="harga" value="<?= $menu['harga'];?>">
				    </div>
				    <button type="submit" class="btn btn-primary">Save</button>
				    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        </form>
            </div>
          </div><br>
        </div>
      </div>
    </div>
  </div>
</section>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>