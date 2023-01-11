<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<h1 class="text-center text-success fw-bold">ADMINISTRASI DATA PASIEN DAN TINDAKAN</h1>

<div class="container">
    <div class="d-flex justify-content-end">
        <a class="btn btn-success btn-sm my-3" href="<?=base_url( "pasien/form" )?>">Tambah Data</a>
    </div>

    <table class="table table-bordered">
        <tr class="table-success">
            <th>No_Rm</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Id Dokter</th>
            <th>Id Departemen</th>
            <th>Diagnosa</th>
            <th>Nomor Ruangan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ( $records as $idx => $data ) {?>
        <tr>
            <td><?=$data['no_rm']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['alamat']?></td>
            <td><?=$data['jenis_kelamin']?></td>
            <td><?=$data['tanggal_lahir']?></td>
            <td><?=$data['id_dokter']?></td>
            <td><?=$data['departemen']?></td>
            <td><?=$data['diagnosa']?></td>
            <td><?=$data['no_ruang']?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?=base_url( "pasien/detail/{$data['id']}" )?>">View</a>
                <a class="btn btn-warning btn-sm" href="<?=base_url( "pasien/form/{$data['id']}" )?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')"
                    href="<?=base_url( "pasien/hapus/{$data['id']}" )?>">Hapus</a>
            </td>
        </tr>
        <?php }?>
    </table>
</div>