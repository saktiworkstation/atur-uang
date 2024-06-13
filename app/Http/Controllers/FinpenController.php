<?php

namespace App\Http\Controllers;

use App\Models\Finpen;
use Illuminate\Http\Request;

class FinpenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finpen.index', [
            'datas' => Finpen::latest()->get()
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Finpen $finpen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finpen $finpen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finpen $finpen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finpen $finpen)
    {
        //
    }
}
