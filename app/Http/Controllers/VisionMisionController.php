<?php

namespace App\Http\Controllers;

use App\Models\VisionMision;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\VisionMisionDataTable;

class VisionMisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VisionMisionDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.visionmision.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.visionmision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        VisionMision::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3500)->toToast();
        return redirect()->route('visionmision.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(VisionMision $visionMision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisionMision $visionmision)
    {
        return view('pages.dashboard.visionmision.edit', compact('visionmision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VisionMision $visionmision)
    {
        
        $visionmision->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3500)->toToast();
        return redirect()->route('visionmision.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisionMision $visionMision)
    {
        $visionMision->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3500)->toToast();
        return redirect()->route('visionmision.index');
    }
}
