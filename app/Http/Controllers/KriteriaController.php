<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use DateTime;
class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->ha == 'admin'){
        $menu= 'create';
        $kriterias = DB::table('data_kriteria')->paginate(1000);
        return view('backend.admin.kriteria.index',compact('kriterias','menu'));

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
        'kriteria' => 'required|string|max:25',


      ]);

      if ($validator->fails()) {
        return

        redirect()->route('kriteria.index')->withErrors($validator)->withInput();
      }

      DB::table('data_kriteria')->insert(
      ['kriteria' => $request['kriteria'],
      'created_at' => new DateTime(),
      'updated_at' => new DateTime(),

    ]);

        return redirect()->route('kriteria.index')->with('pesan_sukses','Simpan Sukses');
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
      $menu= 'edit';
      $kriteria= DB::table('data_kriteria')->find($id);
      $kriterias = DB::table('data_kriteria')->paginate(1000);
      // $id = $user->id;
      return view('backend.admin.kriteria.index',compact('kriterias','kriteria','menu'));
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
      DB::table('data_kriteria')->where('id', $id)->delete();
      return redirect()->route('kriteria.index')->with('pesan_sukses','Hapus sukses !');

    }
    public function kriteriaupdate(Request $request)
    {
      $id= $request['id'];
      DB::table('data_kriteria')->where('id',$id)->update(
      //rewuest berdasarkan name
      [
      'kriteria' => $request['kriteria2'],
    ]);

      return redirect()->route('kriteria.index')->with('pesan_sukses','update sukses !');
    }
    public function kriteriasimpan(Request $request)
    {
      // try {
        if ($request['jenjang'] == '3') {
          $jenjang = 5.4*0.1;
        }
        elseif ($request['jenjang'] == 's1') {
          $jenjang = 5.4*0.2;
        }
        elseif ($request['jenjang'] == 's2') {
          $jenjang = 5.4*0.3;
        }
        else {
          $jenjang = 0;
        }
        if ($request['akreditasi'] == 'A') {
          $akreditasi = 5.4*0.3;
        }
        elseif ($request['akreditasi'] == 'B')
        {
          $akreditasi = 5.4*0.2;
        }
        elseif ($request['akreditasi'] == 'C')
        {
          $akreditasi = 5.4*0.1;
        }
        else {
          $akreditasi=0;
        }
        if ($request['fresh'] == '1') {
          $fresh = 5.4*0.1;
        }
        elseif ($request['fresh'] == '2')
        {
          $fresh = 5.4*0.2;
        }
        elseif ($request['fresh'] == '3')
        {
          $fresh = 5.4*0.3;
        }
        else {
          $fresh = 0;
        }
        if ($request['capability'] == 'Istimewa') {
          $capability = 30;
        }
        elseif ($request['capability'] == 'Bagus') {
          $capability = 27.5;
        }
        elseif ($request['capability'] == 'Cukup') {
          $capability = 22.5;
        }
        elseif ($request['capability'] == 'Kurang') {
          $capability = 15;
        }
        else {
          $capability = 5;
        }
        if ($request['commitment'] == 'Istimewa') {
          $commitment = 30;
        }
        elseif ($request['commitment'] == 'Bagus') {
          $commitment = 27.5;
        }
        elseif ($request['commitment'] == 'Cukup') {
          $commitment = 22.5;
        }
        elseif ($request['commitment'] == 'Kurang') {
          $commitment = 15;
        }
        else {
          $commitment = 5;
        }
        // if ($request['alamat'] <= 1) {
        //   $almt = 30;
        // }
        // elseif ($request['alamat'] >1 and $request['alamat'] <=3) {
        //   $almt = 27.5;
        // }
        // elseif ($request['alamat'] >3 and $request['alamat'] <=5) {
        //   $almt = 22.5;
        // }
        // elseif ($request['alamat'] >5 and $request['alamat'] <=7) {
        //   $almt = 15;
        // }
        // else {
        //   $almt = 5;
        // }
        if ($request['credibility'] == 'Istimewa') {
          $credibility = 30;
        }
        elseif ($request['credibility'] == 'Bagus') {
          $credibility = 27.5;
        }
        elseif ($request['credibility'] == 'Cukup') {
          $credibility = 22.5;
        }
        elseif ($request['credibility'] == 'Kurang') {
          $credibility = 15;
        }
        else {
          $credibility = 5;
        }
        if ($request['characher'] == 'Istimewa') {
          $characher = 30;
        }
        elseif ($request['characher'] == 'Bagus') {
          $characher = 27.5;
        }
        elseif ($request['characher'] == 'Cukup') {
          $characher = 22.5;
        }
        elseif ($request['characher'] == 'Kurang') {
          $characher = 15;
        }
        else {
          $characher = 5;
        }
        if ($request['capacity'] == 'Istimewa') {
          $capacity = 30;
        }
        elseif ($request['capacity'] == 'Bagus') {
          $capacity = 27.5;
        }
        elseif ($request['capacity'] == 'Cukup') {
          $capacity = 22.5;
        }
        elseif ($request['capacity'] == 'Kurang') {
          $capacity = 15;
        }
        else {
          $capacity = 5;
        }

        $datas = DB::table('user2s')->where('id',$request['np'])->first();
        // dd($datas);
        $lulusan=$datas->pddk_thr;
        $jabatan=$datas->minat;
        // dd($jabatan);
        $lulusan_plmr= $datas->pddk_thr;
        $masuk = $datas->minat;
        $jabatan = DB::table('jabatan')->select('jabatan')->get();
        // dd($jabatan);
        foreach ($jabatan as $jabatans) {
          $tes=$jabatans->jabatan;
          if ($tes==$masuk) {
            $lulusan = DB::table('jurusan_jabatan')->get();
            foreach ($lulusan as $lulusans) {
              $tes2=$lulusans->jurusan;
              if ($tes2==$lulusan_plmr) {
                $tes3=$lulusans->jabatan_id;

                // dd($tes3);
                $point2 = DB::table('jurusan_jabatan')->where('jabatan_id',$tes3)->where('jurusan',$tes2)->first();
                $point=$point2->point;
                // dd($point);
              }
              else {
                $point=0;
              }
            }
          }
        }
        DB::table('kriteria')->insert(
        ['np' => $request['np'],
        'jenjang' => $jenjang,
        'akreditasi' => $akreditasi,
        'fresh' => $fresh,
        'competency' => ($jenjang+$akreditasi+$fresh),
        'capability' => ($capability*0.9),
        'commitment' => ($commitment*0.3),
        'credibility' => ($credibility*0.6),
        'characher' => ($characher*0.6),
        'capacity' => ($capacity*0.6),
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),

      ]);
      $total=($jenjang+$akreditasi+$fresh+($capability*0.9)+($commitment*0.3)+($credibility*0.6)+($characher*0.6)+($capacity*0.6)+($point*0.45));
      // $total=$total*0.9;
      //$point itu nilai kesesuaianya 

      $sub = DB::table('penilaian')->where('users_id',$request['np'])->first(); 
      // memanggil kolom soal pada tabel penilaian
      $sub = $sub->soal;
      // dd($sub);
      $subs = $sub+$total;
      // dd($subs);

      DB::table('penilaian')->where('users_id',$request['np'])->update(
        [
          'wawancara' =>$total,
          'total' =>$subs,
          'updated_at' => new DateTime(),      ]);



          return redirect()->route('pelamar.index')->with('pesan_sukses','Simpan Sukses');
      // } catch (\Exception $e) {
      //   return redirect()->route('pelamar.index')->with('pesan_sukses','Sudah Terdata');
      //
      // }


    }
}
