<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Detail Program Studi</h2>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Data Akreditasi
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Perguruan Tinggi : <?= $akreditasi['pt']; ?></li>
                    <li class="list-group-item">Program Studi : <?= $akreditasi['prodi']; ?></li>
                    <li class="list-group-item">Strata : <?= $akreditasi['strata']; ?></li>
                    <li class="list-group-item">Wilayah : <?= $akreditasi['wilayah']; ?></li>
                    <li class="list-group-item">No. SK : <?= $akreditasi['no_sk']; ?></li>
                    <li class="list-group-item">Tahun SK : <?= $akreditasi['tahun_sk']; ?></li>
                    <li class="list-group-item">Peringkat : <?= $akreditasi['peringkat']; ?></li>
                    <li class="list-group-item">Tanggal Kedaluarsa: <?= $akreditasi['tgl_exp']; ?></li>
                    <li class="list-group-item">Status:<button type="button" class="btn btn-success"><?= $akreditasi['status_exp']; ?></button>
                    </li>
                </ul>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <br><br>
                <a href="/akreditasi">Kembali ke Data Akreditasi</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>