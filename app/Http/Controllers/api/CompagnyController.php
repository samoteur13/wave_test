<?php

namespace App\Http\Controllers\api;

use App\Models\Compagny;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompagnyRequest;
use App\Http\Resources\CompagnyResource;
use Illuminate\Database\Eloquent\Collection;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Collection
    {
        return Compagny::with('agencies', 'users')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompagnyRequest $compagnyRequest)
    {
        Compagny::create($compagnyRequest->all());
        return "la compagny $compagnyRequest->name a est ajouter";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compagny $compagny): CompagnyResource
    {
        return new CompagnyResource($compagny);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompagnyRequest $compagnyRequest, Compagny $compagny)
    {
        $compagny->update($compagnyRequest->all());
        return "le film a était mis à jour";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny)
    {
        $compagny->delete();
        return "delete succes $compagny";
    }
}
