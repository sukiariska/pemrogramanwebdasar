<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tbsewa");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header ">
        Selamat Datang di Halaman Sewa SuRider
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalTambahSewa"> Tambah Sewa</button>
                </div>
            </div>

            <!-- Modal Tambah Sewa Baru -->
<div class="modal fade" id="ModalTambahSewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sewa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="proses/proses_input_sewa.php" method="POST">
                <div class="row">
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
    <input type="number" class="form-control" id="floatingInput" placeholder="idCostumer" name="idCostumer" required>
    <label for="floatingInput">idCostumer</label>
    <div class="invalid-feedback">
        Masukkan idCostumer .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" required>
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idMobil" name="idMobil" required>
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglSewa" name="TglSewa" required>
    <label for="floatingInput">TglSewa</label>
    <div class="invalid-feedback">
        Masukkan Tgl Mobil Di Sewa .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-8">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Lama" name="Lama" required>
    <label for="floatingInput">Lama</label>
    <div class="invalid-feedback">
        Masukkan Lama Mobil Di Pinjam .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Total" name="Total" required>
    <label for="floatingInput">Total</label>
    <div class="invalid-feedback">
        Masukkan Total .
        </div>
    </div>
    </div>
</div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_sewa_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
        
    </div>
    </div>
</div>
    <!-- Akhir Modal Tambah Sewa Baru -->
    
    <?php
    foreach ($result as $row){
    ?>

    <!-- Modal view-->
    <div class="modal fade" id="ModalView<?php echo $row['idSewa']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Data Sewa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_input_sewa.php" method="POST">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idSewa" name="idSewa" value="<?php echo $row['idSewa'] ?>">
    <label for="floatingInput">idSewa</label>
    <div class="invalid-feedback">
        Masukkan idSewa .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div disabled class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idCostumer" name="idCostumer" value="<?php echo $row['idCostumer'] ?>">
    <label for="floatingInput">idCostumer</label>
    <div class="invalid-feedback">
        Masukkan idCostumer .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" value="<?php echo $row['idKaryawan'] ?>">
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="idMobil" name="idMobil" value="<?php echo $row['idMobil'] ?>">
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input disabled type="date" class="form-control" id="floatingInput" placeholder="TglSewa" name="TglSewa" value="<?php echo $row['TglSewa'] ?>">
    <label for="floatingInput">TglSewa</label>
    <div class="invalid-feedback">
        Masukkan Tgl Mobil Di Sewa .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-8">
        <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Lama" name="Lama" value="<?php echo $row['Lama'] ?>">
    <label for="floatingInput">Lama</label>
    <div class="invalid-feedback">
        Masukkan Lama Mobil Di Pinjam .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="Total" name="Total" value="<?php echo $row['Total'] ?>">
    <label for="floatingInput">Total</label>
    <div class="invalid-feedback">
        Masukkan Total .
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
        <div class="modal fade" id="ModalEdit<?php echo $row['idSewa']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Sewa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_edit_sewa.php" method="POST">
        <input type="hidden" value="<?php echo $row['idSewa'] ?>" name="idSewa">
    <div class="row">
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
    <input type="number" class="form-control" id="floatingInput" placeholder="idCostumer" name="idCostumer" required value="<?php echo $row['idCostumer'] ?>">
    <label for="floatingInput">idCostumer</label>
    <div class="invalid-feedback">
        Masukkan idCostumer .
        </div>
    </div>
    </div>
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" required value="<?php echo $row['idKaryawan'] ?>">
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="idMobil" name="idMobil" required value="<?php echo $row['idMobil'] ?>">
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglSewa" name="TglSewa" required value="<?php echo $row['TglSewa'] ?>">
    <label for="floatingInput">TglSewa</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Mobil Di Sewa .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-8">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Lama" name="Lama" required value="<?php echo $row['Lama'] ?>">
    <label for="floatingInput">Lama</label>
    <div class="invalid-feedback">
        Masukkan Lama Mobil Di Pinjam .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="Total" name="Total" required value="<?php echo $row['Total'] ?>">
    <label for="floatingInput">Total</label>
    <div class="invalid-feedback">
        Masukkan Total .
        </div>
    </div>
    </div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_sewa_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Edit-->


<!-- Modal Delete-->
<div class="modal fade" id="ModalDelete<?php echo $row['idSewa']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete Data Costumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_delete_sewa.php" method="POST">
        <input type="hidden" value="<?php echo $row['idSewa'] ?>" name="idSewa">
        <div class="col-lg-12">
        Apakah anda ingin menghapus daftar Sewa <b><?php echo $row['idSewa'] ?> </b>

                </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_sewa_validate" value="12345">Hapus</button>
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
        <th scope="col">idSewa</th>
        <th scope="col">idCostumer</th>
        <th scope="col">idKaryawan</th>
        <th scope="col">idMobil</th>
        <th scope="col">TglSewa</th>
        <th scope="col">Lama</th>
        <th scope="col">Total</th>
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
            <?php echo $row['idSewa']  ?>
        </td>
        <td>
            <?php echo $row['idCostumer']  ?>
        </td>
        <td>
            <?php echo $row['idKaryawan']  ?>
        </td>
        <td>
        <?php echo $row['idMobil']  ?>
        </td>
        <td>
            <?php echo $row['TglSewa']  ?>
        </td>
        <td>
            <?php echo $row['Lama']  ?>
        </td>
        <td>
            <?php echo $row['Total']  ?>
        </td>

        <td class="d-flex">
            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['idSewa']?>"><i class="bi bi-eye"></i></button>
            <button class="btn btn-warning btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['idSewa']?>"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['idSewa']?>"><i class="bi bi-trash3"></i></button>
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