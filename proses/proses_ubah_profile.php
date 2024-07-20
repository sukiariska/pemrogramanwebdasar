<?php
session_start();
include "connect.php";
$Nama = (isset( $_POST['Nama'])) ? (htmlentities( $_POST['Nama'])): "" ;
$Alamat= (isset( $_POST['Alamat'])) ? (htmlentities( $_POST['Alamat'])): "" ;
$NoTelepon= (isset( $_POST['NoTelepon'])) ? (htmlentities( $_POST['NoTelepon'])): "" ;

if(!empty($_POST['ubah_profile_validate'])){    
            $query = mysqli_query($conn, "UPDATE tbuser SET Nama='$Nama', Alamat='$Alamat', NoTelepon='$NoTelepon' WHERE username = '$_SESSION[username_rental_mobil]'");
        if($query){
            $message = '<script>alert("Data Profile Berhasil Diubah");
                        window.history.back()</script>';          
        }else{
            $message = '<script>alert("Data Profile Gagal Diubah");
                        window.history.back()</script>';    
        }else{
            $message = '<script>alert("Terjadi Kesalahan");
                        window.history.back()</script>';    
        }
}
    echo $message;
?>