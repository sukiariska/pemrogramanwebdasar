<?php
include "../proses/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idCostumer = $_POST['idCostumer'];
    $nama = $_POST['nama'];
    $alamat = $_POST['Alamat'];
    $JK = $_POST['JK'];
    $tglLahir = $_POST['TglLahir'];
    $noTelepon = $_POST['NoTelepon'];

    $query = "INSERT INTO tbcostumer (idCostumer, Nama, Alamat, JK, TglLahir, NoTelepon) VALUES ('$idCostumer', '$nama', '$alamat', '$JK', '$tglLahir', '$noTelepon')";
    
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
