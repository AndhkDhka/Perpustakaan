@extends('layouts.app')

@section('title', 'Unit Pendidikan Yayasan')

@section('content')

{{-- HERO SECTION --}}
{{-- HERO LAYANAN (EDITORIAL SPLIT) --}}
<section class="relative bg-[#0F2A44] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-14 items-center">

        {{-- TEXT --}}
        <div class="text-white reveal">
            <span class="inline-block mb-4 px-4 py-1 rounded-full 
                         bg-white/10 text-sm tracking-wide">
                Layanan Perpustakaan
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Akses Pengetahuan<br>
                <span class="text-[#F4B400]">Tanpa Batas</span>
            </h1>

            <p class="text-white/85 leading-relaxed max-w-xl mb-8">
                Perpustakaan SDN Balas Klumprik menyediakan layanan
                literasi fisik dan digital untuk mendukung pembelajaran,
                kemandirian, dan budaya baca peserta didik.
            </p>

            <div class="flex gap-4">
                <a href="{{ route('ppdb.index') }}"
                   class="bg-[#F4B400] text-[#0F2A44] font-semibold 
                          px-7 py-4 rounded-full hover:scale-105 transition">
                    Jelajahi Koleksi
                </a>

                <a href="#layanan"
                   class="border border-white/30 text-white
                          px-7 py-4 rounded-full hover:bg-white/10 transition">
                    Lihat Layanan
                </a>
            </div>
        </div>

        {{-- IMAGE --}}
        <div class="relative reveal">
            <div class="absolute -top-6 -left-6 w-full h-full 
                        border-2 border-[#F4B400]/40 rounded-3xl"></div>

            <img src="{{ asset('images/Poster Edukasi Membaca Buku Ilustratif Biru dan Hijau.png') }}"
                 alt="Layanan Perpustakaan"
                 class="relative z-10 rounded-3xl shadow-2xl
                        w-full h-[420px] object-cover">
        </div>

    </div>
</section>

{{-- RINGKASAN --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-[#1F3A5F] mb-6 reveal">
            Apa yang Kami Sediakan
        </h2>
        <p class="text-gray-600 max-w-3xl mx-auto reveal">
            Perpustakaan SDN Balas Klumprik dirancang sebagai pusat sumber belajar
            yang inklusif, nyaman, dan adaptif terhadap perkembangan teknologi.
        </p>
    </div>
</section>

{{-- LAYANAN UTAMA --}}
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-10">

            {{-- Digital --}}
            <div class="bg-white rounded-2xl p-8 shadow reveal">
                <div class="text-4xl mb-4 text-[#F4B400]">📚</div>
                <h3 class="text-xl font-semibold text-[#1F3A5F] mb-3">
                    Perpustakaan Digital
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Akses koleksi buku digital, materi pembelajaran,
                    dan referensi literasi secara daring
                    kapan saja dan di mana saja.
                </p>
            </div>

            {{-- Fisik --}}
            <div class="bg-white rounded-2xl p-8 shadow reveal">
                <div class="text-4xl mb-4 text-[#F4B400]">🏫</div>
                <h3 class="text-xl font-semibold text-[#1F3A5F] mb-3">
                    Layanan Perpustakaan Fisik
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Ruang baca nyaman, koleksi buku cetak terkurasi,
                    serta layanan peminjaman yang tertib dan ramah siswa.
                </p>
            </div>

            {{-- Pendampingan --}}
            <div class="bg-white rounded-2xl p-8 shadow reveal">
                <div class="text-4xl mb-4 text-[#F4B400]">👩‍🏫</div>
                <h3 class="text-xl font-semibold text-[#1F3A5F] mb-3">
                    Pendampingan Literasi
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Bimbingan membaca, pencarian informasi,
                    dan pengenalan budaya literasi
                    sesuai jenjang usia peserta didik.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- LAYANAN PERPUSTAKAAN --}}
<section id="layanan" class="py-28 bg-[#F8FAFC]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12">

            {{-- 1. SIRKULASI --}}
            <div class="bg-white rounded-2xl p-10 shadow-sm reveal">
                <h3 class="text-xl font-bold text-[#0F2A44] mb-4">
                    Layanan Sirkulasi
                </h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Layanan sirkulasi merupakan layanan inti perpustakaan
                    yang mengatur peminjaman, pengembalian, dan perpanjangan
                    koleksi pustaka secara tertib dan terdata.
                </p>
                <ul class="space-y-3 text-slate-700 text-sm">
                    <li>• Peminjaman buku melalui pustakawan sesuai ketentuan</li>
                    <li>• Pengembalian dan perpanjangan masa pinjam</li>
                    <li>• Informasi sanksi keterlambatan secara transparan</li>
                </ul>
            </div>

            {{-- 2. REFERENSI & DIGITAL --}}
            <div class="bg-white rounded-2xl p-10 shadow-sm reveal">
                <h3 class="text-xl font-bold text-[#0F2A44] mb-4">
                    Layanan Referensi & Literasi Digital
                </h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Layanan ini mendukung penguatan literasi informasi
                    melalui pemanfaatan sumber digital dan pendampingan
                    pencarian referensi yang relevan dan valid.
                </p>
                <ul class="space-y-3 text-slate-700 text-sm">
                    <li>• Akses e-book dan sumber digital (e-resources)</li>
                    <li>• Bimbingan literasi dan penggunaan katalog (OPAC)</li>
                    <li>• Layanan tanya pustakawan terkait referensi</li>
                </ul>
            </div>

            {{-- 3. FASILITAS --}}
            <div class="bg-white rounded-2xl p-10 shadow-sm reveal">
                <h3 class="text-xl font-bold text-[#0F2A44] mb-4">
                    Fasilitas & Ruang Belajar
                </h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Perpustakaan menyediakan lingkungan belajar yang nyaman,
                    aman, dan kondusif untuk mendukung aktivitas membaca
                    serta diskusi peserta didik.
                </p>
                <ul class="space-y-3 text-slate-700 text-sm">
                    <li>• Ruang baca dan area diskusi kelompok</li>
                    <li>• Akses Wi-Fi dan perangkat komputer</li>
                    <li>• Koleksi multimedia dan audio-visual</li>
                </ul>
            </div>

            {{-- 4. KEANGGOTAAN --}}
            <div class="bg-white rounded-2xl p-10 shadow-sm reveal">
                <h3 class="text-xl font-bold text-[#0F2A44] mb-4">
                    Layanan Keanggotaan
                </h3>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Layanan keanggotaan diberikan kepada seluruh warga sekolah
                    sebagai akses resmi terhadap seluruh layanan dan koleksi
                    perpustakaan.
                </p>
                <ul class="space-y-3 text-slate-700 text-sm">
                    <li>• Pendaftaran anggota perpustakaan</li>
                    <li>• Kartu anggota perpustakaan</li>
                    <li>• Pendataan dan administrasi keanggotaan</li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- QUOTE + STATISTIK CHAT --}}
<section class="py-24 bg-[#0F172A] overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <div class="space-y-10 max-w-3xl mx-auto">

      <!-- Bubble 1 -->
      <div class="flex justify-start">
        <div class="chat-bubble user-bubble">
          <p id="typingUser" class="text-white"></p>
        </div>
      </div>

      <!-- Bubble 2 -->
      <div class="flex justify-end">
        <div class="chat-bubble library-bubble relative">
          <p id="typingLibrary" class="font-medium text-[#0F172A]"></p>

          <!-- Statistik -->
          <div id="stats"
               class="grid grid-cols-2 gap-4 mt-6 text-sm text-slate-600 opacity-0 transition-opacity duration-700">
            <div>
              <span class="block text-2xl font-bold text-[#0F172A]">2.000+</span>
              Koleksi Buku Fisik
            </div>
            <div>
              <span class="block text-2xl font-bold text-[#0F172A]">500+</span>
              E-Book & Digital
            </div>
          </div>

          <span id="signature"
                class="block mt-4 text-xs text-slate-500 font-semibold opacity-0 transition-opacity duration-700">
            Perpustakaan SDN Balas Klumprik
          </span>

          <div class="bubble-tail"></div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- PROGRAM LITERASI --}}
<section class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1F3A5F] mb-4">
                Program Literasi & Edukasi
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Program pendukung untuk menumbuhkan minat baca,
                berpikir kritis, dan kecakapan belajar mandiri.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-14 items-center">

            <img src="{{ asset('images/legalcycy.jpg') }}"
                 class="rounded-3xl shadow-xl w-full h-[360px] object-cover reveal">

            <div class="reveal">
                <h3 class="text-2xl font-bold text-[#1F3A5F] mb-5">
                    Gerakan Literasi Sekolah
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li>• Kegiatan membaca rutin terjadwal</li>
                    <li>• Pojok baca tematik di lingkungan sekolah</li>
                    <li>• Literasi informasi & etika digital</li>
                    <li>• Kolaborasi guru & pustakawan</li>
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- CTA --}}
<section class="py-24 bg-[#0F2A44] text-white text-center">
    <div class="max-w-4xl mx-auto px-6 reveal">
        <h2 class="text-3xl font-bold mb-4">
            Jelajahi Perpustakaan Kami
        </h2>
        <p class="text-white/80 mb-8">
            Akses koleksi, manfaatkan layanan,
            dan tumbuhkan budaya literasi bersama.
        </p>

        <a href="{{ route('ppdb.index') }}"
           class="inline-block bg-[#F4B400] text-[#0F2A44] font-semibold px-8 py-4 rounded-full hover:scale-105 transition">
            Lihat Koleksi Buku
        </a>
    </div>
</section>


@endsection