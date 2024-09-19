<?php

namespace App\Http\Middleware;

use App\Models\Pengguna;
use Closure;
use Illuminate\Http\Request;

class CheckAktifPengguna
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('aktifPengguna')) {
            return redirect()->to("login");
        }
        return $next($request);
    }

    public static function GetInfoPengguna() {
        $model = Pengguna::where("id",session()->get('aktifPengguna'))->first();
        return $model;
    }
}
