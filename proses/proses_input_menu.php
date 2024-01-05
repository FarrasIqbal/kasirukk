<?php

    include 'connect.php';

    $nama_menu = (isset($_POST['nama_menu'])) ? htmlentities($_POST['nama_menu']) : "";
    $keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
    $kategori = (isset($_POST['kategori'])) ? htmlentities($_POST['kategori']) : "";
    $harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";
    $stock = (isset($_POST['stock'])) ? htmlentities($_POST['stock']) : "";
   

    if(!empty ($_POST['input_menu_validate'])){
        $query = mysqli_query($conn, "INSERT INTO tb_daftar_menu (nama_menu,keterangan,kategori,stock,harga) 
        VALUES ('$nama_menu', '$keterangan', '$kategori', '$stock', '$harga') ");
        if($query){
            $message =  '<script>alert("Menu Berhasil Ditambahkan")
                        window.location="../menu"</script>';
        } else {
            $message = '<script>alert("Menu Gagal Ditambahkan")</script>';
    }      
}    echo $message;
     

?>