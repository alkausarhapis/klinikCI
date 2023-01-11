<?php
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';
?>
<div class="container">
    <h1 class="text-success">Biodata <?=$nama?></h1>
    <table>
        <tr>
            <td>ID</td>
            <td class="px-3"> :</td>
            <td><?=$id?></td>
        </tr>

        <tr>
            <td>Id Departemen</td>
            <td class="px-3"> :</td>
            <td><?=$id_departemen?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td class="px-3"> :</td>
            <td><?=$nama?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td class="px-3"> :</td>
            <td><?=$alamat?></td>
        </tr>

        <tr>
            <td>Tanggal lahir</td>
            <td class="px-3"> :</td>
            <td><?=$tgl_lahir?></td>
        </tr>
    </table>
    <br>
    <a class="btn btn-warning mb-3" href='#' onclick="history.back()">Back</a>
</div>