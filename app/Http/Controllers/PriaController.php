<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pria;


class PriaController extends Controller
{
    //
    public function index(){

        $pria = Pria::all();
        return view('pria.index',compact('pria'));
    }

    
    public function create(){

        return view('pria.add');
        
    }

    public function store(Request $request){
        Pria::create($request->except('_token' , 'submit'));
        return redirect('/pria');
    }

    public function edit($id){

        $pria = Pria::find($id);
        return view('pria.edit',compact(['pria']));

    }

    public function update($id , Request $request){

        $pria = Pria::find($id);
        $pria->update($request->except('_token' , 'submit'));
        return redirect('/pria');

    }

    public function destroy($id){

        $pria = Pria::find($id);
        $pria->delete();
        return redirect('/pria');

    }

    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        
        $query = Pria::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('wilayah', $wilayah);
        }
        
        $pria = $query->get();
        
        return view('pria.index', compact('pria'));
    }


}
