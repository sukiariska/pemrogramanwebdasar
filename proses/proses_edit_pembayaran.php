<?php
include "connect.php";
$idPembayaran = (isset( $_POST['idPembayaran'])) ? htmlentities( $_POST['idPembayaran']): "" ;
$idSewa = (isset( $_POST['idSewa'])) ? htmlentities( $_POST['idSewa']): "" ;
$TglPembayaran = (isset( $_POST['TglPembayaran'])) ? htmlentities( $_POST['TglPembayaran']): "" ;
$Jumlah = (isset( $_POST['Jumlah'])) ? htmlentities( $_POST['Jumlah']): "" ;
$MetodePembayaran = (isset( $_POST['MetodePembayaran'])) ? htmlentities( $_POST['MetodePembayaran']): "" ;

if(!empty ($_POST['input_pembayaran_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbpembayaran WHERE idPembayaran = '$idPembayaran'");
    if(mysqli_num_rows($select)> 0){
        $message = '<script>alert("Pembayaran Yang Dimasukkan Telah Ada");
        window.location="../pembayaran"</script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbpembayaran SET idPembayaran='$idPembayaran', idSewa='$idSewa', TglPembayaran='$TglPembayaran', Jumlah='$Jumlah', MetodePembayaran='$MetodePembayaran'");
    if($query){
        $message = '<script>alert("Pembayaran Berhasil Diedit");
                    window.location="../pembayaran"</script>';
        
    }else{
        $message = '<script>alert("Pembayaran Gagal Diedit")</script>';
    }
}
}echo $message;
?>