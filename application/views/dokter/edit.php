<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Tambah Pasien</h6>
    </div>
    <div class="card-body">

    <form action="<?= base_url('dokter/update/' . $dokter->id_dokter) ?>" method="post">
        <label class="form-label">Nama Dokter:</label>
        <input class="form-control" type="text" name="nama_dokter" value="<?= $dokter->nama_dokter ?>" required><br>

        <label class="form-label">Jadwal:</label>
        <input class="form-control" type="text" name="jadwal" value="<?= $dokter->jadwal ?>" required><br>

        <label class="form-label">ID Admin:</label>
        <input class="form-control" type="text" name="id_admin" value="<?= $dokter->id_admin ?>" required><br>

        <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
    </form>

    </div>
</div>
</div>