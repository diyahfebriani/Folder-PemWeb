<?php
include '../koneksi.php';



// ambil data file

$namaFile = $_FILES['gambar_minum']['name'];

$namaSementara = $_FILES['gambar_minum']['tmp_name'];

$judulminuman = $_POST['judulminuman'];
$deskripsiminuman = $_POST['deskripsiminuman'];
$hargaminuman = $_POST['hargaminuman'];


// tentukan lokasi file akan dipindahkan

$dirUpload = "../image/";



// pindahkan file

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);



if ($terupload) {

	mysqli_query($koneksi,"INSERT INTO menu VALUES('','$namaFile','$judulminuman','$deskripsiminuman','$hargaminuman', 'minuman')");
    echo "Upload berhasil!<br/>";

    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

    header("location:../menu.php");
} else {

    echo "Upload Gagal!";

}



?>
