<?php 
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "todolist";

   $koneksi = mysqli_connect($host, $user, $password, $db);

   if(!$koneksi) {
      die("Koneksi gagal : ".mysqli_connect_error());
   }
?>