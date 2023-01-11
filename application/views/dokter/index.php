<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<div class="container">
    <h1 class="text-center text-success">List Dokter</h1>

    <div class="d-flex justify-content-end">
        <a class="btn btn-success btn-sm my-3" href="<?=base_url( "dokter/form" )?>">Tambah</a>
    </div>

    <table class="table table-bordered">
        <tr class="table-success">
            <th>Id</th>
            <th>Id Departemen</th>
            <th>Nama Dokter</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php
foreach ( $records as $idx => $data ) {
    ?>
        <tr>
            <td><?=$data['id']?></td>
            <td><?=$data['id_departemen']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['alamat']?></td>
            <td><?=$data['tgl_lahir']?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?=base_url( "dokter/detail/{$data['id']}" )?>">View</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')"
                    href="<?=base_url( "dokter/hapus/{$data['id']}" )?>">Hapus</a>
            </td>
        </tr>
        <?php
}
?>
    </table>
</div>