<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>

<div class="container">
    <h1 class="text-success">Tambah/Ubah data pasien</h1>
    <br>
    <h3>
        <?=validation_errors();?>
    </h3>

    <form method="post" enctype="multipart/form-data" action="<?=base_url( 'pasien/save' )?>">
        <input type="hidden" name="id" value="<?=isset( $id ) ? $id : ''?>" />

        <div class="row mb-3">
            <label class="form-label">No Rm</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="no_rm" id="no_rm" value="<?=$no_rm?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Nama pasien</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="nama" id="nama" value="<?=$nama?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="alamat" id="alamat"><?=$alamat?></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Tangal Lahir</label>
            <div class="col-sm-6">
                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir"
                    value="<?=$tanggal_lahir?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div class="col-sm-6">
                <input type="radio" name="jenis_kelamin" id="Laki-Laki" value="Laki-Laki">
                <label for="Laki-Laki" class="me-4">Laki-Laki</label>

                <input type="radio" name="jenis_kelamin" id="Perempuan" value="Perempuan">
                <label for="Perempuan">Perempuan</label>
            </div>
        </div>


        <div class="row mb-3">
            <label class="form-label">Diagnosa</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="diagnosa" id="diagnosa" value="<?=$diagnosa?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">No Ruang</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" name="no_ruang" id="no_ruang" value="<?=$no_ruang?>"
                    required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Jam</label>
            <div class="col-sm-6">
                <input class="form-control" type="time" name="jam" id="jam" value="<?=$jam?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Tindakan</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="tindakan" id="tindakan" value="<?=$tindakan?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Keterangan</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="keterangan" id="keterangan"><?=$keterangan?></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Dokter</label>
            <div class="col-sm-6">
                <select class="form-select" name="id_dokter" id="id_dokter">
                    <?php foreach ( $dokters as $idx => $row ) {?>
                    <option value="<?=$row['id']?>">
                        <?=$id_dokter == $row['id'] ? '(selected)' : ''?>
                        <?=$row['id']?>-<?=$row['nama']?></option>
                    <?php }?>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <input class="btn btn-warning" type="button" value="Cancel" onclick="history.back()" />
            <input class="btn btn-primary" type="submit" value="Simpan" />
        </div>
        <p class="mb-3"></p>

    </form>

    <script>
    var loadFile = function(event) {
        var image = document.getElementById('preview');
        image.src = URL.createObjectURL(event.target.files[0]);
    }
    </script>
</div>