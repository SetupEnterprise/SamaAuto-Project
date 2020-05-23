<?php

namespace App\Http\Controllers;

use App\Billet;
use App\models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_gerant()
    {
        return view('admin/create-gerant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function stat_client()
    {
        $clients = Client::count(); 
        $data = new DataStatistiqueClient();
        $nbreAuth = $data->nbre_auth(); 
       
        return view('admin.statistiques-client', compact('clients', 'nbreAuth'));
    }

    public function stat_gerant()
    {
        return view('admin.statistiques-gerant');
    }

    public function stat_billet()
    {
        $totalBillet = Billet::count();
        $totalReporte = Billet::where('etat','reporte')->count();
        $totalVendu = Billet::where('etat','vendu')->count();
        return view('admin.statistiques-billet', compact('totalBillet', 'totalReporte', 'totalVendu'));
    }

    public function stat_vendeur()
    {
        return view('admin.statistiques-vendeur');
    }
}
