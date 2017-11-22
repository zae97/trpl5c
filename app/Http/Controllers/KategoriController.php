<?php

namespace App\Http\Controllers;
use DB;
use Auth;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      if(Auth::user()->ha == 'admin'){
        $kategoris = DB::table('kategori_soal')->paginate(1000);
        return view('backend.admin.soal.index',compact('kategoris'));

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
      $validator = Validator::make($request->all(), [
        'kategori' => 'required|string|max:40',



      ]);

      if ($validator->fails()) {
        return

        redirect()->route('kategori.index')->withErrors($validator)->withInput();
      }

      DB::table('kategori_soal')->insert(
      ['kategori' => $request['kategori'],
      'created_at' => new DateTime(),
      'updated_at' => new DateTime(),

    ]);

        return redirect()->route('kategori.index')->with('pesan_sukses','Simpan Sukses');
        // echo 'Sukses simpan!';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $id=$id;
      $soals = DB::table('soal')->where('kategori',$id)->paginate(1000);
      return view('backend.admin.soal.soal',compact('soals','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
      DB::table('kategori_soal')->where('id', $id)->delete();
      return redirect()->route('kategori.index')->with('pesan_sukses','Hapus sukses !');

    }
}
