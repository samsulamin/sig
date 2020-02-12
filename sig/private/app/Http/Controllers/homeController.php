<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/index');
        }
        return redirect('/login');
    }
   
    public function forgot()
    {
        //
        return view('forgot');
    }
    
    public function ubahPass()
    {
        //
        return view('ubahPass');
    } 

    public function prosesUbah(Request $request)
    {

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    } 

    public function store(Request $request)
    {
        $user = new \App\User;
        $user->level = 'wisatawan';
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->remember_token = Str::random(60);
        $user->save();

        $id = $user->id;
        DB::table('wisatawan')->insert([
            
            'namawisatawan' => $request->nama,
            'wisatawan_id' => $id,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'umur' => $request->umur,
            'jeniskelamin' => $request->jk,
            'status' => 1
        ]);
        return redirect('/login');
    } 
    
}
