<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Data Antrian</h6>
    </div>
    <div class="card-body">
        <div class="card-header py-3">
            <a href="<?= base_url('antrian/tambah') ?>" class="m-0 font-weight-bold btn btn-primary" >Tambah antrian</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No. Antrian</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Dokter</th>
                        <th>Pasien</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>No. Antrian</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Dokter</th>
                        <th>Pasien</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($antrian as $row): ?>
                    <tr>
                        <td><?= $row->id_antrian ?></td>
                        <td><?= $row->no_antrian ?></td>
                        <td><?= $row->tgl ?></td>
                        <td><?= $row->waktu ?></td>
                        <td><?= $row->status ?></td>
                        <td><?= $row->id_dokter ?></td>
                        <td><?= $row->id_pasien ?></td>
                        <td>
                            <a href="<?= base_url('antrian/edit/' . $row->id_antrian) ?>" class="m-0 font-weight-bold btn btn-info"><i class="fas fa-fw fa-pen"></i></a>
                            <a href="<?= base_url('antrian/hapus/' . $row->id_antrian) ?>" class="m-0 font-weight-bold btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

