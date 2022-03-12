@extends('welcome')


@section('title')
  Sayt Haqqinda
@endsection
@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sayt Haqqinda</h2>
          <ol>
            <li><a href="/">Bas Bet</a></li>
            <li>Sayt Haqqinda</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    @include('layouts.aboutSection')

  </main><!-- End #main -->

@endsection