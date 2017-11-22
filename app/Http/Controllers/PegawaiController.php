<?php

namespace App\Http\Controllers;
use DB;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // halaman awal tampil langsung create dan view
    {
        $menu= 'create';
        $jabatans = DB::table('jabatan')->paginate(1000);
        $pegawais = DB::table('pegawai')->paginate(1000);
        return view('backend.admin.pegawai.index',compact('pegawais','jabatans','menu'));
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
    public function store(Request $request) // penyimpanan
    {
      $validator = Validator::make($request->all(), [
        'nip' => 'required|string|max:11',
        'nama' => 'required|max:50',
      ]);

      if ($validator->fails()) {
        // pengecekan {
        return

        redirect()->route('pegawai.index')->withErrors($validator)->withInput();
        //pengembalian ketika gagal
      }

      DB::table('pegawai')->insert(
      ['nip' => $request['nip'],
      'nama' => $request['nama'],
      'alamat' => $request['alamat'],
      'ttl' => $request['ttl'],
      'jk' => $request['jk'],
      'jabatan' => $request['jabatan'],
      'email' => $request['email'],
      'no_tlp' => $request['tlp'],
      'tgl_msk' => $request['tglmskkrj'],
      'pddk_thr' => $request['pt'],
      'agama' => $request['agama'],
      'status' => $request['sk'],
      'status_pegawai' => $request['sp'],
      'created_at' => new DateTime(),
      'updated_at' => new DateTime(),

    ]);

        return redirect()->route('pegawai.index')->with('pesan_sukses','Simpan Sukses');
        // echo 'Sukses simpan!';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
      $pegawai = DB::table('pegawai')->where('nip',$nip)->first();
      // dd($jabatan);
      return view('backend.admin.pegawai.show',compact('pegawai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nip) //isi data yg edit keluar
    {
      $menu= 'edit';
      $pegawai= DB::table('pegawai')->where('nip',$nip)->first();
      $jabatans = DB::table('jabatan')->paginate(1000);
      $pegawais = DB::table('pegawai')->paginate(1000);
      return view('backend.admin.pegawai.index',compact('pegawais','jabatans','menu','pegawai'));
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
    public function destroy($nip)
    {
      DB::table('pegawai')->where('nip', $nip)->delete();
      return redirect()->route('pegawai.index')->with('pesan_sukses','Hapus sukses !');
    }


    public function pegawaiupdate(Request $request)
    //untuk update data pegawai
    {
      $id= $request['nip'];
      // dd($id);
      DB::table('pegawai')->where('nip',$id)->update(
        ['nama' => $request['nama2'],
        'alamat' => $request['alamat'],
        'ttl' => $request['ttl'],
        'jk' => $request['jk'],
        'jabatan' => $request['jabatan'],
        'email' => $request['email'],
        'no_tlp' => $request['tlp'],
        'tgl_msk' => $request['tglmskkrj'],
        'pddk_thr' => $request['pt'],
        'agama' => $request['agama'],
        'status' => $request['sk'],
        'status_pegawai' => $request['sp'],
        'updated_at' => new DateTime(),
      ]);

      return redirect()->route('pegawai.index')->with('pesan_sukses','update sukses !');
    }
}
