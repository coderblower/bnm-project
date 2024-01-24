<?php

namespace App\Http\Controllers;

use App\Models\vouture;
use App\Http\Requests\StorevoutureRequest;
use App\Http\Requests\UpdatevoutureRequest;
use App\Models\vouture_single;

class VoutureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voutures = vouture::all();
        $single_voutures = vouture_single::all();
        return view("vouture.show", compact("voutures","single_voutures"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevoutureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vouture $vouture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vouture $vouture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevoutureRequest $request, vouture $vouture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vouture $vouture)
    {
        //
    }
}
