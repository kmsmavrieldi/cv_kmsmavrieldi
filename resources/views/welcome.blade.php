@extends('layouts.main')
@section('main')
    

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    {{-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
  </div>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/800x400/?web-programming" alt="">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Web Programming</h1>
          <p></p>
          <p><a class="btn btn-lg btn-primary" href="#">Read More</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://source.unsplash.com/800x400/?php" alt="">

      <div class="container">
        <div class="carousel-caption">
          <h1>PHP</h1>          
          <p><a class="btn btn-lg btn-primary" href="#">Read more</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://source.unsplash.com/800x400/?bootstrap" alt="">

      <div class="container">
        <div class="carousel-caption">
          <h1>Bootstrap</h1>          
          <p><a class="btn btn-lg btn-primary" href="#">Read more</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://source.unsplash.com/800x400/?mysql-database" alt="">

      <div class="container">
        <div class="carousel-caption">
          <h1>MySQL Database</h1>          
          <p><a class="btn btn-lg btn-primary" href="#">Read more</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="https://source.unsplash.com/800x400/?laravel" alt="">

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Laravel</h1>
          <p><a class="btn btn-lg btn-primary" href="#">Read more</a></p>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row d-flex justify-content-center">
    <div class="col-lg-4">
      <h2>Profil Saya</h2>
       <div class="">
           <img src="/image/kmsmavrieldi.jpg" height='250px' alt="">
       </div> 

      
      <p><a class="btn btn-secondary my-2" href="/profile">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    

      


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Web Programming<span class="text-muted"> my skill</span></h2>
      <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
    </div>
    <div class="col-md-5">
      <img src="https://source.unsplash.com/500x500/?web-programming" alt="" >

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-4">
      <h2 class="featurette-heading">PHP<span class="text-muted"> My Skill</span></h2>
      <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="https://source.unsplash.com/500x500/?php" alt="">

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Bootstrap <span class="text-muted"> My Skill</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <img src="https://source.unsplash.com/500x500/?bootstrap" alt="">

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-4">
      <h2 class="featurette-heading">MySQL Database<span class="text-muted"> My Skill</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="https://source.unsplash.com/500x500/?mysql-database" alt="">

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Laravel <span class="text-muted"> My Skill</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <img src="https://source.unsplash.com/500x500/?laravel" alt="">

    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

@endsection