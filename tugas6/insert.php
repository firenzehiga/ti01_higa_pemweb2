<?php
include 'db.php';

$nama     = $_POST['nama'];
$merk     = $_POST['merk'];
$ram      = $_POST['ram'];
$rom      = $_POST['rom'];
$harga    = $_POST['harga'];

$query = "INSERT INTO produk (nama, merk, ram, rom, harga) VALUES('$nama','$merk','$ram','$rom', '$harga')";

if($conn->query($query) === TRUE){
    header("location: index.php");
}else{
    echo "Error:" . $query . "<br>". $conn->error;
}

$conn-close();
?>


