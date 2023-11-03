<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\DataTables\ContactDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContactDataTable $datatable)
    {
        return $datatable->render('pages.dashboard.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($request->all());
        Alert::success('Success', 'Data berhasil ditambahkan')->autoclose(3000)->toToast();
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('pages.dashboard.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        Alert::success('Success', 'Data berhasil diupdate')->autoclose(3000)->toToast();
        return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        Alert::success('Success', 'Data berhasil dihapus')->autoclose(3000)->toToast();
        return redirect()->route('contact.index');
    }

    public function chatwhatsapp()
    {
        $phone = '628111770911';
        
        $data = request()->all();
        
        $message = 'Halo Admin,'."\n". 'Saya '. $data['name'] ."\n". 'Email: '.$data['email']."\n". 'No Whatsapp: '.$data['phone']."\n". 'dari ' . $data['company'] . '. ' ."\n"."\n". $data['message'];

        $url = 'https://api.whatsapp.com/send?phone=' . $phone . '&text=' . urlencode($message);

        return redirect($url);

    }
}
