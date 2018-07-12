@extends('layouts.front')

@section('banner')

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">TÚ <span class="w3-hide-small">SUEÑAS,</span> NOSOTROS LO DESARROLLAMOS</span>
  </div>
</div>

@endsection



@section('inde')

<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1> <center> Nuestro portafolio </center> </h1>
      </div>
    </div>
  </div><br>


  <div class="row">
    <div class="col-lg-4">
        <img src="storage/gestionsas.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gestion y Negocios S.A.S">
    </div>

    <div class="col-lg-4">
        <img src="storage/colirutas.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gestion y Negocios S.A.S">
    </div>

    <div class="col-lg-4">
        <img src="storage/fundaciondeporte.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gestion y Negocios S.A.S">
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4">
        <img src="storage/tarai.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gestion y Negocios S.A.S">
    </div>

    <div class="col-lg-4">
        <img src="storage/maleiwa.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gestion y Negocios S.A.S">
    </div>

    <div class="col-lg-4">
    </div>
  </div>
</div>


<div class="w3-content w3-container w3-padding-64" id="about">
  <div class="page-header">
    <h1> <center> Sobre nosotros </center> </h1>
  </div>
  <p class="w3-center"><em>"Somos una empresa que desarrolladora de software a la medida"</em></p>
  <p>Tarai Software’s  es una empresa con mucha informática que se dedica a desarrollar de software a la medida a Personas naturales, Empresas pequeñas, medianas y grandes, desarrollamos complejos proyectos informaticos desde aplicaciones web, paginas web, aplicaciones moviles.
  Además de brindamos capacitación y enseñanza de las TIC’s a Instituciones y Empresas. Contamos con los mejores profesionales Guajiros para brindar soluciones a cualquier tipo de requerimiento que se nos sea solicitado, llevamos en nuestro logo una hoja que simboliza el corazón verde de la empresa y el compromiso con el medio ambiente.</p>


  <p class="w3-large w3-center w3-padding-16">Nuestras Habilidades:</p>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Desarrollo de Software</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-mobile-phone"></i>Aplicaciones Moviles</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-graduation-cap"></i>Capacitaciones</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:95%">95%</div>
  </div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACTO</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">COMIENZA UN PROYECTO CON NOSOTROS</h3>
  <p class="w3-center"><em>Somos tu mejor opcion!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->

    </div>
    <div class="w3-col m16 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Riohacha, La Guajira - Direccion: KR 8 # 21-22<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telefono : +57 301 640 2853<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Correo: taraisoftwares@gmail.com<br>
      </div>
      <p>Escribenos un Mensaje</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Correo" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Enviar
        </button>
      </form>
    </div>
  </div>
</div>


@endsection

@section('ads')

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-9215948410196484",
                  enable_page_level_ads: true
             });
        </script>

@endsection
