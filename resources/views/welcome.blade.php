<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link id="favicon" rel="icon" type="image/png" href="assets/LS-logogram-master.png">
    <title>Luarsekolah.com - Revamped</title>

    <style>
    .wrapper {
        width: 90%;
        max-width: 1536px;
        margin-inline: auto;
        position: relative;
        height: 100px;
        margin-top: 40px;
        overflow: hidden;
        mask-image: linear-gradient(
            to right,
            rgba(0, 0, 0, 0),
            rgba(0, 0, 0, 1) 20%,
            rgba(0, 0, 0, 1) 80%,
            rgba(0, 0, 0, 0)
        );
    }

    @keyframes scrollLeft {
        to {
            left: -200px;
        }
    }

    .item {
        width: 200px;
        height: 40px;
        border-radius: 6px;
        position: absolute;
        left: max(calc(200px * 6), 100%);
        animation-name: scrollLeft;
        animation-duration: 30s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    .partner1 {
        animation-delay: calc(30s / 6 * (6 - 1) * -1);
    }

    .partner2 {
        animation-delay: calc(30s / 6 * (6 - 2) * -1);
    }

    .partner3 {
        animation-delay: calc(30s / 6 * (6 - 3) * -1);
    }

    .partner4 {
        animation-delay: calc(30s / 6 * (6 - 4) * -1);
    }

    .partner5 {
        animation-delay: calc(30s / 6 * (6 - 5) * -1);
    }

    .partner6 {
        animation-delay: calc(30s / 6 * (6 - 6) * -1);
    }

    @keyframes promo-scale {
        0%, 100% { transform: scale(1); }
        10%, 60% { transform: scale(1.05); }
        }
        .promo-animate-0 { animation: promo-scale 8s linear infinite; animation-delay: 0s; }
        .promo-animate-1 { animation: promo-scale 8s linear infinite; animation-delay: 2s; }
        .promo-animate-2 { animation: promo-scale 8s linear infinite; animation-delay: 4s; }
        .promo-animate-3 { animation: promo-scale 8s linear infinite; animation-delay: 6s; }
    </style>
</head>
<body class="font-['Poppins'] text-sm text-neutral-900">
    
    <!-- Header -->

    <header id="header" class="font-['Comfortaa'] fixed w-full min-w-screen h-20 bg-white shadow-sm z-980">
        <section id="navbar" class="w-full h-full mx-auto flex flex-row justify-between gap-1 items-center ">
            <!-- Logo -->
            <div class="flex ml-2 md:ml-18 w-fit md:min-w-30">
                <a href="#" class="w-auto h-14"><img class="hover:saturate-60 transition-all ease-in-out duration-500 w-full h-full" src="assets/LS-logo-master.png" alt="Logo Luarsekolah"></a>
            </div>
            <!-- Section -->
            <div class="hidden md:flex flex-col md:flex-row md:gap-8 text-xs md:text-sm md:w-140 md:min-w-110">
                <div onclick="program_navbar()" id="program-navbar"  class="w-fit px-1 flex gap-2 cursor-pointer hover:text-teal-700 hover:underline transition-all ease-in-out duration-300"><p>Program</p><span><i class="fa-solid fa-angle-down"></i></span></div>
                <a href="https://www.luarsekolah.com/tentang-kami#ajukan" class="w-fit px-1 flex gap-2 cursor-pointer hover:text-teal-700 hover:underline transition-all ease-in-out duration-300"><p>Tentang kami</p></a>
                <a href="https://wa.me/+628112021444" onclick="contact_navbar()" class="w-fit px-1 flex gap-2 cursor-pointer hover:text-teal-700 hover:underline transition-all ease-in-out duration-300"><p>Hubungi kami</p></a>
            </div>
            <!-- SearchBar -->
            <div class="flex flex-row gap-1 w-60 md:min-w-135 md:w-170 border-1 border-neutral-400 rounded-sm py-2.5 px-4">
                <div class="relative left-2 w-1/10 mx-0">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="relative left-5 md:-left-2 w-full -ml-4">
                    <input class="w-full border-1 border-transparent focus:border-transparent px-1" type="text" placeholder="Cari kelas yang ingin kamu pelajari">
                </div>
            </div>
            <!-- Account -->
            <div class="w-10 h-10 md:hidden flex flex-col gap-1 justify-center items-center p-1 border-1 border-neutral-400 rounded-sm hover:bg-neutral-100 active:bg-white transition-all ease-in-out duration-300 cursor-pointer">
                <span class="w-6 h-1 bg-black rounded-lg"></span>
                <span class="w-6 h-1 bg-black rounded-lg"></span>
                <span class="w-6 h-1 bg-black rounded-lg"></span>
            </div>
            <div class="hidden md:flex flex-row gap-4 pr-2 mr-20 w-fit">
                <a href="login.html" class="px-5 py-2.5 border-1 border-neutral-400 rounded-sm hover:bg-neutral-100 active:bg-white transition-all ease-in-out duration-300">
                    Masuk
                </a>
                <a href="register.html" class="px-5 py-2.5 border-1 border-teal-600 rounded-sm bg-teal-700 text-white hover:bg-teal-600 active:bg-white transition-all ease-in-out duration-300">
                    Daftar
                </a>
            </div>
        </section>
    </header>


    <main class="">

        <!-- Programs Pop-UP -->
        <section id="program-navbar-popup" class="flex hidden w-full h-fit min-h-40 flex-row fixed top-20 left-0 bg-white shadow-md z-999 justify-evenly items-center">
            <div class="w-full h-full justify-center items-center content-center text-3xl border-2 border-neutral-400 rounded-xl hover:border-teal-500 text-center py-6 mx-4 cursor-pointer font-bold hover:text-teal-500">Kartu Prakerja</div>
            <div class="w-full h-full justify-center items-center content-center text-3xl border-2 border-neutral-400 rounded-xl hover:border-teal-500 text-center py-6 mx-4 cursor-pointer font-bold hover:text-teal-500">Belajar Bekerja</div>
            <div class="w-full h-full justify-center items-center content-center text-3xl border-2 border-neutral-400 rounded-xl hover:border-teal-500 text-center py-6 mx-4 cursor-pointer font-bold hover:text-teal-500">Indonesia Skills Week</div>
        </section>
        <!-- Programs Pop-UP -->
        <section id="contact-navbar-popup" class="flex hidden w-full h-fit min-h-40 flex-row fixed top-20 left-0 bg-white shadow-md z-999 justify-evenly items-center">
            <div class="w-1/3 h-full justify-center items-center content-center text-3xl border-2 border-neutral-400 rounded-xl hover:border-teal-500 text-center py-6 mx-4 cursor-pointer font-bold hover:text-teal-500">WhatsApp: +62 811-2021-444</div>
        </section>

        <!-- HERO SECTION -->
        <section id="hero-section" class="px-12 md:px-20 pb-12 pt-30 w-full h-fit">
            <div class="w-full h-full flex flex-col md:flex-row justify-center items-center gap-4">
                <div class="w-full md:w-2/5 h-full flex flex-col justify-center items-start align-center gap-6">
                    <h1 class="font-bold text-2xl md:text-[30px]">Belajar Tanpa Batas, Untuk Siapapun, Dimana Pun.</h1>
                    <p class="text-lg md:text-[22px] text-left text-neutral-700">Bersama <span class="font-semibold text-neutral-900">Luarsekolah</span>, siapa pun bisa menguasai 
                        skill digital dan kerja profesional! Dari belajar hingga berkarir, 
                        semuanya bisa!</p>
                    <div class="w-full h-fit flex flex-col md:flex-row gap-1">
                        <div class="w-full h-fit flex flex-row gap-1">
                            <div class="w-20 h-20 md:w-18 md:h-18 rounded-full"><img class="w-full h-full rounded-full m-0 p-0" src="assets/profile1.png" alt="Profile"></div>
                            <div class="w-20 h-20 md:w-18 md:h-18 -ml-5 rounded-full"><img class="w-full h-full rounded-full m-0 p-0" src="assets/profile2.png" alt="Profile"></div>
                            <div class="w-20 h-20 md:w-18 md:h-18 -ml-5 rounded-full"><img class="w-full h-full rounded-full m-0 p-0" src="assets/profile3.png" alt="Profile"></div>
                            <div class="w-20 h-20 md:w-18 md:h-18 -ml-5 rounded-full"><img class="w-full h-full rounded-full m-0 p-0" src="assets/profile4.png" alt="Profile"></div>
                        </div>
                        <div class="w-full h-fit">
                            <p class="w-full md:h-18 justify-center items-center content-center">Lebih dari user+ orang telah bergabung bersama Luarsekolah!</p>
                        </div>
                    </div>
                    <a href="#class-program" class="bg-teal-700 hover:bg-teal-600 active:bg-white py-2 px-5 rounded-lg md:text-[14px] text-white transition-all ease-in-out duration-300 cursor-pointer">Mulai Belajarmu Sekarang</a>
                </div>
                <div class="w-full md:w-3/5 h-full flex flex-col justify-center items-center gap-6 md:pl-10">
                    <img class="w-full h-full rounded-md" src="assets/hero.png" alt="Hero Image">
                </div>
            </div>
        </section>


        <!-- PROMO -->
        <section class="px-12 md:px-20 w-full h-fit py-8 bg-radial from-[#AEAEAE] from-63% to-[#DDDDDD] to-100%">
            <!-- <h1 class="text-lg md:text-[16px] font-semibold py-2 -mt-10">Promo hanya untuk kamu!</h1> -->
            <h1 class="flex mb-4 w-full h-auto text-justity content-center justify-center items-center text-black font-bold text-[22px]">Belajar Hemat Skill Meningkat, Pilih Program & Nikmati Diskonnya</h1>
            <div class="flex flex-col md:flex-row justify-between items-center gap-5">
                @foreach ($banners as $i => $banner)
                <a href="{{ $banner->link }}" class="w-full h-36 md:w-1/3 md:h-auto hover:scale-125 hover:z-20 transition-all ease-in duration-100 promo-animate-{{ $i }}">
                    <img src="{{ $banner->image }}" class="w-full h-full" alt="Promo Banner">
                </a>
                @endforeach
            </div>
        </section>
        
        <!-- PROGRAMS -->
        <section id="class-program" class="px-12 py-6 md:py-10 md:px-20 min-h-fit w-full h-full">
            <h1 class="text-lg md:text-[16px] text-center justify-center items-center content-center font-semibold pb-2">Program dari Luarsekolah</h1>
            <div class="flex flex-col md:flex-row justify-between items-center gap-3">
                @foreach ($programs as $program)
                <a href="{{ $program->link }}" class="flex flex-col w-full h-36 md:w-1/3 md:h-auto hover:scale-105 transition-all ease-in-out duration-500 bg-white hover:bg-teal-700 hover:text-white p-1 border-2 border-neutral-400 rounded-lg">
                    <img src="{{ $program->image }}" class="w-full h-full" alt="Prakerja">
                    <h1 class="text-base px-2 pt-2 pb-1 font-semibold">{{ $program->name }}</h1>
                    <p class="text-sm px-2 pb-2">{{ $program->description }}</p>
                </a>
                @endforeach
            </div>
        </section>

        <!-- KELAS PRAKERJA -->
        <section class="px-12 md:px-20 min-h-170 w-full h-full bg-radial from-[#005545] from-18% to-[#148C76] to-100% text-white py-6">
            <h1 class="justify-center text-center items-center h-fit w-full text-lg md:text-[16px] font-semibold">Kelas Rekomendasi Prakerja</h1>
            <div class="w-full h-fit min-h-25 flex flex-col md:flex-row justify-between items-center gap-4 md:text-[14px] px-20 md:px-35 lg:px-45">
                <div class="bg-yellow-500 text-black w-full h-full text-center justify-center items-center content-center px-5 py-2 rounded-full border-1 border-teal-100 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="black" d="M19 15q.3-.3.713-.3t.712.3L22 16.6q.3.3.3.7t-.3.7t-.7.3t-.7-.3L19 16.425q-.3-.3-.3-.712T19 15m1-12q.3.3.3.713t-.3.712L18.425 6q-.3.3-.712.3T17 6t-.3-.712t.3-.713L18.6 3q.3-.3.7-.3t.7.3M4 3q.3-.3.713-.3t.712.3L7 4.6q.3.3.3.7T7 6t-.712.3t-.713-.3L4 4.425q-.3-.3-.3-.712T4 3m1 12q.3.3.3.713t-.3.712L3.425 18q-.3.3-.712.3T2 18t-.3-.712t.3-.713L3.6 15q.3-.3.7-.3t.7.3m7 2.275l-4.15 2.5q-.275.175-.575.15t-.525-.2t-.35-.437t-.05-.588l1.1-4.725L3.775 10.8q-.25-.225-.312-.513t.037-.562t.3-.45t.55-.225l4.85-.425l1.875-4.45q.125-.3.388-.45t.537-.15t.537.15t.388.45l1.875 4.45l4.85.425q.35.05.55.225t.3.45t.038.563t-.313.512l-3.675 3.175l1.1 4.725q.075.325-.05.588t-.35.437t-.525.2t-.575-.15z"/></svg>
                    <span class="pl-1 font-semibold">Kelas Best Seller</span>
                </div>
                <div class="bg-white text-black w-full h-full text-center justify-center items-center content-center px-5 py-2 rounded-full border-1 border-teal-100 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none"><path fill="#66e1ff" d="M2.435 11.522V1.957A.957.957 0 0 1 3.39 1h17.22a.956.956 0 0 1 .957.957v9.565z"/><path fill="#c2f3ff" d="M17.261 1H3.391a.957.957 0 0 0-.956.957v9.565h4.304z"/><path fill="#fff" d="M2.435 11.522h19.13v1.913a.957.957 0 0 1-.956.956H3.391a.957.957 0 0 1-.956-.956z"/><path fill="#e3e3e3" stroke="#191919" stroke-linecap="round" stroke-linejoin="round" d="m9.262 18.217l.23-.369a6.9 6.9 0 0 0 1.139-3.457h2.738a6.9 6.9 0 0 0 1.139 3.457l.23.37z" stroke-width="1"/><path stroke="#191919" stroke-linecap="round" stroke-linejoin="round" d="M7.696 18.218h8.609m-13.87-6.696h19.13M20.609 1a.956.956 0 0 1 .957.957v11.478a.957.957 0 0 1-.957.957H3.391a.957.957 0 0 1-.956-.957V1.957A.957.957 0 0 1 3.39 1zM12 20.13V23m-7.652 0h15.304" stroke-width="1"/></g></svg>
                    <span class="pl-1 font-semibold">Kelas Teknologi</span>
                </div>
                <div class="bg-white text-black w-full h-full text-center justify-center items-center content-center px-5 py-2 rounded-full border-1 border-teal-100 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><rect width="14" height="14" fill="none"/><g fill="none"><path fill="#d7e0ff" d="M4.581 3.854a1.776 1.776 0 1 1 0 3.552a1.776 1.776 0 0 1 0-3.552m7-2.968a1.776 1.776 0 1 1 0 3.551a1.776 1.776 0 0 1 0-3.551m-2.469 6.52a1.776 1.776 0 1 1 0 3.552a1.776 1.776 0 0 1 0-3.552"/><path stroke="#4147d5" stroke-linecap="round" stroke-linejoin="round" d="M.643.643v12.714h12.714" stroke-width="1"/><path stroke="#4147d5" stroke-linecap="round" stroke-linejoin="round" d="M4.581 3.854a1.776 1.776 0 1 1 0 3.552a1.776 1.776 0 0 1 0-3.552m7-2.968a1.776 1.776 0 1 1 0 3.551a1.776 1.776 0 0 1 0-3.551m-2.469 6.52a1.776 1.776 0 1 1 0 3.552a1.776 1.776 0 0 1 0-3.552M.643 9.424l2.534-2.706m2.953-.202L7.755 8.03m2.141-.452l1.171-3.219" stroke-width="1"/></g></svg>
                    <span class="pl-1 font-semibold">Kelas Bisnis</span>
                </div>
                <div class="bg-white text-black w-full h-full text-center justify-center items-center content-center px-5 py-2 rounded-full border-1 border-teal-100 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none"><path fill="#020202" d="M21.56 14.751a2.31 2.31 0 0 0-3.051-1.11q-.266.09-.51.23a3 3 0 0 0-.45.31a.28.28 0 0 0-.07.39a.29.29 0 0 0 .4.06a3 3 0 0 1 .4-.21q.202-.092.42-.14a1.59 1.59 0 0 1 2 .94c.259.595.362 1.245.3 1.89a3.06 3.06 0 0 1-.63 1.751a3 3 0 0 1-1.16.77a5.8 5.8 0 0 1-1.46.36a.32.32 0 1 0 0 .64a6.4 6.4 0 0 0 2-.37c.469-.164.9-.419 1.27-.75a3.7 3.7 0 0 0 1-2.3a4.3 4.3 0 0 0-.46-2.46"/><path fill="#0c6fff" d="M19.79 1.737a1.1 1.1 0 0 0-.38-.7a3.3 3.3 0 0 0-1.111-.42a11 11 0 0 0-2.21-.59a2.7 2.7 0 0 0-1.691.31a1.6 1.6 0 0 0-.38.69c-.36 1.2-1.06 4.281-1.09 4.451a.3.3 0 0 0 .22.34a.28.28 0 0 0 .33-.22c0-.17.91-3.15 1.34-4.3q.06-.141.14-.27a2 2 0 0 1 1.06 0a10 10 0 0 1 2 .62c.21.07.46.1.67.18c0 0 .09 0 .1.09a2.8 2.8 0 0 1-.19 1.11c-.08.31-.19.62-.3.92c-.18-.13-.36-.26-.55-.38s-.21-.13-.32-.18a2.5 2.5 0 0 0-.35-.13c-.29-.09-.57-.12-.87-.19a.28.28 0 0 0-.38.12a.27.27 0 0 0 .11.38q.323.337.7.61q.154.115.33.19q.179.085.37.13c.24.06.47.1.71.14c-.05.12-.09.25-.13.37c-.18.62-.35 1.27-.51 1.93h-.07c-.24-.15-.45-.3-.71-.43a1.8 1.8 0 0 0-.61-.23a6 6 0 0 0-.85 0a.28.28 0 0 0-.36.18a.29.29 0 0 0 .18.36c.25.16.44.331.7.471q.154.086.32.14l.34.08c.28 0 .55 0 .83.08a.3.3 0 0 0 .13 0l-.63 2.72c-.28-.17-.54-.36-.82-.53l-.38-.22a3.5 3.5 0 0 0-.46-.22c-.32-.14-.64-.24-1-.41a.284.284 0 0 0-.37.43a5 5 0 0 0 .8.86c.265.195.558.347.87.451q.539.155 1.09.25c0 .11-.05.22-.08.33c-.08.31-.17.61-.26.91c-.07.54.1.65.7 0c.08-.23.17-.47.24-.71c.63-2 1.14-4.151 1.82-6.092q.526-1.136.901-2.33a3.3 3.3 0 0 0 .06-1.29"/><path fill="#020202" d="M16.648 12.75c-.44.25.05 1-.29 5.842q-.09 1.267-.34 2.51a1.84 1.84 0 0 1-.27.781a4.8 4.8 0 0 1-2.66.95c-1.524.204-3.07.167-4.582-.11a6.7 6.7 0 0 1-1.24-.36a1.4 1.4 0 0 1-.53-.33a3.5 3.5 0 0 1-.54-1.08a15 15 0 0 1-.42-2a49 49 0 0 1-.51-3.562c-.06-.64-.1-1.29-.12-1.94c0 0 2.67-.11 3.87-.14h2c.65 0 1.301-.06 2.001-.06s1.3 0 2 .06a.32.32 0 1 0 .07-.63c-1-.17-1.93-.28-2.88-.35a.32.32 0 0 0 .19-.29c0-.48.07-1 .12-1.451c.05-.45.11-1 .18-1.44q.14-.63.2-1.27a19.7 19.7 0 0 0-.59-3.662a2.7 2.7 0 0 0-.78-1.18a.54.54 0 0 0-.47-.11c-.37.07-1.15 1.83-1.33 2.3q-.27.65-.44 1.33a.5.5 0 0 0-.27.21c-.09.691-.17 1.371-.25 2.061q-.12 1.035-.18 2.071a.282.282 0 1 0 .56.07c.09-.54.2-1.07.32-1.61c.15-.71.32-1.41.49-2.121h1.28c.12 0 .48 0 .46.07s0 1.31 0 1.68s0 .8-.05 1.2v1.781a.32.32 0 0 0 .15.27h-1.83c-.51 0-.85 0-1.27.08c-.16-.36-.311-.72-.481-1.07a6 6 0 0 0-.3-.56a4 4 0 0 0-.34-.51c-.26-.35-.54-.67-.81-1q.412-.281.75-.65a.32.32 0 0 0-.4-.5a3.63 3.63 0 0 1-2.531 1.08c-.75-.08-1.35-.55-1.52-1.7a2.9 2.9 0 0 1 0-1.001q.165-.797.45-1.56c.1-.3.2-.59.29-.9s.08-.341.11-.521c.37.28.74.55 1.09.84q.398.316.76.67c.348.322.65.689.9 1.09c.23.4.35.851.35 1.311a.33.33 0 0 0 .32.33a.32.32 0 0 0 .32-.32c.022-.45-.05-.9-.21-1.32a5.7 5.7 0 0 0-1.09-1.66c-.24-.27-.5-.52-.76-.771c-.26-.25-.8-.7-1.21-1a5 5 0 0 0-.6-.57a.6.6 0 0 0-.48-.08a.64.64 0 0 0-.37.53v.65q-.045.264-.12.52c-.09.29-.19.57-.29.86a10.5 10.5 0 0 0-.51 1.77c-.08.44-.08.891 0 1.331a2.66 2.66 0 0 0 1.82 2.19a2 2 0 0 0 .26.05q.007.504.07 1.001q.033.275.11.54q.066.27.16.53c.09.26.18.52.28.78a.29.29 0 0 0-.14.24v2.441c.06 1.21.19 2.421.34 3.631q.105 1.072.35 2.121c.126.507.347.985.65 1.41c.242.313.559.561.92.72c.46.203.94.357 1.431.46c1.649.319 3.338.363 5.001.13a5.7 5.7 0 0 0 3.221-1.33a6.4 6.4 0 0 0 .67-3a58 58 0 0 0-.06-6.492c-.02-.37-.45-.28-.45-.28M11.647 6.19a6.7 6.7 0 0 0-1.59 0h-.16c.08-.16.17-.32.26-.47c.29-.5.62-1 .94-1.44q.147.265.26.55c.17.45.3.92.42 1.36a1 1 0 0 0-.09 0zM4.835 9.87c.49-.052.965-.198 1.4-.43q.2.613.46 1.201q.135.283.3.55c.11.18.23.35.35.52l.51.65c-.78.1-1.57.23-2.37.37c0-.33 0-.66-.07-1a5 5 0 0 0-.09-.56c0-.18-.1-.36-.16-.53s-.22-.52-.33-.77"/></g></svg>
                    <span class="pl-1 font-semibold">Kelas Desain</span>
                </div>
                <div class="bg-white text-black w-full h-full text-center justify-center items-center content-center px-5 py-2 rounded-full border-1 border-teal-100 cursor-pointer flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36"><rect width="36" height="36" fill="none"/><path fill="#e3d407" d="m34.11 24.49l-3.92-6.62l3.88-6.35a1 1 0 0 0-.85-1.52H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h31.25a1 1 0 0 0 .86-1.51m-23.6-3.31H9.39l-3.26-4.34v4.35H5V15h1.13l3.27 4.35V15h1.12ZM16.84 16h-3.53v1.49h3.2v1h-3.2v1.61h3.53v1h-4.66V15h4.65Zm8.29 5.16H24l-1.55-4.59l-1.55 4.61h-1.12l-2-6.18H19l1.32 4.43L21.84 15h1.22l1.46 4.43L25.85 15h1.23Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                    <span class="pl-1 font-semibold">Kelas Terbaru</span>
                </div>
                
                
            </div>
            <div class="w-full h-fit min-h-20 flex flex-col md:flex-row justify-start overlay-hidden items-center gap-4">
                @foreach($classes as $classe)
                <a href="{{ $classe->slug }}" class="relative w-full h-105 bg-white rounded-2xl">
                    <img class="absolute w-full top-0 left-0 h-auto rounded-t-xl" src="{{ $classe->image }}" alt="Kelas Prakerja1">
                    <div class="absolute w-full min-h-35 items-between bottom-2 left-0 text-black px-2">
                        <p class="font-semibold mb-1">{{ $classe->name }}</p>
                        <p class="text-neutral-400">{{ $classe->mentor_id }}</p>
                        <p class="text-yellow-500">{{ $classe->total_rating }}<span class="ml-2 inline-block flex flex-row gap-1"><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i></span></p>
                        <p class="text-red-400">{{ $classe->discount }}</p>
                        <div class="flex flex-row justify-start items-center gap-1">
                            <p class="line-through text-neutral-400">{{ $classe->price }}</p>
                            <i class="w-3 h-2 fa-solid fa-arrow-right"></i>
                            <p>{{ $classe->price_discount }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        <div class="w-full flex justify-center mt-8 pr-2">
            <a href="https://www.luarsekolah.com/kelas/cari?course_type=terpopuler&prakerja=1" class="bg-white border-1 border-teal-700 text-teal-700 px-5 py-2.5 rounded-lg hover:bg-teal-100 active:bg-white transition-all ease-in-out duration-300">
                Lihat Kelas Lainnya <span class="flex inline-block"><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
        </div>
        </section>

        <!-- BLOGS -->
        <section class="w-full flex flex-col min-h-fit py-12">
            <div class="w-full h-10 flex flex-row justify-center items-end gap-10">
                <div class="flex flex-col justify-center items-center">
                    <a onclick="articleOn()" id="article-text" class="cursor-pointer w-fit justify-center items-center text-teal-500 hover:text-teal-500 font-semibold">Baca Artikel</a>
                    <span id="article-line" class="bg-teal-500 justify-center items-start w-2/3 h-1 rounded-full transition-all ease-in-out duration-300"></span>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <a onclick="videoOn()" id="video-text" class="cursor-pointer w-fit justify-center items-center text-neutral-500 hover:text-teal-500 font-semibold">Tonton Video</a>
                    <span id="video-line" class="bg-teal-500 justify-center items-start w-0 h-1 rounded-full transition-all ease-in-out duration-300"></span>
                </div>
            </div>
            <section id="blog-article" class="w-full h-fit py-8 px-20 min-h-120 flex flex-row flex-wrap justify-center items-center bg-neutral-300 mt-4 transition-all ease-in-out duration-300">
                @foreach ($blogs as $blog)
                <a href="https://luarsekolah.com/{{ $blog->slug }}" class="w-1/2 h-fit flex flex-row justify-start items-center gap-4 transition-all ease-in-out duration-300">
                    <img class="w-1/2 h-full" src="{{ $blog->image }}" alt="Article">
                    <div class="w-1/2 flex flex-col justify-start items-start gap-2">
                        <p id="tgl" class="text-neutral-400">{{ $blog->date }}</p>
                        <h1 id="judul" class="font-bold">{{ $blog->title }}</h1>
                        <p id="desc">{{ $blog->content }}</p>
                        <p id="tag" class="text-teal-500 font-semibold">{{ $blog->tag_id }}</p>
                    </div>
                </a>
                @endforeach
            </section>
            <section id="blog-video" class="w-full h-fit py-8 px-20 min-h-120 hidden flex flex-row flex-wrap justify-center items-center bg-neutral-300 mt-4 transition-all ease-in-out duration-300">
                
            </section>
        </section>

        <!-- Program BannerPBI dan BB -->
        <section class="w-full px-20 h-fit min-h-60 gap-3 my-4 flex flex-row justify-center items-center">
            <a class="w-1/2 h-auto content-center justify-center items-center relative">
                <img class="w-full h-full relative object-cover" src="assets/pbi-banner.png" alt="PBI Banner">
                <p class="w-3/4 pr-0 text-white text-xl absolute left-8 top-20">Membantumu untuk memiliki pengalaman “magang” dengan mengerjakan project dari top company.</p>
                <button class="w-fit min-w-50 px-1 h-8 bg-sky-500 font-semibold text-xl text-white content-center rounded-lg absolute left-1/2 -translate-x-1/2 bottom-15 hover:bg-teal-400 cursor-pointer" href="#">Cek Program</button>
            </a>
            <a class="w-1/2 h-auto content-center justify-center items-center relative">
                <img class="w-full h-full relative object-cover" src="assets/bb-banner.png" alt="BB Banner">
                <p class="w-3/4 pr-0 text-white text-xl absolute left-8 top-20">Membantumu dalam meraih pekerjaan impian hanya dalam waktu 6 bulan.</p>
                <button class="w-fit min-w-50 px-1 h-8 bg-sky-500 font-semibold text-xl text-white content-center rounded-lg absolute left-1/2 -translate-x-1/2 bottom-15 hover:bg-yellow-400 cursor-pointer" href="#">Cek Program</button>
            </a>
        </section>

        <!-- Partnership -->
        <section class="w-full h-fit min-h-40 flex flex-col justify-center items-center gap-4 py-12">
            <h1 class="text-lg md:text-[16px] font-semibold pb-2">Partnership Luarsekolah</h1>
            <div class="w-full overlow-hidden min-h-25 border-y-1 border-neutral-400 flex flex-row  items-center gap-8 overflow-x-auto">
                <div class="wrapper">
                @foreach ($partnerships as $partnership)
                    <div class="item {{ $partnership->name }}"><img class="w-32 h-auto inline-block" src="{{ $partnership->image }}" alt="Partnership Logo"></div>
                @endforeach
            </div>    
            </div>
        </section>

        <!-- Testinomi -->
        <section class="w-full h-fit min-h-120 flex flex-col justify-center items-center gap-4 py-12">
            <h1 class="text-lg h-fit md:text-[16px] font-semibold pb-2">Testimoni Alumni</h1>
            <section class="w-full h-auto min-h-40 flex flex-row justify-between items-center gap-4 px-20">
                @foreach ($testimonies as $testimoni)
                <div class="bg-neutral-300 w-full h-fit min-h-100 p-3 relative rounded-xl">
                    <div class="flex flex-col justify-center items-center content-center -pt-2 absolute w-full h-1/2 left-0 top-0 {{ $testimoni->color }} rounded-t-2xl">
                        <p class="text-[16px] text-black text-center font-semibold">{{ $testimoni->name }}</p>
                        <p class="text-black text-center pt-1">{{ $testimoni->position }}</p>
                    </div>
                    <div class="flex flex-col justify-center items-center pt-8 absolute w-full h-1/2 left-0 top-1/2 bg-white rounded-b-2xl">
                        <p class="inline-block flex flex-row gap-1"><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i><i class="fa-solid fa-star" style="margin-left:1; color: #FFD43B;"></i></p>
                        <p class="text-black text-center font-semibold">{{ $testimoni->campus }}</p>
                        <p class="text-black text-center pt-1 px-2">{{ $testimoni->message }}</p>
                    </div>
                    <div class="absolute w-fit h-fit left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 bg-white border-2 border-neutral-400 rounded-full">
                        <img src="assets/profile1.png" alt="Profile" class="w-32 h-32 rounded-full">
                    </div>
                </div>
                @endforeach
            </section>
        </section>

        <!-- CONTACT -->
        <section class="w-full h-fit min-h-40 flex justify-center items-center gap-4 py-12 px-20">
            <div class="w-full h-full flex flex-row justify-between items-center gap-4 bg-[#E7F3FE] px-8 py-6 rounded-xl">
                <div class="w-1/2 h-full justify-start items-start flex flex-col gap-12">
                    <h1 class="text-black text-[16px]">Butuh Bantuan atau Ingin Tahu Lebih Lanjut
                    Tentang Luar Sekolah? Hubungi Kami Kapan Saja</h1>
                    <button class="flex flex-row gap-0 justify-start w-fit h-fit p-3 bg-teal-500 rounded-lg hover:bg-teal-400 cursor-pointer "><i class="fa-solid fa-comment" style="color:white;"></i><p class="ml-2 text-white">Hubungi Kami Via Whatsapp</p></button>
                </div>
                <div class="w-1/2 h-full justify-end items-end flex">
                    <img src="assets/mascott.png" alt="Mascott" class="w-auto h-40 -py-12">
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="w-full h-fit min-h-80 flex flex-col justify-center items-center px-20 py-12">
            <h1 class="text-lg md:text-[16px] font-semibold pb-2">Jawaban dari Luarsekolah</h1>
            <p>Temukan informasi lengkap yang sering ditanyakan oleh pengguna Luarsekolah</p>
            <div class="w-full h-fit flex mt-6">
                <div class="w-full h-fit flex flex-row flex-wrap justify-center items-starts gap-2">
                    @foreach ($faqs as $faq)
                        <div class="w-10/21 flex flex-row justify-start text-start items-start border-2 border-neutral-400 rounded-lg px-2 py-3 hover:bg-neutral-100 cursor-pointer"><span><i class="{{ $faq->icon }} mx-2"></i></span> {{ $faq->question }}</div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="w-full h-fit min-h-40 pt-12">
            <div class="w-full h-fit min-h-30 pt-12 pb-4 px-20 bg-[#E7F3FE] flex flex-row">
                <div class="w-2/7 flex flex-col">
                    <img src="assets/LS-logo-master.png" alt="LuarSekolah Logo" class="w-32 h-auto mb-2">
                    <p class="font-semibold text-md pr-24">Belajar praktis, terarah, dan sesuai kebutuhanmu</p>
                    <div class="flex flex-row w-full justify-start gap-6 my-3">
                        <a href="https://instagram.com/luarsekolah/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="black" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg></a>
                        <a href="https://youtube.com/@luarsekolah"><svg fill="black" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M549.7 124.1C543.5 100.4 524.9 81.8 501.4 75.5 458.9 64 288.1 64 288.1 64S117.3 64 74.7 75.5C51.2 81.8 32.7 100.4 26.4 124.1 15 167 15 256.4 15 256.4s0 89.4 11.4 132.3c6.3 23.6 24.8 41.5 48.3 47.8 42.6 11.5 213.4 11.5 213.4 11.5s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM232.2 337.6l0-162.4 142.7 81.2-142.7 81.2z"/></svg></a>
                        <a href="https://linkedin.com/company/luarsekolah-com"><svg fill="black" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 32L31.9 32C14.3 32 0 46.5 0 64.3L0 447.7C0 465.5 14.3 480 31.9 480L416 480c17.6 0 32-14.5 32-32.3l0-383.4C448 46.5 433.6 32 416 32zM135.4 416l-66.4 0 0-213.8 66.5 0 0 213.8-.1 0zM102.2 96a38.5 38.5 0 1 1 0 77 38.5 38.5 0 1 1 0-77zM384.3 416l-66.4 0 0-104c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9l0 105.8-66.4 0 0-213.8 63.7 0 0 29.2 .9 0c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9l0 117.2z"/></svg></a>
                        <a href="https://x.com/luarsekolah/"><svg fill="black" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103l0-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg></a>
                        <a href="https://tiktok.com/@luarsekolahofficial"><svg fill="black" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M448.5 209.9c-44 .1-87-13.6-122.8-39.2l0 178.7c0 33.1-10.1 65.4-29 92.6s-45.6 48-76.6 59.6-64.8 13.5-96.9 5.3-60.9-25.9-82.7-50.8-35.3-56-39-88.9 2.9-66.1 18.6-95.2 40-52.7 69.6-67.7 62.9-20.5 95.7-16l0 89.9c-15-4.7-31.1-4.6-46 .4s-27.9 14.6-37 27.3-14 28.1-13.9 43.9 5.2 31 14.5 43.7 22.4 22.1 37.4 26.9 31.1 4.8 46-.1 28-14.4 37.2-27.1 14.2-28.1 14.2-43.8l0-349.4 88 0c-.1 7.4 .6 14.9 1.9 22.2 3.1 16.3 9.4 31.9 18.7 45.7s21.3 25.6 35.2 34.6c19.9 13.1 43.2 20.1 67 20.1l0 87.4z"/></svg></a>
                    </div>
                    <div class="flex flex-row justify-between my-3">
                        <a href="https://play.google.com/store/games?hl=id" class="w-1/2"><img src="assets/playstore.png" alt="Get In On PS"></a>
                        <a href="https://www.apple.com/id/app-store/" class="w-1/2"><img src="assets/appstore.png" alt="Get In On AppS"></a>
                    </div>
                    <img src="assets/mascott-footer.png" alt="Mascot" class="w-64 h-auto mt-2">
                </div>
                <div class="w-5/7 flex flex-row justify-between">
                    <div class="w-full flex flex-col gap-5 justify-start items-start">
                        <h1 class="text-start font-semibold justify-start items-start">Produk & Layanan</h1>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/kelas/cari?course_type=terpopuler&prakerja=1">Kursus Online</a>
                        <a class="hover:text-teal-400" href="https://belajarbekerja.com/">Bootcamp</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/promo">Promo</a>
                    </div>
                    <div class="w-full flex flex-col gap-5 justify-start items-start">
                        <h1 class="text-start font-semibold justify-start items-start">Tentang Kami</h1>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/tentang-kami">Tentang Luarsekolah</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/artikel">Blog & Artikel</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/video">Tonton Video</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/testimoni">Testimoni</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/partner">Partner & Kolaborasi</a>
                    </div>
                    <div class="w-full flex flex-col gap-5 justify-start items-start">
                        <h1 class="text-start font-semibold justify-start items-start">Bantuan</h1>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/faq">FAQ</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/bantuan">Pusat Bantuan</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/syarat-dan-ketentuan/terms-of-use">Syarat & Ketentuan</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/syarat-dan-ketentuan/privacy-policy">Kebijakan Privasi</a>
                    </div>
                    <div class="w-full flex flex-col gap-5 justify-start items-start">
                        <h1 class="text-start font-semibold justify-start items-start">Kontak</h1>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/tentang-kami#ajukan"><span><i class="fa-solid fa-envelope"></i></span>info@luarsekolah.com</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/tentang-kami#ajukan"><span><i class="fa-solid fa-comment"></i></span>+62 811-2021-444</a>
                        <a class="hover:text-teal-400" href="https://www.luarsekolah.com/tentang-kami#ajukan"><span><i class="fa-solid fa-location-dot"></i></span>Headquarter</a>
                        <p class="pl-4">Centennial Tower Level 
                        29, Jl Jend Gatot Subroto
                        No.27, Karet Semanggi,
                        Setiabudi Daerah Khusus
                        Ibukota Jakarta 12950</p>
                    </div>
                    
                </div>
            </div>
            <p class="w-full justify-center text-center mt-4">PT Teknologi Edukasi Indonesia</p>
            <p class="w-full justify-center text-center">Copyright © 2025 Luarsekolah. All rights reserved.</p>
        </footer>
    </main>

<script>
    function program_navbar(){
        const program_popup = document.getElementById("program-navbar-popup");
        program_popup.classList.toggle("hidden");
    
    }
    function contact_navbar(){
        const contact_popup = document.getElementById("contact-navbar-popup");
        contact_popup.classList.toggle("hidden");
    
    }

    function articleOn(){
        const article = document.getElementById("blog-article");
        const video = document.getElementById("blog-video");
        const articleText = document.getElementById("article-text");
        const videoText = document.getElementById("video-text");
        const articleLine = document.getElementById("article-line");
        const videoLine = document.getElementById("video-line");
        articleText.classList.add("text-teal-500");
        articleText.classList.remove("text-neutral-500");
        videoText.classList.add("text-neutral-500");
        videoText.classList.remove("text-teal-500");
        articleLine.classList.add("w-2/3");
        articleLine.classList.remove("w-0");
        videoLine.classList.add("w-0");
        videoLine.classList.remove("w-2/3");
        article.classList.remove("hidden");
        video.classList.add("hidden");
    }
    function videoOn(){
        const article = document.getElementById("blog-article");
        const video = document.getElementById("blog-video");
        const articleText = document.getElementById("article-text");
        const videoText = document.getElementById("video-text");
        const articleLine = document.getElementById("article-line");
        const videoLine = document.getElementById("video-line");
        articleText.classList.add("text-neutral-500");
        articleText.classList.remove("text-teal-500");
        videoText.classList.add("text-teal-500");
        videoText.classList.remove("text-neutral-500");
        articleLine.classList.add("w-0");
        articleLine.classList.remove("w-2/3");
        videoLine.classList.add("w-2/3");
        videoLine.classList.remove("w-0");
        article.classList.add("hidden");
        video.classList.remove("hidden");
    }

</script>
</body>
</html>