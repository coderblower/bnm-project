<?php

namespace App\Http\Controllers;

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
    public function store(Request $request, vouture_single $vouture_single)
    {
        $vouture_single->create($request->all());
        return back()->with("success","sdf");
        
    }

    /**
     * Display the specified resource.
     */
    public function show( vouture_single $vouture_single,  string $id)
    {
        $single = $vouture_single->find($id);
        dd($single);
        return view('vouture.single_vou_onepage', compact('single'));
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
    public function destroy(vouture_single $vouture_single, string $id)
    {
        $vouture_single->destroy( $id );
        return back()->with("success","");
        //
    }
}
