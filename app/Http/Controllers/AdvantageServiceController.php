<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdvantageService;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\AdvantageServiceDataTable;

class AdvantageServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AdvantageServiceDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.advantageservice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.advantageservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AdvantageService::create($request->all());
        Alert::success('Success', 'Data berhasil ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('advantageservice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdvantageService $advantageService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdvantageService $advantageservice)
    {
        return view('pages.dashboard.advantageservice.edit', compact('advantageservice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdvantageService $advantageservice)
    {
        $advantageservice->update($request->all());
        Alert::success('Success', 'Data berhasil diubah')->autoclose(3000)->toToast();
        return redirect()->route('advantageservice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdvantageService $advantageservice)
    {
        $advantageservice->delete();
        Alert::success('Success', 'Data berhasil dihapus')->autoclose(3000)->toToast();
        return redirect()->route('advantageservice.index');
    }
}
