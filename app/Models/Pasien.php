<?php

namespace App\Models;

use App\Helpers\Formatters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $connection = "simgos";

    protected $table = "pasien";

    public function getTanggalLahirPasienIndonesia()
    {
        return Formatters::TanggalFormatIndonesia($this->TANGGAL_LAHIR);
    }
}
