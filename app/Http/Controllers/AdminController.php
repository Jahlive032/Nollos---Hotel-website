<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller{
    protected $userName;

    public function index(){
        $admins = Admin::latest()->get();
        return view("admin.index");
    }

    public function dashboard(){
        return view("admin.dashboard");
    }

    public function index_settings(){
        return view('admin.settings.index');
    }

    public function authentificate(Request $request){

        // Récupère les valeurs saisies dans les champs nom et mot de passe 
        $admin_name = $request->input('admin_name');
        $admin_password = $request->input('admin_password');

        // Récupérer l'utilisateur correspondant 
        $admin = Admin::where('admin_name', $admin_name)->first();

        //Vérifier si l'utilisateur existe
        if($admin && $admin->admin_password === $admin_password){
            Session::put('userName', $admin->admin_name);
            return redirect()->route('admin.authentificate');
        }
        return view("admin.index");
    }

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


