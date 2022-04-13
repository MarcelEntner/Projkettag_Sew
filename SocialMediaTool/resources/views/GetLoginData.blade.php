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

    <footer id="fbuttom" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 Social Media Tool</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-muted">CreatePost</a></li>
      <li class="nav-item"><a href="{{ route('getlogindata') }}" class="nav-link px-2 text-muted">Platform-login</a></li>
    </ul>
  </footer>
@endsection

