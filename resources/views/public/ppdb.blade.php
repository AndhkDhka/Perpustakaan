@extends('layouts.app')

@section('title', 'PPDB Sekolah')

@section('content')

@php
$books = [
  [
    'judul' => 'Si Kancil dan Buaya',
    'penulis' => 'Cerita Rakyat',
    'status' => 'tersedia',
    'cover' => asset('images/buku1.jpg')
  ],
  [
    'judul' => 'Belajar IPA Dasar',
    'penulis' => 'Tim Kurikulum',
    'status' => 'dipinjam',
    'cover' => asset('images/buku2.jpg')
  ]
];
@endphp

@php
$books = [
  [
    'judul' => 'Si Kancil dan Buaya',
    'penulis' => 'Cerita Rakyat',
    'kategori' => 'Fiksi',
    'status' => 'tersedia',
    'popular' => true,
    'cover' => asset('images/buku/kancil.jpg')
  ],
  [
    'judul' => 'Belajar IPA Dasar',
    'penulis' => 'Tim Kurikulum',
    'kategori' => 'Sains',
    'status' => 'dipinjam',
    'popular' => true,
    'cover' => asset('images/buku/ipa.jpg')
  ],
  [
    'judul' => 'Sejarah Nusantara',
    'penulis' => 'Kemendikbud',
    'kategori' => 'Sejarah',
    'status' => 'tersedia',
    'popular' => true,
    'cover' => asset('images/buku/sejarah.jpg')
  ],
  [
    'judul' => 'Komik Sains Anak',
    'penulis' => 'Edu Comic',
    'kategori' => 'Komik',
    'status' => 'tersedia',
    'popular' => false,
    'cover' => asset('images/buku/komik.jpg')
  ],
];
@endphp

@php
$staffPicks = [
  [
    'judul' => 'Dongeng Nusantara Pilihan',
    'penulis' => 'Balai Pustaka',
    'alasan' => 'Bahasa sederhana dan kaya nilai karakter.',
    'cover' => asset('images/buku/dongeng.jpg')
  ],
  [
    'judul' => 'Sains Itu Menyenangkan',
    'penulis' => 'Anak Cerdas',
    'alasan' => 'Mengenalkan konsep IPA lewat eksperimen ringan.',
    'cover' => asset('images/buku/sains-anak.jpg')
  ],
  [
    'judul' => 'Aku Bisa Membaca',
    'penulis' => 'Tim Literasi',
    'alasan' => 'Cocok untuk siswa awal dengan ilustrasi kuat.',
    'cover' => asset('images/buku/membaca.jpg')
  ],
];
@endphp



<section class="relative h-[60vh] flex items-center">
    {{-- Background Image --}}
    <img
        src="{{ asset('images/Poster Edukasi Membaca Buku Ilustratif Biru dan Hijau (1).png') }}"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Koleksi Perpustakaan"
    >

    {{-- Overlay Navy Sistem --}}
    <div class="absolute inset-0 bg-[var(--primary)]/85"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-white">
        <div class="max-w-3xl">

            <span class="inline-block mb-4 text-sm tracking-widest uppercase text-white/70">
                Koleksi Perpustakaan Sekolah
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Akses Pengetahuan
                <br>
                <span class="text-yellow-400">
                    Untuk Belajar yang Terarah
                </span>
            </h1>

            <p class="text-lg text-white/90 max-w-2xl">
                Menyediakan koleksi buku cetak dan digital yang disusun
                berdasarkan jenjang, minat baca, dan kebutuhan pembelajaran siswa.
            </p>

        </div>
    </div>
</section>


<section class="bg-[var(--bg-main)] pt-28 pb-20">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h1 class="text-4xl md:text-5xl font-bold text-[var(--primary)] mb-4">
      Koleksi Perpustakaan
    </h1>

    <p class="text-[var(--text-secondary)] max-w-2xl mx-auto">
      Temukan buku cetak dan digital berdasarkan minat, jenjang,
      dan kebutuhan belajar siswa.
    </p>

  </div>
</section>

<section class="-mt-10 relative z-10">
  <div class="max-w-4xl mx-auto px-6">
    <div class="bg-white rounded-2xl shadow-xl p-6 flex flex-col md:flex-row gap-4">

      <input
        type="text"
        placeholder="Cari judul, penulis, atau ISBN…"
        class="flex-1 border border-slate-200 rounded-xl px-5 py-3
               focus:ring-2 focus:ring-[var(--primary)] outline-none"
      >

      <button class="bg-[var(--primary)] text-white px-6 py-3 rounded-xl font-semibold">
        Cari Buku
      </button>

    </div>
  </div>
</section>

<section class="py-20">
  <div class="max-w-7xl mx-auto px-6">

    <div class="flex flex-wrap gap-4 justify-center">

      @foreach (['Fiksi','Sains','Sejarah','Komik','Buku Pelajaran'] as $cat)
        <button
          class="px-6 py-3 rounded-full border
                 border-[var(--border)]
                 hover:bg-[var(--primary)]
                 hover:text-white transition"
        >
          {{ $cat }}
        </button>
      @endforeach

    </div>

  </div>
</section>

<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
@foreach ($books as $book)
  <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">

    <img src="{{ $book['cover'] }}"
         class="aspect-[3/4] w-full object-cover">

    <div class="p-5">
      <h4 class="font-bold text-[var(--primary)] mb-1">
        {{ $book['judul'] }}
      </h4>

      <p class="text-sm text-[var(--text-secondary)] mb-3">
        {{ $book['penulis'] }}
      </p>

      <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full
        {{ $book['status'] === 'tersedia'
            ? 'bg-green-100 text-green-700'
            : 'bg-red-100 text-red-700' }}">
        {{ ucfirst($book['status']) }}
      </span>

      <div class="mt-3 text-yellow-400 text-sm">
        ★★★★☆
      </div>
    </div>

  </div>
@endforeach
</div>


<section class="py-28 bg-[var(--bg-soft)]">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold text-[var(--primary)] mb-4">
      Buku Terpopuler
    </h2>
    <p class="text-[var(--text-secondary)] mb-14">
      Paling sering dipinjam dan diminati siswa
    </p>

    <div class="grid md:grid-cols-3 gap-10 justify-center max-w-5xl mx-auto">
      @foreach (collect($books)->where('popular', true)->take(3) as $book)
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-1 transition">
          <img src="{{ $book['cover'] }}"
               class="aspect-[3/4] w-full object-cover">

          <div class="p-6 text-left">
            <h4 class="font-bold text-lg text-[var(--primary)]">
              {{ $book['judul'] }}
            </h4>
            <p class="text-sm text-[var(--text-secondary)] mb-3">
              {{ $book['penulis'] }}
            </p>

            <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full
              {{ $book['status'] === 'tersedia'
                ? 'bg-green-100 text-green-700'
                : 'bg-red-100 text-red-700' }}">
              {{ ucfirst($book['status']) }}
            </span>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <div class="mb-14">
      <h2 class="text-3xl font-bold text-[var(--primary)] mb-2">
        Rekomendasi Pustakawan
      </h2>
      <p class="text-[var(--text-secondary)] max-w-2xl">
        Dipilih berdasarkan kualitas konten, tingkat keterbacaan,
        dan kesesuaian usia belajar siswa.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
      @foreach ($staffPicks as $book)
        <div class="group bg-[var(--surface)] rounded-3xl p-6 shadow
                    hover:shadow-xl transition">

          <div class="flex gap-5">
            {{-- Cover --}}
            <img src="{{ $book['cover'] }}"
                 alt="{{ $book['judul'] }}"
                 class="w-24 h-36 object-cover rounded-xl shadow">

            {{-- Info --}}
            <div class="flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[var(--primary)] leading-snug">
                  {{ $book['judul'] }}
                </h4>
                <p class="text-sm text-[var(--text-secondary)] mb-3">
                  {{ $book['penulis'] }}
                </p>

                {{-- Alasan --}}
                <p class="text-sm text-slate-600 italic leading-relaxed">
                  “{{ $book['alasan'] }}”
                </p>
              </div>

              {{-- Badge --}}
              <span class="inline-block mt-4 text-xs font-semibold
                           bg-[var(--primary)]/10
                           text-[var(--primary)]
                           px-3 py-1 rounded-full">
                Pilihan Pustakawan
              </span>
            </div>
          </div>

        </div>
      @endforeach
    </div>

  </div>
</section>


@endsection
