<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use App\DataTables\ServicesDataTable;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServicesDataTable $datatable)
    {
        return $datatable->render('pages.dashboard.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $file = $request->file('url');
        $url['url'] = $file->store('public/services');
        $url['title'] = $request->title;
        Services::create($url);
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('services.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        Storage::delete($services->url);
        $services->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3000)->toToast();
        return redirect()->route('services.index');
    }
}
