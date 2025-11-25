<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  echo "Koneksi gagal: " . mysqli_connect_error();
} else {
  echo "Koneksi berhasil!";
}
?>