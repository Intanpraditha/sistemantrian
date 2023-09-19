<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Edit Admin</h6>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('pasien/update/' . $pasien->id_pasien) ?>">
            <label class="form-label" >No. Antrian</label>
            <input class="form-control" type="text" name="no_antrian" value="<?= $pasien->no_antrian ?>" required> <br>

            <label>Nama Pasien</label>
            <input class="form-control" type="text" name="nama_pasien" value="<?= $pasien->nama_pasien ?>" required> <br>

            <label>NIK</label>
            <input class="form-control" type="text" name="nik" value="<?= $pasien->nik ?>" required> <br>

            <label>Jenis Kelamin</label>
            <input class="form-control" type="text" name="jk" value="<?= $pasien->jk ?>" required> <br>

            <label>No. Telepon</label>
            <input class="form-control" type="text" name="no_telp" value="<?= $pasien->no_telp ?>" required> <br>

            <label>Tanggal</label>
            <input class="form-control" type="date" name="tgl" value="<?= $pasien->tgl ?>" required> <br>

            <label>Waktu</label>
            <select class="form-control" name="id_waktu" required> 
                <?php foreach ($waktu as $w) : ?>
                    <option value="<?= $w->id_waktu ?>" <?= ($w->id_waktu == $pasien->id_waktu) ? 'selected' : '' ?>><?= $w->waktu ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label>Status</label>
            <input class="form-control" type="text" name="status" value="<?= $pasien->status ?>" required> <br>

            <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
        </form>
</div>
</div>
</div>