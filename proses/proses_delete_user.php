<?php
include "connect.php";
$id = (isset( $_POST['id'])) ? htmlentities( $_POST['id']): "" ;


if(!empty ($_POST['input_user_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbuser WHERE id = '$id'");
    if($query){
        $message = '<scrip>alert("Data Berhasil Dihapus");
                    window.location="../user"</script>';
        
    }else{
        $message = '<script>alert("Data Gagal Dihapus");
                    window.location="../user"</script>';
    }
} 
    echo $message;
?>