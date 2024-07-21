<?php
include 'proses/connect.php';

$sql = "SELECT c.Nama AS NamaCostumer, k.Nama AS NamaKaryawan, m.JenisMobil, s.TglSewa, s.Lama, s.Total 
        FROM tbsewa s
        JOIN tbcostumer c ON s.idCostumer = c.idCostumer
        JOIN tbkaryawan k ON s.idKaryawan = k.idKaryawan
        JOIN tbmobil m ON s.idMobil = m.idMobil";
$result = $conn->query($sql);

$jenisMobil = [];
$jumlahSewa = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jenisMobil[] = $row['JenisMobil'];
        $jumlahSewa[] = $row['Lama'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Report Rental Mobil</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
        #chart-container {
            width: 80%;
            margin: 0 auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Report Rental Mobil</h2>
    <div id="chart-container">
        <canvas id="sewaChart"></canvas>
    </div>

    <table>
        <tr>
            <th>Nama Costumer</th>
            <th>Nama Karyawan</th>
            <th>Nama Mobil</th>
            <th>Tanggal Sewa</th>
            <th>Lama Sewa</th>
            <th>Total</th>
        </tr>
        <?php
        $result->data_seek(0); // reset result pointer to the beginning
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['NamaCostumer']}</td>
                        <td>{$row['NamaKaryawan']}</td>
                        <td>{$row['JenisMobil']}</td>
                        <td>{$row['TglSewa']}</td>
                        <td>{$row['Lama']}</td>
                        <td>{$row['Total']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data available</td></tr>";
        }
        ?>
    </table>

    <script>
        var ctx = document.getElementById('sewaChart').getContext('2d');
        var sewaChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($jenisMobil); ?>,
                datasets: [{
                    label: 'Lama Sewa',
                    data: <?php echo json_encode($jumlahSewa); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>
