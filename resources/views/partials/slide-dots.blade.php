{{-- DOTS INDICATOR (Di Atas Navbar) --}}
<div class="slide-dots-wrapper transition-opacity duration-500">
    <div class="flex items-center gap-1.5">
        <!-- Slide 1: Caramel -->
        <button onclick="goToSlide(0)" id="dot-0"
            class="slide-dot dot-caramel group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
            aria-label="Slide 1">
            <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
            <span
                class="dot-label text-[8px] font-semibold text-white/0 uppercase tracking-[0.1em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0">Caramel</span>
        </button>

        <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

        <!-- Slide 2: Matcha -->
        <button onclick="goToSlide(1)" id="dot-1"
            class="slide-dot dot-matcha group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
            aria-label="Slide 2">
            <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
            <span
                class="dot-label text-[8px] font-semibold text-white/0 uppercase tracking-[0.1em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0">Matcha</span>
        </button>

        <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

        <!-- Slide 3: Americano -->
        <button onclick="goToSlide(2)" id="dot-2"
            class="slide-dot dot-americano group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
            aria-label="Slide 3">
            <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
            <span
                class="dot-label text-[8px] font-semibold text-white/0 uppercase tracking-[0.1em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0">Americano</span>
        </button>

        <span class="w-[1px] h-3 bg-white/10 rounded-full"></span>

        <!-- Slide 4: Cookies & Cream -->
        <button onclick="goToSlide(3)" id="dot-3"
            class="slide-dot dot-cookies group relative flex items-center gap-1.5 px-3 py-1.5 rounded-full transition-all duration-500 cursor-pointer"
            aria-label="Slide 4">
            <span class="dot-circle w-1.5 h-1.5 rounded-full bg-white/40 transition-all duration-500"></span>
            <span
                class="dot-label text-[8px] font-semibold text-white/0 uppercase tracking-[0.1em] transition-all duration-500 whitespace-nowrap overflow-hidden max-w-0">Cookies
                & Cream</span>
        </button>
    </div>
</div>

{{-- Dots Styles --}}
<style>
/* ===== BASE SLIDE DOT ===== */
.slide-dot {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
}

.slide-dot:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.15);
}

/* Label expand on hover & active */
.slide-dot:hover .dot-label,
.slide-dot.active .dot-label {
    max-width: 100px;
    color: rgba(255, 255, 255, 0.7);
}

/* ===== CARAMEL (Warm Brown) ===== */
.slide-dot.dot-caramel.active {
    background: rgba(212, 165, 116, 0.15);
    border-color: rgba(212, 165, 116, 0.35);
    box-shadow: 0 0 16px rgba(212, 165, 116, 0.25);
}

.slide-dot.dot-caramel.active .dot-circle {
    background: #d4a574;
    box-shadow: 0 0 8px rgba(212, 165, 116, 0.8);
    transform: scale(1.2);
}

.slide-dot.dot-caramel:hover .dot-label,
.slide-dot.dot-caramel.active .dot-label {
    color: rgba(212, 165, 116, 0.9);
}

/* ===== MATCHA (Jade Green) ===== */
.slide-dot.dot-matcha.active {
    background: rgba(123, 174, 127, 0.15);
    border-color: rgba(123, 174, 127, 0.35);
    box-shadow: 0 0 16px rgba(123, 174, 127, 0.25);
}

.slide-dot.dot-matcha.active .dot-circle {
    background: #7bae7f;
    box-shadow: 0 0 8px rgba(123, 174, 127, 0.8);
    transform: scale(1.2);
}

.slide-dot.dot-matcha:hover .dot-label,
.slide-dot.dot-matcha.active .dot-label {
    color: rgba(123, 174, 127, 0.9);
}

/* ===== AMERICANO (Coffee Amber) ===== */
.slide-dot.dot-americano.active {
    background: rgba(198, 142, 95, 0.15);
    border-color: rgba(198, 142, 95, 0.35);
    box-shadow: 0 0 16px rgba(198, 142, 95, 0.25);
}

.slide-dot.dot-americano.active .dot-circle {
    background: #c68e5f;
    box-shadow: 0 0 8px rgba(198, 142, 95, 0.8);
    transform: scale(1.2);
}

.slide-dot.dot-americano:hover .dot-label,
.slide-dot.dot-americano.active .dot-label {
    color: rgba(198, 142, 95, 0.9);
}

/* ===== COOKIES & CREAM (Oreo Blue) ===== */
.slide-dot.dot-cookies.active {
    background: rgba(59, 130, 246, 0.15);
    border-color: rgba(59, 130, 246, 0.35);
    box-shadow: 0 0 16px rgba(59, 130, 246, 0.25);
}

.slide-dot.dot-cookies.active .dot-circle {
    background: #3b82f6;
    box-shadow: 0 0 8px rgba(59, 130, 246, 0.8);
    transform: scale(1.2);
}

.slide-dot.dot-cookies:hover .dot-label,
.slide-dot.dot-cookies.active .dot-label {
    color: rgba(147, 187, 252, 0.9);
}
</style>