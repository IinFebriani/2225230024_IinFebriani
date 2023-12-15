<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;



class BukuController extends Controller
{
    public function index()
{
    $buku =Buku::all(); 
    return view('buku.index', compact('buku'));
}

    public function create ()
    {
        return view('buku.index');
    }
    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        buku::create($request->except(['_token','submit']));
        return redirect('/buku');
    }
    public function edit($id)
    {
        $buku = buku::find($id);
        return view('buku.edit',compact(['buku']));
    }
    public function update($id, Request $request)
    {
        $buku = buku::find($id);
        $buku->update($request->except(['_token','submit']));
        return redirect('/buku');
    }
    public function destroy($id)
    {
        $buku = buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
