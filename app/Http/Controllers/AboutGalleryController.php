<?php

namespace App\Http\Controllers;

use App\Models\AboutGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\AboutGalleryDataTable;
use App\Models\About;

class AboutGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutGalleryDataTable $datatable)
    {
        return $datatable->render('pages.dashboard.aboutgallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.aboutgallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $file = $request->file('files');
        if($request->hasFile('files')){
            foreach($file as $files){
                $url['url'] = $files->store('public/aboutgallery');
                AboutGallery::create($url);
            }
        }
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('aboutgallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutGallery $aboutGalery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutGallery $aboutGalery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutGallery $aboutGalery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapus = AboutGallery::findOrFail($id);
        if(Storage::delete($hapus->url)){
            $hapus->delete();
        }
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3000)->toToast();
        return redirect()->route('aboutgallery.index');
    }
}
 