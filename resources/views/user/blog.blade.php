  @extends('welcome')

    @section('content')
      
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Jan`aliqlar</h2>
          <ol>
            <li><a href="/">Bas Bet</a></li>
            <li>Jan`aliqlar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            @foreach($blogs as $blog)

              <article class="entry">

                <div class="entry-img">
                  <img src="{{ $blog->img }}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html">{{ $blog->title }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $blog->date }}</time></a></li>
                    <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {{ $blog->content }}
                  </p>
                  <div class="read-more">
                    <a href="{{ route('news-single',['id' => $blog->id]) }}">Toliq Oqiw</a>
                  </div>
                </div>

              </article><!-- End blog entry -->

            @endforeach

            <div class="blog-pagination">
              {!! $blogs->links() !!}
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            @include('layouts.blog-sidebar')
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
    @endsection