<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>

<div class="container">
    <h1 class="text-success">View data <?=$nama?></h1>
    <table>
        <tr>
            <td>Nomor Rekam Medis</td>
            <td class="px-3"> :</td>
            <td><?=$no_rm?></td>
        </tr>

        <tr>
            <td>Nama Pasien</td>
            <td class="px-3"> :</td>
            <td><?=$nama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td class="px-3"> :</td>
            <td><?=$alamat?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td class="px-3"> :</td>
            <td><?=$no_rm?></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td class="px-3"> :</td>
            <td><?=$tanggal_lahir?></td>
        </tr>

        <tr>
            <td>Dokter</td>
            <td class="px-3"> :</td>
            <td><?=$nama_dokter?></td>
        </tr>

        <tr>
            <td>Departemen</td>
            <td class="px-3"> :</td>
            <td><?=$departemen?></td>
        </tr>

        <tr>
            <td>Diagnosa</td>
            <td class="px-3"> :</td>
            <td><?=$diagnosa?></td>
        </tr>

        <tr>
            <td>Nomor Ruangan</td>
            <td class="px-3"> :</td>
            <td><?=$no_ruang?></td>
        </tr>

        <tr>
            <td>Jam</td>
            <td class="px-3"> :</td>
            <td><?=$jam?> WIB</td>
        </tr>

        <tr>
            <td>Tindakan</td>
            <td class="px-3"> :</td>
            <td><?=$tindakan?></td>
        </tr>

        <tr>
            <td>Keterangan</td>
            <td class="px-3"> :</td>
            <td><?=$keterangan?></td>
        </tr>

    </table>
    <br>
    <a class="btn btn-warning mb-3" href='#' onclick="history.back()">Back</a>
</div>