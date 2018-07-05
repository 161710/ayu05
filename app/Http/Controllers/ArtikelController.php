<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Brain;
use Session;
use App\Komentar;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $art = Artikel::with('brains')->get();
        return view('artikel.index',compact('art'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $komentar = Komentar::all();
        return view('artikel.create',compact('kategori','komentar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|',
            'gambar' => 'required|',
            'berita' => 'required|',
            'tanggal' => 'required|',
            'brain_id' => 'required',
            'komentar' => 'required'
        ]);
        $art = new Artikel;
        $art->judul = $request->judul;
        $art->gambar = $request->gambar;
        $art->berita = $request->berita;
        $art->tanggal = $request->tanggal;
        $art->brain_id = $request->brain_id;
        $art->save();
        $art->Komentar()->attach($request->komentar);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$art->judul</b>"
        ]);
        return redirect()->route('artikel.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $art = Artikel::findOrFail($id);
        return view('artikel.show',compact('art'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Artikel::findOrFail($id);
        $brain = Brain::all();
        $selectedBrain = Artikel::findOrFail($id)->brain_id;
        $selected = $art->Komentar->pluck('id')->toArray();
        $komentar = Komentar::all();
        // dd($selected);
        return view('artikel.edit',compact('art','brain','selectedBrain','selected','komentar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required|',
            'gambar' => 'required|',
            'berita' => 'required|',
            'tanggal' => 'required|',
            'brain_id' => 'required',
            'komentar' => 'required'
        ]);
        $art = Artikel::findOrFail($id);
        $art->judul = $request->judul;
        $art->gambar = $request->gambar;
        $art->berita = $request->berita;
        $art->tanggal = $request->tanggal;
        $art->brain_id = $request->brain_id;
        $art->save();
        $art->Komentar()->sync($request->komentar);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$art->judul</b>"
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Artikel::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('artikel.index');
    }
}
