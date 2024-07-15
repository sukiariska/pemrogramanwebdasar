<?php
session_start();
include "connect.php";
    $username = (isset( $_POST['username'])) ? htmlentities( $_POST['username']): "" ;
    $password = (isset( $_POST['password'])) ? md5(htmlentities( $_POST['password'])) : "" ;
    if(!empty($_POST['submit_validate'])){
        $query = mysqli_query($conn,"SELECT * FROM tbuser WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if($hasil){
            $_SESSION['username_rental_mobil'] = $username;
            $_SESSION['level_rental_mobil'] = $hasil['level'];
            header('location:../home');
        }else{ ?>
        <script>
            alert('username atau password yang anda masukkan salah');
            window.location='../login'
        </script>

<?php
        }

    }
?>