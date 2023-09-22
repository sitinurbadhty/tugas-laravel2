<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('king.cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('king.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('cast')->insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio'],
        ]);

        return redirect('/cast');  //
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
    public function destroy(string $id)
    {
        //
    }
}
