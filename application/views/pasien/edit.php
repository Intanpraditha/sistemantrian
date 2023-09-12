
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Tambah Pasien</h6>
        </div>
    <div class="card-body">

    <form action="<?= base_url('pasien/update/' . $pasien->id_pasien) ?>" method="post">
        <label class="form-label">Nama Pasien:</label>
        <input class="form-control" type="text" name="nama_pasien" value="<?= $pasien->nama_pasien ?>" required><br>

        <label class="form-label">No. BPJS:</label>
        <input class="form-control" type="text" name="no_bpjs" value="<?= $pasien->no_bpjs ?>" required><br>

        <label class="form-label">NIK:</label>
        <input class="form-control" type="text" name="nik" value="<?= $pasien->nik ?>" required><br>

        <label class="form-label">Jenis Kelamin:</label>
        <select class="form-control"  name="jk">
            <option value="Laki-laki" <?php if ($pasien->jk == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($pasien->jk == "Perempuan") echo "selected"; ?>>Perempuan</option>
        </select><br>

        <label class="form-label">Usia:</label>
        <input class="form-control" type="number" name="usia" value="<?= $pasien->usia ?>" required><br>

        <label class="form-label">No. Telepon:</label>
        <input class="form-control" type="text" name="no_telp" value="<?= $pasien->no_telp ?>" required><br>

        <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
    </form>

    </div>
</div>
</div>
