<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umum;


class umumcontroller extends Controller
{
    public function index(){
        $umum = Umum::all();
        return view('umum.index',compact('umum'));
    }

    public function create(){

        return view('umum.add');
        
    }

    public function store(Request $request){
        Umum::create($request->except('_token' , 'submit'));
        return redirect('/umum');
    }

    public function edit($id){

        $umum = Umum::find($id);
        return view('umum.edit',compact(['umum']));

    }

    public function update($id , Request $request){

        $umum = Umum::find($id);
        $umum->update($request->except('_token' , 'submit'));
        return redirect('/umum');

    }

    public function destroy($id){

        $umum = Umum::find($id);
        $umum->delete();
        return redirect('/umum');

    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        $baptis = $request->input('baptis');
        $gender = $request->input('jenis_kelamin');


        
        $query = Umum::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('wilayah', $wilayah);
        }

        if ($baptis) {
            $query->where('baptis', $baptis);
        }

        if ($gender) {
            $query->where('jenis_kelamin', $gender);
        }
        $umum = $query->get();
        
        return view('umum.index', compact('umum'));
    }

}



