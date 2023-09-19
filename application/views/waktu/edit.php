<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Edit Waktu</h6>
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('waktu/update/' . $waktu->id_waktu) ?>">
            <label>Waktu</label>
            <input class="form-control" type="text" name="waktu" value="<?= $waktu->waktu ?>" required>
            <br>
            <button type="submit" class="m-0 font-weight-bold btn btn-success">Simpan</button>
        </form>
</div>
</div>
</div>