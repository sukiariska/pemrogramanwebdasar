<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tbpembayaran");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header ">
        Selamat Datang di Halaman Pembayaran SuRider
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalTambahPembayaran"> Tambah Pembayaran</button>
                </div>
            </div>

            <!-- Modal Tambah Pembayaran Baru -->
<div class="modal fade" id="ModalTambahPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="proses/proses_input_pembayaran.php" method="POST">
                <div class="row">
                <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idPembayaran" name="idPembayaran" required>
    <label for="floatingInput">idPembayaran</label>
    <div class="invalid-feedback">
        Masukkan idPembayaran .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idSewa" name="idSewa" required>
    <label for="floatingInput">idSewa</label>
    <div class="invalid-feedback">
        Masukkan idSewa .
        </div>
    </div>
    </div>

        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglPembayaran" name="TglPembayaran" required>
    <label for="floatingInput">Tanggal Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Pembayaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah" name="Jumlah" required>
    <label for="floatingInput">Jumlah</label>
    <div class="invalid-feedback">
        Masukkan Jumlah .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="MetodePembayaran" name="MetodePembayaran" required>
    <label for="floatingInput">Metode Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Metode Pembayaran .
        </div>
    </div>
    </div>
    </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_pembayaran_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
        
    </div>
    </div>
</div>
    <!-- Akhir Modal Tambah Pembayaran Baru -->
    
    <?php
    foreach ($result as $row){
    ?>

    <!-- Modal view-->
    <div class="modal fade" id="ModalView<?php echo $row['idPembayaran']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Data Sewa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_input_pembayaran.php" method="POST">
    <div class="row">
    <div class="col-lg-4">
    <div disabled class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idPembayaran" name="idPembayaran" value="<?php echo $row['idPembayaran'] ?>">
    <label for="floatingInput">idPembayaran</label>
    <div class="invalid-feedback">
        Masukkan idPembayaran .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div disabled class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idSewa" name="idSewa" value="<?php echo $row['idSewa'] ?>">
    <label for="floatingInput">idSewa</label>
    <div class="invalid-feedback">
        Masukkan idSewa .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input disabled type="date" class="form-control" id="floatingInput" placeholder="TglPembayaran" name="TglPembayaran" value="<?php echo $row['TglPembayaran'] ?>">
    <label for="floatingInput">Tanggal Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Pembayaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="Jumlah" name="Jumlah" value="<?php echo $row['Jumlah'] ?>">
    <label for="floatingInput">Jumlah</label>
    <div class="invalid-feedback">
        Masukkan Jumlah .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="MetodePembayaran" name="MetodePembayaran" value="<?php echo $row['MetodePembayaran'] ?>">
    <label for="floatingInput">Metode Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Metode Pembayaran .
        </div>
    </div>
    </div>
    </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal view-->
        
        <!-- Modal Edit-->
        <div class="modal fade" id="ModalEdit<?php echo $row['idPembayaran']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Sewa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_edit_pembayaran.php" method="POST">
        <input type="hidden" value="<?php echo $row['idPembayaran'] ?>" name="idPembayaran">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idPembayaran" name="idPembayaran" required value="<?php echo $row['idPembayaran'] ?>">
    <label for="floatingInput">idPembayaran</label>
    <div class="invalid-feedback">
        Masukkan idPembayaran .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idSewa" name="idSewa" required value="<?php echo $row['idSewa'] ?>">
    <label for="floatingInput">idSewa</label>
    <div class="invalid-feedback">
        Masukkan idSewa .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglPembayaran" name="TglPembayaran" required value="<?php echo $row['TglPembayaran'] ?>">
    <label for="floatingInput">Tanggal Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Pembayaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah" name="Jumlah" required value="<?php echo $row['Jumlah'] ?>">
    <label for="floatingInput">Jumlah</label>
    <div class="invalid-feedback">
        Masukkan Jumlah .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="MetodePembayaran" name="MetodePembayaran" required value="<?php echo $row['MetodePembayaran'] ?>">
    <label for="floatingInput">Metode Pembayaran</label>
    <div class="invalid-feedback">
        Masukkan Metode Pembayaran .
        </div>
    </div>
    </div>
    </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_pembayaran_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Edit-->


<!-- Modal Delete-->
<div class="modal fade" id="ModalDelete<?php echo $row['idPembayaran']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete Data Costumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_delete_pembayaran.php" method="POST">
        <input type="hidden" value="<?php echo $row['idPembayaran'] ?>" name="idPembayaran">
        <div class="col-lg-12">
        Apakah anda ingin menghapus daftar Pembayaran <b><?php echo $row['idPembayaran'] ?> </b>

                </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_pembayaran_validate" value="12345">Hapus</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Delete-->


    <?php
    }
    if(empty($result)){
        echo "Data costumer tidak ada";
    }else{

    
    ?>

            <div class="table-responsive">
        <table class="table table-hover">
    <thead>
    <tr class="text-nowrap">
        <th scope="col">No</th>
        <th scope="col">idPembayaran</th>
        <th scope="col">idSewa</th>
        <th scope="col">TglPembayaran</th>
        <th scope="col">Jumlah</th>
        <th scope="col">MetodePembayaran</th>
        <th scope="col">Opsi</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $no =1;
        foreach ($result as $row) {
    ?>
    <tr>
        <th scope="row"><?php echo $no++?></th>
        <td>
            <?php echo $row['idPembayaran']  ?>
        </td>
        <td>
            <?php echo $row['idSewa']  ?>
        </td>
        <td>
            <?php echo $row['TglPembayaran']  ?>
        </td>
        <td>
        <?php echo $row['Jumlah']  ?>
        </td>
        <td>
            <?php echo $row['MetodePembayaran']  ?>
        </td>
        
        <td class="d-flex">
            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['idPembayaran']?>"><i class="bi bi-eye"></i></button>
            <button class="btn btn-warning btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['idPembayaran']?>"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['idPembayaran']?>"><i class="bi bi-trash3"></i></button>
        </td>

    </tr>
    <?php
        }
    ?>
    </tbody>
</table>
</div>
<?php
    }
?>
        </div>
    </div>
</div>