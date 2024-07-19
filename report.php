<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="col-lg-9 mt-2">
    <!--Carausel-->
    
            
    <!--Akhir Carausel-->

    <!--Judul-->
    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">SELAMAT DATANG DI RENTAL MOBIL TERBAIK</h5>
            <p class="card-text">Kami menyediakan solusi rental mobil terbaik untuk kebutuhan perjalanan Anda. Daftar sekarang dan nikmati berbagai penawaran menarik dari kami.</p>
            <a href="Daftar" class="btn btn-danger">Daftar Sekarang</a>
        </div>
    </div>
    <!--Akhir Judul-->

    <!--Chart-->
    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <div>
                <canvas id="myChart"></canvas>
            </div>
            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                        datasets: [{
                            label: 'Jumlah Penyewaan Mobil',
                            data: [30, 50, 40, 60, 70, 50],
                            borderWidth: 1,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)'
                            ]
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
        </div>
    </div>
    <!--Akhir Chart-->
</div>
