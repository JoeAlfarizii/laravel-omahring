@extends('client/layouts/layout')

@section('title', 'Home')

@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper-bundle.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
@endsection

@section('page-style')
    <style>
        @media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }

        .swiper-pagination-bullet-active {
            background-color: #006DB8 !important;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
        }

        #jumboBackground {
            /* -webkit-mask-image: linear-gradient(black, transparent); 
            mask-image: linear-gradient(#1E1B4B, transparent); */
            /* filter: blur(2px) contrast(50%); */
            object-fit: cover;
        }

    </style>
@endsection

@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

@section('content')
    <section class="relative w-full overflow-x-hidden h-screen" id="jumboBanner">
        {{-- <img id="jumboBackground" class="absolute w-1/2 h-full right-0 border-l-4 border-custom-primary" src="{{asset('assets/img/backgrounds/ringbird-steel.jpeg')}}" alt=""> --}}
        <div class="container flex max-w-6x mx-auto flex-wrap h-full lg:h-[85vh] lg:px-56">
            <div class="w-full lg:w-1/2 flex">
                <div class="relative text-center align-center mt-24 lg:mt-0 px-8 flex flex-col lg:justify-center lg:text-left" data-aos="fade-right" data-aos-duration="1500">
                    <h1 class="text-3xl font-bold mb-4 text-custom-primary">No #1 <span class="text-blue-600">Kebanggaan Burung Beridentitas </span></h1>
                    <p class="text-4xl font-bold mb-4">Yuk Request Bikin Ring...</p>
                    {{-- <p class="text-lg mb-6">Production - Retail - Pieces</p> --}}

                    <p class="text-lg mb-4 font-bold">Solusi Pecinta Proses, ternakan JADI makin terkenal dan berkelas!</p>
                    <p class="text-md">Sudah melayani <span class="text-blue-600">10.000++</span> lebih tiap bulannya</p>

                    <button class="w-full mt-12 font-bold bg-custom-primary text-gray-100 py-3 px-16 rounded-lg lg:rounded-full z-10 h-fit lg:w-fit" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="1500">Pesan Sekarang</button>
                </div>
            </div>
            <div class="hidden lg:flex lg:w-1/2 lg:flex-wrap z-10" data-aos="fade-left" data-aos-duration="1500">
                <div class="relative lg:mt-0 px-8 flex flex-col w-full justify-center">
                    <img id="jumboBackground" class="absolute w-full h-3/5 right-0 border-4 border-custom-primary rounded-lg" src="{{asset('assets/img/backgrounds/ringbird-steel.jpeg')}}" alt="">
                </div>
            </div>
        </div>
        <svg class="absolute left-0 top-1/2 -translate-y-3/4 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%" id="linearGradient-1">
                    <stop stop-color="#2563EB" offset="0%" />
                    <stop stop-color="#2563EB" offset="100%" />
                </linearGradient>
                <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                    id="filter-3">
                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                </filter>
                <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                <g id="Desktop-HD" transform="translate(-39 -531)">
                    <g id="Hero" transform="translate(43 83)">
                        <g id="Rectangle-6" transform="rotate(45 213 654)">
                            <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                            <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <svg class="absolute top-0 -right-1/4 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block"
            viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                    <stop stop-color="#EB6325" offset="0%" />
                    <stop stop-color="#EB6325" offset="100%" />
                </linearGradient>
                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                    <stop stop-color="#3A72ED" offset="0%" />
                    <stop stop-color="#3A72ED" offset="100%" />
                </linearGradient>
                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                    id="a">
                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                </filter>
                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                    id="d">
                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                </filter>
                <path
                    d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                    id="b" />
                <path
                    d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                    id="e" />
            </defs>
            <g fill="none" fill-rule="evenodd" opacity=".9">
                <g transform="rotate(65 416.452 409.167)">
                    <use fill="#000" filter="url(#a)" xlink:href="#b" />
                    <use fill="url(#c)" xlink:href="#b" />
                </g>
                <g transform="rotate(29 421.929 414.496)">
                    <use fill="#000" filter="url(#d)" xlink:href="#e" />
                    <use fill="url(#f)" xlink:href="#e" />
                </g>
            </g>
        </svg>
    </section>

    <section class="relative items-center justify-center w-full overflow-x-hidden mb-16 bg-indigo-950 py-12" id="featureProduct">
        <div class="container flex flex-col items-center justify-center h-full max-w-6xl px-8 mx-auto xl:px-0">
            <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl mx-auto text-center" data-aos="fade-top" data-aos-duration="1500">
                <h1 class="relative mb-4 text-2xl font-black leading-tight text-center text-gray-300 sm:text-5xl xl:mb-6">Keunggulan</h1>
                <p class="text-xl font-medium text-gray-200 mb-6">Anda membeli produk kami untuk partner setia anda sebagai 
                    <br><span class="text-orange-500">#Kebanggaan</span> <span class="text-blue-500">Burung Beridentitas </span>
                </p>
            </div>
            <div class="feature-container w-full flex flex-wrap items-center">
                <div class="w-full">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4" data-aos="zoom-in-up" data-aos-duration="1500">
                                <div class="group px-4 py-5 flex-auto text-center rounded-lg hover:shadow-md hover:bg-white transition duration-200 ease-in md:text-left">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white group-hover:bg-orange-700">
                                        <i class="fas fa-star group-hover:text-white"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold text-gray-200 group-hover:text-indigo-950">
                                        RA<span class="text-orange-600">P</span>I & PREMI<span class="text-orange-600">U</span>M
                                    </h6>
                                    <p class="mb-4 text-gray-200 group-hover:text-indigo-950">Diproduksi Menggunakan Teknologi <b>M-PS terbaru</b> dengan tingkat <b>akurasi tinggi</b> sehingga menghasilkan produk yang <b>sangat rapi</b> dan <b>presisi</b> serta Ternakan terlihat berkelas dengan bahan <b>premium</b></p>
                                </div>
                            </div>
                            <div class="relative flex flex-col mt-4" data-aos="zoom-in-up" data-aos-duration="1500">
                                <div class="group px-4 py-5 flex-auto text-center rounded-lg hover:shadow-md hover:bg-white transition duration-200 ease-in md:text-left">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white group-hover:bg-orange-700">
                                        <i class="fas fa-shipping-fast group-hover:text-white"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold text-gray-200 group-hover:text-indigo-950">
                                        CEP<span class="text-orange-600">A</span>T & BERGARAN<span class="text-orange-600">S</span>I
                                    </h6>
                                    <p class="mb-4 text-gray-200 group-hover:text-indigo-950">Proses pengerjaan 1 - 2 hari jadi. Jika pesanan tidak sesuai request kami ganti ulang / uang Kembali 100% (Jangan khawatir)</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4" data-aos="zoom-in-up" data-aos-duration="1500">
                                <div class="group px-4 py-5 flex-auto text-center rounded-lg hover:shadow-md hover:bg-white transition duration-200 ease-in md:text-left">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white group-hover:bg-orange-700">
                                        <i class="fas fa-money-bill-wave-alt group-hover:text-white"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold text-gray-200 group-hover:text-indigo-950">
                                        KONSULTASI & SHARING
                                    </h6>
                                    <p class="mb-4 text-gray-200 group-hover:text-indigo-950">Anda bebas berkonsultasi secara <b>GRATIS</b> dan kami dengan senang hati akan merespon secepatnya. <b>Setiap pembelian anda</b>, selalu kami sisihkan untuk mengukir kebahagiaan mereka yang membutuhkan</p>
                                </div>
                            </div>
                            <div class="relative flex flex-col mt-4" data-aos="zoom-in-up" data-aos-duration="1500">
                                <div class="group px-4 py-5 flex-auto text-center rounded-lg hover:shadow-md hover:bg-white transition duration-200 ease-in md:text-left">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white group-hover:bg-orange-700">
                                        <i class="fas fa-wallet group-hover:text-white"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold text-gray-200 group-hover:text-indigo-950">
                                        PILIHAN PEMBAYARAN
                                    </h6>
                                    <p class="mb-4 text-gray-200 group-hover:text-indigo-950">Pembayaran dapat dilakukan melalui <i>Cash On Delivery</i> (COD) / Bayar di Tempat atau Transfer melalui Bank BCA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative items-center justify-center w-full overflow-x-hidden my-12 lg:my-32" id="productSlider">
        <div class="container flex flex-col items-center justify-center h-full max-w-6xl px-8 mx-auto xl:px-0">
            <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl mx-auto text-center" data-aos="fade-top" data-aos-duration="1500">
                <h1 class="relative mb-4 text-2xl font-black leading-tight text-center text-gray-900 sm:text-5xl xl:mb-6">Produk</h1>
                <p class="text-xl font-medium text-gray-400 mb-6">Kami Menyediakan Produk Berkualitas untuk anda </p>
            </div>
            <div class="product-container flex flex-col w-full mt-0 lg:flex-row gap-4 sm:mt-10 lg:mt-4 lg:px-24">
                <div class="main-product w-full h-64 lg:w-1/2 lg:h-96">
                    <img class="rounded border-4 border-custom-primary w-full h-full" src="{{ asset('assets/img/products/bird_ring.jpeg') }}" alt="Main Product">
                </div>
                <div class="product-slider w-full h-64 lg:w-1/2 lg:h-96">
                    <div class="swiper mySwiper rounded border-4 border-custom-primary">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/products/product_grids.jpeg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/products/product-6.jpeg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/products/product-5.jpeg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/products/product-4.jpeg') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/products/product-3.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="product-size w-full h-64 lg:w-1/2 lg:h-96 lg:hidden">
                    <img class="rounded border-4 border-custom-primary w-full h-full" src="{{ asset('assets/img/products/product_size.jpeg') }}" alt="Main Product">
                </div>
            </div>
        </div>
    </section>

    <section class="relative items-center justify-center w-full h-screen lg:h-auto overflow-x-hidden lg:my-44" id="testimonialUser">
        <div class="container flex flex-col items-center justify-center h-full max-w-6xl px-8 mx-auto xl:px-0 pt-12">
            <div class="flex flex-col items-center justify-end w-full h-2/5 max-w-2xl mx-auto text-center" data-aos="fade-top" data-aos-duration="1500">
                <h1 class="relative mb-4 text-2xl font-black leading-tight text-center text-gray-900 sm:text-5xl xl:mb-6">Testimonial</h1>
                <p class="text-xl font-medium text-gray-400">Kami akan selalu mengusahakan memilih jasa ekspedisi terbaik wilayah anda baik yang melayani system COD atau Non-COD. </p>
            </div>
            <div class="testimonial-container flex flex-col w-full h-full mt-12 lg:mt-0 lg:flex-row gap-4" data-aos="fade-top" data-aos-duration="1500">
                <div class="testimonial-slider w-full mx-auto">
                    <div class="swiper rounded" id="testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-content flex flex-col-reverse items-center justify-center w-full col-span-1 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left bg-white hover:shadow ease lg:h-56 lg:px-8 py-12">
                                    <div class="flex flex-col pr-8">
                                        <div class="relative pl-12">
                                            <svg class="absolute left-0 w-10 h-10 text-custom-secondary fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                <path
                                                    d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                            </svg>
                                            <p class="my-4 text-base text-gray-600">
                                                Cocok untuk burung perkutut, Tampilanya sangat memuaskan. kualitasnya sangat bagus sekali barangnya dan kurirnya sangat baik dan ramah
                                            </p>
                                        </div>
        
                                        <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">susiyanasari<span class="mt-1 text-sm leading-5 text-gray-500 truncate hidden md:inline"> - Shopee</span></h3>
                                        <p class="pl-12 mt-1 text-sm leading-5 text-gray-500 truncate md:hidden">Shopee</p>
                                    </div>
                                    <div class="w-24 h-24 max-w-24 max-h-24 lg:w-1/4">
                                        <img class="object-cover mb-5 bg-gray-300 rounded-full md:mb-0"
                                        src="{{ asset('assets/img/icon/user.png') }}"
                                        alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-content flex flex-col-reverse items-center justify-center w-full col-span-1 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left bg-white hover:shadow ease lg:h-56 lg:px-8 py-12">
                                    <div class="flex flex-col pr-8">
                                        <div class="relative pl-12">
                                            <svg class="absolute left-0 w-10 h-10 text-custom-secondary fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                <path
                                                    d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                            </svg>
                                            <p class="my-4 text-base text-gray-600">Checkout aja dijamin ga nyesel. penjual ramah harga bersahabat pokoknya puas dah!
                                            </p>
                                        </div>
        
                                        <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">alkinsa_u1 <span class="mt-1 text-sm leading-5 text-gray-500 truncate hidden md:inline">- Shopee</span></h3>
                                        <p class="pl-12 mt-1 text-sm leading-5 text-gray-500 truncate md:hidden">Shopee</p>
                                    </div>
                                    <div class="w-24 h-24 max-w-24 max-h-24 lg:w-1/4">
                                        <img class="object-cover mb-5 bg-gray-300 rounded-full md:mb-0"
                                        src="{{ asset('assets/img/icon/user.png') }}"
                                        alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-content flex flex-col-reverse items-center justify-center w-full col-span-1 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left bg-white hover:shadow ease lg:h-56 lg:px-8 py-12">
                                    <div class="flex flex-col pr-8">
                                        <div class="relative pl-12">
                                            <svg class="absolute left-0 w-10 h-10 text-custom-secondary fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                <path
                                                    d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                            </svg>
                                            <p class="my-4 text-base text-gray-600">
                                                Kualitas barang bukan kaleng - kalengan. hasil produksi nya tanpa cacat, Rapi , dan presisi di tulisan angka dan huruf. Sukses terus buat sellernya!
                                            </p>
                                        </div>
        
                                        <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">lopisnyalupis <span class="mt-1 text-sm leading-5 text-gray-500 truncate hidden md:inline">- Shopee</span></h3>
                                        <p class="pl-12 mt-1 text-sm leading-5 text-gray-500 truncate md:hidden">Shopee</p>
                                    </div>
                                    <div class="w-24 h-24 max-w-24 max-h-24 lg:w-1/4">
                                        <img class="object-cover mb-5 bg-gray-300 rounded-full md:mb-0"
                                        src="{{ asset('assets/img/icon/user.png') }}"
                                        alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-content flex flex-col-reverse items-center justify-center w-full col-span-1 text-center transition-all duration-200 bg-gray-100 rounded-lg md:flex-row md:text-left bg-white hover:shadow ease lg:h-56 lg:px-8 py-12">
                                    <div class="flex flex-col pr-8">
                                        <div class="relative pl-12">
                                            <svg class="absolute left-0 w-10 h-10 text-custom-secondary fill-current"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                                <path
                                                    d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                            </svg>
                                            <p class="my-4 text-base text-gray-600">Terima kasih dan semoga berkah selalu untuk omah ring. salam sukses dan jaya selalu
                                            </p>
                                        </div>
        
                                        <h3 class="pl-12 mt-3 text-base font-medium leading-5 text-gray-800 truncate">amarsesa <span class="mt-1 text-sm leading-5 text-gray-500 truncate hidden md:inline">- Shopee</span></h3>
                                        <p class="pl-12 mt-1 text-sm leading-5 text-gray-500 truncate md:hidden">Shopee</p>
                                    </div>
                                    <div class="w-24 h-24 max-w-24 max-h-24 lg:w-1/4">
                                        <img class="object-cover mb-5 bg-gray-300 rounded-full md:mb-0"
                                        src="{{ asset('assets/img/icon/user.png') }}"
                                        alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative items-center justify-center w-full h-screen lg:h-auto overflow-x-hidden lg:my-14 lg:mb-12" id="dijaminPuas">
        <div class="container flex flex-col items-center justify-center h-full max-w-6xl px-8 py-6 mx-auto xl:px-16 xl:py-12 bg-abstract-blue bg-cover lg:rounded-md">
            <h1 class="relative mb-4 text-4xl font-black leading-tight text-center text-gray-100 sm:text-5xl xl:mb-10">
                Dijamin <span class="text-orange-600">PUAS</span>
            </h1>
            <p class="text-md font-bold text-gray-200 text-center tracking-widest mb-2 lg:text-xl">
                RA<span class="text-orange-600">P</span>I | PREMI<span class="text-orange-600">U</span>M | CEP<span class="text-orange-600">A</span>T | BERGARAN<span class="text-orange-600">S</span>I
            </p>
            <p class="text-sm font-bold text-center tracking-widest lg:text-xl">
                <span class="text-orange-600">#Kebanggaan</span> <span class="text-blue-500">Burung Beridentitas </span>
            </p>
        </div>
    </section>

    {{-- Whatsapp Button --}}
    <section class="fixed right-6 bottom-12 w-16 z-50 md:hidden">
        <span class="relative flex h-16 w-16">
            <span class="animate-ping absolute h-full w-full delay-1000 rounded-full bg-custom-green-whatsapp opacity-75"></span>
            <img src="{{ asset('assets/img/icon/whatsapp.png') }}" alt="Whatsapp Button Image">
        </span>
    </section>
@endsection

@section('page-script')
    <script>
        AOS.init();
        
        if (document.getElementById('nav-mobile-btn')) {
            document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                if (this.classList.contains('close')) {
                    document.getElementById('nav').classList.add('hidden');
                    this.classList.remove('close');
                } else {
                    document.getElementById('nav').classList.remove('hidden');
                    this.classList.add('close');
                }
            });
        }

        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        new Swiper("#testimonial-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        })
    </script>
@endsection