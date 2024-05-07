<?php

// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sewa-ps';

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// echo "Koneksi ke database berhasil.";

// Sekarang Anda dapat melakukan operasi database lainnya menggunakan variabel $koneksi
