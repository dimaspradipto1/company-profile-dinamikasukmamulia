<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\DataTables\AboutDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.about.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3500)->toToast();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('pages.dashboard.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $about->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3500)->toToast();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3500)->toToast();
        return redirect()->route('about.index');
    }
}
