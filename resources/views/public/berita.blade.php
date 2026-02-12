@extends('layouts.app')
@section('title', 'Berita Perpustakaan')

@section('content')

{{-- HERO BERITA --}}
<section class="relative h-[55vh] flex items-center justify-center text-center">
    <img src="{{ asset('images/Oranye Cokelat dan Putih Ilustrasi Pendidikan Poster (1).png') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-[var(--primary)]/80"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold text-[var(--primary)] mb-4">
            Berita & Literasi Sekolah
        </h1>
        <p class="text-[var(--primary)] font-semibold">
            Informasi kegiatan, tips membaca, dan update koleksi perpustakaan
            untuk siswa, guru, dan orang tua.
        </p>
    </div>
</section>

{{-- KATEGORI TAB --}}
<section class="py-16 bg-[var(--bg-main)]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-wrap justify-center gap-4 mb-14">
      @foreach(['Pengumuman','Kegiatan Sekolah','Tips Membaca','Resensi Buku'] as $tab)
        <button
          class="px-6 py-3 rounded-full font-semibold
                 bg-white shadow
                 hover:bg-[var(--primary)]
                 hover:text-white transition">
          {{ $tab }}
        </button>
      @endforeach
    </div>

    {{-- FEATURED POST --}}
    <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
      <img src="{{ asset('images/featured.jpg') }}"
           class="rounded-3xl shadow-lg">

      <div>
        <span class="inline-block bg-yellow-100 text-yellow-700
                     px-4 py-1 rounded-full text-sm font-semibold mb-4">
          Pilihan Pustakawan
        </span>

        <h2 class="text-3xl font-bold text-[var(--primary)] mb-4">
          Gerakan Duta Literasi Sekolah
        </h2>

        <p class="text-[var(--text-secondary)] mb-6">
          Kegiatan literasi yang melibatkan siswa terpilih
          untuk menjadi teladan membaca dan menulis di sekolah.
        </p>

        <div class="flex items-center gap-6 text-sm text-slate-500">
          <span>📖 3 menit membaca</span>
          <span>📅 12 Januari 2026</span>
        </div>
      </div>
    </div>

    {{-- GRID BERITA --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @for($i=1; $i<=6; $i++)
      <article class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
        <img src="{{ asset('images/berita'.$i.'.jpg') }}"
             class="h-52 w-full object-cover">

        <div class="p-6">
          <span class="text-xs font-semibold text-[var(--primary)]">
            Tips Membaca
          </span>

          <h3 class="font-bold text-lg mt-2 mb-3">
            5 Cara Fokus Membaca di Rumah
          </h3>

          <p class="text-sm text-[var(--text-secondary)] mb-4">
            Tips sederhana agar anak lebih fokus dan nyaman
            saat membaca di rumah.
          </p>

          <div class="flex justify-between items-center text-sm text-slate-500">
            <span>⏱ 2 menit</span>

            <div class="flex gap-3">
              <a href="#" class="w-9 h-9 flex items-center justify-center
                                rounded-full bg-green-100 text-green-700">
                WA
              </a>
              <a href="#" class="w-9 h-9 flex items-center justify-center
                                rounded-full bg-slate-100">
                ⧉
              </a>
            </div>
          </div>
        </div>
      </article>
      @endfor
    </div>

  </div>
</section>

{{-- NEWSLETTER --}}
<section class="py-24 bg-[var(--bg-soft)]">
  <div class="max-w-4xl mx-auto px-6 text-center bg-white
              rounded-3xl shadow-xl p-12">

    <h3 class="text-2xl font-bold text-[var(--primary)] mb-3">
      Update Literasi untuk Orang Tua & Guru
    </h3>

    <p class="text-[var(--text-secondary)] mb-8">
      Dapatkan informasi kegiatan, koleksi baru,
      dan tips membaca langsung ke email Anda.
    </p>

    <form class="flex flex-col md:flex-row gap-4">
      <input type="email"
             placeholder="Email Anda"
             class="flex-1 px-6 py-4 rounded-full border
                    focus:ring-2 focus:ring-[var(--primary)] outline-none">
      <button class="px-8 py-4 rounded-full font-bold text-white
                     bg-[var(--primary)] hover:scale-105 transition">
        Daftar
      </button>
    </form>

  </div>
</section>

@endsection
