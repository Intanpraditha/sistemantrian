<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Tambah Antrian</h6>
    </div>
    <div class="card-body">

    <form action="<?= base_url('antrian/simpan') ?>" method="post">
        <label class="form-label">No. Antrian:</label>
        <input  class="form-control" type="text" name="no_antrian" required><br>

        <label class="form-label">Tanggal:</label>
        <input  class="form-control" type="date" name="tgl" required><br>

        <label class="form-label">Waktu:</label>
        <input  class="form-control" type="time" name="waktu" required><br>

        <label class="form-label">Status:</label>
        <select class="form-control"  name="status">
            <option></option>
            <option value="Pending">Pending</option>
            <option value="Selesai">Selesai</option>
        </select><br>

        <label class="form-label">Dokter:</label>
        <input  class="form-control" type="text" name="id_dokter" required><br>

        <label class="form-label">Pasien:</label>
        <input  class="form-control" type="text" name="id_pasien" required><br>

        <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
    </form>

    </div>
</div>
</div>