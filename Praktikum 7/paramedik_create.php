<?php
include_once('koneksi.php');
$paramedik = $dbh->query('SELECT * FROM paramedik');

include_once('top.php');
include_once('menu.php');
?>

<body>
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-5">Tambah data paramedik</h1>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <form action="paramedik_store.php" method="post">
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label>
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="berat" class="col-4 col-form-label">Gender</label>
          <div class="col-8">
            <input id="gender" name="gender" type="text" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label for="tinggi" class="col-4 col-form-label">Tempat lahir</label>
          <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label for="tensi" class="col-4 col-form-label">Tanggal lahir</label>
          <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="keterangan" class="col-4 col-form-label">Kategori</label>
          <div class="col-8">
            <input id="kategori" name="kategori" type="text" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label for="keterangan" class="col-4 col-form-label">No telepon</label>
          <div class="col-8">
            <input id="telpon" name="telpon" type="text" class="form-control" required="required">
          </div>
        </div>

        <div class="form-group row">
          <label for="alamat" class="col-4 col-form-label">Alamat</label>
          <div class="col-8">
            <textarea id="alamat" name="alamat" type="text" class="form-control" required="required"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label>
          <div class="col-8">
            <select id="unit_kerja_id" name="unit_kerja_id" class="form-control" required="required">
              <?php
              $unit_kerja = $dbh->query('SELECT * FROM unit_kerja');
              foreach ($unit_kerja as $row) {
                echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
              }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>

    </div>
  </main>
</body>


<?php
include_once('buttom.php');
?>