<?php
include '../koneksi.php';



// ambil data file

$namaFile = $_FILES['gambar_makan']['name'];

$namaSementara = $_FILES['gambar_makan']['tmp_name'];

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];


// tentukan lokasi file akan dipindahkan

$dirUpload = "../image/";



// pindahkan file

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);



if ($terupload) {

	mysqli_query($koneksi,"INSERT INTO menu VALUES('','$namaFile','$judul','$deskripsi','$harga', 'makanan')");
    echo "Upload berhasil!<br/>";

    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

    header("location:../menu.php");
} else {

    echo "Upload Gagal!";

}



?>
