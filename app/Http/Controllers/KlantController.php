<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use App\Models\Reservering;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

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
        $this->createOrUpdate($request, 'create');
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
        $this->createOrUpdate($request, 'update', $id);
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

    public function createOrUpdate(Request $request, $choice, $id = '')
    {

        $request->validate([
            'naam' => 'required|max:100',
            'address' => 'required|max:255',
            'datum_van_boeking' => 'required|date',
            'Aankomstdatum' => 'required|date|after:datum_van_boeking',
            'Vertrekdatum' => 'required|date|after:Aankomstdatum',
            'Creditkaartnummer' => 'required',
        ]);

        $klantReq = $request->collect()->only(['naam', 'address', 'Creditkaartnummer', 'kamer_id']);
        $resReq = $request->collect()->only(['datum_van_boeking', 'Aankomstdatum', 'Vertrekdatum', 'kamer_id']);


        if ($choice == 'create') {
            Klant::create($klantReq);
            $resReq->put('klant_id', Klant::all()->last()->id);
            Reservering::create($resReq);
        } elseif ($choice == 'update') {
            Klant::where('id', $id)->updated($klantReq);
            $resReq->put('klant_id', Klant::where('id', $id)->first()->id);
            Reservering::where('klant_id', $id)->updated($resReq);
        }
    }
}
