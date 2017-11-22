<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RangkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rangkings = DB::table('penilaian')->join('user2s','penilaian.users_id','user2s.id')->orderBy('total','desc')->get();
        // dd($rangkings);
        return view('backend.admin.rangking.index',compact('rangkings'));
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
      //  echo 'test';
       DB::table('penilaian')->where('id',$id)->update(
       //rewuest berdasarkan name
       [
       'status_test' => 'lolos',

     ]);

       return redirect()->route('rangking.index')->with('pesan_sukses','Perubahan Status Sukses');
     }

     public function edit2($id)
     {
       DB::table('penilaian')->where('id',$id)->update(
       //rewuest berdasarkan name

        ['status_test' => 'tidak lolos',

      ]);
        return redirect()->route('rangking.index')->with('pesan_sukses','Perubahan Status Sukses');


      //  return redirect()->route('hasil.index');
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
