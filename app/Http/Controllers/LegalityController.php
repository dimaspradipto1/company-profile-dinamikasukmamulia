<?php

namespace App\Http\Controllers;

use App\Models\Legality;
use Illuminate\Http\Request;
use App\DataTables\LegalityDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Contracts\DataTable;

class LegalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LegalityDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.legalities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.legalities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Legality::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3500)->toToast();
        return redirect()->route('legality.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Legality $legalities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Legality $legality)
    {
        return view('pages.dashboard.legalities.edit', compact('legality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Legality $legality)
    {
        $legality->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3500)->toToast();
        return redirect()->route('legality.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Legality $legality)
    {
        $legality->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3500)->toToast();
        return redirect()->route('legality.index');
    }
}
