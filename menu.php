<?php

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu ");
while($record = mysqli_fetch_array($query)){
    $result[] = $record; 
}

?>


<div class="col-lg-9  mt-2">
    <div class="card">
        <div class="card-header">
            Daftar Menu
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#ModalTambahMenu">
                        Tambah Menu
                    </button>
                </div>
            </div>
            <!-- Modal Tambah User-->
            <div class="modal fade" id="ModalTambahMenu" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Baru</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_input_menu.php" method="POST"
                                novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama Menu " name="nama_menu" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Keterangan Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Kategori"
                                        name="kategori" required>
                                    <label for="floatingInput">Kategori</label>
                                    <div class="invalid-feedback">
                                        Kategori Wajib Disi
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Harga"
                                        name="harga" required>
                                    <label for="floatingInput">Harga</label>
                                    <div class="invalid-feedback">
                                        Harga Wajib Disi
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Stock"
                                        name="stock" required>
                                    <label for="floatingInput">Stock</label>
                                    <div class="invalid-feedback">
                                        Stock Wajib Disi
                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="input_menu_validate" value="inputMenu"
                                class="btn btn-primary">Save changes</button>
                        </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Modal Tambah Menu -->

        <!-- Modal Edit Menu -->
        <div class="modal fade" id="ModalEditMEnu" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Baru</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_input_menu.php" method="POST"
                                novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama Menu " name="nama_menu" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Nama menu Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Keterangan" name="keterangan" required>
                                            <label for="floatingInput">Keterangan</label>
                                            <div class="invalid-feedback">
                                                Keterangan Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Kategori"
                                        name="kategori" required>
                                    <label for="floatingInput">Kategori</label>
                                    <div class="invalid-feedback">
                                        Kategori Wajib Disi
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Harga"
                                        name="harga" required>
                                    <label for="floatingInput">Harga</label>
                                    <div class="invalid-feedback">
                                        Harga Wajib Disi
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput" placeholder="Stock"
                                        name="stock" required>
                                    <label for="floatingInput">Stock</label>
                                    <div class="invalid-feedback">
                                        Stock Wajib Disi
                                    </div>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="input_menu_validate" value="inputMenu"
                                class="btn btn-primary">Save changes</button>
                        </div>

                        </form>
                    </div>

                </div>
            </div>
        <!-- End Modal menu -->

        <!-- Modal Edit -->
        <?php    
             foreach($result as $row){
            ?>
        <div class="modal fade" id="ModalEditMenu<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" action="proses/proses_edit_menu.php" method="POST" novalidate>
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu "
                                            name="nama_menu" value="<?php echo $row['nama_menu'] ?>" required>
                                        <label for="floatingInput">Nama Menu</label>
                                        <div class="invalid-feedback">
                                            Nama Wajib Disi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Keterangan" name="keterangan" required
                                            value="<?php echo $row['keterangan'] ?>">
                                        <label for="floatingInput">Keterangan</label>
                                        <div class="invalid-feedback">
                                        Keterangan Wajib Disi
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Password"
                                    name="kategori" value="<?php echo $row['kategori'] ?>" required>
                                <label for="floatingInput">Kategori</label>
                                <div class="invalid-feedback">
                                    Kategori Wajib Disi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Harga"
                                            name="harga" value="<?php echo $row['harga'] ?>" required>
                                        <label for="floatingInput">Harga</label>
                                      
                                        <div class="invalid-feedback">
                                            Harga Wajib Disi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Stock" name="stock" required
                                            value="<?php echo $row['stock'] ?>">
                                        <label for="floatingInput">Stock</label>
                                        <div class="invalid-feedback">
                                            Stock Wajib Disi
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="input_user_validate" value="edituser"
                                    class="btn btn-primary">Save changes</button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php } ?>

        <!-- End Modal EDit -->

        <!-- Modal Hapus -->
        <?php    
             foreach($result as $row){
            ?>
        <div class="modal fade" id="ModalHapus<?php echo $row['id'] ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-fullscreen-md-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Menu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" action="proses/proses_hapus_menu.php" method="POST" novalidate>
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">

                            <div class="col-lg-12">
                                <?php 
                                    
                                    
                                
                                        echo "Apakah anda yakin ingin menghapus user : <b>$row[nama_menu]</b>";
                                    
                                    
                                    ?>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="hapus_user_validate" value="hapususer"
                                    class="btn btn-danger">Hapus</button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php } ?>

        <!-- End Modal Hapus -->

        <?php
             
             if(empty($result)){
                echo "Data User Tidak Ada";
             } else {
            ?>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($result as $row){
                        ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $row['nama_menu'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td><?php echo $row['harga'] ?></td>
                        <td><?php echo $row['stock'] ?></td>
                        <td class="d-flex">
                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                data-bs-target="#ModalEditMenu<?php echo $row['id'] ?>"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-danger btn-sm " data-bs-toggle="modal"
                                data-bs-target="#ModalHapus<?php echo $row['id'] ?>"><i
                                    class="bi bi-trash3-fill"></i></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>
</div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>