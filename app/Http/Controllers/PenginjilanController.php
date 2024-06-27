<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penginjilan;

class PenginjilanController extends Controller
{
    public function index(){

        $penginjilan = Penginjilan::all();
        return view('penginjilan.index',compact('penginjilan'));
    }

    
    public function create(){

        return view('penginjilan.add');
        
    }

    public function store(Request $request){
        Penginjilan::create($request->except('_token' , 'submit'));
        return redirect('/penginjilan');
    }

    public function edit($id){

        $penginjilan = Penginjilan::find($id);
        return view('penginjilan.edit',compact(['penginjilan']));

    }

    public function update($id , Request $request){

        $penginjilan = Penginjilan::find($id);
        $penginjilan->update($request->except('_token' , 'submit'));
        return redirect('/penginjilan');

    }

    public function destroy($id){

        $penginjilan = Penginjilan::find($id);
        $penginjilan->delete();
        return redirect('/penginjilan');

    }
     
    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        
        $query = Penginjilan::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('wilayah', $wilayah);
        }
        
        $penginjilan = $query->get();
        
        return view('penginjilan.index', compact('penginjilan'));
    }


}




  

