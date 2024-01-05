<?php

include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user ");
while($record = mysqli_fetch_array($query)){
    $result[] = $record; 
}

?>


<div class="col-lg-9  mt-2">
    <div class="card">
        <div class="card-header">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#ModalTambahUser">
                        Tambah User
                    </button>
                </div>
            </div>
            <!-- Modal Tambah User-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User Baru</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_input_user.php" method="POST"
                                novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama " name="nama" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Nama Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Username" name="username" required>
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Username Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password" required>
                                    <label for="floatingPassword">Password</label>
                                    <div class="invalid-feedback">
                                        Password Wajib Disi
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="level"
                                                required>
                                                <option selected hidden>Pilih Level</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Kasir</option>
                                                <option value="3">Pelayan</option>
                                                <option value="3">Dapur</option>
                                            </select>
                                            <label for="floatingInput">Pilih Level User</label>
                                            <div class="invalid-feedback">
                                                Level Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="No Handphone" name="nohp" required>
                                            <label for="floatingInput">No Handphone</label>
                                            <div class="invalid-feedback">
                                                No Handphone Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="input_user_validate" value="inputUser"
                                        class="btn btn-primary">Save changes</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Modal Tambah User -->

            <!-- Modal View-->
            <?php    
             foreach($result as $row){
            ?>
            <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_input_user.php" method="POST"
                                novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama " name="nama" value="<?php echo $row['nama'] ?>"
                                                disabled>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Nama Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Username" name="username"
                                                value="<?php echo $row['username'] ?>" disabled>
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Username Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password" value="<?php echo $row['password'] ?>"
                                        disabled>
                                    <label for="floatingPassword">Password</label>
                                    <div class="invalid-feedback">
                                        Password Wajib Disi
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="tex" class="form-control" id="floatingPassword"
                                                placeholder="Level" name="password" value="<?php
                                        if($row['level'] == 1){
                                            echo "Admin";
                                        }elseif($row['level']== 2) {
                                            echo "Kasir";
                                        }elseif ($row['level']== 3)  {
                                            echo "Pelayan";
                                        }elseif ($row['level']== 4)  {
                                            echo "Dapur";
                                        }
                                        
                                        ?>" disabled>
                                            <label for="floatingInput">Level User</label>
                                            <div class="invalid-feedback">
                                                Level Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="No Handphone" name="nohp"
                                                value="<?php echo $row['nohp'] ?>" disabled>
                                            <label for="floatingInput">No Handphone</label>
                                            <div class="invalid-feedback">
                                                No Handphone Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End Modal View -->

            <!-- Modal Edit -->
            <?php    
             foreach($result as $row){
            ?>
            <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_edit_user.php" method="POST"
                                novalidate>
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Nama " name="nama" value="<?php echo $row['nama'] ?>" required
                                            >
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Nama Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Username" name="username" required
                                                value="<?php echo $row['username'] ?>">
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Username Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" name="password" value="<?php echo $row['password'] ?>" required
                                    >
                                    <label for="floatingPassword">Password</label>
                                    <div class="invalid-feedback">
                                        Password Wajib Disi
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select name="level"required class="form-select" aria-label="Default select example">
                                            <?php

                                            $data = array('admin','kasir','Pelayan', 'Dapur');
                                            foreach($data as $key => $value)
                                            if($row['level']==$key+1){
                                                echo "<option selected value=".($key+1).">$value</option>";
                                            } else {
                                                echo "<option  value=".($key+1).">$value</option>";
                                            }

                                            ?>
                                            </select>
                                            <label for="floatingInput">Level User</label>
                                            <div class="invalid-feedback">
                                                Level Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="No Handphone" name="nohp" required
                                                value="<?php echo $row['nohp'] ?>">
                                            <label for="floatingInput">No Handphone</label>
                                            <div class="invalid-feedback">
                                                No Handphone Wajib Disi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" action="proses/proses_hapus_user.php" method="POST"
                                novalidate>
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                               
                                <div class="col-lg-12">
                                    <?php 
                                    
                                    if($row['username']== $_SESSION['username_d']){
                                        echo "<div class='alert alert-danger'>Anda tidak dapat menghapus akun sendiri</div>";
                                    } else{
                                
                                        echo "Apakah anda yakin ingin menghapus user : <b>$row[nama]</b>";
                                    }
                                    
                                    ?>
                                </div>
                             
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="hapus_user_validate" value="hapususer"
                                        class="btn btn-danger" <?php echo ($row['username']== $_SESSION['username_d']) ? 'disabled' : ''; ?>>Hapus</button>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Level</th>
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
                            <td><?php echo $row['nama'] ?></td>
                            <td>
                                <?php
                                        if($row['level'] == 1){
                                            echo "Admin";
                                        }elseif($row['level']== 2) {
                                            echo "Kasir";
                                        }elseif ($row['level']== 3)  {
                                            echo "Pelayan";
                                        }elseif ($row['level']== 4)  {
                                            echo "Dapur";
                                        }
                                        
                                        ?>
                            </td>
                            <td class="d-flex">
                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                    data-bs-target="#ModalView<?php echo $row['id'] ?>"><i
                                        class="bi bi-eye-fill"></i></button>
                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                    data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i
                                        class="bi bi-pencil-fill" ></i></button>
                                <button class="btn btn-danger btn-sm " data-bs-toggle="modal"
                                    data-bs-target="#ModalHapus<?php echo $row['id'] ?>"><i class="bi bi-trash3-fill"></i></i></button>
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