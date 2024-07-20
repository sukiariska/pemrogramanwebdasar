<?php
include "../proses/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idCostumer = $_POST['idCostumer'];
    $Nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $JK = $_POST['JK'];
    $TglLahir = $_POST['TglLahir'];
    $NoTelepon = $_POST['NoTelepon'];

    $query = "INSERT INTO tbcostumer (idCostumer, Nama, Alamat, JK, TglLahir, NoTelepon) VALUES ('$idCostumer', '$Nama', '$Alamat', '$JK', '$TglLahir', '$NoTelepon')";
    
    if (mysqli_query($conn, $query)) {
        $message = '<script>alert("Costumer Yang Dimasukkan Telah Ada");
        window.location="../costumer"</script>';
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Metode permintaan tidak valid.";
}
?>
