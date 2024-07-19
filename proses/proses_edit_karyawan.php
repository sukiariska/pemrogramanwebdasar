<?php
include "connect.php";
$idKaryawan = (isset( $_POST['idKaryawan'])) ? htmlentities( $_POST['idKaryawan']): "" ;
$Nama = (isset( $_POST['Nama'])) ? htmlentities( $_POST['Nama']): "" ;
$Alamat = (isset( $_POST['Alamat'])) ? htmlentities( $_POST['Alamat']): "" ;
$JK = (isset( $_POST['JK'])) ? htmlentities( $_POST['JK']): "" ;
$TglLahir = (isset( $_POST['TglLahir'])) ? htmlentities( $_POST['TglLahir']): "" ;
$NoTelepon = (isset( $_POST['NoTelepon'])) ? htmlentities( $_POST['NoTelepon']): "" ;

if(!empty ($_POST['input_user_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbkaryawan WHERE idKaryawan = '$idKaryawan'");
    if(mysqli_num_rows($select)> 0){
        $message = '<script>alert("Karyawan Yang Dimasukkan Telah Ada");
        window.location="../karyawan"</script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbkaryawan SET Nama='$Nama', Alamat='$Alamat', JK='$JK', TglLahir='$TglLahir', NoTelepon='$NoTelepon' WHERE idKaryawan='$idKaryawan'");
    if($query){
        $message = '<script>alert("Karyawan Berhasil Diedit");
                    window.location="../karyawan"</script>';
        
    }else{
        $message = '<script>alert("Karyawan Gagal Diedit")</script>';
    }
}
}echo $message;
?>
