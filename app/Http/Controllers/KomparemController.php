<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komparem;


class KomparemController extends Controller
{
    public function index(){
        $komparem = Komparem::all();
        return view('komparem.index',compact('komparem'));
    }

    public function create(){

        return view('komparem.add');
        
    }

    public function store(Request $request){
        Komparem::create($request->except('_token' , 'submit'));
        return redirect('/komparem');
    }

    public function edit($id){

        $komparem = Komparem::find($id);
        return view('komparem.edit',compact(['komparem']));

    }

    public function update($id , Request $request){

        $komparem = Komparem::find($id);
        $komparem->update($request->except('_token' , 'submit'));
        return redirect('/komparem');

    }

    
    public function destroy($id){

        $komparem = Komparem::find($id);
        $komparem->delete();
        return redirect('/komparem');
    }

    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        
        $query = Komparem::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('wilayah', $wilayah);
        }
        
        $komparem = $query->get();
        
        return view('komparem.index', compact('komparem'));
    }

}
