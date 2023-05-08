@extends('layouts.portfolio')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">PLTS Petrogas Jatim Utama</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('portfolio.simulasi_langganan') }}" class="btn-get-started">Simulasi Langganan</a>
            <a href="{{ route('under_construction') }}" class="btn-get-started">Simulasi Leasing</a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Keuntungan Dan Manfaat</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('why-us.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Let's grow your business together</h3>
                    <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima maiores quidem, dolorum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam perferendis asperiores explicabo vel tempore velit totam, natus nesciunt accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas sapiente optio.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                    <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos aliquam quis.</h4>
                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat dolor.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Aliquid non alias minus</h3>
                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae voluptatum.</h4>
                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum. Voluptas enim dolorum fugiat aut.</p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Informasi Dan Edukasi</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>FAQ</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Your Business</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                  <span>Sit amet consectetur adipisicing</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>Ipsum Rerum Explicabo</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>Sit amet consectetur adipisicing</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Ipsum Rerum Explicabo</span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>Easy Cart Features</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
          </div>

        </div>
      </div>

    </section>

  </main>
@endsection
