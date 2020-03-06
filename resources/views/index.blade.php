@include('dashboard.header')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w-100" height="600" src="{{asset('resources/assets/images/bg-title-01.jpg')}}" alt="First slide">
    <div class="carousel-caption d-none d-md-block">
    	<h5 class="text-dark">First Slide</h5>
  	</div>
    </div>
    <div class="carousel-item">
      <img class="w-100" height="600" src="{{asset('resources/assets/images/bg-title-02.jpg')}}" height="100" alt="Second slide">
    <div class="carousel-caption d-none d-md-block">
    	<h5 class="text-dark">Second Slide</h5>
  	</div>
    </div>
    <div class="carousel-item">
      <img class="w-100" height="600" src="{{asset('resources/assets/images/bg-title-01.jpg')}}" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">
    	<h5 class="text-dark">Third Slide</h5>
  	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@include('dashboard.footer')