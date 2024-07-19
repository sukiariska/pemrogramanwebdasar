<?php
include "../proses/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idPembayaran = $_POST['idPembayaran'];
    $idSewa = $_POST['idSewa'];
    $TglPembayaran = $_POST['TglPembayaran'];
    $Jumlah = $_POST['Jumlah'];
    $MetodePembayaran = $_POST['MetodePembayaran'];

    $query = "INSERT INTO tbpembayaran (idPembayaran, idSewa, TglPembayaran, Jumlah, MetodePembayaran) VALUES ('$idPembayaran', '$idSewa', '$TglPembayaran', '$Jumlah', '$MetodePembayaran')";
    
    if (mysqli_query($conn, $query)) {
        $message = '<script>alert("Costumer Yang Dimasukkan Telah Ada");
        window.location="../pembayaran"</script>';    
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Metode permintaan tidak valid.";
}
?>
