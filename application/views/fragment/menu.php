<?php
$folder = $this->uri->segment( 1 );
?>
<div class="container mt-2">
    <img src="<?=BASE_ASSETS . './images/logo.jpg'?>" alt="" width="700px">
    <br><br>
</div>
<nav class="container p-0" style="background-color: orange;">
    <ul class="d-flex container-fluid">
        <li class="w-25 p-2 me-3 my-2 text-center bg-warning"><a class="nav-link fw-bold"
                href="<?=base_url() . 'pasien'?>">Administrasi Data</a>
        </li>
        <li class="w-25 p-2 me-3 my-2 text-center bg-warning"><a class="nav-link fw-bold"
                href="<?=base_url() . 'medis';?>">Rekam Medis</a></li>
        <li class="w-25 p-2 me-3 my-2 text-center bg-warning"><a class="nav-link fw-bold" href="">Departemen</a></li>
        <li class="w-25 p-2 me-3 my-2 text-center bg-warning"><a class="nav-link fw-bold"
                href="<?=base_url() . 'dokter'?>">Dokter</a></li>
        <li class="w-25 p-2 my-2 text-center bg-warning"><a class="nav-link fw-bold" href="">Layanan</a></li>
    </ul>
</nav>