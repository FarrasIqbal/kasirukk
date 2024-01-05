<?php

    include 'connect.php';

    $id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
    $nama_menu = (isset($_POST['nama_menu'])) ? htmlentities($_POST['nama_menu']) : "";
    $keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
    $kategori = (isset($_POST['kategori'])) ? htmlentities($_POST['kategori']) : "";
    $harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";
    $stock = (isset($_POST['stock'])) ? htmlentities($_POST['stock']) : "";

    if(empty ($_POST['edit_user_validate'])){
        $query = mysqli_query($conn, "UPDATE tb_daftar_menu SET nama_menu='$nama_menu', keterangan='$keterangan', 
        kategori='$kategori', harga='$harga', stock='$stock' WHERE id='$id'");
        if($query){
            $message =  '<script>alert("Data Berhasil DiUpdate")
                        window.location="../menu"</script>';
        } else {
            $message = '<script>alert("Data Gagal DiUpdate")</script>';
    }      
}    echo $message;
     

?>