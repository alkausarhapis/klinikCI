<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h3>
    <?=validation_errors();?>
</h3>
<div class="container">
    <h1 class="text-success">Tambah Dokter</h1> <br>
    <form method="post" action="<?=base_url( 'dokter/save' )?>">
        <input type="hidden" name="id" value="<?=isset( $id ) ? $id : ''?>" />

        <div class="row mb-3">
            <label class="form-label">Id</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="id" id="id" value="<?=$id?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Id Departemen</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="id_departemen" id="id_departemen"
                    value="<?=$id_departemen?>" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="form-label">Nama</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="nama" id="nama" value="<?=$nama?>" required />
            </div>
        </div>

        <div class="row mb-5">
            <label class="form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="alamat" id="alamat"><?=$alamat?></textarea>
            </div>
        </div>

        <div class="row mb-5">
            <label class="form-label">Tanggal Lahir</label>
            <div class="col-sm-6">
                <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?=$tgl_lahir?>"
                    required />
            </div>
        </div>


        <div>
            <input class="btn btn-warning" type="button" value="Cancel" onclick="history.back()" />
            <input class="btn btn-primary" type="submit" value="Simpan" />
        </div>
        <br>
    </form>
</div>