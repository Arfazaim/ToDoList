<?php 
// mengaktifkan session
session_start();
 
// menghapus session
session_destroy();
 
// mengalihkan halaman login
header("location:loginrodolist.php?pesan=Anda berhasil logout.");
?>