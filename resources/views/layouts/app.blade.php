<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Perpustakaan')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Scroll Reveal --}}
    <style>
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            will-change: opacity, transform;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const navTitle = document.getElementById('nav-title');
    const navSubtitle = document.getElementById('nav-subtitle');
    const navLinks = document.querySelectorAll('#nav-menu a');
    const mobileBtn = document.getElementById('mobile-menu-button');

    function transparentState() {
        navbar.className =
            'fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent';

        navTitle.className =
            'text-[#1F3A5F] font-extrabold text-lg transition-colors duration-300';

        navSubtitle.className =
            'text-slate-500 text-xs tracking-wide transition-colors duration-300';

        navLinks.forEach(link => {
            link.className =
                'hover:text-slate-900 transition font-semibold text-slate-700';
        });

        mobileBtn.classList.remove('text-white');
        mobileBtn.classList.add('text-[#1F3A5F]');
    }

    function solidNavyState() {
        navbar.className =
            'fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-[#0F172A] shadow-md';

        navTitle.className =
            'text-white font-extrabold text-lg transition-colors duration-300';

        navSubtitle.className =
            'text-slate-300 text-xs tracking-wide transition-colors duration-300';

        navLinks.forEach(link => {
            link.className =
                'hover:text-yellow-400 transition font-semibold text-white';
        });

        mobileBtn.classList.remove('text-[#1F3A5F]');
        mobileBtn.classList.add('text-white');
    }

    function onScroll() {
        if (window.scrollY > 60) {
            solidNavyState();
        } else {
            transparentState();
        }
    }

    window.addEventListener('scroll', onScroll);
    onScroll(); // set initial state
});
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
function heroSlider(imageList = []) {
    return {
        images: imageList,
        currentIndex: 0,
        init() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            }, 5000); // ganti setiap 5 detik
        }
    }
}
</script>
</head>

{{-- hero section --}}
@include('partials.hero')
<script>
function heroSlider() {
    return {
        current: 0,
        slides: [
            '/images/1.png',
            '/images/2.png',
            '/images/3.png',
        ],
        init() {
            setInterval(() => {
                this.current = (this.current + 1) % this.slides.length
            }, 4000)
        }
    }
}
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const userText = "Bu, di perpustakaan ini bukunya banyak nggak?";
  const libraryText = "Banyak, dan dipilih khusus supaya anak belajar dengan nyaman.";

  const userEl = document.getElementById('typingUser');
  const libEl = document.getElementById('typingLibrary');
  const stats = document.getElementById('stats');
  const signature = document.getElementById('signature');

  function typeText(el, text, speed = 40) {
    return new Promise(resolve => {
      let i = 0;
      const typing = setInterval(() => {
        el.textContent += text.charAt(i);
        i++;
        if (i >= text.length) {
          clearInterval(typing);
          resolve();
        }
      }, speed);
    });
  }

  async function startChat() {
    await typeText(userEl, userText, 70);
    await new Promise(r => setTimeout(r, 500));
    await typeText(libEl, libraryText, 80);

    // tampilkan statistik
    stats.classList.remove('opacity-0');
    signature.classList.remove('opacity-0');
  }

  startChat();
});
</script>


<body class="m-0 p-0 font-sans text-gray-800">

        {{-- NAVBAR --}}
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent"> 
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        {{-- LOGO --}}
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" class="h-10" alt="Logo">
            <div class="leading-tight">
                <p id="nav-title"
                class="text-[#1F3A5F] font-extrabold text-lg transition-colors duration-300">
                    Perpustakaan SDN Balas Klumprik
                </p>
                
                <p id="nav-subtitle"
                    class="mt-0.5 text-[11px] uppercase font-medium text-slate-500 tracking-wider">
                    Perpustakaan Sekolah
                </p>
            </div>
        </div>

        {{-- DESKTOP MENU --}}
        <div id="nav-menu"
            class="hidden md:flex gap-8 font-semibold text-slate-700 transition-colors duration-300">
            
            <a href="/" class="hover:text-slate-900 transition">Beranda</a>
            <a href="{{ url('/profil') }}" class="hover:text-slate-900 transition">Profil</a>
            <a href="{{ url('/visi-misi') }}" class="hover:text-slate-900 transition">Layanan</a>
            <a href="{{ route('ppdb.index') }}" class="hover:text-slate-900 transition">Koleksi</a>
            <a href="{{ url('/berita') }}" class="hover:text-slate-900 transition">Berita</a>
            <a href="{{ url('/kontak') }}" class="hover:text-slate-900 transition">Kontak</a>

        </div>

        {{-- MOBILE BUTTON --}}
        <button id="mobile-menu-button" class="md:hidden text-[#1F3A5F]">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
            </svg>
        </button>
    </div>

        {{-- MOBILE MENU --}}
        <div id="mobile-menu"
            class="hidden md:hidden bg-[#1F3A5F] text-white border-t border-white/10">
            <a href="/" class="block px-6 py-4 hover:bg-white/10">Beranda</a>
            <a href="{{ url('/profil') }}" class="block px-6 py-4 hover:bg-white/10">Profil</a>
            <a href="{{ url('/visi-misi') }}" class="block px-6 py-4 hover:bg-white/10">Layanan</a>
            <a href="{{ route('ppdb.index') }}" class="block px-6 py-4 hover:bg-white/10">Koleksi</a>
            <a href="{{ url('/berita') }}" class="block px-6 py-4 hover:bg-white/10">Berita</a>
            <a href="{{ url('/kontak') }}" class="block px-6 py-4 hover:bg-white/10">Kontak</a>
        </div>
    </nav>


    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-bold text-white mb-2">SDN Balas Klumprik</h4>
                <p>Alamat sekolah dan informasi kontak resmi.</p>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-2">Menu</h4>
                <ul class="space-y-1">
                    <li><a href="/" class="hover:text-white">Beranda</a></li>
                    <li><a href="{{ url('/profil') }}" class="hover:text-white">Profil</a></li>
                    <li><a href="{{ url('/visi-misi') }}" class="hover:text-white">Visi & Misi</a></li>
                    <li><a href="{{ route('ppdb.index') }}" class="hover:text-white">PPDB</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold text-white mb-2">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-white">Facebook</a>
                    <a href="#" class="hover:text-white">Instagram</a>
                </div>
            </div>
        </div>

        <div class="text-center text-sm text-gray-500 mt-6">
            © {{ date('Y') }} SDN Balas Klumprik. Semua hak cipta dilindungi.
        </div>
    </footer>

    {{-- SCRIPTS --}}
    <script>
        // Mobile menu
        document.getElementById('mobile-menu-button')
            .addEventListener('click', () =>
                document.getElementById('mobile-menu').classList.toggle('hidden')
            );

        // Scroll reveal (single source of truth)
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal')
                .forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>
