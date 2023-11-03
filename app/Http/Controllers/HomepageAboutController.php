<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomepageAbout;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\HomepageAboutDataTable;

class HomepageAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HomepageAboutDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.homeabout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.homeabout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HomepageAbout::create($request->all());
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('homeabout.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomepageAbout $homepageAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomepageAbout $homeabout)
    {
        return view('pages.dashboard.homeabout.edit', compact('homeabout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomepageAbout $homeabout)
    {
        $homeabout->update($request->all());
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3000)->toToast();
        return redirect()->route('homeabout.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        HomepageAbout::destroy($id);
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3000)->toToast();
        return redirect()->route('homeabout.index');
    }
}   
