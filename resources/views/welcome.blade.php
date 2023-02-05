<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss">
        @layer utilities {
        .container {
        @apply max-w-[90%] mx-auto;
        }

        .btn {
        @apply bg-[#5E8B7E] text-white px-5 py-3 text-center;
        }  

        .side-bar {
        display: none;
        position: fixed;
        z-index: 1;
        width: 100%;
        height: 100%;
        padding: 9rem;
        background-color: #5A5A5A;
        color: #fff;
        }

        .side-bar.active {
        display: block;
        }

        .content-gallery {
        width: 100%;
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        gap: 42px;
        margin-bottom: 40px;
        }

        .btn.rounded {
        @apply rounded-full;
        }

        .home::before {
        }

        .active {
        @apply block;
        }
    }
    </style>
    <title>Hight School</title>
</head>

<body>
    <header class="container fixed inset-x-0 z-50 flex items-center justify-between py-5 text-white">
      <div class="flex items-center">
        <a href="">
          <img src="./assets/Project logo.svg" alt="">
        </a>
        <a href="" class="pl-3"> Hight School</a>
      </div>
    <div class="block ml-12 sm:hidden md:flex md:items-center md:justify-between">
        <div class="md:flex md:space-x-9">
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Home</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Profile Sekolah</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Data Akademik</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Artikel</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Fasilitas</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">Gallery</a>
            <a href="" class="block px-3 py-2 md:inline-block hover:bg-gray-900 hover:text-white">E-Learning</a>
        </div>

    </div>
    <div class="inline-block">
      @if (Route::has('login'))
      @auth
      <a href="{{ url('/dashboard') }}" class="static rounded btn">Dashboard</a>
      @else
      <a href="{{ route('login') }}" class="static rounded btn">Login</a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="static rounded btn">Hubungi Kami</a>
      @endif
    @endauth
    @endif
    </div>
    </header>

    <section class="pt-60 pb-44 flex flex-col items-center lg:flex-row bg-[url('/assets/Book.png')]">
        <div class="container flex-1 space-y-7">
            <h1 class="text-5xl w-3/4 font-bold leading-none relative text-[white]">
                Buku - Buku yang dapat membuat anda Termotivasi
            </h1>
            <p class="text-gray-200 ">September 6, 2022</p>
            <p class="w-2/5 text-gray-200 ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
            </p>
            <a href="" class="inline-block rounded btn">Read more</a>
        </div>
        <div class="background">
            <!-- <img src="/assets/Book.png" alt=""> -->
        </div>
    </section>

    <section class="py-28">
        <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-10 lg:flex-row ">
            <div class="flex flex-col items-center justify-between flex-1 px-3 border-2 border-white ">
                <img class="py-2" src="./assets/Sekolah.svg" alt="">
                <div class="space-y-1 text-black">
                    <h3 class="text-base font-bold text-center">Identitas Sekolah</h3>
                    <p class="text-sm text-center text-gray-500">Hight School berdiri sejak tahun 1980 dengan nama Hight
                        School 1.
                        Sekolah yang
                        akan membimbing muridnya hingga benar</p>
                </div>
                <a href="" class="font-bold text-sm text-[#5E8B7E] pt-2">Read more</a>
            </div>

            <div class="flex flex-col items-center justify-center flex-1 px-3 border-2 border-white">
                <img class="py-2" src="./assets/Toga.svg" alt="">
                <div class="space-y-1 text-black">
                    <h3 class="text-base font-bold text-center">Visi Misi</h3>
                    <p class="text-sm text-center text-gray-500">Hight School berdiri sejak tahun 1980 dengan nama Hight
                        School 1.
                        Sekolah yang
                        akan
                        membimbing muridnya hingga benar</p>
                </div>
                <a href="" class="font-bold text-sm text-[#5E8B7E] pt-2">Read more</a>
            </div>

            <div class="flex flex-col items-center justify-center flex-1 px-3 border-2 border-white ">
                <img class="py-2" src="./assets/Struktur.svg" alt="">
                <div class="space-y-1 text-black">
                    <h3 class="text-base font-bold text-center">Struktur Sekolah</h3>
                    <p class="text-sm text-center text-gray-500">Hight School berdiri sejak tahun 1980 dengan nama Hight
                        School 1.
                        Sekolah yang
                        akan
                        membimbing muridnya hingga benar</p>
                </div>
                <a href="" class="font-bold text-sm text-[#5E8B7E] pt-2">Read more</a>
            </div>
        </div>
    </section>

    <section class=" flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center bg-[#F7FBFA]">
        <img src="./assets/Wisuda.png" class="flex-1 w-full" alt="">
        <div class="flex-1 w-4/5 py-10 space-y-6">
            <p class="text-green-800">Pembukaan Kepala Sekolah</p>
            <h2 class="text-4xl font-bold">Ucapan Kepala Sekolah HIGHT SCHOOL</h2>
            <p class="text-gray-500">
                “ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av euror.
                Karriärcoach pyjuskap andropatologi. “
            </p>
            <section class="flex">
                <img src="/assets/Kepala Sekolah.svg" alt="" class="px-2">
                <section class="d-flex">
                    <p class="font-bold" style="margin-bottom: 8px;">Bpk. Robert Stent</p>
                    <p style="margin: 0;">Kepala Sekolah</p>
                </section>
            </section>
        </div>
    </section>

    <div class="container pt-20">
        <div class="justify-between w-full d-flex">
            <h3 class="py-3 text-4xl font-semibold">Jurusan (Program Study)</h3>
            <section class="flex items-center justify-between">
                <p class="w-1/2">Terdapat Beberapa Jurusan atau Program Study
                    di SMA PGRI
                    CICURUG
                    yang dapat dipilih
                    sesuai
                    dengan minat Siswa</p>
                <div class="justify-items-end">
                    <a href="" class="rounded btn">Academic Data</a>
                </div>
            </section>
        </div>

        <div class="flex flex-col pt-10 pb-5 space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
            <div class="container flex flex-col items-center justify-between flex-1 border rounded-2xl">
                <img src="./assets/Book.svg" class="pt-10 pb-5" alt="">
                <div class="w-4/5">
                    <h3 class="text-3xl font-bold text-center">IPS</h3>
                    <p class="py-10 text-center text-gray-500 text-md">
                        Jurusan IPS mempelajari tentang hubungan antar
                        manusia
                        dan hubungan
                        manusia dengan lingkungannya, serta berbagai aspek sosial</p>
                </div>
            </div>
            <div class="container flex flex-col items-center justify-between flex-1 border rounded-2xl">
                <img src="./assets/Atom.svg" class="pt-10 pb-5" alt="">
                <div class="w-4/5">
                    <h3 class="text-3xl font-bold text-center">IPA</h3>
                    <p class="py-10 text-center text-gray-500 text-md">
                        Selain belajar Ilmu Alam, anak SMA belajar matematika juga. Oleh sebab itu selain disebut dengan
                        jurusan IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA , MIA</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-20">
        <div class="items-center justify-between w-full d-flex">
            <h3 class="py-3 text-4xl font-semibold">Prestasi Siswa-Siswi</h3>
            <section class="flex items-center justify-between">
                <p class="text-sm text-gray-500 desc" style="width: 40%;">Prestasi dari Siswa - Siswi SMA PGRI CICURUG
                </p>
                <a href="" class="rounded btn">See all prestation</a>
            </section>
        </div>

        <div class="flex justify-between pt-10 space-x-5 spcae-y-5 lg:space-y-0 ">
            <div class="relative">
                <img src="./assets/Soccer.png" class="static w-full h-full" alt="">
                <div class="mt-3 space-y-2">
                    <div class="">
                        <p class="absolute bottom-3 left-3 text-xl text-[white]">Juara 2 Lomba Bola</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <img src="./assets/Swimming.png" class="static w-full h-full" alt="">
                <div class="mt-3 space-y-2">
                    <div class="flex justify-between">
                        <p class="absolute bottom-3 left-3 text-xl text-[white]">Juara 1 Lomba Renang</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <img src="./assets/Table Tennis.png" class="static w-full h-full" alt="">
                <div class="mt-3 space-y-2">
                    <div class="flex justify-between">
                        <p class="absolute bottom-3 left-3 text-xl text-[white]">Juara 3 Lomba Tenis Meja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container flex flex-col items-center justify-center">
        <h2 class="mb-4 font-bold">Artikel</h2>
        <p class="w-1/2 mb-10 text-center text-slate-500">Kami menyediakan beberapa artikel dari kegiatan-kegiatan
            pembelajaran maupun lorem ipsum donot saas</p>
        <section class="flex items-center justify-between sm:flex-col xl:flex-row">
            <section>
                <img src="/assets/Berita 1.png" alt="">
            </section>
              @include('layouts.blog')
        </section>
    </section>
    <div class="container flex flex-col items-center justify-between py-10">
        <button class="rounded btn">
            See more
        </button>
    </div>

    <section class="bg-[#F7FBFA] flex flex-col items-center py-10">
        <h2 class="pb-5 font-bold">Gallery</h2>
        <p class="mb-10 text-slate-500">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet</p>
        <section class="content-gallery">
        @include('layouts.gallery')
        </section>
        <div class="rounded btn">
            <button>See more</button>
        </div>
    </section>

    <section class="bg-[#0E2123] text-white py-14">
        <div
            class="container flex flex-col items-center space-x-12 space-y-5 md:flex-row md:space-y-0 md:items-start md:justify-center">
            <div class="flex flex-col">
                <div class="flex items-center gap-5 mb-5">
                    <img src="/assets/Project logo.svg" alt="" width="40">
                    <p class="font-bold">Hight School</p>
                </div>

                <p class="max-w-[380px]">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor
                    auctor,
                    erat sapien
                    faucibus lectus, vel tempor dolor augue et lectus.""
                </p>
                <ul class="flex gap-5 mt-5">
                    <li>
                        <img src="/assets/Facebook.png" alt="">
                    </li>
                    <li>
                        <img src="/assets/Twitter.png" alt="">
                    </li>
                    <li>
                        <img src="/assets/Linkedin.png" alt="">
                    </li>
                    <li>
                        <img src="/assets/Instagram.png" alt="">
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-3 md:grid-cols-3 gap-y-8">
                <div>
                    <p class="py-2 font-bold">Jelajah</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Identitas Sekolah</li>
                        <li>Berita</li>
                        <li>Gallery</li>
                        <li>Fasilitas</li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>

                <div>
                    <p class="py-2 font-bold">Data Akademik</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Tentang Pendidik</li>
                        <li>Tenaga Kependidikan</li>
                        <li>Daftar Siswa</li>
                        <li>Absensi Siswa</li>
                        <li>Organisasi Sekolah</li>
                        <li>Jadwal Pelajaran</li>
                        <li>Jadwal Ujian</li>
                    </ul>
                </div>

                <div>
                    <p class="py-2 font-bold">Lokasi</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Alamat</li>
                        <li>3891 Ranchview Dr. Richardson, California 62639</li>
                        <li>Kontak Kami</li>
                        <li>
                            Telp: (0266) 123456
                            Web : www.higntschool.sch.id
                            email : info@hightschool.sch.id
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#0E2123] py-5">
        <p class="text-center text-white ">© Hight School. All right Reserved. Website By mangcoding</p>
    </footer>
</body>

<script>
    var btn = document.querySelectorAll('button');
    btn.forEach((click) => {
        click.addEventListener('click', () => {
            alert('Button has clicked!');
        })
    })
</script>
<script>
    var btnShow = document.querySelector('#burger-button');
    var sidebar = document.querySelector('.side-bar');
    btnShow.addEventListener('click', function () {
        sidebar.classList.toggle("active");
    })
</script>
<script>
    const checkScroll = () => {
        const header = document.querySelector('.header');
        if (window.innerWidth > 360) {
            if (window.scrollY > 50) {
                header.classList.add('scroll');
            } else {
                header.classList.remove('scroll');
            }
        }
    };
    window.addEventListener('scroll', checkScroll);
    document.addEventListener('DOMContentLoaded', checkScroll); < script
</script>

</html>