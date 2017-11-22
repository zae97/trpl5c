<?php

namespace App\Http\Controllers;
use DB;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->ha == 'admin'){
        $menu='create';
        $jabatans = DB::table('jabatan')->paginate(1000);
        return view('backend.admin.jabatan.index',compact('jabatans','menu'));

      }
      else{
      return view('eror.index2');
      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'jabatan' => 'required|string|max:150',
        'gaji' => 'required|max:50',
        'tunjangan' => 'required|string',


      ]);

      if ($validator->fails()) {
        return

        redirect()->route('jabatan.index')->withErrors($validator)->withInput();
      }

      $mk=$request['mk'];
      $mkk=$request['mkk'];
      $mkkk=$mk. $mkk;
      // dd($mkkk);
      DB::table('jabatan')->insert(
      ['jabatan' => $request['jabatan'],
      'kriteria_jabatan' => $request['k_jabatan'],
      'gaji' => $request['gaji'],
      'tunjangan' => $request['tunjangan'],
      'masa_kerja' => $mkkk,
      'created_at' => new DateTime(),
      'updated_at' => new DateTime(),

    ]);

        return redirect()->route('jabatan.index')->with('pesan_sukses','Simpan Sukses');
        // echo 'Sukses simpan!';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_jabatan)
    {
      $jabatan = DB::table('jabatan')->where('kode_jabatan',$kode_jabatan)->first();
      // dd($jabatan);
      return view('backend.admin.jabatan.show',compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_jabatan)
    {
      $menu= 'edit';
      $jabatan= DB::table('jabatan')->where('kode_jabatan',$kode_jabatan)->first();
      $jabatans = DB::table('jabatan')->paginate(1000);
      return view('backend.admin.jabatan.index',compact('jabatans','menu','jabatan'));

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
    
    public function destroy($kode_jabatan)
    {
      DB::table('jabatan')->where('kode_jabatan', $kode_jabatan)->delete();
      return redirect()->route('jabatan.index')->with('pesan_sukses','Hapus sukses !');

    }
    public function jabatanupdate(Request $request)
    {
      $mk=$request['mk'];
      $mkk=$request['mkk'];
      $mkkk=$mk. $mkk;
      $id=$request['id'];
      DB::table('jabatan')->where('kode_jabatan',$id)->update(
        ['jabatan' => $request['jabatan'],
        'kriteria_jabatan' => $request['k_jabatan'],
        'gaji' => $request['gaji'],
        'tunjangan' => $request['tunjangan'],
        'masa_kerja' => $mkkk,
        'updated_at' => new DateTime(),
      ]);

      return redirect()->route('jabatan.index')->with('pesan_sukses','update sukses !');
    }
}
