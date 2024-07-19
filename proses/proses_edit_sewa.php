<?php
include "connect.php";
$idSewa = (isset( $_POST['idSewa'])) ? htmlentities( $_POST['idSewa']): "" ;
$idCostumer = (isset( $_POST['idCostumer'])) ? htmlentities( $_POST['idCostumer']): "" ;
$idKaryawan = (isset( $_POST['idKaryawan'])) ? htmlentities( $_POST['idKaryawan']): "" ;
$idMobil = (isset( $_POST['idMobil'])) ? htmlentities( $_POST['idMobil']): "" ;
$TglSewa = (isset( $_POST['TglSewa'])) ? htmlentities( $_POST['TglSewa']): "" ;
$Lama = (isset( $_POST['Lama'])) ? htmlentities( $_POST['Lama']): "" ;
$Total = (isset( $_POST['Total'])) ? htmlentities( $_POST['Total']): "" ;

if(!empty ($_POST['input_costumer_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbsewa WHERE idSewa = '$idSewa'");
    if(mysqli_num_rows($select)> 51){
        $message = '<script>alert("Sewa Yang Dimasukkan Telah Ada");
        window.location="../sewa"</script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbsewa SET idSewa='$idSewa', idCostumer='$idCostumer', idKaryawan='$idKaryawan', idMobil='$idMobil', TglSewa='$TglSewa', Lama='$Lama', Total='$Total' WHERE idSewa='$idSewa'");
    if($query){
        $message = '<script>alert("Sewa Berhasil Diedit");
                    window.location="../sewa"</script>';
        
    }else{
        $message = '<script>alert("Sewa Gagal Diedit")</script>';
    }
}
}echo $message;
?>