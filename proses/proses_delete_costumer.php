<?php
include "connect.php";
$id = (isset( $_POST['idCostumer'])) ? htmlentities( $_POST['idCostumer']): "" ;


if(!empty ($_POST['input_costumer_validate'])){
    $query = mysqli_query($conn, "DELETE FROM tbcostumer WHERE idCostumer = '$idCostumer'");
    if($query){
        $message = '<script>alert("Costumer Berhasil Dihapus");
                    window.location="../costumer"</script>';
        
    }else{
        $message = '<script>alert("Costumer Gagal Dihapus");
                    window.location="../costumer"</script>';
    }
} echo $message;
?>