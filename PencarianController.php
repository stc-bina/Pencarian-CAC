<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PencarianController extends Controller
{
    //
    public function index()
	{
    		// mengambil data dari table dbmotor
		$pencarian = DB::table('dbmotor')->paginate(10);

    		// mengirim data dbmotor ke view index
		return view('index',['dbmotor' => $pencarian]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table dbmotor sesuai pencarian data
		$pencarian = DB::table('dbmotor')
		->where('nopolisi','like',"%".$cari."%")
		->paginate();

    		// mengirim data dbmotor ke view index
		return view('index',['dbmotor' => $pencarian]);

	}
	public function carirangka(Request $request)
	{
		// menangkap data pencarian
		$carirangka = $request->carirangka;

    		// mengambil data dari table dbmotor sesuai pencarian data
		$pencarian = DB::table('dbmotor')
		->where('chassis_num','like',"%".$carirangka."%")
		->paginate();

    		// mengirim data dbmotor ke view index
		return view('index',['dbmotor' => $pencarian]);

	}
	public function carimesin(Request $request)
	{
		// menangkap data pencarian
		$carimesin = $request->carimesin;

    		// mengambil data dari table dbmotor sesuai pencarian data
		$pencarian = DB::table('dbmotor')
		->where('engine_num','like',"%".$carimesin."%")
		->paginate();

    		// mengirim data dbmotor ke view index
		return view('index',['dbmotor' => $pencarian]);

	}
	public function caripolis(Request $request)
	{
		// menangkap data pencarian
		$caripolis = $request->caripolis;

    		// mengambil data dari table dbmotor sesuai pencarian data
		$pencarian = DB::table('dbmotor')
		->where('pol_num','like',"%".$caripolis."%")
		->paginate();

    		// mengirim data dbmotor ke view index
		return view('index',['dbmotor' => $pencarian]);

	}
}
