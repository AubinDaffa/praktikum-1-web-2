<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$unit_kerjas = $dbh->query($query);
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Template/css/styles.css" rel="stylesheet" />
</head>

<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-4">
            <h3 class="mt-0">Unit Kerja</h3>
            <a href="unitkerja_create.php" class="btn btn-primary "><strong>+Tambah</strong></a>
        </div>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($unit_kerjas as $unit_kerja) :
                    ?>
                        <tr>
                            <td><?= $unit_kerja['id'] ?></td>
                            <td><?= $unit_kerja['nama'] ?></td>
                            <td>
                                <a href="unitkerja_edit.php?id=<?= $unit_kerja['id'] ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="unitkerja_delete.php?id=<?= $unit_kerja['id'] ?>" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</main>

<?php
include_once('bottom.php');
?>