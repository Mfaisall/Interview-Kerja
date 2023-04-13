<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('SuccesAdd'))
    <script>
        swal({
            title: "",
            text: "Berhasil Menambah Data!",
            icon: "success",
        });
    </script>
    @endif

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Fe's Company<span>.</span></h1>
                    <h2>west java since February 1, 2019-Featured-24 Workers</h2>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Image</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <h4><img src="../assets/image/gedung.jpg" alt="" style="width: 100%;"></h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <h4><img src="../assets/image/gedung.jpg" alt="" style="width: 100%;"></h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <h4><img src="../assets/image/gedung.jpg" alt="" style="width: 100%;"></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p>Our Date</p>
            </div>
            <div class="row no-gutters">
                <div class="content d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="fa-solid fa-trophy"></i>
                                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto
                                    ut.</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia
                                    dere tan</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4"
                                    class="purecounter"></span>
                                <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut
                                    voluptate non vel</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="20"
                                    data-purecounter-duration="4" class="purecounter"></span>
                                <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo
                                    pad der</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <p>Send Your Application</p>
            </div>


            <div class="row mt-5">
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="{{ route('store.data') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Name :</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label>Email :</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Age :</label>
                                <input type="number" name="age" class="form-control" id="age"
                                    placeholder="Your Age" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Phone Number :</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp"
                                    placeholder="Your Phone Number" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Last Education :</label>
                                <select class="p-2 w-100" class="form-control" name="last_education"
                                    id="last_education">
                                    <option selected hidden disabled>choose</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="UNIVERSITAS">UNIVERSITAS</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="">Educational Institutions :</label>
                                <input type="string" class="form-control" name="education_name" id="education_name"
                                    placeholder="Your Educational Institutions" required>
                            </div>
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <label for="">CV File :</label>
                                <input type="file" class="form-control" name="file" id="file"
                                    placeholder="Your Cv" required>
                            </div>
                        </div>
                        <div class="" style="right:10px; position:relative;"><button
                                type="submit">Send</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>LOGIN</h3>
                <p>Login To See Your Status With The Email Your Registered On The Jon Application</p>
                @if (Auth::check())
                    @if (Auth::User()->role == 'admin')
                        <a href="{{ route('data.admin') }}" class="cta-btn">Lihat Data</a>
                    @elseif(Auth::User()->role == 'petugas')
                        <a href="{{ route('data.petugas') }}" class="cta-btn">Lihat Data</a>
                    @endif
                @else
                    <a class="cta-btn" href="/login">Click Me</a>
                @endif
            </div>

        </div>
    </section><!-- End Cta Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Go Work<span>.</span></h3>
                            <p>
                                <strong>Phone:</strong> +23 3000 000 00<br>
                                <strong>Email:</strong> company@fes.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>FAQ</li>
                            <li>Reporting</li>
                            <li>Block Storage</li>
                            <li>Tools & integrations</li>
                            <li>API</li>
                            <li>Pircing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
