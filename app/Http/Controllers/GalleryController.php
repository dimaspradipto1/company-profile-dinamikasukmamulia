<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\DataTables\GalleryDataTable;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GalleryDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('url');
        $url ['url'] = $file->store('public/gallery');
        $url ['title'] = $request->title;
        
        Gallery::create($url);
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('gallery.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery  = Gallery::findOrFail($id);
        Storage::delete($gallery->url);
        $gallery->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3000)->toToast();
        return redirect()->route('gallery.index');
    }
}
