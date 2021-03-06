<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HospitalListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $dataHospital = $response->json();
        return view('hospital.list', compact('dataHospital'));
    }
}
