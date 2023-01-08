<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use Illuminate\Http\Request;

class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klants = Klant::all();
        return view('adminKlant', [
            'klants' => $klants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminKlantFormCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klant = new Klant();
        $klant->datum_van_boeking = $request->datum_van_boeking;
        $klant->naam = $request->naam;
        $klant->address = $request->address;
        $klant->Aankomstdatum = $request->Aankomstdatum;
        $klant->Vertrekdatum = $request->Vertrekdatum;
        $klant->Creditkaartnummer = $request->Creditkaartnummer;
        $klant->Kamernummer = $request->Kamernummer;
        $klant->save();
        return redirect('adminKlant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $klant = Klant::find($id);
        return view('adminKlantFormUpdate', ['klant' => $klant]);
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
        $klant = Klant::find($id);
        $klant->datum_van_boeking = $request->datum_van_boeking;
        $klant->naam = $request->naam;
        $klant->address = $request->address;
        $klant->Aankomstdatum = $request->Aankomstdatum;
        $klant->Vertrekdatum = $request->Vertrekdatum;
        $klant->Creditkaartnummer = $request->Creditkaartnummer;
        $klant->Kamernummer = $request->Kamernummer;
        $klant->save();
        return redirect('adminKlant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klant = Klant::find($id);
        $klant->delete();
        return redirect('adminKlant');
    }
}
