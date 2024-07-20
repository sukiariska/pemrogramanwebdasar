<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tbkaryawan");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header ">
        Selamat Datang di Halaman Karyawan SuRider
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalTambahKaryawan"> Tambah Karyawan</button>
                </div>
            </div>
            
            <!-- Modal Tambah Karyawan Baru -->
<div class="modal fade" id="ModalTambahKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Karyawan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" novalidate action="proses/proses_input_karyawan.php" method="POST">
            <div class="row">
                <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="tex" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" required>
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama" required>
    <label for="floatingInput">Nama</label>
    <div class="invalid-feedback">
        Masukkan Nama .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="tex" class="form-control" id="floatingInput" placeholder="Alamat" name="Alamat" required>
    <label for="floatingInput">Alamat</label>
    <div class="invalid-feedback">
        Masukkan Alamat .
        </div>
    </div>
    </div>
    <div class="col-lg-6">
                    <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Default select example" name="JenisKelamin" required>
    <option selected hidden value="0">Pilih Jenis Kelamin</option>
    <option value="P">Pria</option>
    <option value="W">Wanita</option>
        </select>
        <label for="floatingInput">Jenis Kelamin</label>
        <div class="invalid-feedback">
        Pilih Jenis Kelamin.
        </div>
    </div>
        </div>
        </div>

        <div class="row">
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglLahir" name="TglLahir" required>
    <label for="floatingInput">Tanggal Lahir</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Lahir .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="NoTelepon" required>
    <label for="floatingInput">No Telepon</label>
    <div class="invalid-feedback">
        Masukkan No Telepon .
        </div>
    </div>
    </div>
    </div>

<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="proses_input_karyawan_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
        
    </div>
    </div>
</div>
    <!-- Akhir Modal Tambah Karyawan Baru -->
    
    <?php
    foreach ($result as $row){
    ?>

    <!-- Modal view-->
    <div class="modal fade" id="ModalView<?php echo $row['idKaryawan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Data Karyawan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_input_karyawan.php" method="POST">
        <div class="row">
                <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" value="<?php echo $row['idKaryawan'] ?>">
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama" value="<?php echo $row['Nama'] ?>">
    <label for="floatingInput">Nama</label>
    <div class="invalid-feedback">
        Masukkan Nama .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="Alamat" name="Alamat" value="<?php echo $row['Alamat'] ?>">
    <label for="floatingInput">Alamat</label>
    <div class="invalid-feedback">
        Masukkan Alamat .
        </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input disabled type="text" class="form-control" id="floatingInput" placeholder="JK" name="JK" value="<?php echo $row['JK'] ?>">
    <label for="floatingInput">Jenis Kelamin</label>
    <div class="invalid-feedback">
        Masukkan Jenis Kelamin .
        </div>
    </div>
    </div>
        </div>

        <div class="row">
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input disabled type="date" class="form-control" id="floatingInput" placeholder="TglLahir" name="TglLahir" value="<?php echo $row['Alamat'] ?>">
    <label for="floatingInput">Tanggal Lahir</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Lahir .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="NoTelepon" value="<?php echo $row['NoTelepon'] ?>">
    <label for="floatingInput">No Telepon</label>
    <div class="invalid-feedback">
        Masukkan No Telepon .
        </div>
    </div>
    </div>
    </div>
            
        <div class="form-floating">
        <textarea disabled class="form-control" id="" style="height: 100px " name="Alamat"><?php echo $row['Alamat'] ?></textarea>
    <label for="floatingInput">Alamat</label>
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
        <div class="modal fade" id="ModalEdit<?php echo $row['idKaryawan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Karyawan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_edit_karyawan.php" method="POST">
        <input type="hidden" value="<?php echo $row['idKaryawan'] ?>" name="idKaryawan">
        <div class="row">
                <div class="col-lg-4">
    <div class="form-floating mb-3">
    <input type="tex" class="form-control" id="floatingInput" placeholder="idKaryawan" name="idKaryawan" required value="<?php echo $row['idKaryawan'] ?>">
    <label for="floatingInput">idKaryawan</label>
    <div class="invalid-feedback">
        Masukkan idKaryawan .
        </div>
    </div>
    </div>
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama" required value="<?php echo $row['Nama'] ?>">
    <label for="floatingInput">Nama</label>
    <div class="invalid-feedback">
        Masukkan Nama .
        </div>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
    <div class="form-floating mb-3">
    <input type="tex" class="form-control" id="floatingInput" placeholder="Alamat" name="Alamat" required value="<?php echo $row['Nama'] ?>">
    <label for="floatingInput">Alamat</label>
    <div class="invalid-feedback">
        Masukkan Alamat .
        </div>
    </div>
    </div>
    <div class="col-lg-6">
        <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="JK" name="JK" required value="<?php echo $row['JK'] ?>">
    <label for="floatingInput">Jenis Kelamin</label>
    <div class="invalid-feedback">
        Masukkan Jenis Kelamin .
        </div>
    </div>
    </div>
    </div>

        <div class="row">
        <div class="col-lg-8">
    <div class="form-floating mb-3">
    <input type="date" class="form-control" id="floatingInput" placeholder="TglLahir" name="TglLahir" required value="<?php echo $row['TglLahir'] ?>">
    <label for="floatingInput">Tanggal Lahir</label>
    <div class="invalid-feedback">
        Masukkan Tanggal Lahir .
        </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="form-floating mb-3">
    <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="NoTelepon" required value="<?php echo $row['NoTelepon'] ?>">
    <label for="floatingInput">No Telepon</label>
    <div class="invalid-feedback">
        Masukkan No Telepon .
        </div>
    </div>
    </div>
    </div>
            
        <div class="form-floating">
        <textarea  class="form-control" id="" style="height: 100px " name="Alamat"><?php echo $row['Alamat'] ?></textarea>
    <label for="floatingInput">Alamat</label>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="edit_karyawan_validate" value="12345">Save changes</button>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Edit-->


<!-- Modal Delete-->
<div class="modal fade" id="ModalDelete<?php echo $row['idKaryawan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-fullscreen-md-down">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete Data Costumer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="needs-validation" novalidate action="proses/proses_delete_karyawan.php" method="POST">
        <input type="hidden" value="<?php echo $row['idKaryawan'] ?>" name="idKaryawan">
        <div class="col-lg-12">
        Apakah anda ingin menghapus daftar Karyawan <b><?php echo $row['idKaryawan'] ?> </b>
                
                </div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete_karyawan_validate" value="12345">Hapus</button>
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
        <th scope="col">idKaryawan</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">TglLahir</th>
        <th scope="col">JK</th>
        <th scope="col">NoTelepon</th>
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
            <?php echo $row['idKaryawan']  ?>
        </td>
        <td>
            <?php echo $row['Nama']  ?>
        </td>
        <td>
            <?php echo $row['Alamat']  ?>
        </td>
        <td>
        <?php echo $row['TglLahir']  ?>
        </td>
        <td>
            <?php echo $row['JK']  ?>
        </td>
        <td>
            <?php echo $row['NoTelepon']  ?>
        </td>
        <td class="d-flex">
            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['idKaryawan']?>"><i class="bi bi-eye"></i></button>
            <button class="btn btn-warning btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['idKaryawan']?>"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-danger btn-sm me-1"data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['idKaryawan']?>"><i class="bi bi-trash3"></i></button>
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