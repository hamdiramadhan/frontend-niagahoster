<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ env('APP_NAME') }}</title>

    <meta name="keywords" content="{{ env('APP_NAME') }}" />
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="HamdiRamadhan">

    <!-- Favicon -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" /> 

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no"> 

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets_porto/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_porto/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets_porto/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="assets_porto/vendor/simple-line-icons/css/simple-line-icons.min.css"> 

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets_porto/css/theme.css">
    <link rel="stylesheet" href="assets_porto/css/theme-elements.css">  

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="assets_porto/css/skins/skin-business-consulting-4.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/custom-hamdi.min.css">
 
</head>

<body>

    <div class="body txt-montserrat">
        <header id="header" class="header-transparenthamdi"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
            <div class="header-body border-top-0 h-auto box-shadow-none">
                <div class="header-top header-top-borders">
                    <div class="container h-100">
                        <div class="header-row h-100">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <div class="div-tag-top">
                                            <i class="fa fa-tag"></i>
                                        </div>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
                                            </li>
                                            <li class="nav-item py-2 d-none d-sm-inline-flex pe-2">
                                                <span class="ps-0 font-weight-semibold text-color-default text-2-5">
                                                    {{ @$setting->where('key', 'pengumuman')->first()->value }}
                                                </span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills p-relative bottom-2">
                                            <li class="nav-item py-2 d-none d-lg-inline-flex">
                                                <a href="http://www.facebook.com/"
                                                    class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i
                                                        class="fa fa-phone-alt text-3 p-relative top-1"></i>
                                                    {{ @$setting->where('key', 'telp')->first()->value }}
                                                </a>
                                            </li>
                                            <li class="nav-item py-2 d-none d-lg-inline-flex">
                                                <a href="http://www.twitter.com/" target="_blank" title="Twitter"
                                                    class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i
                                                        class="fa fa-comments text-3 p-relative top-1"></i>
                                                    Live Chat
                                                </a>
                                            </li>
                                            <li class="nav-item py-2 d-none d-lg-inline-flex">
                                                <a href="http://www.instagram.com/" target="_blank" title="Instagram"
                                                    class="text-color-dark text-color-hover-primary text-3 anim-hover-translate-top-5px transition-2ms"><i
                                                        class="fa fa-user-alt text-3 p-relative top-1"></i>
                                                    Member Area
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container header-container-height-xs container p-static">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="javascript:;">
                                        <img alt="Porto" class="logo" src="logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2 txt-roboto 
                                        header-nav-hamdi">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                @foreach ($menus as $r)
                                                    <li class="dropdown">
                                                        <a href="javascript:;"
                                                            class="nav-link {{ $loop->iteration == 1 || $loop->iteration % 15 == 0 ? 'selected' : '' }}">
                                                            {{ $r->menu }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav"
                                        onclick="$('.header-nav-main nav').toggle(500)">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            <section id="hosting" class="section border-0 m-0 bg-color-white p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <span class="b-1 txt-grey txt-montserrat-bold">PHP Hosting</span>
                            <div class="b-2 txt-grey">
                                Cepat, handal, penuh dengan modul PHP yang Anda butuhkan
                            </div>
                            <div class="b-3">
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        Solusi PHP untuk performa query yang lebih cepat.
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        Konsumsi memori yang lebih rendah.
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        Support PHP 5.3, PHP 5.4, PHP 5.6, PHP 7
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        Fitur enkripsi IonCube dan Zend Guard Loaders
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 div-banner-image">
                            <img src="assets/svg/illustration banner PHP hosting-01.svg">
                        </div>
                    </div>
                </div>
            </section>

            <hr class="solid">

            <section id="enkripsi" class="border-0 m-0 bg-color-white p-relative">
                <div class="container p-0">
                    <div class="row  appear-animation div-enkripsi" data-appear-animation="fadeIn"
                        data-appear-animation-delay="300">
                        <div class="col-lg-4 col-centered mb-4 mb-md-0">
                            <div
                                class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                                <div class="card-body p-relative zindex-1 p-5 text-center">
                                    <div class="div-enkripsi-card anim-hover-inner-translate-top-20px transition-3ms">
                                        <div class="img-enkripsi">
                                            <img src="assets/svg/illustration-banner-PHP-zenguard01.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'extraClass': 'svg-fill-color-primary'}" />
                                        </div>
                                        <p class="card-text text-3-5">
                                            PHP Zend Guard Loader
                                        </p>
                                    </div>
                                    <div
                                        class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                        <a href="javascript:;"
                                            class="read-more text-color-primary font-weight-semibold mt-2 text-2">Pelajari
                                            Lebih Lanjut<i
                                                class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-centered mb-4 mb-md-0">
                            <div
                                class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                                <div class="card-body p-relative zindex-1 p-5 text-center">
                                    <div class="div-enkripsi-card anim-hover-inner-translate-top-20px transition-3ms">
                                        <div class="img-enkripsi">
                                            <img src="assets/svg/icon-composer.svg" alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        </div>
                                        <p class="card-text text-3-5">
                                            PHP Composer
                                        </p>
                                    </div>
                                    <div
                                        class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                        <a href="javascript:;"
                                            class="read-more text-color-primary font-weight-semibold mt-2 text-2">Pelajari
                                            Lebih Lanjut<i
                                                class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-centered mb-4 mb-md-0">
                            <div
                                class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms anim-hover-inner-wrapper">
                                <div class="card-body p-relative zindex-1 p-5 text-center">
                                    <div class="div-enkripsi-card anim-hover-inner-translate-top-20px transition-3ms">
                                        <div class="img-enkripsi">
                                            <img src="assets/svg/icon-php-hosting-ioncube.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        </div>
                                        <p class="card-text text-3-5">
                                            PHP ionCube Loader
                                        </p>
                                    </div>
                                    <div
                                        class="w-100 text-center p-absolute opacity-0 bottom-30 left-0 transformY-p100 anim-hover-inner-opacity-10 anim-hover-inner-translate-top-0px transition-4ms">
                                        <a href="javascript:;"
                                            class="read-more text-color-primary font-weight-semibold mt-2 text-2">Pelajari
                                            Lebih Lanjut<i
                                                class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="paket" class="border-0 bg-transparent m-0 p-relative">
                <div class="container py-5 ">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="txt-grey appear-animation m-0 txt-montserrat-bold txt-grey"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                Paket Hosting Singapura Yang Tepat
                            </h1>
                            <h2 class="txt-grey appear-animation m-0 txt-montserrat txt-grey"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                Diskon 40% + Domain dan SSL Gratis untuk Anda
                            </h2>
                        </div>
                    </div>
                    <div class="row mt-5" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        @foreach ($pakets as $r)
                            @if ($r->best_seller == 0)
                                <div class="col-lg-3  p-0">
                                    <div class="card-paket p-0">
                                        <ul class="paket-price txt-grey">
                                            <li class="paket-header txt-montserrat-bold">
                                                {{ $r->nama }}
                                            </li>
                                            <li class="paket-price-li">
                                                <span class="coret">Rp
                                                    {{ number_format($r->harga, 0, ',', '.') }}</span>
                                                <br>
                                                <span class="txt-top pleft-10">Rp</span>
                                                <span class="txt-montserrat-bold txt-h2">
                                                    {{ $r->harga_ribuan($r->harga_final)['ribuan'] }}
                                                </span>
                                                <span class="txt-top"><b
                                                        class="txt-montserrat-bold">.{{ $r->harga_ribuan($r->harga_final)['rupiah'] }}</b>/bln</span>
                                            </li>
                                            <li class="txt-roboto"><span
                                                    class="txt-roboto-bold">{{ number_format($r->pengguna, 0, ',', '.') }}</span>
                                                Pengguna Terdaftar</li>
                                            <li class="">
                                                @foreach ($r->details as $d)
                                                    {!! $d->detail !!}
                                                    <br>
                                                @endforeach
                                                <br>
                                                <br>
                                                <a href="javascript:;" class="btn-pilih-paket">
                                                    {{ $r->diskon <= 0 ? 'Pilih Sekarang' : 'Diskon ' . $r->diskon . '%' }}
                                                </a>
                                                <br>
                                                <br>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @elseif($r->best_seller == 1)
                                <div class="div-best-value col-lg-3  p-0">
                                    <div class="card-paket p-0">
                                        <ul class="paket-price-blue txt-grey">
                                            <li class="paket-header-blue txt-montserrat-bold">
                                                {{ $r->nama }}
                                            </li>
                                            <li class="paket-price-blue-li">
                                                <div class="ribbon"><span>BEST SELLER!</span></div>
                                                <span class="coret">Rp
                                                    {{ number_format($r->harga, 0, ',', '.') }}</span>
                                                <br>
                                                <span class="txt-top pleft-10">Rp</span>
                                                <span class="txt-montserrat-bold txt-h2">
                                                    {{ $r->harga_ribuan($r->harga_final)['ribuan'] }}
                                                </span>
                                                <span class="txt-top"><b
                                                        class="txt-montserrat-bold">.{{ $r->harga_ribuan($r->harga_final)['rupiah'] }}</b>/bln</span>
                                            </li>
                                            <li class="txt-roboto bg-dark-blue"><span
                                                    class="txt-roboto-bold">{{ number_format($r->pengguna, 0, ',', '.') }}</span>
                                                Pengguna Terdaftar</li>
                                            <li class="">
                                                @foreach ($r->details as $d)
                                                    {!! $d->detail !!}
                                                    <br>
                                                @endforeach
                                                <br>
                                                <br>
                                                <a href="javascript:;" class="btn-pilih-paket-blue">
                                                    {{ $r->diskon <= 0 ? 'Pilih Sekarang' : 'Diskon ' . $r->diskon . '%' }}
                                                </a>
                                                <br>
                                                <br>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="powerful" class="border-0 bg-transparent m-0 p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="txt-grey appear-animation m-0 txt-montserrat txt-grey"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                Powerful dengan Limit PHP yang Lebih Besar
                            </h2>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            max execution time 300s
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 bg-dark-grey powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            max execution time 300s
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            php memory limit 1024 MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            post max size 128 MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 bg-dark-grey powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            upload max filesize 128 MB
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row div-powerful-kiri">
                                <div class="col-sm-12 powerful-list">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <span class="powerful-fa-li">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                        </div>
                                        <div class="col-sm-10 txt-roboto-bold">
                                            max input vars 2500
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="include" class="section border-0 bg-transparent m-0">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                <hr class="bg-dark-grey border-radius m-auto">
                            </div>
                            <h2 class="txt-grey appear-animation m-0 txt-montserrat txt-grey"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                Semua Paket Hosting Sudah Termasuk
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($termasuk as $r)
                            <div class="col-md-4 col-sm-6 txt-grey">
                                <div
                                    class="card card-border card-border-top card-border-hover bg-color-light border-0 box-shadow-6 box-shadow-hover ">
                                    <div class="card-body p-relative zindex-1 p-5 text-center">
                                        <div
                                            class="div-termasuk-card anim-hover-inner-translate-top-20px transition-3ms">
                                            <div class="img-termasuk" style="width: 100%">
                                                <img src="{{ $r->path }}">
                                            </div>
                                            <p class="card-text text-3-5">
                                                <span class="txt-montserrat-bold">
                                                    {{ $r->judul }}
                                                </span>
                                                <br>
                                                <span class="caption">
                                                    {{ $r->ket }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="hosting" class="section border-0 bg-color-white p-relative p-0">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col text-center">
                            <h2 class=" appear-animation m-0 txt-montserrat " data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                Mendukung Penuh Framework Laravel
                            </h2>
                        </div>
                    </div>
                    <div class="row txt-montserrat" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <div class="col-md-6 ">
                            <div class="b-3 ">
                                Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah
                                kami mendukung penuh framework favorit Anda
                            </div>
                            <div class="b-3">
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        <span class="caption-medium">
                                            Install Laravel <b>1 klik</b> dengan Softaculous installer
                                        </span>
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        <span class="caption-medium">
                                            Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json, </b> dan
                                            <b>fileinfo</b>.
                                        </span>
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check-circle"></i>
                                        </span>
                                        <span class="caption-medium">
                                            Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan
                                            Anda.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="caption-small ">
                                Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis
                            </div>
                            <br>
                            <a href="javascript:;" class="btn-pilih-paket-blue txt-montserrat-bold">
                                Pilih Hoting Anda
                            </a>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/svg/illustration bannersupport.svg">
                        </div>
                    </div>
                </div>

                <hr class="solid m-0">
            </section>

            <section id="modul-lengkap" class="section border-0 bg-color-white p-relative p-0 mb-5">
                <div class="container mb-5">
                    <div class="row mb-4">
                        <div class="col text-center">
                            <h2 class=" appear-animation m-0 txt-montserrat " data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                Modul Lengkap untuk Mnejalankan Aplikasi PHP Anda.
                            </h2>
                        </div>
                    </div>
                    <div class="row txt-montserrat p-o mb-2" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        @php $maksdata = 15; @endphp
                        @foreach ($moduls as $r)
                            @if ($loop->iteration == 1 || $loop->iteration % $maksdata == 1)
                                <div class="col">
                                    <ul class="ulnone">
                            @endif
                            <li>{{ $r->nama }}</li>
                            @if ($loop->iteration % $maksdata == 0)
                                </ul>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="row txt-montserrat p-o mb-5" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="col-md-12" align="center">
                        <a href="javascript:;" class="btn-lg btn-selengkapnya txt-montserrat-bold">
                            Selengkapnya
                        </a>
                    </div>
                </div>
        </div>
        </section>

        <section id="hosting-stabil" class="section border-0 bg-color-white p-relative p-0 m-0 ">
            <div class="container">
                <div class="row txt-montserrat" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="200">
                    <div class="col-md-6 ">
                        <div class="hosting-stabil-title txt-grey">
                            Linux Hosting yang Stabil dengan Teknologi LVE
                        </div>
                        <div class="b-3 txt-roboto txt-grey">
                            <p style="padding-right: 63px">
                                SuperMicro <span class="txt-roboto-bold">Intel Xeon 24-Cores</span> server dengan RAM
                                <span class="txt-roboto-bold">128 GB</span> dan teknologi <span
                                    class="txt-roboto-bold">LVE CloudLinux</span> untuk stabilitas servver Anda.
                                Dilengkapi dengan <span class="txt-roboto-bold">SSD</span> untuk kecepatan <span
                                    class="txt-roboto-bold">MySQL</span> dan caching. Apache load balancer berbasis
                                LiteSpeed Technologies, <span class="txt-roboto-bold">CageFS</span> security, <span
                                    class="txt-roboto-bold">Raid-10</span> protection dan auto backup untuk keamanan
                                website PHP Anda.
                            </p>
                        </div>
                        <a href="javascript:;" class="btn-pilih-paket-blue txt-montserrat-bold">
                            Pilih Hoting Anda
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/Image support.png" class="img-support">
                    </div>
                </div>
            </div>
        </section>


        <section id="bagikan" class="section border-0 bg-quaternary m-0 p-0">
            <div class="container" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="row">
                    <div class="col-md-7 txt-grey p-bagikan txt-montserrat-reguler">
                        Bagikan jika Anda menyukai halaman ini.
                    </div>
                    <div class="col-md-5 txt-grey p-bagikan txt-montserrat-reguler">
                        <ul class="bagikan-ul">
                            <li class="bagikan-li">
                                <a href="javascript:;">
                                    <i class="fab fa-facebook-square text-facebook"></i>
                                    <span class="div-jumlah-sosmed-fb txt-greylight">
                                        80k
                                    </span>
                                </a>
                            </li>
                            <li class="bagikan-li">
                                <a href="javascript:;">
                                    <i class="fab fa-twitter-square text-twitter"></i>
                                    <span class="div-jumlah-sosmed-twitter txt-greylight">
                                        450
                                    </span>
                                </a>
                            </li>
                            <li class="bagikan-li">
                                <a href="javascript:;">
                                    <i class="fab fa-google-plus-square text-googleplus"></i>
                                    <span class="div-jumlah-sosmed-google txt-greylight">
                                        1900
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        <section id="bantuan" class="section border-0 bg-primary m-0 p-0 text-light">
            <div class="container" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="row">
                    <div class="col-lg-12 p-bantuan ">
                        <div class="row">
                            <div class="col-md-9 text-light p-bantuan-2 txt-montserrat txt-bantuan">
                                Perlu <span class="txt-montserrat-bold">BANTUAN?</span> Hubungi Kami : <span
                                    class="txt-montserrat-bold">{{ @$setting->where('key', 'telp')->first()->value }}</span>
                            </div>
                            <div class="col-md-3 text-light divider-left-bantuan">
                                <a href="javascript:;" class="btn-live-chat txt-montserrat-bold">
                                    <i class="fa fa-comments"></i>
                                    Live Chat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer id="footer" class="position-relative bg-footer border-top-0 mt-0">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        HUBUNGI KAMI    
                    </p>
                    <p class="txt-footer">
                        {{ @$setting->where('key', 'telp')->first()->value }}
                        <br>
                        {!! @$setting->where('key', 'jam_kerja')->first()->value !!}
                        <br>
                        <br>
                        {!! @$setting->where('key', 'alamat')->first()->value !!}
                    </p> 
                </div> 
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        LAYANAN
                    </p>
                    <ul class="list list-unstyled">
                        @foreach ($footers->where('jenis', 'layanan') as $f)
                            <li>
                                <a href="javascript:;" class="txt-footer">{{ $f->nama }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div> 
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        SERVICE HOSTING  
                    </p>
                    <ul class="list list-unstyled">
                        @foreach ($footers->where('jenis', 'service') as $f)
                            <li>
                                <a href="javascript:;" class="txt-footer">{{ $f->nama }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div> 
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        TUTORIAL    
                    </p>
                    <ul class="list list-unstyled">
                        @foreach ($footers->where('jenis', 'tutorial') as $f)
                            <li>
                                <a href="javascript:;" class="txt-footer">{{ $f->nama }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div> 

                <div class="col-lg-12">
                    &nbsp; 
                </div>

                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        TENTANG KAMI    
                    </p>
                    <ul class="list list-unstyled">
                        @foreach ($footers->where('jenis', 'tentang') as $f)
                            <li>
                                <a href="javascript:;" class="txt-footer">{{ $f->nama }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div> 
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        KENAPA PILIH NIAGAHOSTER?    
                    </p>
                    <ul class="list list-unstyled">
                        @foreach ($footers->where('jenis', 'kenapa') as $f)
                            <li>
                                <a href="javascript:;" class="txt-footer">{{ $f->nama }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div> 
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        NEWSLETTER    
                    </p> 
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email" name="newsletterEmail" id="newsletterEmail" type="email">
                        <button class="btn btn-primary text-color-light text-2 py-3 px-4" type="submit"><strong>Berlangganan</strong></button>
                    </div>
                    <p class="txt-montserrat">
                        Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda
                    </p>
                </div>
                <div class="col-md-3 col-sm-6"> 
                    <p class="txt-montserrat-bold text-4">
                        &nbsp;    
                    </p>
                    <ul class="social-icons social-icons-footer-border social-icons-big">
                        <li class="">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.google.com/" target="_blank" title="Google Plus">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-12">
                    &nbsp; 
                </div>

                <div class="col-lg-12 div-pembayaran"> 
                    <p class="txt-montserrat-bold text-4">
                        PEMBAYARAN    
                    </p>
                    <ul class="bagikan-ul p-0 m-0">
                        @foreach ($arr_bank as $r)
                        <li class="bagikan-li">
                            <a href="javascript:;">
                                <img src="assets/bank/{{ $r }}.png">
                            </a>
                        </li>
                        @endforeach 
                    </ul>
                    <p class="txt-montserrat">
                        Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!    
                    </p> 
                </div>
            </div>
        </div>
        <div class="footer-copyright bg-transparent">
            <div class="container">
                <hr class="bg-color-light opacity-1">
                <div class="row">
                    <div class="col-md-9 pb-5">
                        <p class="text-3 mb-0 text-light">
                            Copyright ©2016 Niagahoster | Hosting powered by PHP7, Cloudlinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta
                            <br> 
                            Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                        </p>
                    </div>
                    <div class="col-md-3 pb-5">
                        <p class="text-3 mb-0 text-light">
                            Syarat dan Ketentuan | Kebijakan Privasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>
<script src="assets_porto/vendor/jquery/jquery.min.js"></script>
<script src="assets_porto/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="assets_porto/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets_porto/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="assets_porto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets_porto/vendor/jquery.validation/jquery.validate.min.js"></script> 
<script src="assets_porto/vendor/lazysizes/lazysizes.min.js"></script>
<script src="assets_porto/vendor/isotope/jquery.isotope.min.js"></script> 
<script src="assets_porto/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets_porto/vendor/vide/jquery.vide.min.js"></script>
<script src="assets_porto/vendor/vivus/vivus.min.js"></script> 

<!-- Theme Base, Components and Settings -->
<script src="assets_porto/js/theme.js"></script>
 

<!-- Theme Custom -->
<script src="assets_porto/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets_porto/js/theme.init.js"></script>


</html>
