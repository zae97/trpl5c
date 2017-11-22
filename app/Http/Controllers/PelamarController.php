<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Test;
use App\TestAnswer;
class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pelamars = DB::table('user2s')->paginate(1000);
      return view('backend.admin.pelamar.index',compact('pelamars'));

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

      $test2 = DB::table('kriteria')->where('np',$id)->first();
      // dd($test2);
      $test = DB::table('tests')->where('user_id',$id)->first();
      $soal = DB::table('questions')->count();
      // dd($soal);

      // $test = Test::find($id)->load('user');
      // dd($test);
      // if ($test) {
          $results = TestAnswer::where('user_id',$id)
              // ->with('question')
              // ->with('question_options')
              ->get()
          ;

          // $results= DB::table('questions')
          // ->join('questions_options','questions.id','=','questions_options.question_id')
          // // ->join('test_answers','questions_options.question_id','=','test_answers.option_id')
          // ->get();
          // dd($results);

      // }
      //
      // return view('results.show', compact('test', 'results'));
      $pelamar = DB::table('user2s')->find($id);
      $np= $pelamar->id;
      return view('backend.admin.pelamar.show',compact('pelamar','np','test', 'results','soal','test2'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      DB::table('user2s')->where('id',$id)->update(
      //rewuest berdasarkan name
      [
      'status' => 'verifikasi',

    ]);

      return redirect()->route('pelamar.index')->with('pesan_sukses','Perubahan Status Berhasil');
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
      DB::table('user2s')->where('id', $id)->delete();
      return redirect()->route('pelamar.index')->with('pesan_sukses','Hapus sukses !');
    }
}
