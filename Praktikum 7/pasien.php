<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

// setiap yang berhubungan tentang data base disebut query
$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);
?>

<main>
    <div class="container-fluid px-4">
        <div class="d-flex mt-4">
            <h3>Daftar Pasien</h3>
            <a href="pasien_create.php" class="btn btn-primary ms-auto">+ Pasien</a>
        </div>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>JK</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>

                <?php
                $no = 0;
                foreach ($pasiens as $pasien) :
                ?>
                    <tr>
                        <td><?php echo $no = $no + 1; ?></td>
                        <td><?= $pasien['nama'] ?></td>
                        <td><?= $pasien['tmp_lahir'] ?></td>
                        <td><?= $pasien['tgl_lahir'] ?></td>
                        <td><?= $pasien['gender'] ?></td>
                        <td><?= $pasien['alamat'] ?></td>
                        <td><?= $pasien['email'] ?></td>
                        <td>
                            <a href="pasien_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="pasien_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>

<?php
include_once('bottom.php');
?>