<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use datetime;
class dicariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jabatans = DB::table('jabatan')->paginate(1000);
      $dicari = DB::table('dicari')->paginate(1000);
      return view('backend.admin.dicari.index',compact('dicari','jabatans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
        DB::table('dicari')->insert(
        ['dicari' => $request['jabatan'],
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),

      ]);
          return redirect()->route('dicari.index')->with('pesan_sukses','Simpan Sukses');

      } catch (\Exception $e) {
        return redirect()->route('dicari.index')->with('pesan_sukses','Data Sudah Ada');

      }

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
      DB::table('dicari')->where('id', $id)->delete();
      return redirect()->route('dicari.index')->with('pesan_sukses','Hapus sukses !');

    }
}
