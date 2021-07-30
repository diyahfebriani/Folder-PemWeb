<?php 

include '../koneksi.php';
$namaFile = $_FILES['gambar_makan']['name'];

$namaSementara = $_FILES['gambar_makan']['tmp_name'];
$dirUpload = "../image/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
$id=$_POST['id_menu'];
$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];

if ($terupload) {

	mysqli_query($koneksi,"UPDATE `menu` SET `gambar`='$namaFile',`judul`='$judul',`deskripsi`='$deskripsi',`harga`='$harga' WHERE id_menu='$id'");
    echo "Upload berhasil!<br/>";

    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

    header("location:index.php");
} else {

    echo "Upload Gagal!";

}

?>