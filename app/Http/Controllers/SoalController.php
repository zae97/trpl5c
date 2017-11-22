<?php

namespace App\Http\Controllers;
use DB;
use DateTime;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->ha == 'admin'){
        $soals = DB::table('soal')->paginate(1000);
        return view('backend.admin.soal.soal',compact('soals'));

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
      // echo "es";
      $validator = Validator::make($request->all(), [
        'soal' => 'required|string|max:150',



      ]);

      if ($validator->fails()) {
        return
        redirect()->route('soal.soal')->withErrors($validator)->withInput();
      }

      DB::table('soal')->insert(
      ['soal' => $request['soal'],
      'jawaban' => "",
      'kategori' => $request['id'],
      'created_at' => new DateTime(),
      'updated_at' => new DateTime(),

    ]);

    $id = $request['id'];

        return redirect()->route('kategori.show',$id)->with('pesan_sukses','Simpan Sukses');
        // echo 'Sukses simpan!';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    //view
    {
      $id=$id;
      $soals = DB::table('soal')->where('id',$id)->first();
      $jawabans = DB::table('jawaban')->where('soal',$id)->get();
      // $jawaban1 = $jawaban1->jawaban;

      // dd($jawaban1);
      return view('backend.admin.soal.jawaban',compact('soals','id','jawabans'));

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
    public function update(Request $request)
    {
      $soal = $request['jawaban'];
      // dd($soal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('soal')->where('id', $id)->delete();
      return redirect()->route('kategori.index')->with('pesan_sukses','Hapus sukses !');

    }
}
