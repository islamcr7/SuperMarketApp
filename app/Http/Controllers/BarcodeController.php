<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use Illuminate\Http\Request;
use App\Http\Resources\BarcodeResource as BarcodeResource;
use App\Http\Controllers\BaseController as BaseController;

class BarcodeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Barcodes = Barcode::latest()->paginate(10);

        return $this->sendResponse(BarcodeResource::collection($Barcodes), 'Barcodes retrieved successfully.');

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
        
        $Barcode = Barcode::create($request->all());
   
        return $this->sendResponse(new BarcodeResource($Barcode), 'Barcode created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barcode  $Barcode
     * @return \Illuminate\Http\Response
     */
    public function show(Barcode $Barcode)
    {
        
        return $this->sendResponse(new BarcodeResource($Barcode), 'Barcode retrieved successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barcode  $Barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Barcode $Barcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barcode  $Barcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barcode $Barcode)
    {

        $Barcode->update($request->all());   
 
        return $this->sendResponse(new BarcodeResource($Barcode), 'Barcode updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barcode  $Barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barcode $Barcode)
    {

        $Barcode->delete();

        return $this->sendResponse([], 'Barcode deleted successfully.');

    }
}
