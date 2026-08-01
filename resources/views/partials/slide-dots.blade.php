{{-- DOTS INDICATOR (Di Atas Navbar) --}}
<div class="flex items-center gap-1.5">
    <!-- Slide 1 Pill -->
    <button onclick="goToSlide(0)" id="dot-0"
        class="slide-dot group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
        aria-label="Slide 1">
        <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
        <span
            class="dot-label text-[9px] font-semibold text-white/0 uppercase tracking-[0.15em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0 group-hover:max-w-[60px] group-hover:text-white/50">Caramel</span>
    </button>

    <!-- Separator -->
    <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

    <!-- Slide 2 Pill -->
    <button onclick="goToSlide(1)" id="dot-1"
        class="slide-dot group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
        aria-label="Slide 2">
        <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
        <span
            class="dot-label text-[9px] font-semibold text-white/0 uppercase tracking-[0.15em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0 group-hover:max-w-[60px] group-hover:text-white/50">Matcha</span>
    </button>

    <!-- Separator -->
    <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

    <!-- Slide 3 Pill -->
    <button onclick="goToSlide(2)" id="dot-2"
        class="slide-dot group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
        aria-label="Slide 3">
        <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
        <span
            class="dot-label text-[9px] font-semibold text-white/0 uppercase tracking-[0.15em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0 group-hover:max-w-[60px] group-hover:text-white/50">Americano</span>
    </button>

    <!-- Separator -->
    <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

    <!-- Slide 4 Pill -->
    <button onclick="goToSlide(3)" id="dot-3"
        class="slide-dot group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
        aria-label="Slide 4">
        <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
        <span
            class="dot-label text-[9px] font-semibold text-white/0 uppercase tracking-[0.15em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0 group-hover:max-w-[60px] group-hover:text-white/50">Cookies
            & Cream</span>
    </button>
</div>

{{-- Dots Styles --}}
<style>
/* ===== SLIDE DOTS ===== */
.slide-dot {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
}

.slide-dot:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.15);
}

.slide-dot.active {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(255, 255, 255, 0.25);
    box-shadow: 0 0 12px rgba(255, 255, 255, 0.08);
}

.slide-dot.active .dot-circle {
    background: white;
    box-shadow: 0 0 6px rgba(255, 255, 255, 0.6);
    transform: scale(1.2);
}

.slide-dot.active .dot-label {
    max-width: 60px;
    color: rgba(255, 255, 255, 0.7);
}
</style>