<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Vaccination;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataVaksin = Vaccination::paginate(10);
        return view('vaksinasi.data-vaksinasi', compact('dataVaksin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaksinasi.create-vaksinasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Vaccination::create([
            "name" => $request->name,
            "nik" => $request->nik,
            "vaccination_date" => $request->vaccination_date
        ]);

        return redirect('data-vaksinasi')->with('toast_success', 'Anda telah berhasil melakukan tambah data!');
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
        $editVaksin = Vaccination::findorfail($id);
        return view('vaksinasi.edit-vaksinasi', compact('editVaksin'));
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
        $editVaksin = Vaccination::findorfail($id);
        $editVaksin->update($request->all());

        return redirect('data-vaksinasi')->with('toast_success', 'Anda telah berhasil melakukan update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editVaksin = Vaccination::findorfail($id);
        $editVaksin->delete();
        return back()->with('info', "Anda telah berhasil melakukan hapus data!");
    }
}
