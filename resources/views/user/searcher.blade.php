  @extends('welcome')

    @section('content')
      
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Na`tijeler</h2>
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
                  <a href="{{ route('news-single',['id' => $blog->id]) }}">{{ $blog->title }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $blog->date }}</time></a></li>
                    <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {{ Str::limit($blog->content,255) }}
                  </p>
                  <div class="read-more">
                    <a href="{{ route('news-single',['id' => $blog->id]) }}">Toliq Oqiw</a>
                  </div>
                </div>

              </article><!-- End blog entry -->

            @endforeach

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
             <div class="sidebar">

              <h3 class="sidebar-title">Izlew</h3>
              <div class="sidebar-item search-form">
                <form action="{{ route('search-news') }}" method="POST">
                  @csrf
                  <input type="text" name="str" placeholder="Jan`aliq izlew...">
                  <button type="submit">
                    <i class="bi bi-search"></i>
                </button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">En` Song`i Postlar</h3>
              <div class="sidebar-item recent-posts">

                @foreach($blogs as $blog)
                  <div class="post-item clearfix">
                    <img src="{{ $blog->img }}" alt="">
                    <h4><a href="{{ route('news-single',['id' => $blog->id]) }}">{{ $blog->title }}</a></h4>
                    <time datetime="2020-01-01">{{ $blog->date }}</time>
                  </div>
                @endforeach

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
    @endsection