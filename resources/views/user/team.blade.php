@extends('welcome')

@section('content')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>@lang('words.team')</h2>
          <ol>
            <li><a href="/">@lang('words.home')</a></li>
            <li>@lang('words.team')</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    @include('layouts.teamSection')

  </main><!-- End #main -->
@endsection