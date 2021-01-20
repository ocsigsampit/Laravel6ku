<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Register;

class RegisterController extends Controller
{

    public function index()
    {
        $registers = DB::select("SELECT a.id_pegawai, b.jenis_spt, a.no_register, a.jumlah_spt, a.tgl_terima FROM registers a LEFT JOIN jenis_spts b ON a.id_spt = b.id_spt");

        return view('register', ['registers' => $registers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert_register');
    }


    public function prosesForm()
    {
        request()->validate([
            'id_pegawai' => 'required|size:18|not_in:0',
            'id_spt' => 'required|not_in:0',
            'tgl_terima' => 'required',
            'no_register' => 'required|min:8|max:50',
            'jumlah_spt' => 'required|min:1|max:200|numeric']);

        $all_req = [
            'id_pegawai' => request('id_pegawai'),
            'id_spt' => request('id_spt'),
            'no_register' => request('no_register'),
            'tgl_terima' => request('tgl_terima'),
            'jumlah_spt' => request('jumlah_spt'),
            'keterangan' => request('keterangan')
        ];

        Register::create($all_req);

        return back()->with('success','Data berhasil disimpan !');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
