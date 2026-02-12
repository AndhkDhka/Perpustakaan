@extends('layouts.app')

@section('title', 'Beranda - Perpustakaan Digital')

@section('content')

{{-- HERO : PROFESSIONAL & TENANG --}}
<section
    x-data="{
        current: 0,
        images: [
            '{{ asset('images/Oranye Cokelat dan Putih Ilustrasi Pendidikan Poster (1).png') }}',
            '{{ asset('images/Poster Edukasi Membaca Buku Ilustratif Biru dan Hijau.png') }}',
        ],
        start() {
            setInterval(() => {
                this.current = (this.current + 1) % this.images.length
            }, 5000)
        }
    }"
    x-init="start()"
    class="relative w-full h-screen overflow-hidden"
>

    {{-- BACKGROUND SLIDER --}}
    <template x-for="(image, index) in images" :key="index">
        <div
            x-show="current === index"
            x-transition:enter="transition-opacity duration-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 w-full h-full"
            :style="`background-image:url('${image}');
                     background-size:cover;
                     background-position:center;`">
        </div>
    </template>

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-gradient-to-br
            from-white/20 via-white/20 to-blue-50/60">

        {{-- CONTENT --}}
        <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
            <div class="max-w-3xl text-white">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 text-[#1F3A5F]">
                    Membentuk Generasi<br>
                    Berkarakter & Berprestasi
                </h1>

                <p class="text-lg md:text-xl mb-10 text-slate-700">
                    Perpustakaan sekolah sebagai pusat literasi,
                    dokumentasi akademik, dan pendukung penilaian
                    akreditasi pendidikan secara berkelanjutan.
                </p>

                <a href="/profil"
                    class="inline-block bg-[#1F3A5F] text-white
                            px-10 py-4 rounded-xl font-semibold
                            hover:bg-[#16304F] transition">
                    Tentang Perpustakaan
                </a>

            </div>
        </div>
</section>


{{-- KREDIBILITAS & STANDAR --}}
<section class="bg-[var(--surface)] py-24">
  <div class="max-w-6xl mx-auto px-6">

    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-[var(--primary)] mb-4">
        Dibangun dengan Standar Perpustakaan Modern
      </h2>
      <p class="text-[var(--text-secondary)] max-w-3xl mx-auto">
        Mengadopsi prinsip pengelolaan perpustakaan digital
        yang relevan dengan standar institusi pendidikan.
      </p>
    </div>

    <div class="grid md:grid-cols-4 gap-10 text-center">
      @foreach([
        ['18.000+','Koleksi Terkatalog'],
        ['100%','Metadata Lengkap'],
        ['24/7','Akses Digital'],
        ['Multi','Jenjang & Kategori']
      ] as $item)
      <div class="bg-[var(--bg-main)] rounded-2xl p-8 border border-[var(--border)]">
        <p class="text-4xl font-extrabold text-[var(--primary)]">{{ $item[0] }}</p>
        <p class="text-[var(--text-secondary)] mt-2">{{ $item[1] }}</p>
      </div>
      @endforeach
    </div>

  </div>
</section>

{{-- QUOTES LITERASI --}}
<section class="relative py-28 bg-gradient-to-b from-sky-50 to-white overflow-hidden">

     {{-- Floating Clouds --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-extrabold text-blue-900">
                Belajar Bisa Dimulai dari Satu Buku
            </h2>
            <p class="text-slate-600 mt-3 max-w-2xl mx-auto">
                Perpustakaan adalah tempat anak bertanya, mencoba,
                dan menemukan jawabannya sendiri.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-14 items-center">

            {{-- Cloud Bubble 1 --}}
            <div class="reveal">
                <div class="relative bg-white rounded-[3.5rem] px-10 py-10 shadow-lg border border-slate-100 animate-float-slow">

                    <span class="absolute -top-4 left-10 text-2xl">☁️</span>

                    <p class="text-slate-700 text-lg leading-relaxed">
                        “Membaca itu seperti membuka jendela.
                        Semakin sering dibuka,
                        semakin banyak hal baru yang terlihat.”
                        <span class="absolute top-4 right-6 text-yellow-400 text-xl">✦</span>
                    </p>

                    <div class="mt-5 text-sm font-semibold text-blue-700">
                        Perpustakaan Sekolah
                    </div>
                </div>
            </div>

            {{-- Cloud Bubble 2 --}}
            <div class="reveal md:translate-y-10">
                <div class="relative bg-white rounded-[3.5rem] px-10 py-10 shadow-lg border border-slate-100 animate-float-fast">

                    <span class="absolute -top-4 right-10 text-2xl">✨</span>

                    <p class="text-slate-700 text-lg leading-relaxed">
                        “Buku tidak memberi semua jawaban,
                        tapi membantu anak belajar
                        cara mencari jawaban.”
                        <span class="absolute top-4 right-6 text-yellow-400 text-xl">✦</span>
                    </p>

                    <div class="mt-5 text-sm font-semibold text-blue-700">
                        Literasi Anak SD
                    </div>
                </div>
            </div>

        </div>
    </div>

     <style>
        .cloud {
            position: absolute;
            background: white;
            border-radius: 9999px;
            filter: blur(30px);
            opacity: 0.7;
        }

        .cloud-1 {
            width: 320px;
            height: 110px;
            top: 80px;
            left: 60px;
            animation: drift 18s ease-in-out infinite;
        }

        .cloud-2 {
            width: 420px;
            height: 130px;
            top: 160px;
            right: 80px;
            animation: drift 22s ease-in-out infinite reverse;
        }

        .cloud-3 {
            width: 360px;
            height: 120px;
            bottom: 100px;
            left: 35%;
            animation: drift 26s ease-in-out infinite;
        }

        @keyframes drift {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-18px); }
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes floatFast {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-16px); }
        }

        .animate-float-slow {
            animation: floatSlow 6s ease-in-out infinite;
        }

        .animate-float-fast {
            animation: floatFast 5s ease-in-out infinite;
        }
    </style>
</section>

{{-- MINI STATISTIK PERPUSTAKAAN --}}
<section class="relative py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            {{-- ITEM 1 --}}
            <div class="reveal group">
                <div class="text-yellow-400 text-4xl mb-3 transition-transform group-hover:scale-110">
                    📚
                </div>
                <h3 class="text-3xl font-extrabold text-slate-900">
                    2.000<span class="text-yellow-400">+</span>
                </h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                    Koleksi buku cetak meliputi literasi, referensi, dan bacaan pengayaan.
                </p>
            </div>

            {{-- ITEM 2 --}}
            <div class="reveal group">
                <div class="text-yellow-400 text-4xl mb-3 transition-transform group-hover:scale-110">
                    💻
                </div>
                <h3 class="text-3xl font-extrabold text-slate-900">
                    500<span class="text-yellow-400">+</span>
                </h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                    Koleksi digital untuk mendukung literasi dan pembelajaran modern.
                </p>
            </div>

            {{-- ITEM 3 --}}
            <div class="reveal group">
                <div class="text-yellow-400 text-4xl mb-3 transition-transform group-hover:scale-110">
                    👥
                </div>
                <h3 class="text-3xl font-extrabold text-slate-900">
                    Ratusan
                </h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                    Anggota aktif dari siswa dan pendidik di lingkungan sekolah.
                </p>
            </div>

            {{-- ITEM 4 --}}
            <div class="reveal group">
                <div class="text-yellow-400 text-4xl mb-3 transition-transform group-hover:scale-110">
                    📖
                </div>
                <h3 class="text-3xl font-extrabold text-slate-900">
                    Berkelanjutan
                </h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                    Layanan literasi melalui peminjaman, referensi, dan pendampingan.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- SISTEM KERJA --}}
<section id="sistem" class="bg-[var(--bg-main)] py-28">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Header --}}
    <div class="text-center mb-20">
      <h2 class="text-4xl font-bold text-[var(--primary)] mb-4">
        Sistem yang Tertata & Mudah Digunakan
      </h2>
      <p class="text-[var(--text-secondary)] max-w-2xl mx-auto">
        Dirancang agar fokus pada literasi, bukan kompleksitas sistem.
      </p>
    </div>

    {{-- Cards --}}
    <div class="grid md:grid-cols-3 gap-14">
      @foreach([
        ['Kurasi & Klasifikasi','Penyusunan koleksi berdasarkan jenjang, kategori, dan kurikulum.'],
        ['Pencarian Efisien','Filter cerdas untuk menemukan sumber belajar yang relevan.'],
        ['Manajemen Peminjaman','Pencatatan sirkulasi yang rapi dan transparan.']
      ] as $item)

      <div
        class="relative rounded-3xl p-10
               bg-[var(--primary)]
               text-white
               shadow-[0_24px_48px_-20px_rgba(31,58,95,0.65)]
               hover:-translate-y-1
               transition-all duration-300 ease-out">

        <h3 class="text-xl font-bold mb-4">
          {{ $item[0] }}
        </h3>

        <p class="text-white/80 leading-relaxed text-sm">
          {{ $item[1] }}
        </p>

      </div>
      @endforeach
    </div>

  </div>
</section>


<section class="pt-32 pb-24 bg-[var(--surface)]">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

    <div>
      <p class="text-sm font-semibold text-[var(--secondary)] mb-4 uppercase tracking-wide">
        Literasi Digital Sekolah
      </p>

      <h2 class="text-4xl md:text-5xl font-extrabold text-[var(--text-primary)] mb-6">
        Mendukung Pendidikan & Akreditasi Sekolah
      </h2>

      <p class="text-lg text-[var(--text-secondary)] mb-8 max-w-xl">
        Akses informasi, dokumentasi resmi, dan koleksi literasi
        untuk mendukung proses pembelajaran berkelanjutan.
      </p>

      <div class="flex flex-wrap gap-3 text-sm font-semibold text-[var(--text-secondary)]">
        <span class="px-4 py-2 bg-[var(--bg-main)] rounded-full">✔ Koleksi Terstruktur</span>
        <span class="px-4 py-2 bg-[var(--bg-main)] rounded-full">✔ Dokumentasi Resmi</span>
        <span class="px-4 py-2 bg-[var(--bg-main)] rounded-full">✔ Mendukung SNP</span>
      </div>
    </div>

    <div class="relative">
      <div class="absolute -top-6 -left-6 w-full h-full bg-[var(--bg-main)] rounded-3xl"></div>
      <img src="{{ asset('images/Background1.jpg') }}"
           class="relative z-10 rounded-3xl shadow-lg object-cover w-full h-[420px]">
    </div>

  </div>
</section>

<section id="koleksi-unggulan" class="bg-[var(--bg-main)] py-28">
  <div class="max-w-7xl mx-auto px-6">

    {{-- Header --}}
    <div class="text-center mb-20">
      <h2 class="text-4xl font-bold text-[var(--primary)] mb-4">
        Koleksi Buku Pilihan
      </h2>
      <p class="text-[var(--text-secondary)] max-w-2xl mx-auto">
        Buku yang paling sering dipinjam dan direkomendasikan
        untuk menumbuhkan minat baca siswa.
      </p>
    </div>

    {{-- Books --}}
    <div class="grid md:grid-cols-3 gap-14">

      {{-- Book Card --}}
      <div class="group bg-white rounded-3xl overflow-hidden shadow
                  hover:shadow-xl transition">
        <div class="aspect-[3/4] bg-slate-200 flex items-center justify-center">
          <span class="text-slate-400 text-sm">Cover Buku</span>
        </div>

        <div class="p-6">
          <h3 class="font-bold text-[var(--primary)] mb-2">
            Kancil dan Buaya
          </h3>
          <p class="text-sm text-[var(--text-secondary)]">
            Cerita rakyat klasik untuk melatih logika, kecerdikan,
            dan nilai moral anak.
          </p>
        </div>
      </div>

      <div class="group bg-white rounded-3xl overflow-hidden shadow
                  hover:shadow-xl transition">
        <div class="aspect-[3/4] bg-slate-200 flex items-center justify-center">
          <span class="text-slate-400 text-sm">Cover Buku</span>
        </div>

        <div class="p-6">
          <h3 class="font-bold text-[var(--primary)] mb-2">
            Aku Anak Pintar
          </h3>
          <p class="text-sm text-[var(--text-secondary)]">
            Buku literasi dasar yang membantu anak
            mengenal kebiasaan belajar positif.
          </p>
        </div>
      </div>

      <div class="group bg-white rounded-3xl overflow-hidden shadow
                  hover:shadow-xl transition">
        <div class="aspect-[3/4] bg-slate-200 flex items-center justify-center">
          <span class="text-slate-400 text-sm">Cover Buku</span>
        </div>

        <div class="p-6">
          <h3 class="font-bold text-[var(--primary)] mb-2">
            Seri Sains Anak: Tubuhku
          </h3>
          <p class="text-sm text-[var(--text-secondary)]">
            Mengenalkan ilmu sains dasar
            melalui ilustrasi sederhana dan narasi ringan.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="bg-[#F4F6F8] py-28">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

        {{-- LEFT --}}
        <div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1F3A5F] mb-6">
                Solusi Digitalisasi<br>
                Perpustakaan Modern
            </h2>

            <p class="text-gray-600 max-w-xl mb-10">
                Sistem terpadu untuk mengelola koleksi, layanan,
                dan pengalaman literasi secara efisien tanpa
                ketergantungan infrastruktur fisik yang kompleks.
            </p>

            <img src="{{ asset('images/fasilitas-kelasz.jpg') }}"
                 class="rounded-3xl shadow-xl w-full max-w-md"
                 alt="Mockup Perpustakaan">
        </div>
  
        {{-- RIGHT --}}
        <div class="grid sm:grid-cols-2 gap-8">

            @php
            $features = [
                ['title'=>'Investasi Efisien','desc'=>'Tanpa server lokal, rak fisik, dan biaya operasional tinggi'],
                ['title'=>'User Friendly','desc'=>'Akses mudah melalui tablet, smartphone, dan komputer'],
                ['title'=>'Koleksi Terkurasi','desc'=>'Buku digital disesuaikan jenjang dan kebutuhan belajar'],
                ['title'=>'Sistem Otomatis','desc'=>'Sirkulasi dan pelaporan berjalan otomatis'],
                ['title'=>'Dukungan Teknis','desc'=>'Pendampingan operasional berkelanjutan']
            ];
            @endphp

            @foreach($features as $item)
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:-translate-y-1 transition">
                <h4 class="font-bold text-[#1F3A5F] mb-2">
                    {{ $item['title'] }}
                </h4>
                <p class="text-gray-600 text-sm">
                    {{ $item['desc'] }}
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>


<section class="bg-white py-28">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20">
            <h2 class="text-4xl font-extrabold text-[#1F3A5F] mb-4">
                Literasi Digital untuk Semua
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Platform perpustakaan yang dapat disesuaikan
                untuk berbagai kebutuhan dan skala institusi.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-12">

            @foreach([
                'Perpustakaan Sekolah',
                'Smart Library',
                'Perpustakaan Komunitas'
            ] as $produk)

            <div class="bg-[#F7F8FA] rounded-3xl overflow-hidden shadow-xl">
                <img src="{{ asset('images/library-'.$loop->index.'.jpg') }}"
                     class="w-full h-64 object-cover">

                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold mb-4 text-[#1F3A5F]">
                        {{ $produk }}
                    </h3>
                    <a href="#"
                       class="inline-block bg-[#1F3A5F] text-white px-8 py-3 rounded-xl font-semibold">
                        Lihat Detail
                    </a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

{{-- DAMPAK --}}
<section class="bg-[var(--surface)] py-28">
  <div class="max-w-6xl mx-auto px-6 text-center">

    <h2 class="text-4xl font-bold text-[var(--primary)] mb-6">
      Dampak Nyata bagi Pembelajaran
    </h2>

    <p class="text-[var(--text-secondary)] max-w-3xl mx-auto mb-16">
      Perpustakaan sebagai fondasi budaya literasi sekolah.
    </p>

    <div class="grid md:grid-cols-3 gap-12">
      @foreach([
        ['Minat Baca','Akses mudah mendorong kebiasaan membaca.'],
        ['Kualitas Belajar','Sumber terpercaya meningkatkan pemahaman.'],
        ['Kemandirian','Siswa terbiasa mencari informasi mandiri.']
      ] as $item)
      <div>
        <h3 class="text-xl font-bold mt-4 text-[var(--primary)]">{{ $item[0] }}</h3>
        <p class="text-[var(--text-secondary)] mt-2">{{ $item[1] }}</p>
      </div>
      @endforeach
    </div>

  </div>
</section>

@endsection
