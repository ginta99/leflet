<?php
   session_start(); //mulai session, krena kita akan menggunakan session pd file php ini
   include 'koneksi.php'; //hubungkan dengan config.php untuk berhubungan dengan database

   $usr=$_POST['username']; //tangkap data yg di input dari form login input username
   $pwd=$_POST['password']; //tangkap data yg di input dari form login input password

   $sql = "select * from admin where username='".$usr."' and password='".$pwd."'";

   $query = mysqli_query($con, $sql); //melakukan pengampilan data dari database untuk di cocokkan
   
   if ($query) {
      $row = mysqli_num_rows($query);

      if ($row > 0) {
         $_SESSION['username']=$username; //jika cocok, buat session dengan nama sesuai dengan username
         header("location: http://localhost/leaft-trans/admin/data_lokasi.php"); // dan alihkan ke data_lokasi.php
      } else {
         echo "<script> alert('Username atau Password Salah'); location = 'admin.php'; </script>";
      }
   }
?>