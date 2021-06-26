<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Direktori Hasil Akreditasi Program Studi</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?>
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
                            <td><?= $a['prodi']; ?></td>
                            <td><?= $a['strata']; ?></td>
                            <td><?= $a['wilayah']; ?></td>
                            <td><?= $a['no_sk']; ?></td>
                            <td><?= $a['tahun_sk']; ?></td>
                            <td><?= $a['peringkat']; ?></td>
                            <td><?= $a['tgl_exp']; ?></td>
                            <td><?= $a['status_exp']; ?></td>
                            <td>
                                <a href="/akreditasi/detail/<?= $a['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>