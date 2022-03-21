@extends('layouts.app')
@section('content')
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/youtube.png">
            <h4 class="my-0 fw-normal">Youtube</h4>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/instagram.png">
            <h4 class="my-0 fw-normal">Instagram</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/twitter.png">
            <h4 class="my-0 fw-normal">Twitter</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/facebook.png">
            <h4 class="my-0 fw-normal">Facebook</h4>
          </div>
        </div>
      </div>
    </div>
    
    <button id="newpost" type="button" class="btn btn-primary">Primary</button>


<footer id="fbuttom" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 Social Media Tool</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-muted">CreatePost</a></li>
      <li class="nav-item"><a href="{{ route('main') }}" class="nav-link px-2 text-muted">Platform-login</a></li>
    </ul>
  </footer>
@endsection