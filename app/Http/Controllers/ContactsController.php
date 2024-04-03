<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request; 

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::withCount('invites')->get(); 
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contacts::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        return view('contacts.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        return view('contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacts $contacts)
    {
        $contacts->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        $contacts->delete();
    }
}
