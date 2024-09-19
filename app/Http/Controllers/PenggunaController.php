<?php

namespace App\Http\Controllers;

use App\Helpers\Constants;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        View::share('modul', 'admin');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Pengguna::query();
            return DataTables::eloquent($model)
                ->filter(function ($query) use ($request) {
                    if (request()->has('fnama')) {
                        $query->where('nama', 'like', '%' . request('fnama') . '%');
                    }
                    if ($request->fprofesi !== null) {
                        $query->where('profesi', $request->fprofesi);
                    }
                    if ($request->faktif !== null) {
                        $query->where('aktif', $request->faktif);
                    }
                })
                // ->filterColumn('aktif', function($query, $request){
                //     if($request->faktif !== null) {
                //         $query->where('aktif', $request->faktif);
                //     }
                // })
                ->editColumn('profesi', function (Pengguna $pengguna) {
                    return Constants::TIPE_PROFESI[$pengguna->profesi];
                })
                ->editColumn('aktif', function (Pengguna $pengguna) {
                    return Constants::STATUS_AKTIF[$pengguna->aktif];
                })
                // ->addColumn('aksi', 'pengguna.tombolaksi')
                ->addColumn('aksi', function (Pengguna $pengguna) {
                    return view('pengguna.tombolaksi', ['model' => $pengguna]);
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        $data["menu"] = 'pengguna';
        $data["submenu"] = 'data pengguna';
        return view("/pengguna/index", $data);
    }

    public function tambahPengguna(Request $request)
    {
        $data["menu"] = 'pengguna';
        $data["submenu"] = 'tambah pengguna';
        return view("/pengguna/tambahpengguna", $data);
    }

    public function hapusPengguna(Request $request, $id)
    {
        Pengguna::where("id", $id)->delete();
        return redirect()->back()->with("message", "data pengguna {$id} telah dihapus");
    }

    public function lihatPengguna(Request $request, $id)
    {
        $model = Pengguna::where("id", $id)->first();
        $data["menu"] = 'pengguna';
        $data["submenu"] = 'lihat pengguna';
        $data['model'] = $model;
        return view("/pengguna/lihatPengguna", $data);
    }
}
