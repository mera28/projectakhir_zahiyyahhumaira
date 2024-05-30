<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PemasukanController extends Controller
{
    //
    public function index()
    {

    $pemasukan=Pemasukan::all();
    return view('pemasukan.index',[
        "title" => "Pemasukan",
        "data" =>$pemasukan
    ]);
}

public function create():View
{
    return view('pemasukan.create')->with([
        "title" => "Tambah Data Pemasukan"
    ]);
}

public function store(Request $request):RedirectResponse
{
    $request->validate([
        "name"=>"required",
        "description"=>"nullable",
        "stock"=>"required",
        "tanggal"=>"required"
    ]);

    Pemasukan::create($request->all());
    return redirect()->route('pemasukan.index')->with('success','Data Pemasukan Berhasil Ditambahkan');
}
public function edit(Pemasukan $pemasukan):View
    {
        return view('pemasukan.edit',compact('pemasukan'))->with([
    "title" => "Ubah Data Pemasukan"
    ]);
    }
    
    public function update(Pemasukan $pemasukan, Request $request):RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "description" => "nullable",
            "stock" => "required",
            "tanggal" => "required"
        ]);

        $pemasukan->update($request->all());
        return redirect()->route('pemasukan.index')->with('updated','Data Pemasukan Berhasil Diubah');
    }
    public function show():View
    {
        $pemasukan=Pemasukan::all();
        return view('pemasukan.show')->with([
            "title"=> "Tampil Data Pemasukan",
            "data"=>$pemasukan
        ]);
    }
    
}
