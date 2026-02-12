@extends('layouts.app')

@section('title', 'Profil SDN Balas Klumprik')

@section('content')
<div class="max-w-6xl mx-auto p-4">
    <!-- Hero Profil -->
    <div class="relative w-full h-64 md:h-96 mb-6">
        <img src="{{ asset('images/Oranye Cokelat dan Putih Ilustrasi Pendidikan Poster (1).png') }}" class="w-full h-full object-cover rounded-lg shadow" alt="Profil SDN Balas Klumprik">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center rounded-lg">
            <h1 class="text-3xl md:text-5xl text-white font-bold">Profil Perpustakaan SDN Balas Klumprik</h1>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 text-center reveal">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[#1F3A5F] mb-6">
            Tentang Perpustakaan
        </h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Perpustakaan SDN Balas Klumprik merupakan pusat sumber belajar
            yang berperan penting dalam mendukung proses pendidikan,
            pengembangan literasi, dan pembentukan karakter peserta didik.
            Perpustakaan ini dirancang sebagai ruang yang ramah, aktif,
            dan relevan dengan kebutuhan pembelajaran masa kini.
        </p>
    </div>
</div>

{{-- PROFIL PENDIRI YAYASAN --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <span class="text-blue-600 uppercase tracking-widest text-sm">
                Tim Pengelola
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#1F3A5F]">
                Pengelola & Pengembang Literasi
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Perpustakaan dikelola oleh tenaga pendidik dan pustakawan
                yang memiliki komitmen dalam membangun budaya baca dan
                mendukung pembelajaran aktif di sekolah.
            </p>
        </div>

        {{-- Grid Founder --}}
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">

            @foreach ([
                ['nama'=>'Nama Pengelola','jabatan'=>'Kepala Perpustakaan','foto'=>'founder1.jpg','bio'=>'Mengelola dan mengembangkan layanan perpustakaan sekolah.'],
                ['nama'=>'Nama Guru','jabatan'=>'Koordinator Literasi','foto'=>'founder2.jpg','bio'=>'Mengintegrasikan literasi dalam kegiatan pembelajaran.'],
                ['nama'=>'Nama Staf','jabatan'=>'Pustakawan','foto'=>'founder3.jpg','bio'=>'Mengelola koleksi dan layanan peminjaman buku.'],
                ['nama'=>'Nama Staf','jabatan'=>'Administrasi','foto'=>'founder4.jpg','bio'=>'Mengelola data dan administrasi perpustakaan.'],
                ['nama'=>'Nama Pendamping','jabatan'=>'Relawan Literasi','foto'=>'founder5.jpg','bio'=>'Mendukung kegiatan literasi dan pojok baca.'],
            ] as $founder)

            <div class="text-center reveal">
                <img
                    src="{{ asset('images/founder/' . $founder['foto']) }}"
                    alt="{{ $founder['nama'] }}"
                    class="w-40 h-40 mx-auto rounded-full object-cover shadow-lg mb-6"
                >

                <h4 class="text-lg font-semibold text-gray-900">
                    {{ $founder['nama'] }}
                </h4>

                <p class="text-blue-600 text-sm font-medium mb-3">
                    {{ $founder['jabatan'] }}
                </p>

                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ $founder['bio'] }}
                </p>
            </div>

            @endforeach

        </div>

    </div>
</section>

<!-- FOTO SEKOLAH & INFORMASI SEKOLAH -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

        <!-- FOTO SEKOLAH -->
        <div class="reveal">
            <img 
                src="{{ asset('images/Sekolahh.jpg') }}" 
                alt="Gedung SDN Balas Lumprik"
                class="w-full h-[470px] object-cover rounded-xl shadow-lg"
            >
        </div>

        <!-- INFORMASI SEKOLAH -->
        <div class="bg-white rounded-xl shadow-lg p-8 reveal h-[470px] overflow-auto">
            <h2 class="text-3xl font-bold mb-6 text-blue-800"> Informasi Perpustakaan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
                <p><strong>Nama Sekolah:</strong><br>{{ $profil['nama'] }}</p>
                <p><strong>Status:</strong><br>Negeri</p>
                <p><strong>Akreditasi:</strong><br>
                    <span class="inline-block bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        A (Unggul)
                    </span>
                </p>
                <p><strong>NPSN:</strong><br>20512345</p>
                <p><strong>Tanggal Pendirian:</strong><br>12 Juli 1985</p>
                <p><strong>Kepala Sekolah:</strong><br>Nama Kepala Sekolah, S.Pd</p>
                <p><strong>Alamat Sekolah:</strong><br>{{ $profil['alamat'] }}</p>
                <p><strong>Jam Layanan:</strong><br>07.00 – 14.00 WIB</p>
                <p><strong>Telepon / Email:</strong><br>{{ $profil['telepon'] }} / {{ $profil['email'] }}</p>
                <p><strong>Website Resmi:</strong><br>
                    <a href="https://sdnbalaslumprik.sch.id" target="_blank" class="text-blue-700 hover:underline">
                        sdnbalaslumprik.sch.id
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#0F172A] text-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 reveal">

        <div>
            <h2 class="text-3xl font-bold mb-4">Visi Sekolah</h2>
            <p class="leading-relaxed text-lg">
                Menjadi pusat literasi sekolah yang aktif, inovatif,
                dan mendukung pembelajaran sepanjang hayat.
            </p>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-4">Misi Perpustakaan</h2>
            <ul class="list-disc list-inside space-y-3 text-lg">
                <li>Meningkatkan minat baca peserta didik</li>
                <li>Menyediakan koleksi yang relevan dan berkualitas</li>
                <li>Mendukung pembelajaran berbasis literasi</li>
                <li>Mengembangkan layanan perpustakaan digital</li>
            </ul>
        </div>

    </div>
</section>

<!-- SEJARAH SEKOLAH -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 reveal">
            <h2 class="text-3xl font-bold mb-6 text-gray-900 text-center">Sejarah Singkat Perpustakaan</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Yayasan ini berawal dari kepedulian terhadap kebutuhan
                pendidikan masyarakat di wilayah Kedamean dan sekitarnya.
                Sejak tahun 1985, yayasan secara konsisten mendukung
                penyelenggaraan pendidikan dasar yang berkualitas,
                berorientasi pada pembentukan karakter dan nilai kebangsaan.
            <p class="text-gray-600 leading-relaxed">
                Seiring perkembangan zaman, yayasan terus beradaptasi
                dengan tantangan pendidikan modern melalui peningkatan
                mutu pengelolaan, penguatan sumber daya manusia, serta
                kolaborasi dengan berbagai pihak. Perjalanan ini menjadi
                fondasi kuat dalam membangun kepercayaan publik dan
                keberlanjutan lembaga pendidikan yang dikelola.
        </div>
    </div>
</section>


<!-- INFORMASI YAYASAN -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 reveal h-full">
            <h2 class="text-2xl font-bold mb-4 text-gray-900">Informasi Yayasan</h2>

            <p class="mb-3">
                <strong>Nama Yayasan:</strong><br>
                Yayasan Pendidikan Contoh Bangsa
            </p>

            <p class="mb-3">
                <strong>Alamat Yayasan:</strong><br>
                Jl. Pendidikan No. 45, Kecamatan Contoh,<br>
                Kabupaten Gresik, Jawa Timur
            </p>

            <p class="text-sm text-gray-600">
                *Informasi yayasan ini digunakan sebagai badan pendukung penyelenggaraan kegiatan pendidikan.
            </p>
        </div>
    </div>
</section>


<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-extrabold mb-12 text-[#1F3A5F] reveal">
            Nilai Inti Perpustakaan
        </h2>

        <div class="grid md:grid-cols-5 gap-10">
            @foreach ([
                ['title' => 'Literasi', 'icon' => 'book-open'],
                ['title' => 'Inklusif', 'icon' => 'users'],
                ['title' => 'Inovatif', 'icon' => 'light-bulb'],
                ['title' => 'Kolaboratif', 'icon' => 'handshake'],
                ['title' => 'Edukatif', 'icon' => 'academic-cap'],
            ] as $item)
            <div class="reveal flex flex-col items-center">
                <div class="w-14 h-14 mb-4 flex items-center justify-center rounded-xl bg-slate-100 text-[#1F3A5F]">
                    @switch($item['icon'])
                        @case('book-open')
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" d="M12 6l-2 4h4l-2 4"/></svg>
                        @break

                        @case('users')
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" d="M17 20h5v-2a4 4 0 00-4-4h-1"/></svg>
                        @break

                        @case('light-bulb')
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" d="M12 3a6 6 0 00-3 11v2h6v-2a6 6 0 00-3-11z"/></svg>
                        @break

                        @case('handshake')
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" d="M4 12l4-4 4 4"/></svg>
                        @break

                        @case('academic-cap')
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-width="1.8" d="M12 3l10 5-10 5-10-5z"/></svg>
                        @break
                    @endswitch
                </div>

                <h4 class="font-semibold text-slate-700">
                    {{ $item['title'] }}
                </h4>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-extrabold text-center mb-12 text-[#1F3A5F] reveal">
            Fasilitas Pendukung Pembelajaran
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach ([
                ['title' => 'Ruang Baca Perpustakaan', 'img' => 'fasilitas-perpustakaan.jpg'],
                ['title' => 'Area Literasi & Diskusi', 'img' => 'fasilitas-diskusi.jpg'],
                ['title' => 'Sudut Baca Anak', 'img' => 'fasilitas-anak.jpg'],
            ] as $fasilitas)

            <div class="reveal group rounded-xl overflow-hidden shadow-lg bg-white">
                <div class="relative h-56">
                    <img
                        src="{{ asset('images/fasilitas/' . $fasilitas['img']) }}"
                        alt="{{ $fasilitas['title'] }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-black/30"></div>
                </div>

                <div class="p-5">
                    <h4 class="font-semibold text-slate-800">
                        {{ $fasilitas['title'] }}
                    </h4>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>


{{-- VIDEO PROFIL YAYASAN --}}
<section class="py-24 bg-gray-50 reveal">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- TEKS NARASI --}}
            <div>
                <span class="text-blue-600 uppercase tracking-widest text-sm">
                    Profil & Dokumentasi Yayasan
                </span>

                <h2 class="text-4xl font-light mt-4 mb-6 text-gray-900">
                    Komitmen Nyata dalam
                    <span class="text-blue-600">Membangun Pendidikan</span>
                </h2>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Video ini merekam perjalanan, aktivitas, serta keterlibatan
                    yayasan dalam mendukung dunia pendidikan melalui kolaborasi,
                    pengabdian, dan pembangunan ekosistem belajar yang berkelanjutan.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Dokumentasi ini menjadi bagian dari transparansi dan rekam jejak
                    yayasan dalam menjalankan perannya bagi masyarakat dan generasi
                    masa depan.
                </p>
            </div>

            {{-- VIDEO RESPONSIVE --}}
            <div class="relative w-full overflow-hidden rounded-2xl shadow-xl aspect-video">
                <iframe
                    class="absolute inset-0 w-full h-full"
                    src="https://www.youtube.com/embed/htGL3D1GbSs?rel=0"
                    title="Profil Yayasan"
                    frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>

        </div>

    </div>
</section>
@endsection
