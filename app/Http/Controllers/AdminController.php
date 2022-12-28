<?php

namespace App\Http\Controllers;

use App\Models\Kamer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Kamer::all();
        return view('admin', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminFormCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kamer = new Kamer;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('images', 'public');
            $kamer->foto = $path;
        }
        $kamer->sort = $request->sort;
        $kamer->Kamernummer = $request->Kamernummer;
        $kamer->aantal_personen = $request->aantal_personen;
        $kamer->prijs = $request->prijs;
        $kamer->opervlakte = $request->opervlakte;
        $kamer->minibar_beschikbaarheid = $request->minibar_beschikbaarheid === 'on' ? true : false;
        $kamer->bad_beschikbaarheid = $request->bad_beschikbaarheid === 'on' ? true : false;
        $kamer->save();
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamer = Kamer::find($id);
        return view('adminFormUpdate', ['kamer' => $kamer]);
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
        $kamer = Kamer::find($id);
        $kamer->foto = $request->foto;
        if ($request->hasFile('foto')) {
            Storage::delete('public/' . $kamer->foto);
            $path = $request->file('foto')->store('images', 'public');
            $kamer->foto = $path;
        }
        $kamer->sort = $request->sort;
        $kamer->Kamernummer = $request->Kamernummer;
        $kamer->aantal_personen = $request->aantal_personen;
        $kamer->prijs = $request->prijs;
        $kamer->opervlakte = $request->opervlakte;
        $kamer->minibar_beschikbaarheid = $request->minibar_beschikbaarheid === 'on' ? true : false;
        $kamer->bad_beschikbaarheid = $request->bad_beschikbaarheid === 'on' ? true : false;
        $kamer->save();
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamer = Kamer::find($id);
        Storage::delete('public/' . $kamer->foto);
        $kamer->delete();
        return redirect()->back();
    }
}
