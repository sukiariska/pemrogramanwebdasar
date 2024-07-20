<?php
include "connect.php";
$idMobil = (isset( $_POST['idMobil'])) ? htmlentities( $_POST['idMobil']): "" ;
$JenisMobil = (isset( $_POST['JenisMobil'])) ? htmlentities( $_POST['JenisMobil']): "" ;
$TahunKeluaran = (isset( $_POST['TahunKeluaran'])) ? htmlentities( $_POST['TahunKeluaran']): "" ;
$Warna = (isset( $_POST['Warna'])) ? htmlentities( $_POST['Warna']): "" ;
$Tarif = (isset( $_POST['Tarif'])) ? htmlentities( $_POST['Tarif']): "" ;
$Status = (isset( $_POST['Status'])) ? htmlentities( $_POST['Status']): "" ;

$kode_rand = rand(10000,99999)."-";
$target_dir = "../assets/img/".$kode_rand;
$target_file = $target_dir.basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if(!empty ($_POST['input_mobil_validate'])){
//cek apakah gambar atau bukan
$cek = getimagesize($_FILES['foto']['tmp_name']);
if($cek === false) {
    $message = "ini bukan file gambar";
    $statusUpload = 0;
}else{
    $statusUpload = 1;
    if(file_exists($target_file)){
    $message = "Maaf, File yang dimasukkan telah ada";
    $statusUpload = 0;
}else{
    if($_FILES['foto']['size'] > 500000){ //500kb
    $message = "File foto yang di upload terlalu besar";
    $statusUpload = 0;
}else{
    if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif"){
        $message = "Maaf, hanya diperbolehkan gambar yang format JPG, JPEG, PNG dan GIF";
        $statusUpload = 0;
    }
}
    } 
}

if($statusUpload == 0){
    $message = '<script>alert("'.$message.'Gambar tidak dapat diupload");
                window.location="../mobil"</script>';
}else{
    $select = mysqli_query($conn, "SELECT * FROM tbmobil WHERE idMobil = '$idMobil'");
    if(mysqli_num_rows($select)> 0){
        $message = '<script>alert("Jenis mobil Yang Dimasukkan Telah Ada");
        window.location="../mobil"</script>';
    }else{
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
    $query = mysqli_query($conn, "INSERT INTO tbmobil (idMobil, foto, JenisMobil, TahunKeluaran, Warna, Tarif, Status) VALUES ('" . $kode_rand . $_FILES['foto']['name'] . "', '$idMobil', '$JenisMobil', '$TahunKeluaran', '$Warna', '$Tarif', '$Status')");
            if($query){
        $message = '<script>alert("Data Berhasil Dimasukkan");
                    window.location="../mobil"</script>';
        }else{
            $message = '<script>alert("Data gagal Dimasukkan");
                    window.location="../mobil"</script>';
        }
    }else{
        $message = '<script>alert("Maaf terjadi kesalahan File tidak dapat di upload");
                    window.location="../mobil"</script>';
    }
    }
}
}echo $message;
?>