<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Komentar;

class KomentarController extends Controller
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
        $komentar = Komentar::all();
        return view('komentar.index',compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komentar.create');
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
            'komentar' => 'required|',
            'tanggal' => 'required|'
        ]);
        $komentar = new Komentar;
        $komentar->komentar = $request->komentar;
        $komentar->tanggal = $request->tanggal;
        $komentar->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$komentar->komentar</b>"
        ]);
        return redirect()->route('komentar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $komentar = Komentar::findOrFail($id);
        return view('komentar.show',compact('komentar')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komentar = Komentar::findOrFail($id);
        return view('komentar.edit',compact('komentar'));
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
            'komentar' => 'required|',
            'tanggal' => 'required|'
        ]);
        $komentar = Komentar::findOrFail($id);
        $komentar->komentar = $request->komentar;
        $komentar->tanggal = $request->tanggal;
        $komentar->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$komentar->komentar</b>"
        ]);
        return redirect()->route('komentar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Komentar::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('komentar.index');
    }
}
