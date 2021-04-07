<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Examen</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

     </head>
  <body>

    <nav class="navbar navbar-expand-md fixed-top  bg-dark" style="background-color:#ffffff !important;">

      <div class="container" style="display:flex; flex-direction:column; align-items:center;">
        <div class="navbar-header">
           <a  href="#"><img src="https://www.starnet.md/assets/img/logo--dark.svg" alt="" width="80" border="0"></a>
        </div>
        <div class="links" style="padding-top:10px;padding-bottom:20px;">
          <a href="https://www.starnet.md/ro/about/services">Servicii</a>
          <a href="#news">Noutăți</a>
          <a href="#about">Despre</a>
          
          
         </div>
       </div>
    </nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
 
  <div class="jumbotron" style="margin-top:100px;padding-top:120px;background-color:#FECE00!important; display:flex!important; align-items:center!important;flex-direction:column!important;width:100%!important;" >
    <div class="container" style="text-align:center !important;">
    <div style="width:100% !important; display:flex; justify-content:center;" >
      <h1 class="display-3" style="text-align:center;text-transform:uppercase;font-weight:700;color:#ffffff;width:800px;">{{$h1}}</h1>
      </div>
      <div style="width:100% !important; display:flex; justify-content:center;margin-top:20px;margin-bottom:50px;" >
        <p style="text-align:center;color:#ffffff; width:500px;">{{$h2}}</p>
      </div>
         
         <p><a class="btn btn-warning btn-lg" href="https://www.starnet.md/ro/contacts" role="button-dark" style="background-color:#ffffff !important;color:#FECE00;">Contactează-ne</a></p>
    </div>
  </div>

  <div class="container" id="news">
    <!-- Example row of columns -->
    <div style="width:100% !important; display:flex; justify-content:center;" >
      <h1 class="display-3" style="text-align:center;text-transform:uppercase;font-weight:700;color:#FECE00;width:800px;" >Noutăți</h1>
      </div>
    
    @yield('content')

    <div style="height: 50px;"></div>

    </div>

    <div class="jumbotron" id="about" style="margin-top:100px;padding-top:120px;background-color:#FECE00!important; display:flex!important; align-items:center!important;flex-direction:column!important;width:100%!important;" >
    <div class="container" >
    <div style="width:100% !important; display:flex; justify-content:center;" >
      <h1 class="display-3" style="text-align:center;text-transform:uppercase;font-weight:700;color:#ffffff;width:800px;">DESPRE</h1>
      </div>
      <div style="width:100% !important; display:flex; justify-content:center;margin-top:20px;margin-bottom:50px;" >
        <ul style="">
          <li>StarNet este primul operator de comunicații electronice care a implementat tehnologia FTTB și FTTH. </li>
          <li>StarNet este primul operator din țară care a oferit acces la Internet și transport de date cu viteză înaltă prin intermediul Fibrei Optice, reușind să dezvolte cea mai mare rețea gratuită de Wi-Fi din Estul Europei.</li>
          
          <li>StarNet este una dintre primele companii care a trecut frontiera cu un canal optic propriu construit, interconectând rețelele optice ale UE cu Republica Moldova.</li>
          <li>
StarNet este primul ISP care a oferit Internet cu viteză de 1Gbps. </li>
          <li>StarNet a lansat unul dintre cele mai avansate servicii de televiziune digitală din industria telecomunicațiilor.</li>
        </ul>
        
      </div>
         <div style="display:flex; justify-content:center;">
         <p><a class="btn btn-warning btn-lg" href="https://www.starnet.md/ro/about/history" role="button-dark" style="background-color:#ffffff !important;color:#FECE00;text-align:center;">Afla mai mult</a></p>
         </div>
         
    </div>
  </div>


</main>
    <footer class="container" align="center">
       <p>Copyright © 2021 StarNet. Toate drepturile sunt rezervate.</p>
    </footer>
</body>
</html>
