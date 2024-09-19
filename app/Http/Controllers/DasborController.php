<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAktifPengguna;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class DasborController extends Controller
{
    public function __construct()
    {
        View::share('modul', 'selamat datang');
    }

    public function index(Request $request)
    {
        $data['menu'] = 'home';
        $data['submenu'] = 'dasbor';
        return view("/web/dasbor", $data);
    }

    public function accountSetting(Request $request)
    {
        if ($request->isMethod("POST")) {
            $validator = Validator::make($request->all(), [
                'kata_sandi_baru' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $akfitPengguna = CheckAktifPengguna::GetInfoPengguna()->id;
            $model = Pengguna::where("id", $akfitPengguna)->first();
            $model->password = Hash::make($request->kata_sandi_baru);
            $model->save();
            return redirect()->back()->with("message" , "kata sandi telah diperbarui");
            // return redirect()->back()->withErrors(["message" => "kata sandi telah diperbarui"]);
        }
        $data['menu'] = 'home';
        $data['submenu'] = 'pengaturan akun';
        return view("/web/accountSetting", $data);
    }
}
