  @extends('welcome')

  @section('content')
  
      <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Single</h2>
          <ol>
            <li><a href="index.html">Bas Bet</a></li>
            <li><a href="blog.html">Jan`aliqlar</a></li>
            <li>{{ $blog->title }}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ $blog->img }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">
                  {{ $blog->title }}
                </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                    <a href="#">
                      Admin
                    </a>
                  </li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                    <a href="">
                      <time datetime=" {{ $blog->date }}">{{ $blog->date }}</time>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="entry-content">
                {{ $blog->content }}
              </div>

              <!-- <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> -->

            </article><!-- End blog entry -->

            <!-- <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div> -->
            <!-- End blog author bio -->

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
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  @endsection