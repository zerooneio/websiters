@extends('master.app')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    @forelse ($sliders as $slider)
    <div class="{{$slider->status_aktif}}">
      <img src="{{ url('/data_file/'.$slider->gambar) }}" alt="">
      <div class="container">
        <h2>{{$slider->judul}}</h2>
        <p>{{$slider->deskripsi}}</p>
        <a href="#about" class="btn-get-started">Read More</a>
      </div>
    </div>
    @empty
    @endforelse
    <!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </div>

</section><!-- /Hero Section -->

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
          <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-pills icon"></i></div>
          <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-thermometer icon"></i></div>
          <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-dna icon"></i></div>
          <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Featured Services Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section accent-background">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Butuh Berobat Tanpa Antri ? Booking Disini</h3>
          <p>Anda bisa booking registrasi dengan mengunakan WhatsApp, jika belum mempunyai nomor rm bisa wa ke nomor cs</p>
          <a class="cta-btn" href="#appointment">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Tentang Kami<br></h2>
    <p>Kepuasan Anda Adalah Prioritas Kami.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">
      @forelse ($about as $tentang)
      <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ url('/about/'.$tentang->gambar) }}" class="img-fluid" alt="">
        <a href="{{$tentang->linkyoutube}}" class="glightbox pulsating-play-btn"></a>
      </div>
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
        {!!$tentang->deskripsi!!}
      </div>
      @empty
      @endforelse
    </div>

  </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="fas fa-user-md flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
            <p>Doctors</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="far fa-hospital flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Departments</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="fas fa-flask flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Research Labs</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="fas fa-award flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->

<!-- Features Section -->
<section id="features" class="features section">

  <div class="container">

    <div class="row justify-content-around gy-4">
      <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="img/features.jpg" alt=""></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
          <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
          <i class="fa-solid fa-lungs flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Tride clov</a></h4>
            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
          </div>
        </div><!-- End Icon Box -->

      </div>
    </div>

  </div>

</section><!-- /Features Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Layanan Kami</h2>
    <p>Deskripsi Singkat</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="fas fa-heartbeat"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Nesciunt Mete</h3>
          </a>
          <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-pills"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Eosle Commodi</h3>
          </a>
          <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-hospital-user"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Ledo Markt</h3>
          </a>
          <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-dna"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Asperiores Commodit</h3>
          </a>
          <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          <a href="#" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-wheelchair"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Velit Doloremque</h3>
          </a>
          <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          <a href="#" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="fas fa-notes-medical"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Dolori Architecto</h3>
          </a>
          <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          <a href="#" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

<!-- Appointment Section -->
<section id="appointment" class="appointment section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>PENDAFTARAN ONLINE / WhatsApp</h2>
    <p>Pasien yang belum mendapatkan Nomor Rekam Medis bisa menghubungi bagian pendaftaran <b>082245652379</b></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <form action="{{route('home.sendwa')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-6 form-group">
          <label>Nama Pasien</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <label>Nomer Rekam Medis</label>
          <input type="text" class="form-control" name="norm" id="norm" placeholder="Masukkan Nomer Rekam Medis" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4 form-group mt-3 mt-md-0">
            <label>Nomor Telp / WhatsApp</label>
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="masukkan Nomor Telp" required>
        </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
          <label>Tanggal Kunjungan (Sesuaikan Tanggal)</label>
        <input type="date" class="form-control" data-date-format="dd-mm-yyyy" name="tgl" placeholder="Sesuaikan Tanggal" required>
      </div>
        <div class="col-md-4 form-group mt-3 mt-md-0">
            <label>Pilih Poli / Spesialis</label>
          <select name="poli" id="poli" class="form-select" required>
            @forelse ($polis as $poli)
              <option value="{{$poli->nama}}">{{$poli->nama}}</option>
            @empty
            @endforelse
          </select>
        </div>
      </div>
      <div class="mt-3">
        <div class="text-center"><button class="btn btn-block btn-primary" type="submit">Kirim Pendaftaran</button></div>
      </div>
    </form>

  </div>

</section><!-- /Appointment Section -->

<!-- Tabs Section -->
<section id="tabs" class="tabs section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Departments</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Cardiology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Neurology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Hepatology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Pediatrics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Ophthalmologists</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tabs-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="img/departments-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Neurology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="img/departments-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Hepatology</h3>
                <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="img/departments-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="img/departments-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabs-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Ophthalmologists</h3>
                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="img/departments-5.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Tabs Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Artikel Dan Berita</h2>
    <p>deskripsi singkat tentang artikel dan berita</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        @forelse ($beritas as $berita)
        <div class="swiper-slide">
          <div class="testimonial-item" "="">
            <img src="{{ url('/berita/'.$berita->gambar) }}" width="250" height="250" alt="">
            <h3>{{$berita->judul}}</h3>
            <h4>{{$berita->tanggal}}</h4>
            <p>
                <span>{{$berita->deskripsi_singkat}}</span>
            </p>
          </div>
        </div><!-- End testimonial item -->
        @empty
        @endforelse
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Doctors Section -->
<section id="doctors" class="doctors section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Dokter</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="img/doctors/doctors-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Medical Officer</span>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img src="img/doctors/doctors-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Anesthesiologist</span>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <div class="member-img">
            <img src="img/doctors/doctors-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>Cardiology</span>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member">
          <div class="member-img">
            <img src="img/doctors/doctors-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Neurosurgeon</span>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Doctors Section -->

<!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 0
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 20
            },
            "1200": {
              "slidesPerView": 5,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-1.jpg"><img src="img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-2.jpg"><img src="img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-3.jpg"><img src="img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-4.jpg"><img src="img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-5.jpg"><img src="img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-6.jpg"><img src="img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-7.jpg"><img src="img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/gallery-8.jpg"><img src="img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Gallery Section -->

<!-- Kerjasama Section -->
<section id="partner" class="gallery section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kerja Sama</h2>
    <p>Rumah Sakit Randegansari Husada telah bekerja sama dengan beberapa perusahaan asuransi</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 3000
          },
          "slidesPerView": "auto",
          "centeredSlides": true,
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 0
            },
            "768": {
              "slidesPerView": 3,
              "spaceBetween": 20
            },
            "1200": {
              "slidesPerView": 5,
              "spaceBetween": 20
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide">
          <a href="#!"><img class="img-fluid d-block mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/c/c3/BPJS_Ketenagakerjaan_logo.svg" width="250" height="100"  /></a>
				</div>
				<div class="swiper-slide">
					<a href="#!"><img class="img-fluid d-block mx-auto" src="https://faskes.bpjs-kesehatan.go.id/aplicares/libs/assets/images/bpjs-logo.png" width="250" height="100"  /></a>
				</div>
				<div class="swiper-slide">
					<a href="#!"><img class="img-fluid d-block mx-auto" src="http://1.bp.blogspot.com/-HP5xl3xBxoQ/UjrgP99gg4I/AAAAAAAAPF4/_R1r-wA_t1A/s1600/JASARAHARJA.png"  width="250" height="100" alt="" /></a>
				</div>
				<div class="swiper-slide">
					<a href="#!"><img class="img-fluid d-block mx-auto" src="https://upload.wikimedia.org/wikipedia/id/b/bd/Logo_Mandiri_Inhealth.svg" width="200" height="200" /></a>
				</div>
				<div class="swiper-slide">
					<a href="#!"><img class="img-fluid d-block mx-auto" src="http://rsmardiwaluyo.co.id/wp-content/uploads/2018/12/portfolio_2017-03-15_154310.png" width="150" alt="" /></a>
				</div>
				<div class="swiper-slide">
					<a href="#!"><img class="img-fluid d-block mx-auto" src="https://www.owlexa.com/assets/img/owlexa.png" width="100" height="100" /></a>
				</div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Kerjasama Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
    <iframe style="border:0; width: 100%; height: 370px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=rs randegan sari husada&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div><!-- End Google Maps -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-12 ">
          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Telapak, RT.2/RW.1, Randegansari, Kec. Driyorejo, Kabupaten Gresik, Jawa Timur 61177</p>
            </div>
          </div><!-- End Info Item -->
          <div class="row">
            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>No Telpon</h3>
                <p>0317509317</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>rsrandegansari@gmail.com</p>
              </div>
            </div>
          </div>
          <!-- End Info Item -->
      </div>

    </div>

  </div>

</section><!-- /Contact Section -->
@endsection