<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;


class AnakController extends Controller
{
    
    public function index(){
        $anak = Anak::all();
        return view('anak.index',compact('anak'));
    }

    public function create(){

        return view('anak.add');
        
    }

    public function store(Request $request){
        Anak::create($request->except('_token' , 'submit'));
        return redirect('/anak');
    }

    public function edit($id){

        $anak = Anak::find($id);
        return view('anak.edit',compact(['anak']));

    }

    public function update($id , Request $request){

        $anak = Anak::find($id);
        $anak->update($request->except('_token' , 'submit'));
        return redirect('/anak');

    }

    
    public function destroy($id){

        $anak = Anak::find($id);
        $anak->delete();
        return redirect('/anak');

    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $wilayah = $request->input('wilayah');
        
        $query = Anak::query();
        
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
        
        if ($wilayah) {
            $query->where('jabatan', $wilayah);
        }
        
        $anak = $query->get();
        
        return view('anak.index', compact('anak'));
    }


}




  


    



