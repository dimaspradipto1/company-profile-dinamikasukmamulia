<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\DataTables\HeroDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HeroDataTable $dataTable)
    {
        return $dataTable->render('pages.dashboard.hero.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('url');
        $url['url'] = $file->store('public/heroes');
        $url['title'] = $request->title;
        $url['description'] = $request->description;
        Hero::create($url);
        Alert::success('Success', 'Data Berhasil Ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('pages.dashboard.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        if($request->hasFile('url')){
            $file = $request->file('url');
            $path = $file->store('public/heroes');
            $hero->url = $path;
        }

        $url['title'] = $request->title;
        $url['description'] = $request->description;
        $hero->update($url);
        Alert::success('Success', 'Data Berhasil Diubah')->autoclose(3000)->toToast();
        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        Alert::success('Success', 'Data Berhasil Dihapus')->autoclose(3000)->toToast();
        return redirect()->route('hero.index');
    }
}
