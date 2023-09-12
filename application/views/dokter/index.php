<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Data Dokter</h6>
    </div>
    <div class="card-body">
        <div class="card-header py-3">
            <a href="<?= base_url('dokter/tambah') ?>" class="m-0 font-weight-bold btn btn-primary" >Tambah dokter</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dokter</th>
                        <th>Jadwal</th>
                        <th>ID Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Dokter</th>
                        <th>Jadwal</th>
                        <th>ID Admin</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($dokter as $row): ?>
                    <tr>
                        <td><?= $row->id_dokter ?></td>
                        <td><?= $row->nama_dokter ?></td>
                        <td><?= $row->jadwal ?></td>
                        <td><?= $row->id_admin ?></td>
                        <td>
                            <a href="<?= base_url('dokter/edit/' . $row->id_dokter) ?>" class="m-0 font-weight-bold btn btn-info"><i class="fas fa-fw fa-pen"></i></a>
                            <a href="<?= base_url('dokter/hapus/' . $row->id_dokter) ?>" class="m-0 font-weight-bold btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i></a>
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
