<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tbmobil");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header ">
        Selamat Datang di Halaman Mobil SuRider
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalTambahMobil"> Tambah Mobil</button>
                </div>
            </div>

            <!-- Modal Tambah Mobil Baru -->
            <div class="modal fade" id="ModalTambahMobil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mobil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="proses/proses_input_mobil.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="idMobil" name="idMobil" required>
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
                    <div class="col-lg-6">
        <div class="input-group mb-3">
    <input type="file" class="form-control py-3" id="uploadfoto" placeholder="Your file" name="foto" required>
    <label class ="input-group-text" for="uploadfoto" >Upload Foto Mobil</label>
    <div class="invalid-feedback">
        Masukkan File Foto Mobil.
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="JenisMobil" name="JenisMobil" required>
    <label for="floatingInput">Jenis Mobil</label>
    <div class="invalid-feedback">
        Masukkan Jenis Mobil .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="years" class="form-control" id="floatingInput" placeholder="TahunKeluaran" name="TahunKeluaran" required>
    <label for="floatingInput">Tahun Keluaran</label>
    <div class="invalid-feedback">
        Masukkan Tahun Keluaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
                    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Your Warna" name="Warna" required>
    <label for="floatingInput">Warna</label>
    <div class="invalid-feedback">
        Masukkan Warna .
        </div>
    </div>
    </div>
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Tarif" name="Tarif" required>
    <label for="floatingInput">Tarif</label>
    <div class="invalid-feedback">
        Masukkan Tarif .
        </div>
    </div>
    </div>
    </div>

    
    <div class="row">
                    <div class="col-lg-12">
                    <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Default select example" name="Status" required>
    <option selected hidden value="0">Pilih Status</option>
    <option value="Disewa">Disewa</option>
    <option value="Tersedia">Tersedia</option>
    <option value="DalamPerbaikan">Dalam Perbaikan</option>
        </select>
        <label for="floatingInput">Status</label>
        <div class="invalid-feedback">
        Pilih status.
        </div>
    </div>
        </div>
        </div>

            
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_mobil_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
        
    </div>
    </div>
</div>
    <!-- Akhir Modal Tambah Mobil Baru -->
    
    <?php
    foreach ($result as $row){
    ?>

    <!-- Modal view-->
    <div class="modal fade" id="ModalView<?php echo $row['idMobil']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Data Mobil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_input_mobil.php" method="POST">
                <div class="row">
                <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your idMobil" name="idMobil" value="<?php echo $row['idMobil'] ?>">
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
    <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input disabled type="file" class="form-control" id="floatingInput" placeholder="Foto" name="Foto" value="<?php echo $row['Foto'] ?>">
    <label for="floatingInput">Foto</label>
    <div class="invalid-feedback">
        Masukkan Foto .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
                    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your JenisMobil" name="JenisMobil" value="<?php echo $row['JenisMobil'] ?>">
    <label for="floatingInput">Jenis Mobil</label>
    <div class="invalid-feedback">
        Masukkan Jenis Mobil .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="TahunKeluaran" name="TahunKeluaran" value="<?php echo $row['TahunKeluaran'] ?>">
    <label for="floatingInput">Tahun Keluaran</label>
    <div class="invalid-feedback">
        Masukkan Tahun Keluaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-4">
    <div class="form-floating mb-3" >
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Warna" name="Warna" value="<?php echo $row['Warna'] ?>">
    <label for="floatingInput">Warna</label>
    <div class="invalid-feedback">
        Masukkan Warna .
    </div>
    </div>
    </div>
            <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="Tarif" name="Tarif" value="<?php echo $row['Tarif'] ?>">
    <label for="floatingInput">Tarif</label>
    <div class="invalid-feedback">
        Masukkan Tarif .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
    <div class="form-floating mb-3" >
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Status" name="Status" value="<?php echo $row['Status'] ?>">
    <label for="floatingInput">Status</label>
    <div class="invalid-feedback">
        Masukkan Status .
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
        <div class="modal fade" id="ModalEdit<?php echo $row['idMobil']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Costumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_edit_mobil.php" method="POST">
        <input type="hidden" value="<?php echo $row['idMobil'] ?>" name="idMobil">
        <div class="row">
        <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="idMobil" name="idMobil" required value="<?php echo $row['idMobil'] ?>">
    <label for="floatingInput">idMobil</label>
    <div class="invalid-feedback">
        Masukkan idMobil .
        </div>
    </div>
    </div>
                    <div class="col-lg-8">
        <div class="input-group mb-3">
    <input type="file" class="form-control py-3" id="uploadfoto" placeholder="Your file" name="Foto" required value="<?php echo $row['Foto'] ?>">
    <label class ="input-group-text" for="uploadfoto" >Upload Foto Mobil</label>
    <div class="invalid-feedback">
        Masukkan File Foto Mobil.
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="JenisMobil" name="JenisMobil" required value="<?php echo $row['JenisMobil'] ?>">
    <label for="floatingInput">Jenis Mobil</label>
    <div class="invalid-feedback">
        Masukkan Jenis Mobil .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="years" class="form-control" id="floatingInput" placeholder="TahunKeluaran" name="TahunKeluaran" required value="<?php echo $row['TahunKeluaran'] ?>">
    <label for="floatingInput">Tahun Keluaran</label>
    <div class="invalid-feedback">
        Masukkan Tahun Keluaran .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
                    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Your Warna" name="Warna" required value="<?php echo $row['Warna'] ?>">
    <label for="floatingInput">Warna</label>
    <div class="invalid-feedback">
        Masukkan Warna .
        </div>
    </div>
    </div>
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Tarif" name="Tarif" required value="<?php echo $row['Tarif'] ?>">
    <label for="floatingInput">Tarif</label>
    <div class="invalid-feedback">
        Masukkan Tarif .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Status" name="Status" required value="<?php echo $row['Status'] ?>">
    <label for="floatingInput">Status</label>
    <div class="invalid-feedback">
        Masukkan Status .
        </div>
    </div>
    </div>
        </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="input_mobil_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Edit-->


<!-- Modal Delete-->
<div class="modal fade" id="ModalDelete<?php echo $row['idMobil']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete Data Costumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_delete_mobil.php" method="POST">
        <input type="hidden" value="<?php echo $row['idMobil'] ?>" name="idMobil">
        <div class="col-lg-12">
            Apakah anda ingin menghapus daftar mobil <b><?php echo $row['idMobil'] ?> </b>
                
                </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete_mobil_validate" value="12345" >Hapus</button>
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
        <th scope="col">idMobil</th>
        <th scope="col">Foto</th>
        <th scope="col">JenisMobil</th>
        <th scope="col">TahunKeluaran</th>
        <th scope="col">Warna</th>
        <th scope="col">Tarif</th>
        <th scope="col">Status</th>
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
            <?php echo $row['idMobil']  ?>
        </td>
        <td>
            <div style="width: 90px">
            <img src="assets/img/<?php echo $row['Foto']  ?>" class="img-thumbnail" alt="...">
            </div>
        </td>
        <td>
            <?php echo $row['JenisMobil']  ?>
        </td>
        <td>
            <?php echo $row['TahunKeluaran']  ?>
        </td>
        <td>
        <?php echo $row['Warna']  ?>
        </td>
        <td>
            <?php echo $row['Tarif']  ?>
        </td>
        <td>
            <?php echo $row['Status']  ?>
        </td>

        <td class="d-flex">
            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['idMobil']?>"><i class="bi bi-eye"></i></button>
            <button class="btn btn-warning btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['idMobil']?>"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['idMobil']?>"><i class="bi bi-trash3"></i></button>
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