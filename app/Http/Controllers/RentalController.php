<?php

namespace App\Http\Controllers;

use App\Rental;
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
        return view('cars.detail-fortuner2');
    }

    public function detailExpander()
    {
        return view('cars.detail-expander');
    }

    public function detailAvanzaDua()
    {
        return view('cars.detail-avanza2');
    }

    public function detailAvanzaTiga()
    {
        return view('cars.detail-avanza3');
    }

    public function detailExpanderDua()
    {
        return view('cars.detail-expander2');
    }

    public function detailErtigaDua()
    {
        return view('cars.detail-ertiga2');
    }

    public function detailErtiga()
    {
        return view('cars.detail-ertiga');
    }

    public function detailXenia()
    {
        return view('cars.detail-xenia');
    }

    public function detailJazz()
    {
        return view('cars.detail-jazz');
    }

    public function detailYaris()
    {
        return view('cars.detail-yaris');
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
        return view('toko.cars-bintangmas');
    }

    public function carsCakra()
    {
        return view('toko.cars-cakra');
    }

    public function carsArtharent()
    {
        return view('toko.cars-artharent');
    }

    public function carsPlatinum()
    {
        return view('toko.cars-platinum');
    }

    public function carsKeken()
    {
        return view('toko.cars-keken');
    }

    public function carsRaja()
    {
        return view('toko.cars-raja');
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
        return view('home');
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
