<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_admin_panel_wdc');
    if(!$koneksi){
        echo "Koneksi gagal!";
    }
?>