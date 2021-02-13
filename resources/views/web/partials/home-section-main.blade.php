<!--- Start Home section -->
<div id="home">
  <!--- Start Carousel Image Slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One -->
      <div class="carousel-item active" style="background-image: url('web/img/computers-2.jpg')" alt>
        <!-- aqui -->
        <div class="carousel-caption text-center">
          <div class="os-animation" data-animation="bounceInUp" data-delay=".6s">
            <h1>Bienvenido</h1>
          </div>
          <div class="os-animation" data-animation="bounceInUp" data-delay=".8s">
            <h3></h3>
          </div>
          <div class="os-animation" data-animation="bounceInUp" data-delay="1s">
            <a class="btn btn-success btn-lg" href="#info-economica">Comenzar</a>
          </div>
        </div> -->
        <!-- descomentar hasta aqui
        <!--- End Carousel Caption -->
      </div>
      <!-- Slide Two -->
      <div class="carousel-item" style="background-image: url('web/img/comunicado.jpg')" alt></div>
      <!-- Slide Three -->
      <!--  <div class="carousel-item" style="background-image: url('web/img/aldea.jpeg')" alt></div> -->

      <!-- Slide Four -->
      <!--  <div class="carousel-item" style="background-image: url('web/img/slider-1.jpg')" alt></div>  -->
      <!-- Slide Five -->
      <div class="carousel-item" style="background-image: url('web/img/horario.png')" alt></div>
    </div>
    <!--- End Carousel Inner -->
    <!--- Previous & Next Buttons -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  <!--- End Carousel Image Slider -->
</div>
<!--- End Home Section -->


@push ('scripts')
<!-- @if (session('showModal'))
<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').modal('show')
  });
</script>
@endif -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').modal('show')
  });
</script>
@endpush