<?php

namespace App\Http\Controllers;

use App\Supplement;
use Illuminate\Http\Request;

class SupplementController extends Controller
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
    public function create(Request $request)
    {
        $bookPoint= new  Supplement();
 
        $bookPoint->description = $request['description'];
        $bookPoint->cost_exc = $request['cost_exc'];
        $bookPoint->cost_incl = $request['cost_incl'];
        $bookPoint->perc_incl = $request['perc_incl'];
        $bookPoint->cost_patient = $request['cost_patient'];
        $bookPoint->invoice_id = $request['invoice_id'];
        $bookPoint->supplier_id = $request['supplier_id'];
        $bookPoint->mini_levels = $request['mini_levels'];
        $bookPoint->stock_level = $request['stock_level'];
        $bookPoint->napi_code = $request['napi_code'];
        $bookPoint->ga_id = $request['ga_id'];
        $bookPoint->hcp_id = $request['hcp_id'];

$bookPoint->save();

return back();
    }


    // $table->string('description');
    // $table->string('cost_exc');
    // $table->string('cost_incl');
    // $table->string('perc_incl');
    // $table->string('cost_patient');
    // $table->string('invoice_id');
    // $table->string('supplier_id');
    // $table->string('mini_levels');
    // $table->string('stock_level');
    // $table->string('napi_code');
    // $table->string('ga_id');
    // $table->string('hcp_id');
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
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function show(Supplement $supplement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplement $supplement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplement $supplement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplement  $supplement
     * @return \Illuminate\Http\Response
     */
    public function deletesupplement(Request $request)
    {
        $accept = Supplement::where('id', $request->input('id'))->delete();

        return back();

    }
}
