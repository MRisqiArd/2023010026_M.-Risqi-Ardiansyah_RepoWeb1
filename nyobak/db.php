<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'thrift_store';

$conn = new mysqli($host, $user, $password, $database);

if ($conn) {
    echo "Koneksi berhasil!";
} else {
    echo "Koneksi gagal!";
}

?>
