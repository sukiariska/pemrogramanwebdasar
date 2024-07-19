<?php
include "connect.php";
$id = (isset( $_POST['idMobil'])) ? htmlentities( $_POST['idMobil']): "" ;


if(!empty ($_POST['input_mobil_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbmobil WHERE idMobil = '$idMobil'");
    if($query){
        $message = '<script>alert("Data Berhasil Dihapus");
                    window.location="../mobil"</script>';
        
    }else{
        $message = '<script>alert("Data Gagal Dihapus");
                    window.location="../mobil"</script>';
    }
} echo $message;
?>