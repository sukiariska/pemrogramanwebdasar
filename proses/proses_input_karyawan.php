<?php
include "../proses/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idKaryawan = $_POST['idKaryawan'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $JK = $_POST['JK'];
    $TglLahir = $_POST['TglLahir'];
    $NoTelepon = $_POST['NoTelepon'];

    $query = "INSERT INTO tbkaryawan (idKaryawan, Nama, Alamat, JK, TglLahir, NoTelepon) VALUES ('$idKaryawan', '$Nama', '$Alamat', '$JK', '$TglLahir', '$NoTelepon')";
    
    if (mysqli_query($conn, $query)) {
        $message = '<script>alert("Costumer Yang Dimasukkan Telah Ada");
        window.location="../karyawan"</script>';    
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Metode permintaan tidak valid.";
}
?>
