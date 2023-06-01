<?php

namespace App\Http\Controllers;

use App\Models\DetailsCommande;
use Illuminate\Http\Request;

class DetailsCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailCommande = DetailsCommande::with('commande','book')->get();
        return response()->json($detailCommande);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(DetailsCommande::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_commande = DetailsCommande::with('commande','book')->find($id);
        return response()->json($detail_commande);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detail_commande = DetailsCommande::find($id);
        $detail_commande->update($request->all());
        return response()->json('Detail commande updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
