<?php
include "connect.php";
$id = (isset( $_POST['idSewa'])) ? htmlentities( $_POST['idSewa']): "" ;


if(!empty ($_POST['input_sewa_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbsewa WHERE idSewa = '$idSewa'");
    if($query){
        $message = '<scrip>alert("Data Berhasil Dihapus");
                    window.location="../sewa"</script>';
        
    }else{
        $message = '<script>alert("Data Gagal Dihapus");
                    window.location="../sewa"</script>';
    }
} 
    echo $message;
?>