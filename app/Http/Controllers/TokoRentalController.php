<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin;
use App\Toko;
use File;

class TokoRentalController extends Controller
{
    public function data()
    {
        $status = Toko::exists('status');
        $rental = Toko::where('id', 1)->get();
        $rental2 = Toko::where('id', 2)->get();
        $rental3 = Toko::where('id', 3)->get();
        $rental4 = Toko::where('id', 4)->get();
        $rental5 = Toko::where('id', 5)->get();
        $rental6 = Toko::where('id', 6)->get();
        // dd($rental);
        return view('home', compact('rental', 'rental2', 'rental3', 'rental3', 'rental4', 'rental5', 'rental6', 'status'));
    }
    public function storeRegister(Request $request) 
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
            
        ]);
        $admin = Admin::Create($data);

        return redirect(route('login'))->with('success', 'Selamat Berhasil Registrasi, Silahkan Login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function storeLogin(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required|exists:admins,username',
            'password' => 'required|exists:admins,password'
        ]);
        if (Admin::where('username', $request->username)->where('password', $request->password)->exists())
        {
            return redirect(route('dashboard'));
        }
        return view('admin.login')->with('error', 'Username/password anda salah');
    }

    public function login()
    {
        return view('admin.login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = Toko::all();
        if (request()->q != '') {
            $toko = $toko->where('nama_toko', 'LIKE', '%' . request()->q . '%');
        }
        
        return view('admin.index', compact('toko'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_toko' => 'required|string|max:255',
            'logo_toko' => 'required|image|mimes:png,jpeg,jpg',
            'alamat' => 'required|string',
            'nomor_hp' => 'required|numeric|digits:12',
            'websites' => 'required|string',
            'jumlah_mobil' => 'required|numeric',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('logo_toko')) {
            $file = $request->file('logo_toko');
            $filename = time() . Str::slug($request->nama_toko) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/toko', $filename);

            $data = Toko::create([
                'nama_toko' => $request->nama_toko,
                'logo_toko' => $filename,
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
                'websites' => $request->websites,
                'jumlah_mobil' => $request->jumlah_mobil,
                'deskripsi' => $request->deskripsi,
                'status' => true
            ]);
            return redirect(route('dashboard'))->with(['success' => 'Selamat data toko berhasil ditambah']);
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
        //
    }
}