<?php

namespace App\Http\Controllers;

use App\Domaine_Histo_Domaine;
use App\Type_activite;
use Illuminate\Http\Request;

class DomaineHistoDomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastType=Type_activite::orderBy('created_at','DESC')->first();
        $lastIdType=$lastType->id;
        $lastNomType=$lastType->nom;
        $ativiteDom=[];
            $domaines=$request->domaineTab3;
            $domaineId=$request->domaineTab2;
            foreach($domaines as $k){ 
                \Log::info($k);// /storage/laravel.log -> voir les info
                \Log::info($domaineId);
                array_push($ativiteDom,['domaine_historique_id'=> $k,'domaine_id'=>$domaineId,'type_id'=>$lastIdType,'type_nom'=>$lastNomType]);
                
            }
            Domaine_Histo_Domaine::insert($ativiteDom);
        
        return response()->json(['message'=>'Ajout bien fait 3']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domaine_Histo_Domaine  $domaine_Histo_Domaine
     * @return \Illuminate\Http\Response
     */
    public function show(Domaine_Histo_Domaine $domaine_Histo_Domaine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domaine_Histo_Domaine  $domaine_Histo_Domaine
     * @return \Illuminate\Http\Response
     */
    public function edit(Domaine_Histo_Domaine $domaine_Histo_Domaine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domaine_Histo_Domaine  $domaine_Histo_Domaine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domaine_Histo_Domaine $domaine_Histo_Domaine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domaine_Histo_Domaine  $domaine_Histo_Domaine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine_Histo_Domaine $domaine_Histo_Domaine)
    {
        //
    }
}
