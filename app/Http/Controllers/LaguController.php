<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;
use App\Models\Penyanyi;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lagu = Lagu::with('penyanyi')->get();
        $paginate = Lagu::orderBy('id', 'asc')->paginate(3);
        return view('index',['lagu' => $lagu,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyanyi = Penyanyi::all();
        return view('tambah',['penyanyi' => $penyanyi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_lagu' => 'required',
            'penyanyi' => 'required'
        ]);

        $lagu = new Lagu;
        $lagu->judul_Lagu = $request->get('judul_lagu');
        $lagu->penyanyi_id = $request->get('penyanyi');
        $lagu->save();

        return redirect()->route('lagu')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
