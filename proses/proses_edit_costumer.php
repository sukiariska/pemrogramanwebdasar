<?php
include "connect.php";
$idCostumer = (isset( $_POST['idCostumer'])) ? htmlentities( $_POST['idCostumer']): "" ;
$Nama = (isset( $_POST['Nama'])) ? htmlentities( $_POST['Nama']): "" ;
$Alamat = (isset( $_POST['Alamat'])) ? htmlentities( $_POST['Alamat']): "" ;
$JK = (isset( $_POST['JK'])) ? htmlentities( $_POST['JK']): "" ;
$TglLahir = (isset( $_POST['TglLahir'])) ? htmlentities( $_POST['TglLahir']): "" ;
$NoTelepon = (isset( $_POST['NoTelepon'])) ? htmlentities( $_POST['NoTelepon']): "" ;

if(!empty ($_POST['input_costumer_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbcostumer WHERE idCostumer = '$idCostumer'");
    if(mysqli_num_rows($select)> 51){
        $message = '<script>alert("Costumer Yang Dimasukkan Telah Ada");
        window.location="../costumer"</script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbcostumer SET idCostumer='$idCostumer', Nama='$Nama', Alamat='$Alamat', JK='$JK', TglLahir='$TglLahir', NoTelepon='$NoTelepon' WHERE idCostumer='$idCostumer'");
    if($query){
        $message = '<script>alert("Costumer Berhasil Diedit");
                    window.location="../costumer"</script>';
        
    }else{
        $message = '<script>alert("Costumer Gagal Diedit")</script>';
    }
}
}echo $message;
?>