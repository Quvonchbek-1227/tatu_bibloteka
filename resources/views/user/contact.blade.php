  @extends('welcome')

  @section('content')
      <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>
              Baylanis Bo`limi
            </h2>
            <ol>
              <li><a href="index.html">
                Bas Bet
              </a></li>
              <li>
                Baylanis
              </li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <!-- <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div> -->
          <div>
            <img class="img-fluid" src="{{ asset('assets/img/tatunf.jpg') }}">
          </div>

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>
                    Ma`nzilimiz
                  </h4>
                  <p>No`kis qalasi A.Dostnazarov koshesi</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>E-mail</h4>
                  <p>kantatunf@umail.uz</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>
                    Telefon Nomerimiz
                  </h4>
                  <p>+998-61-222-29-20</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="{{ route('message') }}" method="post" role="form" class="form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Atin`iz">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Qanday ma`sele">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Xabardi Jazin`"></textarea>
                </div>
                <input type="submit" value="Xabardi Jiberiw" class="btn btn-primary py-3 px-5 mt-5">

              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->
  @endsection