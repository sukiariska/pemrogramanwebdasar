<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="col-lg-9 mt-2">
    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="assets/img/car1.jpg" class="img-fluid" style="height: 350px; width:1000px; object-fit: cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Rental Mobil Terpercaya</h5>
                    <p>Nikmati kenyamanan berkendara dengan mobil berkualitas tinggi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/car13.jpg" class="img-fluid" style="height: 350px; width:1000px; object-fit: cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beragam Pilihan Mobil</h5>
                    <p>Pilihan mobil yang sesuai dengan kebutuhan perjalanan Anda.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/car10.jpg" class="img-fluid" style="height: 350px; width:1000px; object-fit: cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Proses Mudah dan Cepat</h5>
                    <p>Sewa mobil dengan proses yang mudah dan cepat melalui sistem kami.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/car12.jpg" class="img-fluid" style="height: 350px; width:1000px; object-fit: cover" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Keamanan dan Keandalan</h5>
                    <p>Mobil kami selalu dalam kondisi terbaik untuk kenyamanan Anda.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Akhir Carousel-->

    <!--Judul-->
    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">SELAMAT DATANG DI SuRider RENTAL MOBIL TERBAIK</h5>
            <p class="card-text">Kami menyediakan solusi rental mobil terbaik untuk kebutuhan perjalanan Anda. Daftar sekarang dan nikmati berbagai penawaran menarik dari kami.</p>
            <a href="Daftar" class="btn btn-danger">Daftar Sekarang</a>
        </div>
    </div>
    <!--Akhir Judul-->

    <!--Layanan-->
    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">Layanan Kami</h5>
            <p class="card-text">Kami menawarkan berbagai layanan untuk memenuhi kebutuhan rental mobil Anda.</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/car2.jpg" class="img-fluid rounded mb-2" alt="Layanan Pelanggan 24/7">
                    <h6>Layanan Pelanggan 24/7</h6>
                    <p>Tim kami siap membantu Anda kapan saja.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/car3.jpg" class="img-fluid rounded mb-2" alt="Pilihan Mobil Luas">
                    <h6>Pilihan Mobil Luas</h6>
                    <p>Berbagai jenis mobil untuk setiap kebutuhan Anda.</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/car9.jpg" class="img-fluid rounded mb-2" alt="Harga Terjangkau">
                    <h6>Harga Terjangkau</h6>
                    <p>Harga sewa yang kompetitif dan terjangkau.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Layanan-->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="col-lg-12 mt-2">


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
    <!--Akhir Chart-->
</div>

    <!--Keunggulan-->
    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">Keunggulan Kami</h5>
            <p class="card-text">Mengapa memilih kami sebagai layanan rental mobil Anda.</p>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/car11.jpg" class="img-fluid rounded mb-2" alt="Keunggulan">
                    <h6>Mobil Terbaru</h6>
                    <p>Kami menyediakan mobil-mobil terbaru dengan kondisi terbaik.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/car8.jpg" class="img-fluid rounded mb-2" alt="Keunggulan">
                    <h6>Proses Mudah</h6>
                    <p>Proses penyewaan yang cepat dan tanpa ribet.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/car4.jpg" class="img-fluid rounded mb-2" alt="Keunggulan">
                    <h6>Layanan Profesional</h6>
                    <p>Tim kami selalu siap membantu dengan pelayanan terbaik.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Keunggulan-->
</div>
