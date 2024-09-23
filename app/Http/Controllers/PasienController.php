<?php

namespace App\Http\Controllers;

use App\Helpers\Constants;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class PasienController extends Controller
{
    public function __construct()
    {
        View::share('modul', 'admin');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Pasien::query()->orderBy('NORM','DESC');
            return DataTables::eloquent($model)
                ->filter(function ($query) use ($request) {
                    if (request()->has('fnama')) {
                        $query->where('NAMA', 'like', '%' . request('fnama') . '%');
                    }
                    // if ($request->fprofesi !== null) {
                    //     $query->where('profesi', $request->fprofesi);
                    // }
                    if ($request->faktif !== null) {
                        $query->where('status', $request->faktif);
                    }
                })
                ->editColumn('TANGGAL_LAHIR', function (Pasien $pasien) {
                    return $pasien->getTanggalLahirPasienIndonesia();
                })
                ->editColumn('NORM', function (Pasien $pasien) {
                    return sprintf("%06d", $pasien->NORM);
                })
                ->editColumn('STATUS', function (Pasien $pasien) {
                    return Constants::STATUS_AKTIF[$pasien->STATUS];
                })
                ->addColumn('aksi', function (Pasien $pasien) {
                    return view('pasien.tombolaksi', ['model' => $pasien]);
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $data["menu"] = 'pasien';
        $data["submenu"] = 'data pasien';
        return view("/pasien/index", $data);
    }
}
