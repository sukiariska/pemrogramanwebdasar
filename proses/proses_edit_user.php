<?php
include "connect.php";
$id = (isset( $_POST['id'])) ? htmlentities( $_POST['id']): "" ;
$name = (isset( $_POST['Nama'])) ? htmlentities( $_POST['Nama']): "" ;
$username = (isset( $_POST['username'])) ? htmlentities( $_POST['username']): "" ;
$level = (isset( $_POST['level'])) ? htmlentities( $_POST['level']): "" ;
$notelepon = (isset( $_POST['NoTelepon'])) ? htmlentities( $_POST['NoTelepon']): "" ;
$alamat = (isset( $_POST['Alamat'])) ? htmlentities( $_POST['Alamat']): "" ;
$password = md5('password');

if(!empty ($_POST['input_user_validate'])){
    $select = mysqli_query($conn, "SELECT * FROM tbuser WHERE username = '$username'");
    if(mysqli_num_rows($select)> 0){
        $message = '<script>alert("Username Yang Dimasukkan Telah Ada");
        window.location="../User"</script>
        </script>';
    }else{
    $query = mysqli_query($conn, "UPDATE tbuser SET nama='$name', username='$username', level='$level', notelepon='$notelepon', alamat='$alamat' WHERE id='$id'");
    if($query){
        $message = '<script>alert("Data Berhasil Diedit");
                    window.location="../User"</script>';
        
    }else{
        $message = '<script>alert("Data Gagal Diedit")</script>';
    }
}
}echo $message;
?>