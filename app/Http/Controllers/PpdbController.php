<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdbs = Ppdb::all();
        return view('ppdb.index',compact(['ppdbs']));
    }

    public function create()
    {
        return view('ppdb.create');
    }

    public function store(Request $request)
    {
        Ppdb::create($request->all());
        return redirect('/ppdb');
    }
    
    public function edit($id)
    {
        $ppdb = Ppdb::find($id);
        return view('ppdb.edit',compact(['ppdb']));
    }
    public function update(Request $request,$id)
    {
        $ppdb = Ppdb::find($id);
        $ppdb->update($request->all());
        return redirect('/ppdb');
    }
    public function destroy($id)
    {
        $ppdb = Ppdb::find($id);
        $ppdb->delete();
        return redirect('/ppdb');
    }
}
