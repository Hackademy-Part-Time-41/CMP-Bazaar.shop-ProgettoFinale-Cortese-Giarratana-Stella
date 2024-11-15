<!-- Remove the container if you want to extend the Footer to full width. -->
{{-- <div class="container my-5"> --}}

    <footer class="text-center text-white" style="background-color: #f1f1f1;">

      <div class="row justify-content-center">
        <div class="col-md-5 offset-md-1 mb-3 text-center">
          <h5 style="color: black">Vuoi diventare revisore?</h5>
          <p style="color: black">Cliccando il bottone sottostante farai richiesta al nostro admin</p>
          <a href="{{route('become.revisor')}}" class="btn btn-success">Diventa revisore</a>
        </div>
      </div>
      
      <footer class="text-center navbar-customclass">
        <!-- Grid container -->
        <div class="container d-flex justify-content-between pt-4">
    
          {{-- Section: Dati aziendali --}}
          <section class=" fs-6 fst-italic mb-4">
            <p>Bazaar.shop srl</p>
            <p>Via Qualcosa 0</p>
            <p>Città - CAP</p>
            <p>admin@bazaar.shop</p>
          </section>
    
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark">                                    
              <i class="bi bi-facebook"></i>
            </a>
      
            <!-- Instagram -->
            <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark">
              <i class="bi bi-instagram"></i>
            </a>
            {{--  Pinterest --}}
            <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark">
              <i class="bi bi-pinterest"></i>
            </a>
            
          </section>
          
          {{-- Sezione dev --}}
          <section>
    
            <p>Made with Laravel</p>
            <p>by cmp.dev</p>
            <p>[LOGO]</p>
            
          </section>
        </div>