<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Resources\BillResource as BillResource;
use App\Http\Controllers\BaseController as BaseController;

class BillController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bills = Bill::latest()->paginate(10);

        return $this->sendResponse(BillResource::collection($Bills), 'Bills retrieved successfully.');

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
        
        $Bill = Bill::create($request->all());
   
        return $this->sendResponse(new BillResource($Bill), 'Bill created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $Bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $Bill)
    {
        
        return $this->sendResponse(new BillResource($Bill), 'Bill retrieved successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $Bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $Bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $Bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $Bill)
    {

        $Bill->update($request->all());   
 
        return $this->sendResponse(new BillResource($Bill), 'Bill updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $Bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $Bill)
    {

        $Bill->delete();

        return $this->sendResponse([], 'Bill deleted successfully.');

    }
}
