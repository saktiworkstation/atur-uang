<?php

namespace App\Http\Controllers;

use App\Models\Finpen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinpenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('finpen.index', [
            'datas' => Finpen::where('user_id', $user->id)->firstOrFail()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finpen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'balance' => 'required|numeric',
            'finpen_name' => 'required|string',
            'province' => 'required|string',
            'description' => 'required|string',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        Finpen::create($validatedData);

        return redirect('finpen')->with('success', 'New finpen has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('finpen.show', [
            'data' => Finpen::where('id', $id)->firstOrFail()
        ]);
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
