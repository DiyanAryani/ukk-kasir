<class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar user</h4>
                <?php 
                        if ($_SESSION['level'] == "admin") {
                        ?>
                        <a href="?page=tambah_user" class="btn btn-primary btn-sm">Tambah User</a>
                        <?php
                        }
                        ?>

                <p class="card-description">
                <!-- Add class <code>.table</code> -->
                    <a href="?page=tambah-user" title="Tambah User"
                          class="btn btn-primary btn-icon-split btn-sm">
                               <span class="icon text-white-50"><i class="fas fa-plus"></i><span>
                               <span class="text">Tambah user</span>
                    </a>
                </p>

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>password</th>
                                <th>level</th>
                                <?php if ($_SESSION['level'] == "Administrator") { ?>
                                <th>opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'koneksi/koneksi.php';
                            $no = 1;
                            $sql = $con->query("SELECT * FROM user");
                            while ($data= $sql->fetch_assoc()) {

                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['Username']?></td>
                            <td><?php echo $data['Password']?></td>
                            <td><?php echo $data['level']?></td>
                            <?php if ($_SESSION['level'] == "Administrator") { ?>
                                    <td><a type='button' href='?page=edit-user&id=<?= $data['UserID']; ?>' class='btn btn-sm btn-warning'>Edit</a>/<a type='button' href='?page=hapus-user&id=<?= $data['UserID']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>