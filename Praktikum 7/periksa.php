<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$periksas = $dbh->query($query);
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Template/css/styles.css" rel="stylesheet" />
</head>

<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between mt-4">
            <h3 class="mt-0">Hasil Periksa</h3>
            <a href="periksa_create.php" class="btn btn-primary "><strong>+Tambah</strong></a>
        </div>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Tanggal</th>
                        <th>Bb</th>
                        <th>Tinggi</th>
                        <th>Tensi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($periksas as $periksa) :
                    ?>
                        <tr>
                            <td><?php echo $no = $no + 1; ?></td>
                            <td><?= $periksa['pasien_id'] ?></td>
                            <td><?= $periksa['tanggal'] ?></td>
                            <td><?= $periksa['berat'] ?></td>
                            <td><?= $periksa['tinggi'] ?></td>
                            <td><?= $periksa['tensi'] ?></td>
                            <td><?= $periksa['keterangan'] ?></td>
                            <td>
                                <a href="periksa_edit.php?id=<?= $periksa['id'] ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="periksa_delete.php?id=<?= $periksa['id'] ?>" class="btn btn-danger">
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