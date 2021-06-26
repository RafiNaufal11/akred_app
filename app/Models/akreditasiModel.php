<?php

namespace App\Models;

use CodeIgniter\Model;

class AkreditasiModel extends Model
{
    protected $table = 'akreditasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['pt', 'prodi', 'strata', 'wilayah', 'no_sk', 'tahun_sk', 'peringkat', 'tgl_exp', 'status_exp'];
}
