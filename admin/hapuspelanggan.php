<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}

// Establish database connection
$koneksi = new mysqli("localhost", "root", "", "ylnj-project");

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if (isset($_GET['id_pelanggan'])) {
    $id_pelanggan = $_GET['id_pelanggan'];

    // Perform delete operation
    $delete = $koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");

    if ($delete) {
        echo "<script>alert('Pelanggan berhasil dihapus');</script>";
        echo "<script>location='index.php?halaman=pelanggan';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pelanggan');</script>";
        echo "<script>location='index.php?halaman=pelanggan';</script>";
    }
} else {
    echo "<script>alert('ID pelanggan tidak ditemukan');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
}

// Close database connection
$koneksi->close();
?>