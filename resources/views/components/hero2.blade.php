<!-- =========================================================================
     HERO 2: JADE RITUAL
     ========================================================================= -->
<div class="relative w-full h-full bg-[#0f1f16] overflow-hidden flex items-center justify-center">

    <!-- Ambient Background Glow -->
    <div class="absolute inset-0 pointer-events-none"
        style="background: radial-gradient(circle at 50% 50%, rgba(107,155,110,0.06) 0%, transparent 60%);">
    </div>

    <!-- Floating Particles (Matcha Tone) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(107,155,110,0.3)] top-[18%] left-[12%] animate-[float_6s_ease-in-out_infinite]">
        </div>
        <div
            class="absolute w-1.5 h-1.5 rounded-full bg-[rgba(107,155,110,0.25)] top-[28%] left-[82%] animate-[float_8s_ease-in-out_infinite_1s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(107,155,110,0.2)] top-[72%] left-[18%] animate-[float_7s_ease-in-out_infinite_2s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(107,155,110,0.25)] top-[62%] left-[78%] animate-[float_9s_ease-in-out_infinite_3s]">
        </div>
        <div
            class="absolute w-0.5 h-0.5 rounded-full bg-[rgba(107,155,110,0.3)] top-[12%] left-[48%] animate-[float_5s_ease-in-out_infinite_0.5s]">
        </div>
    </div>

    <!-- Main Content Grid Container -->
    <div
        class="relative z-10 w-full max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

        <!-- Column 1: Left Text Content -->
        <div class="text-left space-y-6">
            <!-- Sub-header Badge -->
            <div class="flex items-center gap-3">
                <span class="w-8 h-[1px] bg-[#7bae7f]"></span>
                <span class="text-[11px] font-semibold text-[#7bae7f] uppercase tracking-[0.3em]">The Ritual</span>
            </div>

            <!-- Title -->
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-[#e8f0e9] leading-[1.05] font-bold">
                Jade <em class="italic text-[#a8d5aa]">Ritual</em>
            </h1>

            <!-- Description & Tagline -->
            <p class="text-[15px] text-[#b8c9b9] leading-relaxed max-w-sm font-light">
                A fusion of ancient tradition and modern alchemy. Experience the depth of hand-picked tea leaves and
                velvety microfoam.
            </p>
            <p class="text-[13px] text-[#7a8f7b] italic leading-relaxed max-w-sm">
                Crafted for those who understand that perfection lies in the balance of temperature, texture, and
                timing.
            </p>

            <!-- Call To Action Button -->
            <a href="#"
                class="inline-block mt-4 px-8 py-4 bg-[#7bae7f] text-[#0f1f16] text-[11px] font-bold uppercase tracking-[0.2em] rounded-sm
                      transition-all duration-500 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(107,155,110,0.3),0_0_40px_rgba(107,155,110,0.1)] hover:bg-[#a8d5aa]">
                Experience the Fusion
            </a>
        </div>

        <!-- Column 2: Center Graphic (Glowing Orb + Matcha SVG) -->
        <div class="relative flex items-center justify-center py-8">

            <!-- Glowing Orb Effects -->
            <div class="absolute w-[280px] h-[280px] md:w-[320px] md:h-[320px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,248,240,0.95) 0%, rgba(255,240,230,0.6) 25%, rgba(255,225,210,0.25) 50%, rgba(255,210,190,0.1) 70%, transparent 80%); filter: blur(18px); animation: glowPulse 3s ease-in-out infinite;">
            </div>
            <div class="absolute w-[340px] h-[340px] md:w-[380px] md:h-[380px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,245,235,0.2) 0%, transparent 65%); animation: glowPulse 3s ease-in-out infinite reverse;">
            </div>
            <div class="absolute w-[180px] h-[180px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,248,240,0.3) 40%, transparent 70%); filter: blur(10px); animation: innerGlow 3s ease-in-out infinite;">
            </div>

            <!-- Steam Effect Overlay -->
            <svg class="absolute -top-4 left-1/2 -translate-x-1/2 w-20 h-16 pointer-events-none z-20"
                viewBox="0 0 80 60">
                <path d="M20,50 Q25,35 20,20" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite;" />
                <path d="M40,55 Q45,30 40,15" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite 1.3s;" />
                <path d="M60,50 Q55,35 60,20" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite 2.6s;" />
            </svg>

            <!-- Vector Illustration: Matcha Top View -->
            <div class="relative z-10 w-[220px] h-[220px] md:w-[260px] md:h-[260px]"
                style="filter: drop-shadow(0 15px 40px rgba(0,0,0,0.6));">
                <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <filter id="matchaShadow2" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#000" flood-opacity="0.5" />
                        </filter>
                        <radialGradient id="matchaLiquid" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#6B9B6E" />
                            <stop offset="40%" stop-color="#4A7A4E" />
                            <stop offset="80%" stop-color="#2E5A32" />
                            <stop offset="100%" stop-color="#1E3A22" />
                        </radialGradient>
                        <linearGradient id="matchaFoam" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F5FBF0" />
                            <stop offset="100%" stop-color="#D4E8C8" />
                        </linearGradient>
                        <linearGradient id="matchaCeramic" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F5F0EB" />
                            <stop offset="50%" stop-color="#E8E0D8" />
                            <stop offset="100%" stop-color="#D4C8BC" />
                        </linearGradient>
                    </defs>

                    <!-- Ceramic Cup Body -->
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="url(#matchaCeramic)"
                        filter="url(#matchaShadow2)" />
                    <ellipse cx="150" cy="150" rx="112" ry="112" fill="none" stroke="#FFF" stroke-width="2"
                        opacity="0.6" />

                    <!-- Matcha Liquid Layer -->
                    <ellipse cx="150" cy="150" rx="105" ry="105" fill="url(#matchaLiquid)" />
                    <ellipse cx="150" cy="150" rx="100" ry="100" fill="none" stroke="#1E3A22" stroke-width="3"
                        opacity="0.5" />
                    <ellipse cx="150" cy="150" rx="95" ry="95" fill="none" stroke="#2E5A32" stroke-width="2"
                        opacity="0.4" />

                    <!-- Matcha Powder Dots -->
                    <circle cx="125" cy="125" r="2.5" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="170" cy="135" r="2" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="140" cy="175" r="3" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="180" cy="165" r="1.8" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="110" cy="155" r="2.2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="160" cy="115" r="2.5" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="135" cy="145" r="1.5" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="185" cy="145" r="2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="115" cy="175" r="1.8" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="155" cy="185" r="2.3" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="145" cy="130" r="1.6" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="125" cy="165" r="2" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="150" cy="150" r="2.8" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="165" cy="140" r="2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="130" cy="135" r="1.8" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="175" cy="150" r="2.2" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="120" cy="140" r="2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="145" cy="160" r="2.5" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="165" cy="170" r="1.6" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="135" cy="155" r="2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="155" cy="130" r="1.8" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="140" cy="145" r="2.2" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="170" cy="160" r="1.5" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="118" cy="165" r="2" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="150" cy="120" r="1.8" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="180" cy="140" r="2" fill="#0a1f0c" opacity="0.9" />
                    <circle cx="128" cy="180" r="1.6" fill="#0a1f0c" opacity="0.95" />
                    <circle cx="168" cy="180" r="2" fill="#0a1f0c" opacity="0.85" />
                    <circle cx="148" cy="138" r="1.8" fill="#0a1f0c" opacity="0.9" />

                    <!-- Rim Highlight -->
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="none" stroke="#FFF" stroke-width="1"
                        opacity="0.15" />
                </svg>
            </div>
        </div>

        <!-- Column 3: Right Metrics & Specifications -->
        <div class="flex flex-col gap-8 md:items-end md:text-right">
            <!-- Metric 1 -->
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(107,155,110,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a7a5c] uppercase tracking-[0.2em] mb-1">Temperature</div>
                <div class="font-display text-3xl text-[#e8f0e9] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">80°C Umami</div>
            </div>

            <!-- Metric 2 -->
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(107,155,110,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a7a5c] uppercase tracking-[0.2em] mb-1">Texture</div>
                <div class="font-display text-3xl text-[#e8f0e9] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Whisked Perfection</div>
            </div>

            <!-- Metric 3 -->
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(107,155,110,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a7a5c] uppercase tracking-[0.2em] mb-1">Origin</div>
                <div class="font-display text-3xl text-[#e8f0e9] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Uji, Japan</div>
            </div>
        </div>

    </div>

    <!-- Scoped Custom CSS Animations -->
    <style>
    @keyframes glowPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.7;
            filter: blur(18px) brightness(1);
        }

        50% {
            transform: scale(1.2);
            opacity: 1;
            filter: blur(22px) brightness(1.4);
        }
    }

    @keyframes innerGlow {

        0%,
        100% {
            opacity: 0.6;
            transform: translate(-50%, -50%) scale(1);
        }

        50% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }
    }

    @keyframes steamRise {
        0% {
            stroke-dashoffset: 60;
            opacity: 0;
            transform: translateY(0);
        }

        30% {
            opacity: 0.4;
        }

        70% {
            opacity: 0.2;
        }

        100% {
            stroke-dashoffset: 0;
            opacity: 0;
            transform: translateY(-30px);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) scale(1);
            opacity: 0.2;
        }

        50% {
            transform: translateY(-25px) scale(1.3);
            opacity: 0.7;
        }
    }
    </style>

</div>