<!-- SLIDER CONTAINER -->
<div id="hero-slider" class="flex w-[400vw] h-full transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]">

    <!-- Slide 1: Hero 1 (Warm Coffee) -->
    <div class="w-[100vw] h-full flex-shrink-0">
        <x-hero1 />
    </div>

    <!-- Slide 2: Hero 2 (Matcha Jade Green) -->
    <div class="w-[100vw] h-full flex-shrink-0">
        <x-hero2 />
    </div>

    <!-- Slide 3: Hero 3 (Tea / Earl Grey) -->
    <div class="w-[100vw] h-full flex-shrink-0">
        <x-hero3 />
    </div>

    <!-- Slide 4: Hero 4 (Chocolate / Mocha) -->
    <div class="w-[100vw] h-full flex-shrink-0">
        <x-hero4 />
    </div>

</div>



<!-- Slider Logic -->
<script>
// ========== SLIDER ==========
let currentSlide = 0;

function goToSlide(index) {
    const slider = document.getElementById('hero-slider');
    const dots = document.querySelectorAll('.slide-dot');
    if (index === currentSlide) return;
    currentSlide = index;
    slider.style.transform = `translateX(-${index * 25}%)`;
    dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
}

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('dot-0')?.classList.add('active');
});
</script>