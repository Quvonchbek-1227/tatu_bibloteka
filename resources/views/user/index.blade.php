@extends('welcome')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
          
            <div class="carousel-item active" style="background-image: url('{{ asset("assets/img/slide/slide1.jpg")  }}');
              background-position: center;
              ">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Assalawma A`leykum Xosh Keldin`iz</h2>
                  <p class="animate__animated animate__fadeInUp">Bul TITU No`kis filiali elektrin kitapxanasi.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sayt Haqqinda</a>
                </div>
              </div>
            </div>


            <div class="carousel-item" style="background-image: url('{{ asset("assets/img/slide/slide2.jpg")  }}');
              background-position: center;
              ">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Assalawma A`leykum Xosh Keldin`iz</h2>
                  <p class="animate__animated animate__fadeInUp">Bul TITU No`kis filiali elektrin kitapxanasi.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sayt Haqqinda</a>
                </div>
              </div>
            </div>

            <div class="carousel-item" style="background-image: url('{{ asset("assets/img/slide/slide3.jpg")  }}');
              background-position: center;
              ">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Assalawma A`leykum Xosh Keldin`iz</h2>
                  <p class="animate__animated animate__fadeInUp">Bul TITU No`kis filiali elektrin kitapxanasi.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sayt Haqqinda</a>
                </div>
              </div>
            </div>
          

      </div>
          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
      
    </div>
    
  </section><!-- End Hero -->

  <main id="main">

    @include('layouts.aboutSection')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <h1 class="h1 mb-5">Kitaplar</h1>
          </div>
        </div>

        <div class="row portfolio-container">

            @foreach($books as $book)
              <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                  <img src="{{ $book->img }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{ Str::limit($book->book_desc,20) }}</h4>
                    <div class="portfolio-links">
                      <a href="{{ $book->img }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $book->name }}"><i class="bx bx-plus"></i></a>
                      <a href="{{ route('book.show',['id' => $book->id_book]) }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
  
@endsection