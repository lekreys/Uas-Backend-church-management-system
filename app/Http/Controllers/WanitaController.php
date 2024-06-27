<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wanita;


class WanitaController extends Controller
{
    public function index(){

        $wanita = Wanita::all();
        return view('wanita.index',compact('wanita'));
    }

    
    public function create(){

        return view('wanita.add');
        
    }

    public function store(Request $request){
        Wanita::create($request->except('_token' , 'submit'));
        return redirect('/wanita');
    }


    public function edit($id){

        $wanita = Wanita::find($id);
        return view('wanita.edit',compact(['wanita']));

    }

    public function update($id , Request $request){

        $wanita = Wanita::find($id);
        $wanita->update($request->except('_token' , 'submit'));
        return redirect('/wanita');

    }

    public function destroy($id){

        $wanita = Wanita::find($id);
        $wanita->delete();
        return redirect('/wanita');

    }


    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        $jenis = $request->input('jenis_suara');


        
        
        $query = Wanita::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('wilayah', $wilayah);
        }

        if ($jenis) {
            $query->where('jenis_suara', $jenis);
        }
        
        $wanita = $query->get();
        
        return view('wanita.index', compact('wanita'));
    }


}


