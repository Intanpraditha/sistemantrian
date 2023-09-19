<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Data pasien</h6>
    </div>
    <div class="card-body">
        <div class="card-header py-3">
            <a href="<?= base_url('pasien/tambah') ?>" class="m-0 font-weight-bold btn btn-primary" >Tambah pasien</a>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No. Antrian</th>
                    <th>Nama Pasien</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pasien as $p) : ?>
                    <tr>
                        <td><?= $p->no_antrian ?></td>
                        <td><?= $p->nama_pasien ?></td>
                        <td><?= $p->nik ?></td>
                        <td><?= $p->jk ?></td>
                        <td><?= $p->no_telp ?></td>
                        <td><?= $p->tgl ?></td>
                        <td><?= $p->waktu ?></td>
                        <td><?= $p->status ?></td>
                        <td>
                            <a href="<?= base_url('pasien/edit/' . $p->id_pasien) ?>" class="m-0 font-weight-bold btn btn-info"><i class="fas fa-fw fa-pen"></i></a>
                            <a href="<?= base_url('pasien/hapus/' . $p->id_pasien) ?>" class="m-0 font-weight-bold btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i></a>
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
