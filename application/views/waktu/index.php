<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Data Waktu</h6>
    </div>
    <div class="card-body">
        <div class="card-header py-3">
            <a href="<?= base_url('waktu/tambah') ?>" class="m-0 font-weight-bold btn btn-primary" >Tambah waktu</a>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Waktu</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Waktu</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($waktu as $w) : ?>
                    <tr>
                        <td><?= $w->id_waktu ?></td>
                        <td><?= $w->waktu ?></td>
                        <td>
                            <a href="<?= base_url('waktu/edit/' . $w->id_waktu) ?>" class="m-0 font-weight-bold btn btn-info"><i class="fas fa-fw fa-pen"></i></a>
                            <a href="<?= base_url('waktu/hapus/' . $w->id_waktu) ?>" class="m-0 font-weight-bold btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
    </div>
</div>
</body>
</html>

