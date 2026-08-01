<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aroma &amp; Alchemy</title>

    <!-- External Fonts & Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&family=Playfair+Display:wght@100..900&family=Source+Sans+3:wght@400;600&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    brand: {
                        primary: '#ffdad4',
                        'on-primary': '#271310',
                        'primary-container': '#3e2723',
                        surface: '#3e2723',
                        'on-surface': '#f4eceb',
                        'on-surface-variant': '#e8e1df',
                        background: '#3e2723',
                        outline: '#827472',
                    }
                },
                fontFamily: {
                    display: ['Playfair Display', 'serif'],
                    body: ['Manrope', 'sans-serif'],
                }
            }
        }
    }
    </script>
    <style>
    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<body class="bg-[#3e2723] text-white font-body antialiased relative h-screen w-screen overflow-hidden">

    <!-- HERO 1 ONLY -->
    <div class="h-full w-full">
        <x-hero1 />
    </div>

    <!-- ============================================ -->
    <!-- COMPACT BOTTOM NAVBAR -->
    <!-- ============================================ -->
    <div class="fixed bottom-3 left-1/2 -translate-x-1/2 z-[100] w-[92%] max-w-[720px]">

        <!-- Compact Floating Navbar -->
        <nav id="main-nav" class="w-full">
            <div class="nav-wrapper relative rounded-full overflow-hidden">
                <!-- Subtle top highlight line (no rotation) -->
                <div
                    class="nav-highlight absolute top-0 left-[10%] right-[10%] h-[1px] bg-white/20 opacity-0 transition-opacity duration-500">
                </div>

                <!-- Inner -->
                <div
                    class="nav-inner relative flex items-center justify-between px-4 py-2 rounded-full bg-white/[0.06] backdrop-blur-2xl border border-white/[0.1] transition-all duration-500">

                    <!-- LEFT: Logo -->
                    <a href="#" class="flex items-center gap-2.5 group shrink-0">
                        <div
                            class="w-7 h-7 rounded-lg bg-white/10 border border-white/20 flex items-center justify-center transition-all duration-300 group-hover:bg-white/20 group-hover:scale-105">
                            <span class="material-symbols-outlined text-base text-white/90">local_cafe</span>
                        </div>
                        <div class="hidden sm:flex flex-col leading-none">
                            <span class="font-display font-bold text-white text-[11px] tracking-wide">Aroma</span>
                            <span class="font-display font-bold text-white/40 text-[9px] tracking-[0.15em] uppercase">&
                                Alchemy</span>
                        </div>
                    </a>

                    <!-- CENTER: Menu Pill -->
                    <div
                        class="hidden md:flex items-center gap-0.5 bg-white/[0.04] rounded-full px-1.5 py-1 border border-white/[0.06]">
                        <a href="#"
                            class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                            <span>Kopi</span>
                        </a>
                        <a href="#"
                            class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                            <span>Tentang</span>
                        </a>
                        <a href="#"
                            class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                            <span>Kunjungi</span>
                        </a>
                        <a href="#"
                            class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                            <span>Menu</span>
                        </a>
                    </div>

                    <!-- RIGHT: Actions -->
                    <div class="flex items-center gap-1.5 shrink-0">
                        <button
                            class="w-8 h-8 rounded-full bg-white/[0.06] border border-white/[0.08] flex items-center justify-center text-white/50 hover:text-white hover:bg-white/12 hover:border-white/20 hover:scale-110 transition-all duration-300">
                            <span class="material-symbols-outlined text-[15px]">search</span>
                        </button>
                        <button
                            class="w-8 h-8 rounded-full bg-white/[0.06] border border-white/[0.08] flex items-center justify-center text-white/50 hover:text-white hover:bg-white/12 hover:border-white/20 hover:scale-110 transition-all duration-300">
                            <span class="material-symbols-outlined text-[15px]">location_on</span>
                        </button>
                        <button
                            class="hidden sm:flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white/90 text-[#3e2723] font-bold text-[10px] uppercase tracking-wider hover:bg-white hover:scale-105 hover:shadow-[0_0_15px_rgba(255,255,255,0.2)] transition-all duration-300 group ml-1">
                            <span>Pesan</span>
                            <span
                                class="material-symbols-outlined text-[13px] group-hover:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                        </button>
                        <button id="mobile-menu-btn"
                            class="md:hidden w-8 h-8 rounded-full bg-white/[0.06] border border-white/[0.08] flex items-center justify-center text-white/50 hover:text-white hover:bg-white/12 transition-all duration-300">
                            <span class="material-symbols-outlined text-[15px]" id="menu-icon">menu</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="md:hidden mt-2 rounded-2xl bg-white/[0.05] backdrop-blur-2xl border border-white/[0.08] overflow-hidden opacity-0 translate-y-[-8px] pointer-events-none transition-all duration-300">
                <div class="flex flex-col p-3 gap-0.5">
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                        <span class="material-symbols-outlined text-white/40 text-base">coffee</span>
                        <span class="font-semibold text-xs uppercase tracking-wider">Pilihan Kopi</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                        <span class="material-symbols-outlined text-white/40 text-base">info</span>
                        <span class="font-semibold text-xs uppercase tracking-wider">Tentang Kami</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                        <span class="material-symbols-outlined text-white/40 text-base">store</span>
                        <span class="font-semibold text-xs uppercase tracking-wider">Kunjungi</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                        <span class="material-symbols-outlined text-white/40 text-base">restaurant_menu</span>
                        <span class="font-semibold text-xs uppercase tracking-wider">Menu</span>
                    </a>
                    <div class="border-t border-white/10 my-1"></div>
                    <button
                        class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-xl bg-white/90 text-[#3e2723] font-bold text-xs uppercase tracking-wider hover:bg-white transition-all duration-300">
                        <span class="material-symbols-outlined text-sm">shopping_bag</span>
                        <span>Pesan Sekarang</span>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <style>
    /* ===== FIX MATERIAL SYMBOLS ===== */
    .material-symbols-outlined {
        font-family: 'Material Symbols Outlined', sans-serif !important;
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        font-style: normal !important;
        letter-spacing: normal !important;
        text-transform: none !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        white-space: nowrap !important;
        word-wrap: normal !important;
        direction: ltr !important;
        -webkit-font-feature-settings: 'liga' !important;
        -webkit-font-smoothing: antialiased !important;
        text-rendering: optimizeLegibility !important;
        line-height: 1 !important;
        vertical-align: middle !important;
        user-select: none !important;
    }

    /* ===== NAVBAR SUBTLE GLOW (NO ROTATION) ===== */
    .nav-wrapper:hover .nav-inner,
    .nav-wrapper.scrolled .nav-inner {
        background: rgba(255, 255, 255, 0.08);
        border-color: rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .nav-wrapper:hover .nav-highlight,
    .nav-wrapper.scrolled .nav-highlight {
        opacity: 1;
    }

    /* Active link */
    .nav-link.active {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    /* Mobile menu */
    #mobile-menu.open {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    /* Entrance */
    @keyframes nav-up {
        0% {
            opacity: 0;
            transform: translateX(-50%) translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }

    .fixed.bottom-3 {
        animation: nav-up 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    </style>

    <script>
    // ========== SCROLL EFFECT ==========
    const navWrapper = document.querySelector('.nav-wrapper');
    window.addEventListener('scroll', () => {
        navWrapper?.classList.toggle('scrolled', window.pageYOffset > 50);
    });

    // ========== MOBILE MENU ==========
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    let menuOpen = false;
    mobileMenuBtn?.addEventListener('click', () => {
        menuOpen = !menuOpen;
        mobileMenu.classList.toggle('open', menuOpen);
        menuIcon.textContent = menuOpen ? 'close' : 'menu';
        mobileMenuBtn.style.transform = menuOpen ? 'rotate(90deg)' : 'rotate(0deg)';
    });
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            menuOpen = false;
            mobileMenu.classList.remove('open');
            menuIcon.textContent = 'menu';
            mobileMenuBtn.style.transform = 'rotate(0deg)';
        });
    });

    // ========== ACTIVE LINK ==========
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
    </script>
</body>

</html>