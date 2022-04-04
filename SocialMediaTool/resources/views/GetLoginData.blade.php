@extends('layouts.app')
@section('content')
<form action="{{ route('logindaten.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <span> Facebook Username
                                <input type="text" id="FB_Name" name="FB_Name"> 
                                </span> <br>
                                <span> Facebook Passwort
                                <input type="text"  id="FB_PASS" name="FB_PASS">
                                </span><br>

                                <span> Instagram Username
                                <input type="text" id="IG_Name" name="IG_Name"> 
                                </span> <br>
                                <span> Instagram Passwort
                                <input type="text"  id="IG_PASS" name="IG_PASS">
                                </span><br>
                                
                                <span> Twitter Username
                                <input type="text" id="TW_Name" name="TW_Name"> 
                                </span> <br>
                                <span> Facebook Passwort
                                <input type="text"  id="TW_PASS" name="TW_PASS">
                                </span><br>

                                <span> Youtube Username
                                <input type="text" id="YT_Name" name="YT_Name"> 
                                </span> <br>
                                <span> Facebook Passwort
                                <input type="text"  id="YT_PASS" name="YT_PASS">
                                </span><br>

                            
                                <input type="submit" class="btn" style="margin-left:30%"
                                    value="Daten speichern">
                            </form>
@endsection

