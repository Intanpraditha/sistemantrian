<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Data Pasien</h6>
    </div>
    <div class="card-body">
        <div class="card-header py-3">
            <a href="<?= base_url('pasien/tambah') ?>" class="m-0 font-weight-bold btn btn-primary" >Tambah Pasien</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>No. BPJS</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>No. BPJS</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($pasien as $row): ?>
                    <tr>
                        <td><?= $row->id_pasien ?></td>
                        <td><?= $row->nama_pasien ?></td>
                        <td><?= $row->no_bpjs ?></td>
                        <td><?= $row->nik ?></td>
                        <td><?= $row->jk ?></td>
                        <td><?= $row->usia ?></td>
                        <td><?= $row->no_telp ?></td>
                        <td>
                            <a href="<?= base_url('pasien/edit/' . $row->id_pasien) ?>" class="m-0 font-weight-bold btn btn-info"><i class="fas fa-fw fa-pen"></i></a>
                            <a href="<?= base_url('pasien/hapus/' . $row->id_pasien) ?>" class="m-0 font-weight-bold btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i></a>
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
