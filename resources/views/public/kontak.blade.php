@extends('layouts.app')
@section('title', 'Hubungi Perpustakaan')

@section('content')

<section class="py-24 bg-[var(--bg-main)]">
  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-16">
      <h1 class="text-4xl font-extrabold text-[var(--primary)] mb-4">
        Hubungi Perpustakaan
      </h1>
      <p class="text-[var(--text-secondary)]">
        Kami siap membantu siswa, guru, dan orang tua.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-16">

      {{-- INFORMASI --}}
      <div class="space-y-8">

        <div class="bg-white rounded-3xl shadow p-8">
          <h3 class="font-bold text-xl mb-4">📍 Lokasi</h3>
          <p>
            SDN Balas Klumprik<br>
            Gedung B, Lantai 2 – Perpustakaan
          </p>
        </div>

        <div class="bg-white rounded-3xl shadow p-8">
          <h3 class="font-bold text-xl mb-4">🕒 Jam Operasional</h3>
          <p>
            Senin – Jumat<br>
            07.30 – 14.00 WIB
          </p>
        </div>

        <div class="flex gap-4">
          <a href="#"
             class="flex-1 bg-green-100 text-green-700
                    rounded-2xl p-6 text-center font-bold">
            WhatsApp
          </a>
          <a href="#"
             class="flex-1 bg-blue-100 text-blue-700
                    rounded-2xl p-6 text-center font-bold">
            Email
          </a>
        </div>

        {{-- MAP --}}
        <div class="rounded-3xl overflow-hidden shadow">
          <iframe
            src="https://www.google.com/maps?q=SDN+Balas+Klumprik&output=embed"
            class="w-full h-64 border-0"
            loading="lazy">
          </iframe>
        </div>

      </div>

      {{-- FORM --}}
      <div class="bg-white rounded-3xl shadow-xl p-10">

        <h3 class="text-2xl font-bold text-[var(--primary)] mb-6">
          Kirim Pesan
        </h3>

        <form class="space-y-5">
          <input type="text" placeholder="Nama"
                 class="w-full px-6 py-4 rounded-full border
                        focus:ring-2 focus:ring-[var(--primary)] outline-none">

          <input type="email" placeholder="Email"
                 class="w-full px-6 py-4 rounded-full border
                        focus:ring-2 focus:ring-[var(--primary)] outline-none">

          <select
            class="w-full px-6 py-4 rounded-full border
                   focus:ring-2 focus:ring-[var(--primary)] outline-none">
            <option>Tanya Buku</option>
            <option>Saran & Kritik</option>
            <option>Lupa Akun</option>
          </select>

          <textarea rows="4" placeholder="Pesan Anda"
                    class="w-full px-6 py-4 rounded-3xl border
                           focus:ring-2 focus:ring-[var(--primary)] outline-none">
          </textarea>

          <button
            class="w-full bg-[var(--primary)] text-white
                   py-4 rounded-full font-bold
                   shadow-lg hover:translate-y-[-2px] transition">
            Kirim Pesan
          </button>
        </form>

      </div>

    </div>

  </div>
</section>

@endsection
