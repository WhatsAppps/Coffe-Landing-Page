@extends('layouts.app')

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand d-flex align-items-center ms-4 ms-lg-0">
        <img src="img/logo-icon.png" alt="Logo" class="me-2" style="width: 40px; height: 40px;">
        <h1 class="text-primary m-0">Hai Koppi</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="" class="nav-item nav-link active">Beranda</a>
            <a href="" class="nav-item nav-link">Tentang Kami</a>
            <a href="" class="nav-item nav-link">Layanan</a>
            <a href="" class="nav-item nav-link">Produk Kami</a>
            <a href="" class="nav-item nav-link">Kontak Kami</a>
        </div>
        <div class="d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-primary"></i>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">Panggil Kami</small>
                <p class="text-light fs-5 mb-0">+62888888</p>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <!-- Slide 1 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="Espresso">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <h1 class="display-1 text-light mb-4 animated slideInDown">Nikmati Harimu Dengan Espresso</h1>
                            <p class="text-light fs-5 mb-4 pb-3">Mulai harimu dengan secangkir espresso berkualitas yang memberikan energi dan semangat baru.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="Hai Koppi">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <p class="text-primary text-uppercase fw-bold mb-2">// Kopi Premium</p>
                            <h1 class="display-1 text-light mb-4 animated slideInDown">Cinta Dalam Setiap Cangkir</h1>
                            <p class="text-light fs-5 mb-4 pb-3">Kami menyajikan kopi premium yang dipilih dengan hati-hati untuk menghadirkan rasa yang tak terlupakan.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <!-- Card 3D effect with hover tilt -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row img-twice position-relative h-100">
                    <div class="col-6">
                        <div class="card-tilt">
                            <div class="card-background"></div>
                            <img class="img-fluid rounded about-img" src="img/about-1.jpg" alt="Gambar kopi yang diseduh dengan sempurna">
                        </div>
                    </div>
                    <div class="col-6 align-self-end">
                        <div class="card-tilt">
                            <div class="card-background"></div>
                            <img class="img-fluid rounded about-img" src="img/about-2.jpg" alt="Barista menyajikan kopi dengan hati">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content with Parallax -->
            <div class="col-lg-6 wow fadeInUp parallax" data-wow-delay="0.5s">
                <div class="h-100">
                    <p class="text-primary text-uppercase mb-2">// Tentang Kami</p>
                    <h1 class="display-6 mb-4">Kami Menyajikan Kopi Dengan Hati</h1>
                    <p>Kopi kami dibuat dengan penuh cinta dan perhatian terhadap setiap detail. Kami menggunakan biji kopi pilihan yang disangrai dengan sempurna untuk memberikan rasa yang kaya dan nikmat. Setiap tegukan kopi kami adalah hasil dari dedikasi dalam menyajikan pengalaman yang menyegarkan dan memuaskan bagi Anda.</p>
                    <p>Dengan berbagai pilihan rasa dan teknik penyajian, kami berkomitmen untuk memberikan kualitas terbaik. Kami percaya bahwa setiap cangkir kopi adalah momen spesial yang harus dinikmati sepenuhnya.</p>
                    <div class="row g-2 mb-4">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Kopi Berkualitas Tinggi
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Kopi Kustom Sesuai Selera
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Pesan Online
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Pengiriman ke Rumah
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Product Start -->
<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Produk Kopi</p>
            <h1 class="display-6 mb-4">Jelajahi Kategori Kopi Kami</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">Rp 15.000 - Rp 25.000</div>
                        <h3 class="mb-3">Espresso</h3>
                        <span>Kopi pekat dengan cita rasa kuat, cocok untuk Anda yang menyukai rasa otentik dan konsentrasi penuh energi.</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="product-img" src="img/product-1.jpg" alt="Espresso">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">Rp 15.000 - Rp 30.000</div>
                        <h3 class="mb-3">Latte</h3>
                        <span>Perpaduan sempurna antara kopi dan susu yang lembut, memberikan rasa manis dan creamy untuk dinikmati kapan saja.</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="product-img" src="img/product-2.jpg" alt="Latte">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">Rp 15.000 - Rp 27.000</div>
                        <h4 class="mb-3">Mocha</h4>
                        <span>Kombinasi nikmat antara kopi, susu, dan cokelat yang menciptakan rasa manis dengan sentuhan hangat.</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="product-img" src="img/product-3.jpg" alt="Mocha">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->

<!-- Service Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-primary text-uppercase mb-2">// Layanan Kami</p>
                <h1 class="display-6 mb-4">Apa Saja yang Kami Tawarkan Untuk Anda?</h1>
                <p class="mb-5">Kami hadir untuk memberikan pengalaman menikmati kopi yang luar biasa. Dari biji kopi terbaik hingga layanan yang memudahkan Anda menikmati kopi favorit, semuanya kami siapkan dengan sepenuh hati.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-coffee text-white"></i>
                            </div>
                            <h5 class="mb-0">Kopi Berkualitas</h5>
                        </div>
                        <span>Kami hanya menggunakan biji kopi terbaik untuk memberikan rasa yang kaya dan autentik.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-cogs text-white"></i>
                            </div>
                            <h5 class="mb-0">Produk Kustom</h5>
                        </div>
                        <span>Buat kopi sesuai selera Anda, mulai dari tingkat kepekatan hingga tambahan rasa favorit.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-shopping-cart text-white"></i>
                            </div>
                            <h5 class="mb-0">Pesan Online</h5>
                        </div>
                        <span>Nikmati kemudahan memesan kopi favorit Anda melalui layanan online kami.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-shipping-fast text-white"></i>
                            </div>
                            <h5 class="mb-0">Pengiriman ke Rumah</h5>
                        </div>
                        <span>Kopi favorit Anda akan diantar langsung ke rumah dengan layanan pengiriman kami yang cepat.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row img-twice position-relative h-100">
                    <div class="col-6">
                        <img class="img-fluid rounded" src="img/service-1.jpg" alt="Kopi Berkualitas">
                    </div>
                    <div class="col-6 align-self-end">
                        <img class="img-fluid rounded" src="img/service-2.jpg" alt="Pengiriman ke Rumah">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

 <!-- Team Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Team Kami</p>
            <h1 class="display-6 mb-4">Team Pengembang Produk</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid team-image" src="img/team-1.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Reyyoga Pratama</h5>
                            <span>Design & Web Development</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid team-image" src="img/team-2.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Muhammad Rofian Nur</h5>
                            <span>Leader Produksi & Team</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid team-image" src="img/team-3.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Asmarafi Dwi Putra</h5>
                            <span>Marketing & Keuangan</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid team-image" src="img/team-4.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Jemmy Andrea Putra</h5>
                            <span>Operasional Kuisioner</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


 <!-- Testimonial Start -->
<div class="container-xxl bg-light my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Ulasan Pelanggan</p>
            <h1 class="display-6 mb-4"> Pelanggan Yang Mempercayai Kami</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="Testimoni Pelanggan">
                    <div class="ms-4">
                        <h5 class="mb-1">Dewi Arifin</h5>
                        <span>Pecinta Kopi</span>
                    </div>
                </div>
                <p class="mb-0">"Kopi di sini benar-benar berkualitas! Aromanya luar biasa dan rasanya sangat memuaskan. Saya tidak pernah kecewa dengan produk mereka."</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="Testimoni Pelanggan">
                    <div class="ms-4">
                        <h5 class="mb-1">Andi Pratama</h5>
                        <span>Teman Baik</span>
                    </div>
                </div>
                <p class="mb-0">"saya selalu mencari kopi terbaik. Kopi dari sini memiliki karakteristik unik yang sangat cocok untuk kreasi latte art saya."</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="Testimoni Pelanggan">
                    <div class="ms-4">
                        <h5 class="mb-1">Siti Nurhayati</h5>
                        <span>Pengusaha</span>
                    </div>
                </div>
                <p class="mb-0">"Layanan pemesanan online mereka sangat membantu! Kopi saya selalu tiba tepat waktu dan dalam kondisi terbaik."</p>
            </div>
            <div class="testimonial-item bg-white rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="Testimoni Pelanggan">
                    <div class="ms-4">
                        <h5 class="mb-1">Rizal Wijaya</h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
                <p class="mb-0">"Kopinya sangat membantu saya tetap fokus saat belajar. Rasa dan aromanya sungguh membuat hari saya lebih produktif."</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <!-- Address Section -->
        <div class="d-flex flex-column align-items-start mb-3 mb-lg-0">
            <h4 class="text-light mb-3">Alamat Kami</h4>
            <p class="mb-2 text-sm text-gray-400"><i class="fa fa-map-marker-alt me-2"></i>Universitas Mulia, Balikpapan</p>
            <p class="mb-2 text-sm text-gray-400"><i class="fa fa-phone-alt me-2"></i>+62 888 888</p>
            <p class="mb-2 text-sm text-gray-400"><i class="fa fa-envelope me-2"></i>haikoppi@gmail.com</p>
        </div>
        <!-- Social Media Section -->
        <div class="d-flex align-items-center">
            <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> 