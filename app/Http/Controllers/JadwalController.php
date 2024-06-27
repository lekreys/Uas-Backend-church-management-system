<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;


class JadwalController extends Controller
{
    public function index(){
        $jadwal = Jadwal::all();
        return view('layout',compact('jadwal'));
    }

    public function create(){

        return view('jadwal.add');
        
    }

    public function store(Request $request){
        Jadwal::create($request->except('_token' , 'submit'));
        return redirect('/');
    }

    public function destroy($id){

        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/');

    }


}
