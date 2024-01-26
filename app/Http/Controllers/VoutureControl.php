<?php

namespace App\Http\Controllers;

use App\Models\vouture_single;
use Illuminate\Http\Request;

class VoutureControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        //view 
        return view('vouture.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        vouture_single::create($request->all());

        return redirect()->back()->with('message', 'some ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $x = vouture_single::find($id, ['name'])->name;
        dd($x);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         dd('hwllo'); 
    
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
    public function destroy(string $id)
    {
        //
    }
}
