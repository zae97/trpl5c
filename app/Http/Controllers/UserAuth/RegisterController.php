<?php

namespace App\Http\Controllers\UserAuth;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//Seller Model
use App\User2;

//Auth Facade used in guard
//REGISTERNYA PELAMAR
use Auth;
class RegisterController extends Controller
{
  protected $redirectPath = 'user_home';

  public function showRegistrationForm()
  {

    $jabatans = DB::table('jabatan')->paginate(1000);

      return view('user.auth.register',compact('jabatans'));
  }
  //Handles registration request for seller
    public function register(Request $request)
    {


       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $user = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($user);

       //Redirects sellers
        return redirect($this->redirectPath);
    }
    protected function validator(array $data)
   {
       return Validator::make($data, [
           'name' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|min:6|confirmed',
       ]);
   }
   protected function create(array $data)
    {
        // dd($data['jabatan']);
        return User2::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'ttl' => $data['ttl'],
            'jk' => $data['jk'],
            'no_tlp' => $data['no_tlp'],
            'pddk_thr' => $data['pddk_thr'],
            'status' => 'belum',
            'minat' => $data['jabatan'],
            'agama' => $data['agama'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    protected function guard()
     {
         return Auth::guard('web_user');
     }
}
