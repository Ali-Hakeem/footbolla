<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    
    public function player()
    {
        return view('admin.player.index', [
            'player' => Player::orderBy('nation', 'asc')->paginate(40)
        ]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$players = DB::table('players')
		->where('shirt','like',"%".$search."%")->orwhere('position','like',"%".$search."%")
        ->orwhere('nation','like',"%".$search."%")->orwhere('club','like',"%".$search."%")
		->orwhere('name','like',"%".$search."%")->paginate(20);
 
    		// mengirim data pegawai ke view index
		return view('admin.player.index',['player' => $players]);
 
	}
}
