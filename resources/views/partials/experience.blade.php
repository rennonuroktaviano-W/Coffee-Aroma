{{-- ========================================== --}}
{{-- EXPERIENCE PAGE                            --}}
{{-- Immersive journey through our world        --}}
{{-- ========================================== --}}

<div id="experience-page" class="absolute inset-0 z-30 opacity-0 pointer-events-none"
    style="transform: perspective(1200px) rotateY(90deg) scale(0.92); transform-origin: center left; backface-visibility: hidden;">

    {{-- Dark chocolate background with ambient glow --}}
    <div class="absolute inset-0 bg-[#1F150C] overflow-hidden">
        <div
            class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-[#C89B6D]/[0.04] rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute -bottom-32 left-1/4 w-[500px] h-[400px] bg-[#C89B6D]/[0.03] rounded-full blur-[100px] pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 -right-32 w-[400px] h-[500px] bg-[#C89B6D]/[0.03] rounded-full blur-[100px] pointer-events-none">
        </div>
    </div>

    {{-- Scrollable Content Container --}}
    <div id="experience-scroll" class="relative w-full h-full overflow-y-auto overflow-x-hidden">

        {{-- Decorative top line --}}
        <div class="sticky top-0 z-20 h-[1px] bg-gradient-to-r from-transparent via-[#C89B6D]/25 to-transparent"></div>

        {{-- Main Content --}}
        <div class="min-h-full flex flex-col items-center justify-center px-6 md:px-12 py-24 md:py-32">
            <div class="max-w-5xl mx-auto">

                {{-- HERO SECTION --}}
                <div class="text-center mb-32 md:mb-40">
                    <div class="reveal-item flex items-center justify-center gap-4 mb-10 md:mb-14">
                        <span class="w-10 md:w-16 h-[1px] bg-gradient-to-r from-transparent to-[#C89B6D]/30"></span>
                        <span
                            class="text-[10px] md:text-[11px] font-semibold text-[#C89B6D] uppercase tracking-[0.4em] font-body">Immerse
                            Yourself</span>
                        <span class="w-10 md:w-16 h-[1px] bg-gradient-to-l from-transparent to-[#C89B6D]/30"></span>
                    </div>

                    <h1
                        class="reveal-item font-display text-5xl md:text-7xl lg:text-[88px] text-white leading-[1.05] font-medium mb-8 md:mb-12 tracking-tight">
                        The <em class="italic text-[#C89B6D] font-normal">Experience</em>
                    </h1>

                    <div class="reveal-item max-w-2xl mx-auto mb-16">
                        <p class="text-[15px] md:text-[17px] text-white/55 leading-[1.9] font-light font-body">
                            Step into a world where every detail is designed to awaken your senses. From the first aroma
                            to the final sip, we craft moments that linger long after you leave.
                        </p>
                    </div>

                    <div class="reveal-item flex flex-col items-center gap-2 opacity-50">
                        <span class="text-[10px] uppercase tracking-[0.3em] text-white/40 font-body">Scroll to
                            explore</span>
                        <div class="w-[1px] h-8 bg-gradient-to-b from-white/40 to-transparent animate-pulse"></div>
                    </div>
                </div>

                {{-- ATMOSPHERE SECTION --}}
                <div class="reveal-item grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center mb-32 md:mb-40">
                    <div class="order-2 md:order-1">
                        <span
                            class="text-[10px] font-semibold text-[#C89B6D] uppercase tracking-[0.4em] font-body mb-4 block">Ambiance</span>
                        <h2
                            class="font-display text-3xl md:text-4xl lg:text-5xl text-white font-medium mb-6 tracking-tight leading-tight">
                            A Space Designed <em class="italic text-[#C89B6D] font-normal">for Connection</em>
                        </h2>
                        <p class="text-[14px] md:text-[15px] text-white/50 leading-[1.9] font-body font-light mb-6">
                            Warm timber tones, soft golden lighting, and the gentle hum of conversation create an
                            environment where time slows down. Whether you seek solitude with a book or lively debate
                            with friends, our space adapts to your rhythm.
                        </p>
                        <p class="text-[14px] md:text-[15px] text-white/50 leading-[1.9] font-body font-light">
                            Every corner tells a story — from the hand-picked furniture to the curated playlist that
                            evolves throughout the day, matching the mood from morning focus to evening unwind.
                        </p>
                    </div>
                    <div class="order-1 md:order-2 relative group">
                        <div
                            class="absolute inset-0 bg-[#C89B6D]/10 rounded-2xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        </div>
                        <div
                            class="relative aspect-[4/5] rounded-2xl overflow-hidden border border-white/[0.06] bg-white/[0.02]">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="material-symbols-outlined text-[#C89B6D]/20 text-6xl">chair_alt</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#1F150C]/80 via-transparent to-transparent">
                            </div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span class="text-[10px] text-white/40 uppercase tracking-[0.25em] font-body">Interior
                                    Design</span>
                                <h3 class="font-display text-xl text-white mt-1">Warm & Intimate</h3>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- SIGNATURE MOMENTS --}}
                <div class="mb-32 md:mb-40">
                    <div class="text-center mb-16">
                        <span
                            class="reveal-item text-[10px] font-semibold text-[#C89B6D] uppercase tracking-[0.4em] font-body mb-4 block">What
                            We Offer</span>
                        <h2
                            class="reveal-item font-display text-3xl md:text-4xl lg:text-5xl text-white font-medium tracking-tight">
                            Signature <em class="italic text-[#C89B6D] font-normal">Moments</em>
                        </h2>
                    </div>

                    <div class="reveal-item grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-6">
                        <div
                            class="experience-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                            </div>
                            <div class="relative">
                                <div
                                    class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] transition-all duration-500">
                                    <span class="material-symbols-outlined text-[#C89B6D] text-[22px]">coffee</span>
                                </div>
                                <h3
                                    class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                    Coffee Tasting</h3>
                                <p
                                    class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light mb-4">
                                    Journey through single-origin flavors with our guided tasting sessions. Discover
                                    notes of citrus, chocolate, and florals in every cup.
                                </p>
                                <span
                                    class="inline-flex items-center gap-1 text-[11px] text-[#C89B6D]/70 uppercase tracking-wider font-semibold group-hover:text-[#C89B6D] transition-colors">
                                    Learn more <span
                                        class="material-symbols-outlined text-[14px] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                                </span>
                            </div>
                        </div>

                        <div
                            class="experience-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                            </div>
                            <div class="relative">
                                <div
                                    class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] transition-all duration-500">
                                    <span class="material-symbols-outlined text-[#C89B6D] text-[22px]">brush</span>
                                </div>
                                <h3
                                    class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                    Latte Art Session</h3>
                                <p
                                    class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light mb-4">
                                    Watch our baristas craft stunning rosettas and tulips, or try your hand at pouring
                                    under expert guidance.
                                </p>
                                <span
                                    class="inline-flex items-center gap-1 text-[11px] text-[#C89B6D]/70 uppercase tracking-wider font-semibold group-hover:text-[#C89B6D] transition-colors">
                                    Learn more <span
                                        class="material-symbols-outlined text-[14px] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                                </span>
                            </div>
                        </div>

                        <div
                            class="experience-card group relative p-8 md:p-10 rounded-2xl bg-white/[0.025] border border-white/[0.06] backdrop-blur-2xl transition-all duration-500 hover:bg-white/[0.05] hover:border-[#C89B6D]/15 hover:-translate-y-1.5 hover:shadow-[0_8px_40px_-12px_rgba(200,155,109,0.15)]">
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-b from-[#C89B6D]/[0.07] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                            </div>
                            <div class="relative">
                                <div
                                    class="w-11 h-11 rounded-xl bg-[#C89B6D]/[0.08] border border-[#C89B6D]/15 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#C89B6D]/[0.12] transition-all duration-500">
                                    <span
                                        class="material-symbols-outlined text-[#C89B6D] text-[22px]">self_improvement</span>
                                </div>
                                <h3
                                    class="font-display text-xl md:text-[22px] text-white font-medium mb-3 tracking-tight">
                                    Brewing Workshop</h3>
                                <p
                                    class="text-[13px] md:text-[14px] text-white/45 leading-relaxed font-body font-light mb-4">
                                    Master the art of V60, Chemex, and French press in our intimate brewing classes.
                                    Take the ritual home.
                                </p>
                                <span
                                    class="inline-flex items-center gap-1 text-[11px] text-[#C89B6D]/70 uppercase tracking-wider font-semibold group-hover:text-[#C89B6D] transition-colors">
                                    Learn more <span
                                        class="material-symbols-outlined text-[14px] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TESTIMONIALS --}}
                <div class="mb-32 md:mb-40">
                    <div class="text-center mb-16">
                        <span
                            class="reveal-item text-[10px] font-semibold text-[#C89B6D] uppercase tracking-[0.4em] font-body mb-4 block">Testimonials</span>
                        <h2
                            class="reveal-item font-display text-3xl md:text-4xl lg:text-5xl text-white font-medium tracking-tight">
                            Words from <em class="italic text-[#C89B6D] font-normal">Our Guests</em>
                        </h2>
                    </div>

                    <div class="reveal-item grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6 max-w-4xl mx-auto">
                        <div class="relative p-8 rounded-2xl bg-white/[0.02] border border-white/[0.06]">
                            <span class="material-symbols-outlined text-[#C89B6D]/20 text-4xl mb-4">format_quote</span>
                            <p
                                class="text-[14px] md:text-[15px] text-white/60 leading-[1.8] font-body font-light mb-6 italic">
                                "Aroma & Alchemy transformed my morning routine into a daily ritual I genuinely look
                                forward to. The attention to detail is unmatched."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#C89B6D]/20 flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-[#C89B6D]">DR</span>
                                </div>
                                <div>
                                    <div class="text-[12px] text-white font-medium font-body">Diana R.</div>
                                    <div class="text-[10px] text-white/30 font-body">Regular Guest</div>
                                </div>
                            </div>
                        </div>

                        <div class="relative p-8 rounded-2xl bg-white/[0.02] border border-white/[0.06]">
                            <span class="material-symbols-outlined text-[#C89B6D]/20 text-4xl mb-4">format_quote</span>
                            <p
                                class="text-[14px] md:text-[15px] text-white/60 leading-[1.8] font-body font-light mb-6 italic">
                                "The brewing workshop changed how I see coffee entirely. It's not just a drink here —
                                it's an art form, a science, and a community."
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#C89B6D]/20 flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-[#C89B6D]">MK</span>
                                </div>
                                <div>
                                    <div class="text-[12px] text-white font-medium font-body">Michael K.</div>
                                    <div class="text-[10px] text-white/30 font-body">Workshop Attendee</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VISIT CTA --}}
                <div
                    class="reveal-item text-center relative py-20 md:py-28 rounded-3xl bg-gradient-to-b from-white/[0.03] to-transparent border border-white/[0.06] overflow-hidden">
                    <div
                        class="absolute top-0 left-1/2 -translate-x-1/2 w-[300px] h-[200px] bg-[#C89B6D]/[0.05] rounded-full blur-[80px] pointer-events-none">
                    </div>

                    <div class="relative">
                        <h2
                            class="font-display text-3xl md:text-4xl lg:text-5xl text-white font-medium mb-6 tracking-tight">
                            Begin Your <em class="italic text-[#C89B6D] font-normal">Journey</em>
                        </h2>
                        <p
                            class="text-[14px] md:text-[15px] text-white/50 leading-[1.9] font-body font-light max-w-lg mx-auto mb-10">
                            Visit us today and discover why every cup tells a story. Your table is waiting.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <button
                                class="group px-8 py-3.5 rounded-full bg-[#C89B6D] text-[#1F150C] font-bold text-[11px] uppercase tracking-wider hover:bg-[#d4a87a] hover:scale-105 hover:shadow-[0_0_25px_rgba(200,155,109,0.3)] transition-all duration-300">
                                <span class="flex items-center gap-2">
                                    Find Location
                                    <span
                                        class="material-symbols-outlined text-[14px] group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                                </span>
                            </button>
                            <button
                                class="px-8 py-3.5 rounded-full border border-white/[0.12] text-white/70 font-bold text-[11px] uppercase tracking-wider hover:bg-white/[0.05] hover:text-white hover:border-white/[0.2] transition-all duration-300">
                                View Full Menu
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Footer line --}}
                <div class="h-[1px] bg-gradient-to-r from-transparent via-white/5 to-transparent mt-20"></div>
                <div class="text-center py-8">
                    <span class="text-[10px] text-white/20 uppercase tracking-[0.3em] font-body">Aroma & Alchemy ©
                        2024</span>
                </div>

            </div>
        </div>

        {{-- STYLES --}}
        <style>
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

        .reveal-item .experience-card:nth-child(1) {
            transition-delay: 0ms;
        }

        .reveal-item .experience-card:nth-child(2) {
            transition-delay: 150ms;
        }

        .reveal-item .experience-card:nth-child(3) {
            transition-delay: 300ms;
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal-item {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
        </style>

        {{-- SCRIPTS --}}
        <script>
        (function() {
            const page = document.getElementById('experience-page');
            const scrollContainer = document.getElementById('experience-scroll');

            // Scroll Reveal Observer
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

            // Parallax Ambient Glows
            const glows = page.querySelectorAll('.blur-\\[120px\\], .blur-\\[100px\\], .blur-\\[80px\\]');
            if (scrollContainer) {
                scrollContainer.addEventListener('scroll', () => {
                    const scrollY = scrollContainer.scrollTop;
                    glows.forEach((glow, index) => {
                        const speed = 0.15 + (index * 0.05);
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