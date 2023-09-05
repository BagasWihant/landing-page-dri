<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-pjs relative">
    <div class="float-button w-[72px] h-[72px] rounded-full fixed z-50 bottom-5 right-10 p-3">
        <img src="{{ asset('img/wa.png') }}" alt="">
    </div>
    <div class="w-full bg-auto bg-black h-screen back py-8 mx-auto">

        {{-- navbar --}}
        <div
            class="flex justify-between items-center w-full px-[104px] text-white font-semibold leading-[140%] text-xl tracking-wide capitalize">
            <div class="flex justify-between items-center ">
                <img src="{{ asset('img/dri.png') }}" class="w-14 mr-[104px]">
                <div>
                    <ul class="flex 2xl:gap-20 lg:gap-16">
                        <a href="/">
                            <li class="">home</li>
                        </a>
                        <a href="/">
                            <li class="">Tentang</li>
                        </a>
                        <a href="/">
                            <li class="">Produk</li>
                        </a>
                        <a href="/">
                            <li class="">Layanan</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="flex ">
                <div id="lang" class="flex items-center 2xl:mr-[80px] lg:mr-[60px]">
                    <img src="{{ asset('img/id.png') }}" class="w-10 mr-4">
                    <span>ID</span>
                </div>
                <button class="rounded-[80px] capitalize border-white border py-[14px] px-[24px]">hubungi kami</button>
            </div>
        </div>
        {{-- end navbar --}}

        {{-- SLOGAN --}}
        <div class="flex flex-col justify-center items-center h-[90%] text-white ">
            <div class="font-bold self-center text-center">
                <h1 class="text-[40px] leading-[130%] tracking-[0.2px] pb-4">
                    Selamat Datang di DRI
                </h1>
                <h2 class="text-[80px] tracking-[0.4px] leading-[130%] capitalize pb-6">membangun masa depan digital
                    anda</h2>
                <p class="text-2xl font-normal leading-[140%] tracking-[0.12px] pb-12">temukan solusi kebutuhan
                    digitalisasi Anda bersama kami, memberikan kemudahan layanan digital dengan kreatifias tanpa batas
                </p>

            </div>
            <div
                class="rounded-full  border-white border bg-abu py-[16px] px-[24px] flex justify-center items-center gap-4 w-[340px] backdrop-blur-lg">
                <p class="font-semibold trackinng-[0.12px] leading-[140%] text-[24px]">Selengkapnya</p>
                <img src="{{ asset('img/more.svg') }}" alt="">
            </div>
        </div>


        {{-- MITRA KAMI --}}
        <div class="-mt-14">
            <p class="flex justify-start px-[104px] text-xl leading-[140%] font-normal tracking-[0.1px]">Mitra Kami :
            </p>
            <div class="relative flex overflow-x-hidden gap-0 z-[60]">
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
                        <img src="{{ asset('img/mitra/selasih.png') }}" class="h-52 w-40 object-contain aspect-[3/2]">
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

    </div>

    <div class="w-full bg-black relative pt-[334px]">
        <div class="flex justify-center items-center pb-[224px]">
            <div class="flex flex-col items-start gap-4 pr-20 ">
                <p class="text-5xl">Visi</p>
                <p class="text-2xl leading-[140%] tracking-[0.12px] w-[768px]">Visi kami adalah menjadi mitra
                    terpercaya
                    dalam pengembangan teknologi informasi, khususnya di bidang industri digital kreatif. Kami
                    berkomitmen untuk menyajikan solusi yang inovatif dan berkualitas tinggi kepada setiap klien kami.
                </p>
            </div>
            <div class="flex flex-col items-start gap-4 z-30 ">
                <p class="text-5xl">Misi</p>
                <ul class="text-2xl leading-[140%] tracking-[0.12px] list-disc">
                    <li>
                        Memberikan solusi teknologi berkualitas tinggi untuk klien
                    </li>
                    <li>
                        Menciptakan produk digital yang unggul dan effisien
                    </li>
                    <li>
                        Membangun kolaborasi sukses dengan klien
                    </li>
                    <li>
                        Memberikan pengalaman digital yang terbaik
                    </li>
                </ul>


                {{-- <p class="">Visi kami adalah menjadi mitra terpercaya dalam pengembangan teknologi informasi, khususnya di bidang industri digital kreatif. Kami berkomitmen untuk menyajikan solusi yang inovatif dan berkualitas tinggi kepada setiap klien kami.</p> --}}
            </div>
            {{-- rouded bawah --}}
            <div class="absolute -bottom-20 z-20 bg-black w-full h-[150px] rounded-b-[80px]"></div>
            {{-- blue light --}}
            <div class="absolute bottom-60 right-[800px] bg-blue-900 lamp z-20 w-[150px] h-[191px]"></div>
            {{-- hitam di misi untuk menutupi biru --}}
            <div
                class="absolute bottom-32 right-20 border-l-[0.1px] border-[#f1f1f196] bg-[#000013] z-20 w-[846px] h-[374px]">
            </div>

        </div>
    </div>

    <div class="w-full bg-white px-[100px] relative z-10">
        <p class="text-5xl font-bold tracking-[0.24px] leading-[130%] text-black pt-[176px] pb-20">Layanan Kami</p>

        <div class="flex p-10 mb-20 flex-col items-start gap-10 self-stretch rounded-2xl border border-[#C6C6C6]">
            <div class="flex items-start gap-10">
                <img src="{{ asset('img/soft.png') }}" class="w-[200px] h-[200px]">
                <div class="flex flex-col items-start gap-8 self-stretch shrink-0 text-black w-[1385px]">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">Layanan Pengembangan Software
                    </p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">Membantu
                        mengoptimalkan transformasi digital bagi bisnis Anda dengan solusi digital terdepan. Tim
                        pengembang berpengalaman kami menggunakan teknologi terkini dan praktik industri terbaik untuk
                        merancang dan membangun perangkat lunak sesuai kebutuhan Anda.</p>
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
                <div class="flex flex-col items-start gap-8 self-stretch shrink-0 text-black w-[1385px]">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">Layanan Digital Marketing
                    </p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">Optimalkan pemasaran
                        digital pada bisnis Anda dengan layanan Digital Marketing kami. Dengan berfokus pada perancangan
                        strategi berbasis data, tingkatkan visibilitas produk Anda di ranah digital. Dapatkan layananan
                        manajemen social media, branding, hingga content marketing.</p>
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
                <div class="flex flex-col items-start gap-8 self-stretch shrink-0 text-black w-[1385px]">
                    <p class="text-4xl font-semibold leading-[130%] tracking-[0.2px] ">Layanan Perlengkapan IT
                    </p>
                    <p class="text-justify text-2xl tracking-[0.12px] leading-[140%] self-stretch">Selain menyediakan
                        layanan pembangunan perangkat lunak, kami menyediakan layanan pembangunan perlengkapan IT dengan
                        teknologi IoT untuk kebutuhan bisnis berbagai skala.</p>
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
    </div>

    <div class="w-full bg-black px-[100px] relative z-[1]">
        <div class="absolute bottom-10 -left-64  bg-blue-900 lamp2 -z-[1] w-[500px] h-[300px]"></div>
        <p class="text-5xl font-bold tracking-[0.24px] leading-[130%] text-white pt-[176px] pb-20 z-50">Layanan Kami
        </p>

        <div class="flex flex-col">
            <img src="{{ asset('img/produkgas.png') }}" class="h-[503px] w-[836px] self-stretch ">
        </div>
    </div>




</body>

</html>
