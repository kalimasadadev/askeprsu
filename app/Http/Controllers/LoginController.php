<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $model = new Pengguna();
        if ($request->isMethod("POST")) {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $model = Pengguna::where("username", $request->username)->first();
            if($model === null) {
                return redirect()->back()->with("message", "nama pengguna belum terdaftar");
            }


            if (Hash::check($request->password, $model->password)) {
                session(['aktifPengguna' => $model->id]);
                return redirect()->to("dasbor")->with("message", "selamat datang di aplikasi standar asuhan keperawatan");
            } else {
                return redirect()->back()
                ->with("message", "kata sandi salah")
                ->withErrors($validator->errors())
                ->withInput();
            }
        }
        return view("/web/login", ['model' => $model]);
    }
}
