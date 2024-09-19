<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Askep - Rumah Sakit Umum Manokwari</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/askepweb/html/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/askepweb/html/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="/askepweb/html/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/askepweb/html/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/askepweb/html/css/responsive.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">

                    <div class="sign-in-from">
                        @if(session()->has('message'))
                        <div class="alert bg-white alert-success" role="alert">
                            <div class="iq-alert-icon">
                                <i class="ri-alert-line"></i>
                            </div>
                            <div class="iq-alert-text">{!! session()->get('message') !!}</div>
                        </div>
                        @endif

                        <h1 class="mb-0">Masuk</h1>
                        <p>gunakan nama pengguna dan kata sandi milik anda</p>
                        <form class="mt-4" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pengguna</label>
                                <input type="text" name="username" class="form-control mb-0"
                                    value="{{ old('username', $model->username) }}" id="exampleInputEmail1"
                                    placeholder="input data dengan benar">
                                {!! $errors->first('username') !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <!-- <a href="/askepweb/html/#" class="float-right">Forgot password?</a> -->
                                <input type="password" name="password" class="form-control mb-0"
                                    value="{{ old('password', $model->password) }}" id="exampleInputPassword1"
                                    placeholder="input data dengan benar">
                                {!! $errors->first('password') !!}
                            </div>
                            <div class="d-inline-block w-100">
                                <!-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary float-right">Masuk</button>
                            </div>
                            <!-- <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="/askepweb/html/#">Sign up</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="/askepweb/html/#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="/askepweb/html/#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="/askepweb/html/#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white"
                        style="background: url(/askepweb/html/images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                        <a class="sign-in-logo mb-5" href="/askepweb/html/#"><img src="/askepweb/cdn/logokab.png"
                                class="img-fluid" alt="logo" style="width: 140px; height: auto;"></a>
                        <!-- <a class="sign-in-logo mb-5" href="/askepweb/html/#"><img src="/askepweb/html/images/logo-white.png" class="img-fluid" alt="logo"></a> -->
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                            data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                            data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="/askepweb/cdn/perawat.jpg" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Laporan Keperawatan Semakin Mudah</h4>
                                <p>Standar Asuhan Keperawatan Rumah Sakit Umum Manokwari</p>
                            </div>
                            <!-- <div class="item">
                                    <img src="/askepweb/html/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="/askepweb/html/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/askepweb/html/js/jquery.min.js"></script>
    <script src="/askepweb/html/js/popper.min.js"></script>
    <script src="/askepweb/html/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="/askepweb/html/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="/askepweb/html/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="/askepweb/html/js/waypoints.min.js"></script>
    <script src="/askepweb/html/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="/askepweb/html/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="/askepweb/html/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="/askepweb/html/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="/askepweb/html/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="/askepweb/html/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="/askepweb/html/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="/askepweb/html/js/smooth-scrollbar.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="/askepweb/html/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="/askepweb/html/js/custom.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>