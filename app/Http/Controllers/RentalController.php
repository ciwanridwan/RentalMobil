<?php

namespace App\Http\Controllers;

use App\Rental;
use App\Toko;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function detailAyla()
    {
        return view('cars.detail-ayla');
    }

    public function detailErtigaTiga()
    {
        return view('cars.detail-ertiga3');
    }

    public function detailJazzDua()
    {
        return view('cars.detail-jazz2');
    }

    public function detailAlphard()
    {
        return view('cars.detail-alphard');
    }

    public function detailInova()
    {
        $toko = Toko::where('id', 4)->get();
        return view('cars.detail-inova');
    }

    public function detailRush()
    {
        return view('cars.detail-rush');
    }

    public function detailFortunerTiga()
    {
        return view('cars.detail-fortuner3');
    }

    public function detailFortunerDua()
    {
        $toko = Toko::where('id', 3)->get();
        return view('cars.detail-fortuner2', compact('toko'));
    }

    public function detailExpander()
    {
        $toko = Toko::where('id', 2)->get();
        return view('cars.detail-expander', compact('toko'));
    }

    public function detailAvanzaDua()
    {
        $toko = Toko::where('id', 2)->get();
        return view('cars.detail-avanza2', compact('toko'));
    }

    public function detailAvanzaTiga()
    {
        $nama = Toko::where('id', 1)->get();
        return view('cars.detail-avanza3', compact('nama'));
    }

    public function detailExpanderDua()
    {
        $nama = Toko::where('id', 1)->get();
        return view('cars.detail-expander2', compact('nama'));
    }

    public function detailErtigaDua()
    {
        $nama = Toko::where('id', 1)->get();
        return view('cars.detail-ertiga2', compact('nama'));
    }

    public function detailErtiga()
    {
        return view('cars.detail-ertiga');
    }

    public function detailXenia()
    {
        $toko = Toko::where('id', 2)->get();
        return view('cars.detail-xenia', compact('toko'));
    }

    public function detailJazz()
    {
        $toko = Toko::where('id', 3)->get();
        return view('cars.detail-jazz', compact('toko'));
    }

    public function detailYaris()
    {
        $toko = Toko::where('id', 3)->get();
        return view('cars.detail-yaris', compact('toko'));
    }

    public function detailAvanza()
    {
        return view('cars.detail-avanza');
    }

    public function detailFortuner()
    {
        return view('cars.detail-fortuner');
    }

// Toko
    
    public function carsBintangMas()
    {
        $toko = Toko::all();
        return view('toko.cars-bintangmas', compact('toko'));
    }

    public function carsCakra()
    {
        $toko = Toko::all();
        return view('toko.cars-cakra', compact('toko'));
    }

    public function carsArtharent()
    {
        $toko = Toko::all();
        return view('toko.cars-artharent', compact('toko'));
    }

    public function carsPlatinum()
    {
        $toko = Toko::all();
        return view('toko.cars-platinum', compact('toko'));
    }

    public function carsKeken()
    {
        $toko = Toko::all();
        return view('toko.cars-keken', compact('toko'));
    }

    public function carsRaja()
    {
        $nama = Toko::all();
        return view('toko.cars-raja', compact('nama'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
    public function cars()
    {
        return view('cars');
    }
    
    public function about()
    {
        return view('about');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toko = Toko::all();
        return view('home', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required',
            'nomor_hp' => 'required|digits_between:11,12',
            'mulai_sewa' => 'required',
            'akhir_sewa' => 'required',
            'mobil' => 'required',
        ]);
        $rental = Rental::Create($validatedData);

        return view('layout-success')->with('Success, Selamat Data Berhasil Ditambah');
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
