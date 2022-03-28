<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Beitrag;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class BeitragController extends Controller
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
        $Beitrag = new Beitrag();

       // $Beitrag->Foto = $request->;
       // $Beitrag->Video = $request->;
        $Beitrag->Titel = $request->Title;
        $Beitrag->Beschreibung = $request->Beschreibung;
        $Beitrag->Ort = $request->Ort;
        $Beitrag->Zielgruppe = $request->Zielgruppe;
        $Beitrag->Interaktion = $request->Interaktion;
        $Beitrag->ZurPlaylisthinzufügen = $request->Playlist;
        $Beitrag->ErstellDatum = $request->ErstellDatum;
        $Beitrag->ErstellZeit = $request->ErstellZeit;
        $Beitrag->LöschDatum = $request->LöschDatum;

        if($request->FacebookCheck == 'on')
        {
            $Beitrag->Facebook = true;
        } else  {
            $Beitrag->Facebook = false;
        }
        
        if($request->YoutubeCheck == 'on')
        {
            $Beitrag->Youtube = true;
        } else  {
            $Beitrag->Youtube = false;
        }
        
    
        if($request->InstagramCheck == 'on')
        {
            $Beitrag->Instagram = true;
        } else  {
            $Beitrag->Instagram = false;
        }


        if($request->TwitterCheck == 'on')
        {
            $Beitrag->Twitter = true;
        } else  {
            $Beitrag->Twitter = false;
        }
        
      
            if ($request->file("Foto")) {

                //direkt als BLOB in die Datenbank speichern
                // $image = base64_encode(file_get_contents($request->file('Foto')));
                // $Beitrag->Foto = $image;
     
               
     
                $path = $request->file('Foto')->store('public');
                $Beitrag->Foto = $path; 
             }
 

        $Beitrag->save();

        $AlleBeitraege = DB::table('beitrag')->get();

        return redirect("/main")->with(['AlleBeitraege' => $AlleBeitraege]);

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
