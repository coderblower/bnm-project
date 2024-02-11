<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSingleVoutureRequest;
use App\Models\vouture_single;
use Illuminate\Http\Request;

class SingleVouture extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreSingleVoutureRequest  $request, vouture_single $vouture_single)
    {
        $vouture_single::create($request->all());

        return back()->with('message', 'successfully saved in database');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, vouture_single $vouture_single)
    {
        $vouture_single->destroy($id);
        return back()->with('success', 'deleted successfully');
    }
}
