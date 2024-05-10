<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
$unit_kerjas = $dbh->query($query);
$unit_kerja = $unit_kerjas->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Template/css/styles.css" rel="stylesheet" />
</head>

<main>
    <div class="d-flex mt-4">
        <h1>Edit Data Unit Kerja</h1>
    </div>
    <form action="unit_kerja_update.php" method="post">
        <input type="hidden" name="id" value="<?= $unit_kerja['id'] ?>">
        <div class="container-fluid px-4">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $unit_kerja['nama'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8" style="margin-top: 20px; text-align: center;">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</main>

<?php
include_once('bottom.php');
?>