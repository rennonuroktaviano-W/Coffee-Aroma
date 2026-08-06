{{-- ========================================== --}}
{{-- OUR STORY PAGE                             --}}
{{-- Premium brand narrative with scroll reveals --}}
{{-- ========================================== --}}

<div id="our-story-page" class="absolute inset-0 z-30 opacity-0 pointer-events-none"
    style="transform: perspective(1200px) rotateY(90deg) scale(0.92); transform-origin: center left; backface-visibility: hidden;">

    {{-- Dark chocolate background with ambient glow --}}
    <div class="absolute inset-0 bg-[#1F150C] overflow-hidden">
        {{-- Top ambient glow --}}
        <div
            class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-[#C89B6D]/[0.04] rounded-full blur-[120px] pointer-events-none">
        </div>
        {{-- Bottom ambient glow --}}
        <div
            class="absolute -bottom-32 left-1/4 w-[500px] h-[400px] bg-[#C89B6D]/[0.03] rounded-full blur-[100px] pointer-events-none">
        </div>
    </div>

    {{-- Scrollable Content Container --}}
    <div id="our-story-scroll" class="relative w-full h-full overflow-y-auto overflow-x-hidden">

        {{-- Decorative top line --}}
        <div class="sticky top-0 z-20 h-[1px] bg-gradient-to-r from-transparent via-[#C89B6D]/25 to-transparent"></div>

        {{-- Main Content --}}
        <div class="min-h-full flex flex-col items-center justify-center px-6 md:px-12 py-24 md:py-32">
            <div class="max-w-4xl mx-auto text-center">

                {{-- ========================================== --}}
                {{-- OUR STORY                                  --}}
                {{-- ========================================== --}}

                {{-- Badge --}}
                <div class="reveal-item flex items-center justify-center gap-4 mb-10 md:mb-14">
                    <span class="w-10 md:w-16 h-[1px] bg-gradient-to-r from-transparent to-[#C89B6D]/30"></span>
                    <span
                        class="text-[10px] md:text-[11px] font-semibold text-[#C89B6D] uppercase tracking-[0.4em] font-body">Since
                        2019</span>
                    <span class="w-10 md:w-16 h-[1px] bg-gradient-to-l from-transparent to-[#C89B6D]/30"></span>
                </div>

                {{-- Title --}}
                <h1
                    class="reveal-item font-display text-5xl md:text-7xl lg:text-[88px] text-white leading-[1.05] font-medium mb-8 md:mb-12 tracking-tight">
                    Our <em class="italic text-[#C89B6D] font-normal">Story</em>
                </h1>

                {{-- Story Paragraph --}}
                <div class="reveal-item max-w-2xl mx-auto mb-20 md:mb-28">
                    <p class="text-[15px] md:text-[17px] text-white/55 leading-[1.9] font-light font-body">
                        Founded in 2019, Aroma & Alchemy was born from a simple belief: coffee has the power to
                        transform ordinary moments into meaningful rituals. Inspired by the timeless art of alchemy, we
                        carefully select premium beans from trusted origins and craft every cup with precision,
                        patience, and passion. More than just a coffee shop, Aroma & Alchemy is a place where
                        conversations begin, ideas grow, and memories are brewed—one cup at a time.
                    </p>
                </div>

                {{-- ========================================== --}}
                {{-- STATISTICS                                 --}}
                {{-- ========================================== --}}
                <div
                    class="reveal-item grid grid-cols-2 md:grid-cols-4 gap-10 md:gap-8 max-w-3xl mx-auto mb-20 md:mb-28">

                    {{-- Stat 1 --}}
                    <div class="stat-item group text-center">
                        <div class="relative inline-flex items-baseline mb-4">
                            <span
                                class="stat-number font-display text-4xl md:text-[52px] text-[#C89B6D] font-medium tracking-tight"
                                data-target="5">0</span>
                            <span class="font-display text-2xl md:text-3xl text-[#C89B6D]/70 font-light ml-0.5">+</span>
                        </div>
                        <div
                            class="h-[1px] w-6 bg-[#C89B6D]/20 mx-auto mb-3 group-hover:w-10 group-hover:bg-[#C89B6D]/40 transition-all duration-500 ease-out">
                        </div>
                        <div class="text-[10px] text-white/35 uppercase tracking-[0.25em] font-body font-medium">Years
                            of Craft</div>
                    </div>

                    {{-- Stat 2 --}}
                    <div class="stat-item group text-center">
                        <div class="relative inline-flex items-baseline mb-4">
                            <span
                                class="stat-number font-display text-4xl md:text-[52px] text-[#C89B6D] font-medium tracking-tight"
                                data-target="12">0</span>
                        </div>
                        <div
                            class="h-[1px] w-6 bg-[#C89B6D]/20 mx-auto mb-3 group-hover:w-10 group-hover:bg-[#C89B6D]/40 transition-all duration-500 ease-out">
                        </div>
                        <div class="text-[10px] text-white/35 uppercase tracking-[0.25em] font-body font-medium">Coffee
                            Origins</div>
                    </div>

                    {{-- Stat 3 --}}
                    <div class="stat-item group text-center">
                        <div class="relative inline-flex items-baseline mb-4">
                            <span
                                class="stat-number font-display text-4xl md:text-[52px] text-[#C89B6D] font-medium tracking-tight"
                                data-target="50">0</span>
                            <span
                                class="font-display text-2xl md:text-3xl text-[#C89B6D]/70 font-light ml-0.5">K+</span>
                        </div>
                        <div
                            class="h-[1px] w-6 bg-[#C89B6D]/20 mx-auto mb-3 group-hover:w-10 group-hover:bg-[#C89B6D]/40 transition-all duration-500 ease-out">
                        </div>
                        <div class="text-[10px] text-white/35 uppercase tracking-[0.25em] font-body font-medium">Cups
                            Served</div>
                    </div>

                    {{-- Stat 4 --}}
                    <div class="stat-item group text-center">
                        <div class="relative inline-flex items-baseline mb-4">
                            <span
                                class="stat-number font-display text-4xl md:text-[52px] text-[#C89B6D] font-medium tracking-tight"
                                data-target="98">0</span>
                            <span class="font-display text-2xl md:text-3xl text-[#C89B6D]/70 font-light ml-0.5">%</span>
                        </div>
                        <div
                            class="h-[1px] w-6 bg-[#C89B6D]/20 mx-auto mb-3 group-hover:w-10 group-hover:bg-[#C89B6D]/40 transition-all duration-500 ease-out">
                        </div>
                        <div class="text-[10px] text-white/35 uppercase tracking-[0.25em] font-body font-medium">
                            Customer Satisfaction</div>
                    </div>
                </div>

                {{-- ========================================== --}}
                {{-- FEATURE CARDS                              --}}
                {{-- ========================================== --}}
                <div
                    class="reveal-item grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-6 max-w-4xl mx-auto mb-20 md:mb-24">

                    {{-- Card 1: Premium Beans --}}
                    <div
                        class="feature-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                        <!-- Hover glow -->
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        </div>

                        <div class="relative">
                            <div
                                class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] group-hover:border-[#C89B6D]/25 transition-all duration-500">
                                <span class="material-symbols-outlined text-[#C89B6D] text-[22px]">grain</span>
                            </div>

                            <h3 class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                Premium Beans</h3>
                            <p class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light">
                                Ethically sourced from world-class coffee farms.
                            </p>
                        </div>
                    </div>

                    {{-- Card 2: Artisan Roasting --}}
                    <div
                        class="feature-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        </div>

                        <div class="relative">
                            <div
                                class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] group-hover:border-[#C89B6D]/25 transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-[#C89B6D] text-[22px]">local_fire_department</span>
                            </div>

                            <h3 class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                Artisan Roasting</h3>
                            <p class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light">
                                Roasted in small batches for exceptional consistency.
                            </p>
                        </div>
                    </div>

                    {{-- Card 3: Meaningful Experience --}}
                    <div
                        class="feature-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                        </div>

                        <div class="relative">
                            <div
                                class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] group-hover:border-[#C89B6D]/25 transition-all duration-500">
                                <span class="material-symbols-outlined text-[#C89B6D] text-[22px]">favorite</span>
                            </div>

                            <h3 class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                Meaningful Experience</h3>
                            <p class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light">
                                Every visit is designed to create comfort, connection, and lasting memories.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Decorative bottom line --}}
                <div class="h-[1px] bg-gradient-to-r from-transparent via-white/5 to-transparent mt-auto"></div>
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- ANIMATIONS & INTERACTIONS                  --}}
        {{-- ========================================== --}}
        <style>
        /* ---- Active State: Managed by JS 3D Transition ---- */
        #our-story-page.active {
            opacity: 1 !important;
            pointer-events: auto !important;
        }

        /* ---- Scroll Reveal Base ---- */
        .reveal-item {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.9s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal-item.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* ---- Stagger delays for statistics ---- */
        .reveal-item .stat-item:nth-child(1) {
            transition-delay: 0ms;
        }

        .reveal-item .stat-item:nth-child(2) {
            transition-delay: 120ms;
        }

        .reveal-item .stat-item:nth-child(3) {
            transition-delay: 240ms;
        }

        .reveal-item .stat-item:nth-child(4) {
            transition-delay: 360ms;
        }

        /* ---- Stagger delays for feature cards ---- */
        .reveal-item .feature-card:nth-child(1) {
            transition-delay: 0ms;
        }

        .reveal-item .feature-card:nth-child(2) {
            transition-delay: 150ms;
        }

        .reveal-item .feature-card:nth-child(3) {
            transition-delay: 300ms;
        }

        /* ---- Stat Number Tabular ---- */
        .stat-number {
            font-variant-numeric: tabular-nums;
        }

        /* ---- Reduced Motion ---- */
        @media (prefers-reduced-motion: reduce) {
            .reveal-item {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
        </style>

        <script>
        (function() {
            const page = document.getElementById('our-story-page');
            const scrollContainer = document.getElementById('our-story-scroll');

            // ---- Scroll Reveal Observer ----
            const revealItems = page.querySelectorAll('.reveal-item');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            });

            revealItems.forEach(item => revealObserver.observe(item));

            // Force reveal visible items when page activated
            page.addEventListener('pageactivated', () => {
                setTimeout(() => {
                    revealItems.forEach(item => {
                        const rect = item.getBoundingClientRect();
                        if (rect.top < window.innerHeight && rect.bottom > 0) {
                            item.classList.add('revealed');
                        }
                    });
                }, 300);
            });

            // ---- Animated Stat Counters ----
            const statNumbers = page.querySelectorAll('.stat-number');
            let countersAnimated = false;

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !countersAnimated) {
                        countersAnimated = true;
                        animateCounters();
                    }
                });
            }, {
                threshold: 0.4
            });

            const statsGrid = page.querySelector('.stat-item')?.parentElement;
            if (statsGrid) counterObserver.observe(statsGrid);

            function animateCounters() {
                statNumbers.forEach((counter, index) => {
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const duration = 1800;
                    const startTime = performance.now();
                    const delay = index * 150;

                    setTimeout(() => {
                        function updateCounter(currentTime) {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            const easeOut = 1 - Math.pow(1 - progress, 3);
                            const current = Math.floor(easeOut * target);
                            counter.textContent = current;
                            if (progress < 1) {
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.textContent = target;
                            }
                        }
                        requestAnimationFrame(updateCounter);
                    }, delay);
                });
            }

            // ---- Parallax Ambient Glow ----
            const glows = page.querySelectorAll('.blur-\\[120px\\], .blur-\\[100px\\]');
            if (scrollContainer) {
                scrollContainer.addEventListener('scroll', () => {
                    const scrollY = scrollContainer.scrollTop;
                    glows.forEach((glow, index) => {
                        const speed = index === 0 ? 0.3 : 0.15;
                        glow.style.transform = `translateY(${scrollY * speed}px)`;
                    });
                }, {
                    passive: true
                });
            }
        })();
        </script>
    </div>
</div>