<?php

namespace App\Http\Controllers;

use App\Models\WeServices;
use Illuminate\Http\Request;
use App\DataTables\WeServiceDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class WeServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WeServiceDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.weservices.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.weservices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WeServices::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3500)->toToast();
        return redirect()->route('weservices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WeServices $weServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeServices $weservice)
    {
        return view('pages.dashboard.weservices.edit', compact('weservice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WeServices $weservice)
    {
        $weservice->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3500)->toToast();
        return redirect()->route('weservices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeServices $weservice)
    {
        $weservice->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3500)->toToast();
        return redirect()->route('weservices.index');
    }
}
