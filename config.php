<?php 
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "todolist";

   $koneksi = mysqli_connect($host, $user, $password, $db);

   if(!$koneksi) {
      die("Koneksi gagal : ".mysql_connect_error());
   }
?>