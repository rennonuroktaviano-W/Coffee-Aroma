{{-- Compact Floating Navbar --}}
<nav id="main-nav" class="w-full">
    <div class="nav-wrapper relative rounded-full overflow-hidden">
        <div
            class="nav-highlight absolute top-0 left-[10%] right-[10%] h-[1px] bg-white/20 opacity-0 transition-opacity duration-500">
        </div>

        <div
            class="nav-inner relative flex items-center justify-between px-4 py-2 rounded-full bg-white/[0.06] backdrop-blur-2xl border border-white/[0.1] transition-all duration-500">

            <!-- LEFT: Logo -->
            <a href="#" onclick="goHome(); return false;" class="flex items-center gap-2.5 group shrink-0">
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
                <a href="#" onclick="goHome(); return false;"
                    class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                    <span>Home</span>
                </a>
                <a href="#" onclick="openOurStory(); return false;"
                    class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                    <span>Our Story</span>
                </a>
                <a href="#" onclick="openExperience(); return false;"
                    class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                    <span>Experience</span>
                </a>
                <a href="#" onclick="openMenu(); return false;"
                    class="nav-link relative px-3.5 py-1.5 text-[11px] font-semibold text-white/60 uppercase tracking-wider transition-all duration-300 rounded-full hover:text-white hover:bg-white/[0.08]">
                    <span>Menu</span>
                </a>
            </div>

            <!-- RIGHT: Actions -->
            <div class="flex items-center gap-1.5 shrink-0">
                <!-- Location GPS Icon Trigger -->
                <button onclick="openLocation(); return false;" title="Locations"
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

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
        class="md:hidden mt-2 rounded-2xl bg-white/[0.05] backdrop-blur-2xl border border-white/[0.08] overflow-hidden opacity-0 translate-y-[-8px] pointer-events-none transition-all duration-300">
        <div class="flex flex-col p-3 gap-0.5">
            <a href="#" onclick="goHome(); return false;"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                <span class="material-symbols-outlined text-white/40 text-base">coffee</span>
                <span class="font-semibold text-xs uppercase tracking-wider">Home</span>
            </a>
            <a href="#" onclick="openOurStory(); return false;"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                <span class="material-symbols-outlined text-white/40 text-base">info</span>
                <span class="font-semibold text-xs uppercase tracking-wider">Our Story</span>
            </a>
            <a href="#" onclick="openExperience(); return false;"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                <span class="material-symbols-outlined text-white/40 text-base">star</span>
                <span class="font-semibold text-xs uppercase tracking-wider">Experience</span>
            </a>
            <a href="#" onclick="openMenu(); return false;"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                <span class="material-symbols-outlined text-white/40 text-base">restaurant_menu</span>
                <span class="font-semibold text-xs uppercase tracking-wider">Menu</span>
            </a>
            <a href="#" onclick="openLocation(); return false;"
                class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all duration-300">
                <span class="material-symbols-outlined text-white/40 text-base">store</span>
                <span class="font-semibold text-xs uppercase tracking-wider">Kunjungi / Lokasi</span>
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

{{-- Navbar Styles --}}
<style>
/* ===== NAVBAR ===== */
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
</style>

{{-- Navbar Scripts --}}
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
window.setActiveLink = function(target) {
    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
    if (target) {
        target.classList.add('active');
    }
}

// Set Home as active on initial load
document.addEventListener('DOMContentLoaded', () => {
    const homeLink = document.querySelector('.nav-link');
    if (homeLink) {
        window.setActiveLink(homeLink);
    }
});

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        window.setActiveLink(this);
    });
});
</script>