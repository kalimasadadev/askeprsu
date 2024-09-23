<?php

namespace App\Helpers;

class Formatters
{
	public static function TanggalFormatIndonesia($tanggal)
	{
		$tanggal = str_replace("00:00:00","",$tanggal);
		$bulan = array(
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$split = explode('-', $tanggal);
		return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
	}
}
