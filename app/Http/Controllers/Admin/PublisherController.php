<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $Publishers = Publisher::all();
        return view('admin.publisher.index', compact('Publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publisher.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->slug = $request->slug;


        $publisher->save();
        return redirect()->route('publisher.index');
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
    public function update(Request $request ,string $id)
    {
        $publisher = Publisher::find($id);
        $publisher->name = $request->name;
        $publisher->slug = $request->slug;
        $publisher->update($request->all());
        $publisher->save();

        return redirect()->route('publisher.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit( string $id)
    {
        $publisher = Publisher::find($id);
        return view('admin.publisher.edit', compact('publisher'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Publisher::find($id)->delete();
        return redirect()->route('publisher.index');
    }
}
