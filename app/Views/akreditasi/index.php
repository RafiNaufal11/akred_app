<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Direktori Hasil Akreditasi Program Studi</h1>
            <a href="/akreditasi/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Perguruan Tinggi</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Strata</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">No. SK</th>
                        <th scope="col">Tahun SK</th>
                        <th scope="col">Peringkat</th>
                        <th scope="col">Tanggal kedaluarsa</th>
                        <th scope="col">Status Kedaluarsa</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akreditasi as $a) : ?>
                        <tr>
                            <th scope="row"><?= $a['id']; ?></th>
                            <td><?= $a['pt']; ?></td>
                            <td><?= $c['prodi']; ?></td>
                            <td><?= $c['strata']; ?></td>
                            <td><?= $c['wilayah']; ?></td>
                            <td><?= $c['no_sk']; ?></td>
                            <td><?= $c['tahun_sk']; ?></td>
                            <td><?= $c['peringkat']; ?></td>
                            <td><?= $c['tgl_exp']; ?></td>
                            <td><?= $c['status_exp']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>