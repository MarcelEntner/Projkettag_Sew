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







    <div class="modal" id="BeitragHinzufügen" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('Beitrag.store') }}" method="POST">
                                @csrf
                                <span> Foto
                                <input type="file"  accept="image/png, image/jpeg" id="Foto" name="Foto">
                                </span> <br>
                                <span> Video
                                <input type="file"  ccept="video/*" id="Eingabe2" name="Eingabe2">
                                </span><br>
                                <span> Title
                                <input type="text" id="Eingabe3" name="Eingabe3">
                                </span><br>
                                <span> Beschreibung
                                <input type="text" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Ort
                                <input type="text" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Zielgruppe
                                <input type="text" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Interaktionen erlauben
                                <input type="text" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Zur Playlist hinzufügen:
                                <input type="text" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Erstell Datum
                                <input type="date" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Lösch Zeit
                                <input type="time" id="Eingabe4" name="Eingabe4">
                                </span><br>
                                <span> Lösch Datum
                                <input type="date" id="Eingabe4" name="Eingabe4">
                                </span><br>




                                <input type="submit" class="btn" style="margin-left:30%" id="BeitragErstellen"
                                    value="Energiesystem erstellen">
                            </form>
                        </div>
                    </div>
                </div>
            </div>




























    <button id="newpost" type="button" class="btn btn-primary" onclick="BeitragHinzufügen();" data-modal="#BeitragHinzufügen">Primary</button>
    






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


  <script>
    function BeitragHinzufügen(){
      $('#BeitragHinzufügen').modal('show');
     
    }
    </script>
@endsection