<?php
include "connect.php";
$id = (isset( $_POST['idPembayaran'])) ? htmlentities( $_POST['idPembayaran']): "" ;


if(!empty ($_POST['input_pembayaran_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbpembayaran WHERE idPembayaran = '$idPembayaran'");
    if($query){
        $message = '<scrip>alert("Pembayaran Berhasil Dihapus");
                    window.location="../pembayaran"</script>';
        
    }else{
        $message = '<script>alert("Pembayaran Gagal Dihapus");
                    window.location="../pembayaran"</script>';
    }
} 
    echo $message;
?>