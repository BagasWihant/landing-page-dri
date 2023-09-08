<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ __('index.welcome') }}</title>
</head>

<body class="font-pjs relative bg-black">
    {{-- FLOAT BUTTON --}}
    <a href="http://wa.me/+6287802530264"
        class="float-button w-[72px] h-[72px] rounded-full fixed z-[100] bottom-10 right-10 p-3">
        <img src="{{ asset('img/wa.png') }}" alt="">
    </a>

    {{-- HOME --}}
    <section id="home" class=" bg-hitam back 3xl:backx256 min-h-screen bg-cover py-8 mx-auto ">

        <div class=" w-full h-full fixed md:hidden block py-0 top-0 left-0 duration-500 z-[99999] -translate-y-full bg-hitam bg-opacity-75"
            id="menuContent">
            <div class="bg-gradient-to-b bg-transparent from-[#30328C] to-[#3a3eca] rounded-b-3xl shadow-2xl pb-5">
                <div class="flex justify-between px-4 pt-8 ">
                    <img src="{{ asset('img/dri.png') }}" class="w-14" alt="DRI" />
                    <div onclick="closeMenu()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path
                                        d="M25,2c-12.681,0 -23,10.319 -23,23c0,12.681 10.319,23 23,23c12.681,0 23,-10.319 23,-23c0,-12.681 -10.319,-23 -23,-23zM33.71,32.29c0.39,0.39 0.39,1.03 0,1.42c-0.2,0.19 -0.45,0.29 -0.71,0.29c-0.26,0 -0.51,-0.1 -0.71,-0.29l-7.29,-7.29l-7.29,7.29c-0.2,0.19 -0.45,0.29 -0.71,0.29c-0.26,0 -0.51,-0.1 -0.71,-0.29c-0.39,-0.39 -0.39,-1.03 0,-1.42l7.29,-7.29l-7.29,-7.29c-0.39,-0.39 -0.39,-1.03 0,-1.42c0.39,-0.39 1.03,-0.39 1.42,0l7.29,7.29l7.29,-7.29c0.39,-0.39 1.03,-0.39 1.42,0c0.39,0.39 0.39,1.03 0,1.42l-7.29,7.29z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <ul class="flex flex-col gap-9 p-5  tracking-[0.12px] leading-[140%] text-xl font-bold text-white ">
                    <a href="#home">
                        <li class="">{{ __('index.home') }}</li>
                    </a>
                    <a href="#about">
                        <li class="">{{ __('index.about') }}</li>
                    </a>
                    <a href="#produk">
                        <li class="">{{ __('index.product') }}</li>
                    </a>
                    <a href="#service">
                        <li class="">{{ __('index.service') }}</li>
                    </a>
                    <div class="flex justify-between">
                        @if (app()->getLocale() == 'en')
                            <a id="lang" href="/id"
                                class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                                <img src="{{ asset('img/en.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                                <span>EN</span>
                            </a>
                        @else
                            <a id="lang" href="/en"
                                class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                                <img src="{{ asset('img/id.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                                <span>ID</span>
                            </a>
                        @endif
                        <a href="http://wa.me/+6287802530264"
                            class="rounded-[80px] capitalize border-white border lg:py-[14px] py-3 lg:px-[24px] px-3">{{ __('index.contact_us') }}</a>
                    </div>
                </ul>
            </div>
        </div>
        {{-- navbar --}}
        {{-- <div class="flex justify-between items-center w-full 2xl:px-[104px] xl:px-20 lg:px-10 text-white font-semibold leading-[140%] text-xl tracking-wide capitalize">
            <div class="flex justify-between items-center ">
                <img src="{{ asset('img/dri.png') }}" class="w-14 mr-[104px]">
                <div>
                    <ul class="flex 2xl:gap-20 lg:gap-16">
                        <a href="#home">
                            <li class="">{{ __('index.home') }}</li>
                        </a>
                        <a href="#about">
                            <li class="">{{ __('index.about') }}</li>
                        </a>
                        <a href="#produk">
                            <li class="">{{ __('index.product') }}</li>
                        </a>
                        <a href="#service">
                            <li class="">{{ __('index.service') }}</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="flex ">
                @if (app()->getLocale() == 'en')

                <a id="lang" href="/id" class="flex items-center 2xl:mr-[80px] lg:mr-[60px] cursor-pointer">
                    <img src="{{ asset('img/en.png') }}" class="w-10 mr-4">
                    <span>EN</span>
                </a>
                @else
                <a id="lang" href="/en" class="flex items-center 2xl:mr-[80px] lg:mr-[60px] cursor-pointer">
                    <img  src="{{ asset('img/id.png') }}" class="w-10 mr-4">
                    <span>ID</span>
                </a>
                @endif
                <a href="http://wa.me/+6287802530264" class="rounded-[80px] capitalize border-white border py-[14px] px-[24px]">{{ __('index.contact_us') }}</a >
            </div>
        </div> --}}

        <div class="w-full text-white flex flex-wrap 2xl:px-[104px] xl:px-20 lg:px-10 md:px-5 sss:px-4 ">
            <div href="" class="flex items-center w-full justify-between relative">
                <img src="{{ asset('img/dri.png') }}" class="w-14 lg:mr-[104px] md:mr-20" alt="DRI" />

                <div class="hidden w-full md:flex md:justify-between md:items-center">
                    <ul
                        class="flex 2xl:gap-20 lg:gap-16 md:gap-10 lg:text-xl text-base tracking-[0.12px] leading-[140%] font-semibold">
                        <a href="#home">
                            <li class="">{{ __('index.home') }}</li>
                        </a>
                        <a href="#about">
                            <li class="">{{ __('index.about') }}</li>
                        </a>
                        <a href="#produk">
                            <li class="">{{ __('index.product') }}</li>
                        </a>
                        <a href="#service">
                            <li class="">{{ __('index.service') }}</li>
                        </a>
                    </ul>
                    <div class="md:flex hidden">
                        @if (app()->getLocale() == 'en')
                            <a id="lang" href="/id"
                                class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                                <img src="{{ asset('img/en.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                                <span>EN</span>
                            </a>
                        @else
                            <a id="lang" href="/en"
                                class="flex items-center 2xl:mr-[80px] xl:mr-[60px] md:mr-5 cursor-pointer">
                                <img src="{{ asset('img/id.png') }}" class="xl:w-10 xl:mr-4 w-8 mr-3">
                                <span>ID</span>
                            </a>
                        @endif
                        <a href="http://wa.me/+6287802530264"
                            class="rounded-[80px] capitalize border-white border lg:py-[14px] py-3 lg:px-[24px] px-3">{{ __('index.contact_us') }}</a>

                    </div>
                </div>

                <button data-collapse-toggle="navbar-default" type="button" onclick="openMenu()"
                    class="inline-flex items-center p-1 w-14 h-14  justify-center text-sm text-white hover:text-[#30328C] rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

            </div>

        </div>

        {{-- end navbar --}}

        {{-- SLOGAN --}}
        <div class="flex flex-col justify-center items-center h-[90%] pt-[193px] text-white ">
            <div class="font-bold self-center text-center">
                <h1 class="lg:text-[40px] md:text-3xl sss:text-xl leading-[130%] tracking-[0.2px] pb-4">
                    {{ __('index.welcome') }}
                </h1>
                <h2
                    class="lg:text-[80px] md:text-[57px] sss:text-3xl tracking-[0.4px] md:leading-[130%] capitalize pb-6">
                    {{ __('index.text_utama') }}
                </h2>
                <p class="text-2xl font-normal leading-[140%] tracking-[0.12px] pb-12 lg:mx-5 mx-2 ">
                    {{ __('index.text_desc') }}</p>

            </div>
            <a href="#service"
                class="rounded-full  border-white border bg-abu py-[16px] px-[24px] flex justify-center items-center gap-4 w-[340px] backdrop-blur-lg">
                <p class="font-semibold trackinng-[0.12px] leading-[140%] text-[24px]">{{ __('index.selengkapnya') }}
                </p>
                <img src="{{ asset('img/more.svg') }}" alt="">
            </a>
        </div>


        {{-- MITRA KAMI --}}
        <div class="pt-[128px]">
            <p class="flex justify-start px-[104px] text-xl leading-[140%] font-normal tracking-[0.1px] text-white">
                {{ __('index.mitra') }} :
            </p>
            {{-- <div class="relative grid place-items-center overflow-hidden mx-[104px] gap-0 z-[60] w-[3500px] rr"> --}}
            <div class="grid place-items-center overflow-hidden ">
                <div class="grid relative place-items-center mx-[104px] overflow-hidden ">
                    <div class="animate-marquee flex items-center 2xl:gap-10 2xl:w-[3100px] sss:w-[1000px] ">
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/pkr.png') }}" class="2xl:h-40 2xl:w-40 sss:h-20 sss:w-20">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/sanggau.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/koni_ska.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/pixel.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/index.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/selasih.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/baba.png') }}"
                                class="2xl:h-20 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/thxxxx 1.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/gas.png') }}" class="2xl:h-40 2xl:w-32 sss:h-16 sss:w-12 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/sh.png') }}" class="2xl:h-32 2xl:w-32 sss:h-14 sss:w-14 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/kripton.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/dtrans.png') }}"
                                class="2xl:h-24 2xl:w-80 sss:h-10 sss:w-24 ">
                        </div>
                    </div>

                    <div
                        class="absolute top-0  animate-marquee2 whitespace-nowrap 2xl:w-[3100px] sss:w-[1000px] flex items-center">
                        <div class="px-8 sss:px-2 ">
                            <img src="{{ asset('img/mitra/pkr.png') }}" class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/sanggau.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/koni_ska.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/pixel.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/index.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/selasih.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/baba.png') }}"
                                class="2xl:h-20 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/thxxxx 1.png') }}"
                                class="2xl:h-40 2xl:w-40 sss:h-14 sss:w-14 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/gas.png') }}" class="2xl:h-40 2xl:w-32 sss:h-16 sss:w-12 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/sh.png') }}" class="2xl:h-32 2xl:w-32 sss:h-14 sss:w-14 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/kripton.png') }}"
                                class="2xl:h-24 2xl:w-60 sss:h-10 sss:w-24 ">
                        </div>
                        <div class="px-8 sss:px-2">
                            <img src="{{ asset('img/mitra/dtrans.png') }}"
                                class="2xl:h-24 2xl:w-80 sss:h-10 sss:w-24 ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- END HOME --}}

    {{-- VISI --}}
    <section class="w-full bg-hitam relative pt-[160px] rounded-b-[80px] z-20 ">
        <div
            class="flex justify-center items-center pb-[224px] 2xl:px-[104px] 2xl:gap-48 sss:px-2 sss:flex-col xl:flex-row ">

            <div
                class="flex flex-col items-start gap-4 w-full text-white sss:my-10 xl:my-0 justify-center xl:px-4 2xl:px-0 md:w-1/2">
                <p
                    class="text-5xl leading-[130%] tracking-[0.25px] font-semibold sss:self-stretch sss:text-center xl:self-start">
                    {{ __('index.visi') }}</p>
                <p class="text-2xl leading-[140%] tracking-[0.12px] px-10 lg:px-0 xl:text-left">
                    {{ __('index.visi_desc') }}</p>
            </div>

            <div
                class="flex flex-col items-start gap-4 w-full text-white relative justify-center sss:my-10 xl:my-0 md:w-1/2 ">
                <div
                    class="bg-hitam z-10 px-10 py-20 xl:border-l xl:border-t-0 sss:border-t sss:border-l-0 border-[#f1f1f196] flex flex-col">
                    <p
                        class="text-5xl  leading-[130%] tracking-[0.25px] font-semibold sss:self-stretch sss:text-center xl:self-start">
                        {{ __('index.misi') }}</p>
                    <ul class="text-2xl leading-[140%] tracking-[0.12px] list-disc pl-7">
                        <li>{{ __('index.misi1') }}</li>
                        <li>{{ __('index.misi2') }}</li>
                        <li>{{ __('index.misi3') }}</li>
                        <li>{{ __('index.misi4') }}</li>
                    </ul>
                </div>

                {{-- blue light --}}
                <div
                    class="absolute 2xl:bottom-16 xl:bottom-36  xl:-left-10 sss:top-0 sss:left-20 lamp bg-blue-900 bb z-[9] w-[150px] h-[181px]">
                </div>
                {{-- hitam di misi untuk menutupi biru --}}
                {{-- <div class="absolute bottom-32 right-0 bb border-l-[0.1px] border-[#f1f1f196] bg-[#000013] z-20 w-[846px] h-[374px]"> --}}
                {{-- </div> --}}
            </div>
        </div>
    </section>
    {{-- END VISI --}}

    {{-- LAYANAN KAMI --}}
    <section id="service" class="w-full bg-white lg:px-[100px] sss:px-4 relative z-[19] -mt-20">
        <p class="text-5xl font-bold tracking-[0.24px] leading-[130%] text-black pt-[176px] pb-20">
            {{ __('index.layanan') }}</p>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/soft.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px] sss:hidden sm:block">
                <div class="flex flex-col items-start gap-8  text-black">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">{{ __('index.softwareTitle') }}
                    </p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.softwareDesc') }}</p>
                </div>
            </div>
            {{-- <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center"> --}}
            <div class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-9 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/mitra/pkr.png') }}" class="h-20 bb">
                <img src="{{ asset('img/mitra/sanggau.png') }}" class="h-20 bb">
                <img src="{{ asset('img/mitra/koni_ska.png') }}" class="h-20 bb ">
                <img src="{{ asset('img/mitra/pixel.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/indexb.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/selasihb.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/baba.png') }}" class="h-10">
                <img src="{{ asset('img/mitra/thxxxx 1.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/gas.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/sh.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/kripton.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/dtrans.png') }}" class="h-12">
            </div>
        </div>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/market.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px]  sss:hidden sm:block ">
                <div class="flex flex-col items-start gap-8 text-black ">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">{{ __('index.digitalTitle') }}
                    </p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.digitalDesc') }}</p>
                </div>
            </div>
            <div class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-9 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/digital/1gudeg.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/2batik.png') }}" class="h-20">
                <img src="{{ asset('img/digital/3mon.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/4dtp.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/5dku.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/6taman.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/7Clair.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/8cal.png') }}" class="h-[90px]">
                <img src="{{ asset('img/digital/9trad.png') }}" class="h-[90px]">
            </div>
        </div>

        <div
            class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6] z-50 ">
            <div class="flex sm:items-center sss:flex-col lg:flex-row md:gap-10">
                <img src="{{ asset('img/it.png') }}"
                    class="lg:w-[200px] lg:h-[200px] md:w-[100px] md:h-[100px] sm:h-[70px] sm:w-[70px]  sss:hidden sm:block ">
                <div class="flex flex-col items-start gap-8 text-black">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">
                        {{ __('index.perlengkapanTitle') }}</p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">
                        {{ __('index.perlengkapanDesc') }}</p>
                </div>
            </div>
            {{-- <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center z-20"> --}}
            <div class="grid sss:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7 3xl:grid-cols-9 grid-flow-row sss:gap-5 items-center justify-center">
                <img src="{{ asset('img/mitra/pkr.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/sanggau.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/koni_ska.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/pixel.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/indexb.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/selasihb.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/baba.png') }}" class="h-10">
                <img src="{{ asset('img/mitra/thxxxx 1.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/gas.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/sh.png') }}" class="h-20">
                <img src="{{ asset('img/mitra/kripton.png') }}" class="h-12">
                <img src="{{ asset('img/mitra/dtrans.png') }}" class="h-12">
            </div>


        </div>
        {{-- rouded bawah --}}
        <div class="absolute -bottom-[150px] bg-white w-full left-0 z-10 h-[150px] rounded-b-[80px]"></div>
    </section>
    {{-- END LAYANANKAMI --}}

    {{-- PRODUK KAMI --}}
    <section id="produk" class="w-full bg-hitam text-white relative z-[18] overflow-hidden rounded-b-[80px]">
        <p
            class="text-5xl px-[100px] font-bold tracking-[0.24px] leading-[130%] text-white pt-[176px] pb-20 z-50 w-full">
            {{ __('index.produk') }}</p>

        <div class="flex flex-wrap justify-center w-full">
            <div class="w-[846px] mx-7 mb-20 flex flex-col gap-10 items-center justify-center">
                <img src="{{ asset('img/produkgas.png') }}" class="h-[503px] w-full self-stretch ">
                <div class="flex flex-col gap-6 items-start self-stretch">
                    <p class="text-center self-stretch text-[40px] font-semibold leading-[130%] tracking-[0.2px]">GAS
                        Apps</p>
                    <p class="text-center self-stretch text-[32px] leading-[130%] tracking-[0.16px]">Mobile Marketplace
                        & Point of Sales</p>
                </div>
            </div>
            <div class="w-[846px] mx-7 mb-20 flex flex-col gap-10 items-center justify-center">
                <img src="{{ asset('img/produkbaba.png') }}" class="h-[503px] w-full self-stretch ">
                <div class="flex flex-col gap-6 items-start self-stretch">
                    <p class="text-center self-stretch text-[40px] font-semibold leading-[130%] tracking-[0.2px]">BABA
                    </p>
                    <p class="text-center self-stretch text-[32px] leading-[130%] tracking-[0.16px]">Management System
                    </p>
                </div>
            </div>
            <div class="w-[846px] mx-7 mb-20 flex flex-col gap-10 items-center justify-center">
                <img src="{{ asset('img/produkblanko.png') }}" class="h-[503px] w-full self-stretch m-4">
                <div class="flex flex-col gap-6 items-start self-stretch">
                    <p class="text-center self-stretch text-[40px] font-semibold leading-[130%] tracking-[0.2px]">
                        Blangko.id</p>
                    <p class="text-center self-stretch text-[32px] leading-[130%] tracking-[0.16px]">Online Form
                        Builder</p>
                </div>
            </div>
        </div>

        {{-- lamp top left --}}
        <div class="absolute -top-40 -left-64  bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
        {{-- lamp mid right --}}
        <div class="absolute bottom-[800px] -right-80 bp bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
        {{-- lamp bot left --}}
        <div class="absolute bottom-[450px] -left-64  bg-blue-900 lamp2 -z-[1] w-[400px] h-[400px]"></div>

        {{-- rounded bottom --}}
        {{-- <div class="absolute -bottom-[87px] bg-red-600 -z-[3] w-full left-0 h-[150px] rounded-b-[80px]"></div> --}}

    </section>
    {{-- PRODUK KAMI --}}

    {{-- ABOUT --}}
    <div id="about" class="w-full bg-white text-black relative z-[17] -mt-20">
        <div class="absolute top-[291px] left-[600px] -z-[1]">
            <img src="{{ asset('img/bg_about.png') }}" class="w-[690px] bg-about">
        </div>

        <div class="pt-[405px] flex flex-col justify-center px-[245px] z-10">
            <p
                class="text-center text-[37.8px] pb-[166px] font-semibold tracking-[0.19px] leading-[130%] text-transparent bg-gradient-to-bl bg-clip-text from-[#30328C] to-[#3a3eca]">
                {{ __('index.aboutText') }}</p>
            <p class="text-[32px] font-bold leading-[130%] tracking-[0.16px] text-center pb-12">
                {{ __('index.question') }}</p>

            {{-- question --}}
            <div class="flex flex-col gap-8 pb-40">

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q1Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q1Desc') }}</p>
                </div>

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q2Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q2Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q3Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q3Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q4Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q4Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q5Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q5Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q6Title') }}
                    </h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q6Desc') }}</p>
                </div>
            </div>


            {{-- rounded bottom --}}
            <div class="absolute -bottom-[105px] bg-white w-full left-0  h-[150px] rounded-b-[80px]"></div>


        </div>
    </div>
    {{-- end about --}}

    <div class="bg-hitam w-full relative  z-[16]">
        <div class="px-32 pt-[300px]">
            <div
                class="capitalize flex p-14 items-center gap-12 flex-col rounded-[48px] bg-[#ffffff66] text-white overflow-x-hidden relative">
                <h1 class="text-[40px] font-bold tracking-[0.2px] leading-[130%]">Unlock Your Digital Potential
                </h1>
                <h1 class=" tracking-[0.2px] leading-[130%] text-[32px]">Empower your brand with software solutions &
                    digital marketing excellence</h1>
                <a href="http://wa.me/+6287802530264"
                    class="capitalize px-6 py-4 rounded-full flex items-center justify-center bg-transparent bg-gradient-to-tl from-[#30328C] to-[#3A3ECA] text-2xl font-semibold tracking-[0.12px] leading-[140%]">get
                    started now</a>
                <img src="{{ asset('img/Group 51.png') }}" class="absolute left-0 top-0">
                <img src="{{ asset('img/Group 52.png') }}" class="absolute right-0 bottom-0">

            </div>
        </div>

        <div class="mt-[84px] px-[104px] py-[56px] flex flex-col items-start gap-12 text-white">
            <div class="flex justify-between items-center self-stretch">
                <img src="{{ asset('img/dri.png') }}" class="w-[72px]">
                <div class="flex justify-end items-center lg:gap-28 sss:gap-3">
                    <a href="#home" class="text-xl font-semibold leading-[140%] tracking-tight">Home</a>
                    <a href="#about" class="text-xl font-semibold leading-[140%] tracking-tight">About</a>
                    <a href="#produk" class="text-xl font-semibold leading-[140%] tracking-tight">Products</a>
                    <a href="#service" class="text-xl font-semibold leading-[140%] tracking-tight">Services</a>

                </div>
            </div>

            <div class="flex items-start gap-12">
                <a href="https://www.linkedin.com/company/pt-daya-rekadigital-indonesia">
                    <img src="{{ asset('img/ig.png') }}" class="w-12">
                </a>
                <a href="https://www.instagram.com/rekadigi.id/">
                    <img src="{{ asset('img/lind.png') }}" class="w-12">
                </a>
            </div>

            <p class="text-2xl leading-[140%] tracking-tight font-semibold">Crafting Your Digital Future</p>
            <p class="font-mont text-xl leading-none">© 2023 PT Daya Rekadigital Indonesia All rights reserved.</p>
        </div>

        {{-- lamp top left --}}
        <div class="absolute top-6 -left-30  bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
        {{-- lamp top left --}}
        <div class="absolute top-64 right-0  bg-blue-900 lamp2 -z-[1] w-[500px] h-[500px]"></div>
    </div>


    <script>
        const menu = document.getElementById("menuContent");

        function openMenu() {
            menu.classList.remove('-translate-y-full')
        }

        function closeMenu() {
            menu.classList.add('-translate-y-full')
        }
    </script>

</body>

</html>
