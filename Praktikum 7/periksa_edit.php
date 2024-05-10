<?php
include_once('koneksi.php');

$id = $_GET['id'];
$periksa = $dbh->query("SELECT * FROM periksa WHERE id = $id")->fetch();

$pasien = $dbh->query('SELECT * FROM pasien');

include_once('top.php');
include_once('menu.php');
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Template/css/styles.css" rel="stylesheet" />
</head>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Check-up</h1>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action="periksa_update.php" method="post">
            <input type="hidden" name="id" value="<?= $periksa['id'] ?>">
            <div class="form-group row">
                <label for="pasien_id" class="col-3 col-form-label">Pasien</label>
                <div class="col-9">
                    <select id="pasien_id" name="pasien_id" class="form-control" required="required">
                        <?php foreach ($pasien as $row) { ?>
                            <option value="<?= $row['id'] ?>" <?= $periksa['pasien_id'] == $row['id'] ? 'selected' : '' ?>><?= $row['nama'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-3 col-form-label">Tanggal</label>
                <div class="col-9">
                    <input id="tanggal" name="tanggal" type="date" class="form-control" required="required" value="<?= $periksa['tanggal'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-3 col-form-label">Berat</label>
                <div class="col-9">
                    <input id="berat" name="berat" type="text" class="form-control" required="required" value="<?= $periksa['berat'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi" class="col-3 col-form-label">Tinggi</label>
                <div class="col-9">
                    <input id="tinggi" name="tinggi" type="text" class="form-control" required="required" value="<?= $periksa['tinggi'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tensi" class="col-3 col-form-label">Tensi</label>
                <div class="col-9">
                    <input id="tensi" name="tensi" type="text" class="form-control" required="required" value="<?= $periksa['tensi'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-3 col-form-label">Keterangan</label>
                <div class="col-9">
                    <input id="keterangan" name="keterangan" type="text" class="form-control" required="required" value="<?= $periksa['keterangan'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</main>


<?php
include_once('buttom.php');
?>