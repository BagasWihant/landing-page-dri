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

<body class="font-pjs relative">
    {{-- FLOAT BUTTON --}}
    <a href="http://wa.me/+6287802530264" class="float-button w-[72px] h-[72px] rounded-full fixed z-[100] bottom-10 right-10 p-3">
        <img src="{{ asset('img/wa.png') }}" alt="">
    </a>

    {{-- HOME --}}
    <section id="home" class="w-full bg-auto bg-hitam back py-8 mx-auto">

        {{-- navbar --}}
        <div
            class="flex justify-between items-center w-full 2xl:px-[104px] xl:px-20 lg:px-10 text-white font-semibold leading-[140%] text-xl tracking-wide capitalize">
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
        </div>
        {{-- end navbar --}}

        {{-- SLOGAN --}}
        <div class="flex flex-col justify-center items-center h-[90%] pt-[193px] text-white ">
            <div class="font-bold self-center text-center">
                <h1 class="text-[40px] leading-[130%] tracking-[0.2px] pb-4">
                    {{ __('index.welcome') }}
                </h1>
                <h2 class="text-[80px] tracking-[0.4px] leading-[130%] capitalize pb-6">{{ __('index.text_utama') }}</h2>
                <p class="text-2xl font-normal leading-[140%] tracking-[0.12px] pb-12">{{ __('index.text_desc') }}</p>

            </div>
            <a href="#service"
                class="rounded-full  border-white border bg-abu py-[16px] px-[24px] flex justify-center items-center gap-4 w-[340px] backdrop-blur-lg">
                <p class="font-semibold trackinng-[0.12px] leading-[140%] text-[24px]">{{ __('index.selengkapnya') }}</p>
                <img src="{{ asset('img/more.svg') }}" alt="">
            </a>
        </div>


        {{-- MITRA KAMI --}}
        <div class="pt-[128px]">
            <p class="flex justify-start px-[104px] text-xl leading-[140%] font-normal tracking-[0.1px]">{{ __('index.mitra') }} :
            </p>
            <div class="relative flex overflow-x-hidden mx-[104px] gap-0 z-[60]">
                <div class="animate-marquee whitespace-nowrap flex">
                    <div class="text-4xl px-8 ">
                        <img src="{{ asset('img/mitra/pkr.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/sanggau.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/koni_ska.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/pixel.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/index.png') }}" class="h-56 w-80 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/selasih.png') }}" class="h-56 w-80 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/baba.png') }}" class="h-56 w-80 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/thxxxx 1.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/gas.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/sh.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/kripton.png') }}" class="h-52 w-80 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/dtrans.png') }}" class="h-52 w-80 object-contain aspect-[3/2]">
                    </div>
                </div>

                <div class="absolute top-0  animate-marquee2 whitespace-nowrap flex ">
                    <div class="text-4xl px-8 ">
                        <img src="{{ asset('img/mitra/pkr.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/sanggau.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/koni_ska.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/pixel.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/index.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/selasih.png') }}"
                            class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/baba.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/thxxxx 1.png') }}"
                            class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/gas.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/sh.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/kripton.png') }}"
                            class="h-52 w-80 object-contain aspect-[3/2]">
                    </div>
                    <div class="text-4xl px-8">
                        <img src="{{ asset('img/mitra/dtrans.png') }}" class="h-52 w-80 object-contain aspect-[3/2]">
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- END HOME --}}

    {{-- VISI --}}
    <section class="w-full bg-hitam relative pt-[160px] rounded-b-[80px] z-20">
        <div class="flex justify-center items-center pb-[224px] px-[104px] gap-48">

            <div class="flex flex-col items-start gap-4  w-1/2 text-white">
                <p class="text-5xl  leading-[130%] tracking-[0.25px] font-semibold">{{ __('index.visi') }}</p>
                <p class="text-2xl leading-[140%] tracking-[0.12px]">{{ __('index.visi_desc') }}</p>
            </div>

            <div class="flex flex-col items-start gap-4  z-30 w-1/2 text-white">
                <p class="text-5xl  leading-[130%] tracking-[0.25px] font-semibold">{{ __('index.misi') }}</p>
                <ul class="text-2xl leading-[140%] tracking-[0.12px] list-disc">
                    <li>{{ __('index.misi1') }}</li>
                    <li>{{ __('index.misi2') }}</li>
                    <li>{{ __('index.misi3') }}</li>
                    <li>{{ __('index.misi4') }}</li>
                </ul>


                {{-- <p class="">Visi kami adalah menjadi mitra terpercaya dalam pengembangan teknologi informasi, khususnya di bidang industri digital kreatif. Kami berkomitmen untuk menyajikan solusi yang inovatif dan berkualitas tinggi kepada setiap klien kami.</p> --}}
            </div>

            {{-- rouded bawah --}}
            {{-- <div class="absolute -bottom-20 z-20 bg-hitam w-full h-[150px] rounded-b-[80px]"></div> --}}
            {{-- blue light --}}
            <div class="absolute bottom-60 right-[840px] bg-blue-900 lamp z-20 w-[150px] h-[191px]"></div>
            {{-- hitam di misi untuk menutupi biru --}}
            <div
                class="absolute bottom-32 right-28 border-l-[0.1px] border-[#f1f1f196] bg-[#000013] z-20 w-[846px] h-[374px]">
            </div>

        </div>
    </section>
    {{-- END VISI --}}

    {{-- LAYANAN KAMI --}}
    <section id="service" class="w-full bg-white px-[100px] relative z-[19] -mt-20">
        <p class="text-5xl font-bold tracking-[0.24px] leading-[130%] text-black pt-[176px] pb-20">{{ __('index.layanan') }}</p>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex items-start gap-10">
                <img src="{{ asset('img/soft.png') }}" class="w-[200px] h-[200px]">
                <div class="flex flex-col items-start gap-8  text-black">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">{{ __('index.softwareTitle') }}</p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">{{ __('index.softwareDesc') }}</p>
                </div>
            </div>
            <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center">
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

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex items-start gap-10">
                <img src="{{ asset('img/market.png') }}" class="w-[200px] h-[200px]">
                <div class="flex flex-col items-start gap-8 text-black ">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">{{ __('index.digitalTitle') }}</p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">{{ __('index.digitalDesc') }}</p>
                </div>
            </div>
            <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center">
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
            <div class="flex items-start gap-10">
                <img src="{{ asset('img/it.png') }}" class="w-[200px] h-[200px]">
                <div class="flex flex-col items-start gap-8 text-black">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">{{ __('index.perlengkapanTitle') }}</p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">{{ __('index.perlengkapanDesc') }}</p>
                </div>
            </div>
            <div class="flex px-[23px] content-center self-stretch gap-x-8 gap-y-10 flex-wrap items-center z-20">
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
            class="text-5xl px-[100px] font-bold tracking-[0.24px] leading-[130%] text-white pt-[176px] pb-20 z-50 w-full">{{ __('index.produk') }}</p>

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
            <p class="text-[32px] font-bold leading-[130%] tracking-[0.16px] text-center pb-12">{{ __('index.question') }}</p>

            {{-- question --}}
            <div class="flex flex-col gap-8 pb-40">

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q1Title') }}</h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q1Desc') }}</p>
                </div>

                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q2Title') }}</h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q2Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q3Title') }}</h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q3Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q4Title') }}</h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q4Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q5Title') }}</h1>
                    <p class="font-mont text-[#727272] text-xl font-medium leading-none">{{ __('index.q5Desc') }}</p>
                </div>
                <div class="flex p-8 flex-col items-start self-stretch bg-[#fafafa] rounded-3xl">
                    <h1 class="text-black font-mont font-bold text-2xl leading-none pb-6">{{ __('index.q6Title') }}</h1>
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
                <div class="flex justify-end items-center gap-28">
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




</body>

</html>
