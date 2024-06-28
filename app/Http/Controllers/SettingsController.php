<?php

namespace App\Http\Controllers;

use App\Models\Settings;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Settings $settings)
    {
        $rules = [
            'site_name' => 'bail|required|string',
            'site_about' => 'bail|required',
            'shutdown' => 'bail|reqired',
        ];

        $this->validate($request, $rules);

        $settings->update([
            "site_name" => $request->site_name,
            "site_about" => $request->site_about,
            "shutdown" => $request->shutdown,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
