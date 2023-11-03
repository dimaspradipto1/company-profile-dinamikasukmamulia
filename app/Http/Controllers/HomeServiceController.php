<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;
use App\DataTables\HomeServiceDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HomeServiceDataTable $datatable)
    {
        return $datatable->render('pages.dashboard.homeservice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.homeservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HomeService::create($request->all());
        Alert::success('Success', 'Data Berhasil ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('homeservice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeService $homeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeService $homeservice)
    {
        return view('pages.dashboard.homeservice.edit', compact('homeservice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeService $homeservice)
    {
        $homeservice->update($request->all());
        Alert::success('Success', 'Data Berhasil diupdate')->autoclose(3000)->toToast();
        return redirect()->route('homeservice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeService $homeservice)
    {
        $homeservice->delete();
        Alert::success('Success', 'Data Berhasil dihapus')->autoclose(3000)->toToast();
        return redirect()->route('homeservice.index');
    }
}
