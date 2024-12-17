<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    
	
    public function index(){
        return view('welcome',[
            'players' => Player::inRandomOrder()->whereNotIn('club',['other'])->limit(11)->get(),
			'top' => Player::orderBy('dri','desc')->limit(3)->get()
        ]);
    }

    public function detail(Request $request)
	{
		// menangkap data pencarian
		$detail = $request->detail;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$players = DB::table('players')
		->where('club','like',"%".$detail."%")->whereNotIn('club',['other'])->paginate(10);
 
    		// mengirim data pegawai ke view index
		return view('team',['players' => $players]);
 
	}

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$players = DB::table('players')
		->where('shirt','like',"%".$search."%")->orwhere('position','like',"%".$search."%")
        ->orwhere('nt','like',"%".$search."%")->orwhere('club','like',"%".$search."%")
		->orwhere('name','like',"%".$search."%")->whereNotIn('club',['other'])->paginate(20);
 
    		// mengirim data pegawai ke view index
		return view('search',['player' => $players]);
 
	}

	
    public function stats($id){
        $player = Player::where('id', $id)->first();
        return view('stats',[
            'player' => $player
        ]);

    }
}
