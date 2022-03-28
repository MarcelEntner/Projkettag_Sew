@extends('layouts.app')
@section('content')
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
           <a href="javascript:ShowYoutubeBeitrage()"> 
             <img style="width: 10vw; heigth: 10vh" src="../storage/images/youtube.png">
          </a>
            <h4 class="my-0 fw-normal">Youtube</h4>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
          <a href="javascript:ShowInstagramBeitrage()"> 
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/instagram.png">
          </a>
            <h4 class="my-0 fw-normal">Instagram</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
          <a href="javascript:ShowTwitterBeitrage()"> 
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/twitter.png">
        </a>
            <h4 class="my-0 fw-normal">Twitter</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-body">
          <a href="javascript:ShowFacebookBeitrage()"> 
            <img style="width: 10vw; heigth: 10vh" src="../storage/images/facebook.png">
          </a>
            <h4 class="my-0 fw-normal">Facebook</h4>
          </div>
        </div>
      </div>
    </div>



<div id="YoutubeBeitraege" style="visibility : hidden;  height:600px">
<h1 style="text-align:center;"> Die letzten Youtube Beiträge </h1>
<br>
<?php 

use Illuminate\Support\Facades\DB;
$AlleBeitraegeYoutube = DB::select('select * from beitrag where Youtube = "1"  and Foto != "NULL" ');

?>


    @foreach($AlleBeitraegeYoutube as $Beitrag)
    <div class="card" style="width: 30%; height:100% ;">
     <img style="width: 50%; height:50%; margin:auto;" 
    <?php 
     $url =  Storage::url($Beitrag->Foto);

     echo 'src="' . $url .'"';
     
     ?> >
      <div class="container">
      <h4 style="text-align:center;"><b><?php echo $Beitrag->Titel; ?></b></h4>
      <p style="text-align:center;"><?php echo $Beitrag->Beschreibung; ?></p>
      </div>
    </div>
    @endforeach

</div>


<div id="FacebookBeitraege" style="height:600px; margin-top:-600px; visibility : hidden; ">
<h1 style="text-align:center;"> Die letzten Facebook Beiträge </h1>

<br>
<?php 

$AlleBeitraegeFaceBook = DB::select('select * from beitrag where Facebook = "1" and Foto != "NULL" ');

?>


    @foreach($AlleBeitraegeFaceBook as $Beitrag)
    <div class="card" style="width: 30%; height:100% ;">
     <img style="width: 50%; height:50%; margin:auto;" 
    <?php 
     $url =  Storage::url($Beitrag->Foto);

     echo 'src="' . $url .'"';
     
     ?> >
      <div class="container">
      <h4 style="text-align:center;"><b><?php echo $Beitrag->Titel; ?></b></h4>
      <p style="text-align:center;"><?php echo $Beitrag->Beschreibung; ?></p>
      </div>
    </div>
    @endforeach

</div>


<div id="InstagramBeitraege" style="height:600px; margin-top:-600px;visibility : hidden; ">
<h1 style="text-align:center;"> Die letzten Instagram Beiträge </h1>
<br>
<?php 


$AlleBeitraegeInstagram = DB::select('select * from beitrag where Instagram = "1"  and Foto != "NULL" ');

?>


    @foreach($AlleBeitraegeInstagram as $Beitrag)
    <div class="card" style="width: 30%; height:100%;">
     <img style="width: 50%; height:50%; margin:auto;" 
    <?php 
     $url =  Storage::url($Beitrag->Foto);

     echo 'src="' . $url .'"';
     
     ?> >
      <div class="container">
      <h4 style="text-align:center;"><b><?php echo $Beitrag->Titel; ?></b></h4>
      <p style="text-align:center;"><?php echo $Beitrag->Beschreibung; ?></p>
      </div>
    </div>
    @endforeach

</div>



<div id="TwitterBeitraege" style=" height:600px;visibility : hidden; margin-top: -600px; " >
<h1 style="text-align:center;"> Die letzten Twitter Beiträge </h1>
<br>
<?php 


$AlleBeitraegeTwitter = DB::select('select * from beitrag where Twitter = "1" and Foto != "NULL"');

?>


    @foreach($AlleBeitraegeTwitter as $Beitrag)
    <div class="card" style="width: 30%; height:100% ;">
     <img style="width: 50%; height:50%; margin:auto;" 
    <?php 
     $url =  Storage::url($Beitrag->Foto);

     echo 'src="' . $url .'"';
     
     ?> >
      <div class="container">
      <h4 style="text-align:center;"><b><?php echo $Beitrag->Titel; ?></b></h4>
      <p style="text-align:center;"><?php echo $Beitrag->Beschreibung; ?></p>
      </div>
    </div>
    @endforeach

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
                            <form action="{{ route('Beitrag.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <span> Foto
                                <input type="file" id="Foto" name="Foto"> 
                                </span> <br>
                                <span> Video
                                <input type="file"  id="Video" name="Video">
                                </span><br>
                                <span> Title
                                <input type="text" id="Title" name="Title">
                                </span><br>
                                <span> Beschreibung
                                <input type="text" id="Beschreibung" name="Beschreibung">
                                </span><br>
                                <span> Ort
                                <input type="text" id="Ort" name="Ort">
                                </span><br>
                                <span> Zielgruppe
                                <input type="text" id="Zielgruppe" name="Zielgruppe">
                                </span><br>
                                <span> Interaktionen erlauben
                                <input type="text" id="Interaktion" name="Interaktion">
                                </span><br>
                                <span> Zur Playlist hinzufügen:
                                <input type="text" id="Playlist" name="Playlist">
                                </span><br>
                                <span> Erstell Datum
                                <input type="date" id="ErstellDatum" name="ErstellDatum">
                                </span><br>
                                <span> Erstell Zeit
                                <input type="time" id="ErstellZeit" name="ErstellZeit">
                                </span><br>
                                <span> Lösch Datum
                                <input type="date" id="LöschDatum" name="LöschDatum">
                                </span><br>

                                <input type="checkbox" name="FacebookCheck" id="Facebook"> Facebook</input>
                                <input type="checkbox" name="InstagramCheck" id="Instagram"> Instagram</input>
                                <input type="checkbox" name="TwitterCheck" id="Twitter"> Twitter</input>
                                <input type="checkbox" name="YoutubeCheck" id="Youtube"> Youtube</input>


                                <input type="submit" class="btn" style="margin-left:30%" id="BeitragErstellen"
                                    value="BetragErstellen">
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
    function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
}



 async function ShowYoutubeBeitrage(){      
      document.getElementById("TwitterBeitraege").style.visibility = "hidden";
      document.getElementById("FacebookBeitraege").style.visibility = "hidden";
      document.getElementById("InstagramBeitraege").style.visibility = "hidden";
      await delay(150);
      document.getElementById("YoutubeBeitraege").style.visibility = "visible";


    }

  async  function ShowTwitterBeitrage(){
      document.getElementById("YoutubeBeitraege").style.visibility = "hidden";
      document.getElementById("FacebookBeitraege").style.visibility = "hidden";
      document.getElementById("InstagramBeitraege").style.visibility = "hidden"; 
      await delay(150);  
      document.getElementById("TwitterBeitraege").style.visibility = "visible"; 
    }

   async function ShowInstagramBeitrage(){  
      document.getElementById("YoutubeBeitraege").style.visibility = "hidden";
      document.getElementById("TwitterBeitraege").style.visibility = "hidden";
      document.getElementById("FacebookBeitraege").style.visibility = "hidden";
      await delay(150);
      
      document.getElementById("InstagramBeitraege").style.visibility = "visible"; 
           
    }

    async function ShowFacebookBeitrage(){
      document.getElementById("YoutubeBeitraege").style.visibility = "hidden";
      document.getElementById("TwitterBeitraege").style.visibility = "hidden";
      document.getElementById("InstagramBeitraege").style.visibility = "hidden";  
      await delay(150); 
      document.getElementById("FacebookBeitraege").style.visibility = "visible"; 
    }
  </script>
@endsection