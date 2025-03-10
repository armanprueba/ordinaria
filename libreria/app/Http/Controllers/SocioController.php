<?php

namespace App\Http\Controllers;
use App\Models\Socio;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;



class SocioController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = Socio::get();
        return view('socios.index', compact('socios'));
    }


public function __construct()
{
$this->middleware('auth',
['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
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
