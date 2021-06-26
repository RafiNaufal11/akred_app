<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Tambah Data Akreditasi</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
            <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
            <form action="/registration/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="pt" class="col-sm-2 col-form-label">Nama Perguruan Tinggi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pt" name="pt" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="strata" class="col-sm-2 col-form-label">Strata</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="strata" name="strata">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="wilayah" name="wilayah">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_sk" class="col-sm-2 col-form-label">No. SK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_sk" name="no_sk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahun_sk" class="col-sm-2 col-form-label">Tahun SK</label>
                    <div class="col-sm-10">
                        <input type="year" class="form-control" id="tahun_sk" name="tahun_sk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="peringkat" class="col-sm-2 col-form-label">Peringkat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="peringkat" name="peringkat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_exp" class="col-sm-2 col-form-label">Tanggal Kedaluarsa</label>
                    <div class="col-sm-10">
                        <input type="text" name="tgl_exp" id="datepicker" width="276" />
                        <script>
                            $('#datepicker').datepicker({
                                format: 'yyyy-mm-dd',
                                autoclose: true,
                                todayHighlight: true,
                                uiLibrary: 'bootstrap4'
                            });
                        </script>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Status Kedaluarsa</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_exp" id="status_exp" value="Berlaku" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Masih Berlaku
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_exp" id="status_exp" value="Kedaluarsa">
                            <label class="form-check-label" for="gridRadios2">
                                Sudah Kedaluarsa
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>