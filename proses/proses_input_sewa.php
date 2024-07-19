<?php
include "../proses/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idSewa = $_POST['idSewa'];
    $idCostumer = $_POST['idCostumer'];
    $idKaryawan = $_POST['idKaryawan'];
    $idMobil = $_POST['idMobil'];
    $TglSewa = $_POST['TglSewa'];
    $Lama = $_POST['TglLahir'];
    $Total = $_POST['Total'];

    $query = "INSERT INTO tbsewa (idSewa, idCostumer, idKaryawan, idMobil, TglSewa, Lama, Total) VALUES ('$idSewa', '$idCostumer', '$idKaryawan', '$idMobil', '$TglSewa', '$Lama', '$Total')";
    
    if (mysqli_query($conn, $query)) {
        $message = '<script>alert("Costumer Yang Dimasukkan Telah Ada");
        window.location="../sewa"</script>';
        } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Metode permintaan tidak valid.";
}
?>
