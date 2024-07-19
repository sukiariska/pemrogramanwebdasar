<?php
include "connect.php";
$JenisMobil = (isset( $_POST['JenisMobil'])) ? htmlentities( $_POST['JenisMobil']): "" ;
$TahunKeluaran = (isset( $_POST['TahunKeluaran'])) ? htmlentities( $_POST['TahunKeluaran']): "" ;
$Warna = (isset( $_POST['Warna'])) ? htmlentities( $_POST['Warna']): "" ;
$Tarif = (isset( $_POST['Tarif'])) ? htmlentities( $_POST['Tarif']): "" ;
$Status = (isset( $_POST['Status'])) ? htmlentities( $_POST['Status']): "" ;

if(!empty ($_POST['input_mobil_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbmobil WHERE idMobil = '$idMobil'");
    if(mysqli_num_rows($select)> 51){
        $message = '<script>alert("Mobil Yang Dimasukkan Telah Ada");
        window.location="../mobil"</script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbmobil SET JenisMobil='$JenisMobil', TahunKeluaran='$TahunKeluaran', Warna='$Warna', Tarif='$Tarif', Status='$Status' WHERE idMobil='$idMobil'");
    if($query){
        $message = '<script>alert("Mobil Berhasil Diedit");
                    window.location="../mobil"</script>';
        
    }else{
        $message = '<script>alert("Mobil Gagal Diedit")</script>';
    }
}
}echo $message;
?>