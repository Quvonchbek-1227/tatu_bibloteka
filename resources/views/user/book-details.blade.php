@extends('layouts.app1')
@section('content')

<main id="main">

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper-container">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ $book->img }}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Kitap turali qosimsha.</h3>
            <ul>
              <li><strong>Avtor</strong>: {{ $book->author }}</li>
              <li><strong>Jazilg`an sa`ne </strong>: {{ $book->made }}</li>
              <li><strong>Kategorya</strong>: {{ $book->category }}</li>
              <li><a class="btn btn-primary" href={{ asset($book->file) }}>Juklep Aliw</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{ $book->name }}</h2>
            <p>
              {{ $book->book_desc }}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->  
@endsection