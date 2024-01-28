<?php

namespace App\Http\Controllers;

use App\Models\vouture;
use App\Http\Requests\StorevoutureRequest;
use App\Http\Requests\UpdatevoutureRequest;
use App\Models\vouture_single;
use Carbon\Carbon;

use Illuminate\Http\Request;


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
        // $request->vou_date = Carbon::parse($request->vou_date);
        // $request->vou_date = $request->vou_date->toDateString();
        // // dd($request->vou_date);
        //  vouture::create(['id'=>$request->id, 'vou_date'=>$request->vou_date]);



        // dd($request->all());

        // dd($request->all());

        vouture::create($request->all());

        return redirect()->back()->with('message', 'some ');
    }

    /**
     * Display the specified resource.
     */
    public function show(vouture $vouture)
    {
        //
        return view("vouture.single_vouture");
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
    public function destroy($id)
    {
        // dd($id);
        $vou = vouture::find($id);


        $vou->delete();
        return redirect()->back()->with('message','deleted ');

    }
}
