<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SISTEM PAKAR PENYAKIT MATA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('elearning/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('elearning/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('elearning/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('elearning/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('elearning/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-brain me-3"></i>SIPAMA</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#top" class="nav-item nav-link">Home</a>
                <a href="#about" class="nav-item nav-link">Tentang</a>
                <a href="#penyakit" class="nav-item nav-link">Penyakit Mata</a>
                <a href="#testimoni" class="nav-item nav-link">Testimoni</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <!-- Tombol untuk memicu modal -->
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#myModal">
                Ayo Konsultasi<i class="fa fa-arrow-right ms-3"></i>
            </a>
  
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Modal -->
    <style>
        .btn-space {
          margin-right: 40px;
        }
      </style>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menu Konsultasi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
            <!-- Isi modal berupa tombol tautan -->
            <a href="/demspter" class="btn btn-primary btn-space">Dempster-Shafer</a> 
            <a href="/certainty" class="btn btn-primary">Certainty Factor</a>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
        </div>
    </div>

 <!-- Carousel Start -->
 <section id="top">
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('elearning/img/carousel-1.png')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Penyakit Mata Umum</h5>
                            <h1 class="display-3 text-white animated slideInDown">Pelajari tentang Penyakit Mata dan Gejalanya</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Katarak, glaukoma, degenerasi makula, dan banyak lagi! Penyakit mata umum dapat mempengaruhi kualitas 
                                penglihatan Anda dan memerlukan perhatian medis.Dapatkan informasi yang akurat dan penting tentang penyakit mata ini di <b>SIPAMA</b>, 
                                mulai dari gejalanya hingga pengobatan yang tersedia. Memahami penyakit mata adalah langkah pertama dalam menjaga kesehatan mata Anda.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Konsultasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('elearning/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Perawatan Mata</h5>
                            <h1 class="display-3 text-white animated slideInDown">Pentingnya Perawatan Mata yang Baik</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Mata adalah salah satu indra yang paling berharga. Untuk menjaga kesehatan mata Anda, 
                                penting untuk memahami perawatan mata yang baik. Di <b>SIPAMA</b>, kami memberikan tips dan saran tentang perawatan mata yang tepat. 
                                Mulai dari menjaga pola makan yang sehat hingga merawat mata saat menggunakan perangkat elektronik. 
                                Pelajari lebih lanjut tentang pentingnya perawatan mata dan bagaimana Anda dapat menjaga kesehatan mata Anda dengan baik.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Gabung Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Carousel End -->



   <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-eye text-primary mb-4"></i>
                        <h5 class="mb-3">Katarak</h5>
                        <p>Penyakit mata yang ditandai dengan kekeruhan pada lensa mata.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-low-vision text-primary mb-4"></i>
                        <h5 class="mb-3">Glaukoma</h5>
                        <p>Penyakit mata yang ditandai dengan peningkatan tekanan dalam mata.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-eye-slash text-primary mb-4"></i>
                        <h5 class="mb-3">Konjungtivitis</h5>
                        <p>Radang pada selaput mata yang dapat disebabkan oleh infeksi atau alergi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                        <h5 class="mb-3">Retinopati Diabetik</h5>
                        <p>Kerusakan pembuluh darah di retina akibat diabetes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

    <!-- About Start -->
<section id="about">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('elearning/img/about.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Website </h6>
                    <h1 class="mb-4">Selamat datang di Website Sistem Pakar Penyakit Mata (SIPAMA)</h1>
                    <p class="mb-4">Sumber informasi mengenai penyakit mata. Kami berkomitmen untuk memberikan pengetahuan dan pemahaman yang komprehensif tentang berbagai jenis penyakit mata yang umum terjadi.</p>
                    <p class="mb-4">Penyakit mata merupakan masalah kesehatan yang dapat memengaruhi penglihatan dan kualitas hidup seseorang. Dalam website ini, Anda akan menemukan informasi yang berguna mengenai penyakit mata umum, 
                        termasuk gejala, penyebab, faktor risiko, diagnosis, pengobatan, serta langkah-langkah pencegahan yang dapat diambil.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Penyakit Mata Umum</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diagnosis Penyakit</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Gejala Penyakit Mata</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pencegahan</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengobatan</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tips Perawatan Mata</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Referensi dan Sumber Informasi</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2"  data-bs-toggle="modal" data-bs-target="#myModal" href="#">Konsultasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- About End -->


    <!-- Categories Start -->
<section id="penyakit">
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Penyakit Mata</h6>
                <h1 class="mb-5">Penyakit Mata</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="{{asset('elearning/img/Glaukoma.webp')}}">
                                <img class="img-fluid" src="{{asset('elearning/img/Glaukoma.webp')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Glaukoma</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{asset('elearning/img/Katarak.jpg')}}">
                                <img class="img-fluid" src="{{asset('elearning/img/Katarak.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Katarak</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="{{asset('elearning/img/Retinopati.png')}}">
                                <img class="img-fluid" src="{{asset('elearning/img/Retinopati.png')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Retinopati Diabetik</h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{asset('elearning/img/Konjungtivitis.jpg')}}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('elearning/img/Konjungtivitis.jpg')}}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Konjungtivitis</h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Start -->
<section id="testimoni">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Pendapat Pengguna Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('elearning/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Pengguna 1</h5>
                    <p>Profesi 1</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Saya menemukan SIPAMA sangat membantu dalam memahami berbagai penyakit mata. Informasinya lengkap dan mudah dipahami. Sangat direkomendasikan!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('elearning/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Pengguna 2</h5>
                    <p>Profesi 2</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Sebagai tenaga kesehatan, saya mengandalkan SIPAMA untuk informasi yang akurat dan terbaru tentang penyakit mata. Ini menjadi sumber utama saya dalam memahami dan menjelaskan kondisi mata kepada pasien.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('elearning/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Pengguna 3</h5>
                    <p>Profesi 3</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Saya ingin menyampaikan rasa terima kasih kepada tim di balik SIPAMA. Informasi yang disediakan di sini telah membantu saya dalam memahami kondisi mata saya dengan lebih baik dan membuat keputusan yang berdasar tentang pilihan pengobatan.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('elearning/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Nama Pengguna 4</h5>
                    <p>Profesi 4</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Saya sangat merekomendasikan SIPAMA kepada siapa pun yang mencari informasi yang dapat dipercaya tentang penyakit mata. Kontennya disajikan dengan baik, dan tampilan website-nya juga user-friendly. Sumber daya yang luar biasa bagi siapa saja yang peduli dengan kesehatan mata mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->

<!-- Contact Start -->
<section id="contact">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kontak Kami</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-1.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('elearning/img/course-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('elearning/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('elearning/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('elearning/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('elearning/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('elearning/js/main.js')}}"></script>
</body>

</html>