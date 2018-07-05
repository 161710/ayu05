<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use Session;

class KategoriController extends Controller
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
        $kategori = Kategori::with('Artikel')->get();
        return view('kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $art = Artikel::all();
        return view('kategori.create',compact('art'));

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
            'news' => 'required|',
            'infotainment' => 'required|',
            'sport' => 'required|',
            'politik' => 'required|',
            'fashion' => 'required|',
            'artikel_id' => 'required|unique:kategoris'
        ]);
        $kategori = new Kategori;
        $kategori->news = $request->news;
        $kategori->infotainment = $request->infotainment;
        $kategori->sport = $request->sport;
        $kategori->politik = $request->politik;
        $kategori->fashion = $request->fashion;
        $kategori->artikel_id = $request->artikel_id;
        $kategori->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$kategori->news</b>"
        ]);
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        $art = Artikel::all();
        $selectedArt = Kategori::findOrFail($id)->artikel_id;
        return view('kategori.edit',compact('art','kategori','selectedArt'));
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
            'news' => 'required|',
            'infotainment' => 'required|',
            'sport' => 'required|',
            'politik' => 'required|',
            'fashion' => 'required|',
            'artikel_id' => 'required'
        ]);
        $kategori = Kategori::findOrFail($id);
        $kategori->news = $request->news;
        $kategori->infotainment = $request->infotainment;
        $kategori->sport = $request->sport;
        $kategori->politik = $request->politik;
        $kategori->fashion = $request->fashion;
        $kategori->artikel_id = $request->artikel_id;
        $kategori->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$kategori->news</b>"
        ]);
        return redirect()->route('kategori.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Kategori::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('kategori.index');
    }
}
