<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Tambah Pasien</h6>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('pasien/simpan') ?>">
            <label class="form-label" >No. Antrian</label>
            <input  class="form-control" type="text" name="no_antrian" required> <br>

            <label class="form-label" >Nama Pasien</label>
            <input  class="form-control" type="text" name="nama_pasien" required> <br>

            <label class="form-label" >NIK</label>
            <input  class="form-control" type="text" name="nik" required> <br>

            <label class="form-label" >Jenis Kelamin</label>
            <input  class="form-control" type="text" name="jk" required> <br>

            <label class="form-label" >No. Telepon</label>
            <input  class="form-control" type="text" name="no_telp" required> <br>

            <label class="form-label" >Tanggal</label>
            <input  class="form-control" type="date" name="tgl" required> <br>

            <label class="form-label" >Waktu</label>
            <select class="form-control"  name="Id_waktu" required> 
                <?php foreach ($waktu as $w) : ?>
                    <option value="<?= $w->id_waktu ?>"><?= $w->waktu ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label class="form-label" >Status</label>
            <input  class="form-control" type="text" name="status" required> <br>

            <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
        </form>
</div>
</div>
</div>