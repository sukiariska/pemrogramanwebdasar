<?php
include "connect.php";
$id = (isset( $_POST['idKaryawan'])) ? htmlentities( $_POST['idKaryawan']): "" ;


if(!empty ($_POST['input_user_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbkaryawan WHERE idKaryawan = '$idKaryawan'");
    if($query){
        $message = '<script>alert("Data Berhasil Dihapus");
                    window.location="../karyawan"</script>';
        
    }else{
        $message = '<script>alert("Data Gagal Dihapus");
                    window.location="../karyawan"</script>';
    }
} echo $message;
?>