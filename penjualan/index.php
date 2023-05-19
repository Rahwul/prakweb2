<?php
include_once 'dbkoneksi.php';

include_once('models/Produk.php');
include_once('navbar.php');
include_once('sidebar.php');

//lakukan request halaman di menu url dengan membuka terlebih
//dahulu file index.php
$hal = $_REQUEST['hal'];
//jika ada request dari url browser berupa HAL
//tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal . '.php';
}else{
//jik TIDAK ADA REQUEST HAL DARI url browser
//tampilkan halaman request
include_once('home.php');
}


include_once('footer.php');
?>