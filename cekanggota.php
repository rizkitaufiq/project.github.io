<?php
	include 'system/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $login  = mysqli_query($con,"SELECT * FROM user WHERE username ='$username' AND password='$password'");
    $rows   = mysqli_fetch_array($login);
    
    session_start();
    $_SESSION['id']=$rows['id'];
    $_SESSION['nama_user']= $rows['nama_user'];
    $_SESSION['username'] = $rows['username'];
    $_SESSION['password'] = $rows['password'];
    $_SESSION['level']    = $rows['level'];
    $_SESSION['status']   = "login";

    
    if ($rows['level'] == "anggota") {
        echo "<script>alert('Berhasil Login !');</script>";
        echo "<script>window.location='home.php';</script>";
    }else{
        echo "<script>alert('Gagal Login !');</script>";
        echo "<script>window.location='index.php';</script>";
    }
    if ($rows['level'] == "non anggota") {
        header('location:home.php');
    }else{
        echo "<script>alert('Gagal Login !');</script>";
        echo "<script>window.location='index.php';</script>";
    }
    
    mysqli_close($con);
?>