<!-- =========================================================================
     HERO 3: MIDNIGHT AMERICANO
     ========================================================================= -->
<div class="relative w-full h-full bg-[#0f0805] overflow-hidden flex items-center justify-center">

    <!-- Ambient Background Glow -->
    <div class="absolute inset-0 pointer-events-none"
        style="background: radial-gradient(circle at 50% 50%, rgba(80,50,35,0.05) 0%, transparent 60%);">
    </div>

    <!-- Floating Particles (Amber Tone) -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(180,140,100,0.2)] top-[18%] left-[12%] animate-[float_6s_ease-in-out_infinite]">
        </div>
        <div
            class="absolute w-1.5 h-1.5 rounded-full bg-[rgba(180,140,100,0.15)] top-[28%] left-[82%] animate-[float_8s_ease-in-out_infinite_1s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(180,140,100,0.12)] top-[72%] left-[18%] animate-[float_7s_ease-in-out_infinite_2s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(180,140,100,0.15)] top-[62%] left-[78%] animate-[float_9s_ease-in-out_infinite_3s]">
        </div>
        <div
            class="absolute w-0.5 h-0.5 rounded-full bg-[rgba(180,140,100,0.2)] top-[12%] left-[48%] animate-[float_5s_ease-in-out_infinite_0.5s]">
        </div>
    </div>

    <!-- Main Content Grid Container -->
    <div
        class="relative z-10 w-full max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

        <!-- Column 1: Left Text Content -->
        <div class="text-left space-y-6">
            <!-- Sub-header Badge -->
            <div class="flex items-center gap-3">
                <span class="w-8 h-[1px] bg-[#8B6F5C]"></span>
                <span class="text-[11px] font-semibold text-[#8B6F5C] uppercase tracking-[0.3em]">The Dark Roast</span>
            </div>

            <!-- Title -->
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-[#f0e6e0] leading-[1.05] font-bold">
                Midnight <em class="italic text-[#b8a090]">Americano</em>
            </h1>

            <!-- Description & Tagline -->
            <p class="text-[15px] text-[#a09088] leading-relaxed max-w-sm font-light">
                Bold, unapologetic, and deeply aromatic. Pure espresso cut with still water for a clean, intense finish.
            </p>
            <p class="text-[13px] text-[#6b5e56] italic leading-relaxed max-w-sm">
                For the purists who believe coffee should taste like coffee — no sugar, no milk, just truth in a cup.
            </p>

            <!-- Call To Action Button -->
            <a href="#"
                class="inline-block mt-4 px-8 py-4 bg-[#8B6F5C] text-[#0f0805] text-[11px] font-bold uppercase tracking-[0.2em] rounded-sm
                      transition-all duration-500 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(139,111,92,0.3),0_0_40px_rgba(139,111,92,0.1)] hover:bg-[#b8a090]">
                Taste the Darkness
            </a>
        </div>

        <!-- Column 2: Center Graphic (Glowing Orb + Americano SVG) -->
        <div class="relative flex items-center justify-center py-8">

            <!-- Glowing Orb Effects -->
            <div class="absolute w-[280px] h-[280px] md:w-[320px] md:h-[320px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,240,220,0.9) 0%, rgba(255,220,190,0.5) 25%, rgba(200,170,140,0.2) 50%, rgba(180,150,120,0.08) 70%, transparent 80%); filter: blur(18px); animation: glowPulse 3s ease-in-out infinite;">
            </div>
            <div class="absolute w-[340px] h-[340px] md:w-[380px] md:h-[380px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,230,200,0.18) 0%, transparent 65%); animation: glowPulse 3s ease-in-out infinite reverse;">
            </div>
            <div class="absolute w-[180px] h-[180px] rounded-full pointer-events-none"
                style="background: radial-gradient(circle, rgba(255,245,230,0.7) 0%, rgba(255,230,210,0.25) 40%, transparent 70%); filter: blur(10px); animation: innerGlow 3s ease-in-out infinite;">
            </div>

            <!-- Steam Effect Overlay -->
            <svg class="absolute -top-4 left-1/2 -translate-x-1/2 w-20 h-16 pointer-events-none z-20"
                viewBox="0 0 80 60">
                <path d="M20,50 Q25,35 20,20" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite;" />
                <path d="M40,55 Q45,30 40,15" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite 1.3s;" />
                <path d="M60,50 Q55,35 60,20" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="2"
                    stroke-linecap="round" stroke-dasharray="60" stroke-dashoffset="60"
                    style="animation: steamRise 4s ease-in-out infinite 2.6s;" />
            </svg>

            <!-- Vector Illustration: Americano Top View -->
            <div class="relative z-10 w-[220px] h-[220px] md:w-[260px] md:h-[260px]"
                style="filter: drop-shadow(0 15px 40px rgba(0,0,0,0.7));">
                <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <filter id="americanoShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#000" flood-opacity="0.6" />
                        </filter>
                        <radialGradient id="americanoLiquid" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#2A1810" />
                            <stop offset="40%" stop-color="#1A0F08" />
                            <stop offset="80%" stop-color="#0D0502" />
                            <stop offset="100%" stop-color="#080301" />
                        </radialGradient>
                        <linearGradient id="americanoCeramic" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F5F0EB" />
                            <stop offset="50%" stop-color="#E8E0D8" />
                            <stop offset="100%" stop-color="#D4C8BC" />
                        </linearGradient>
                    </defs>

                    <!-- Ceramic Cup Body -->
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="url(#americanoCeramic)"
                        filter="url(#americanoShadow)" />
                    <ellipse cx="150" cy="150" rx="112" ry="112" fill="none" stroke="#FFF" stroke-width="2"
                        opacity="0.6" />

                    <!-- Deep Dark Liquid Layer -->
                    <ellipse cx="150" cy="150" rx="105" ry="105" fill="url(#americanoLiquid)" />
                    <ellipse cx="150" cy="150" rx="100" ry="100" fill="none" stroke="#050200" stroke-width="3"
                        opacity="0.6" />
                    <ellipse cx="150" cy="150" rx="95" ry="95" fill="none" stroke="#1A0F08" stroke-width="2"
                        opacity="0.5" />

                    <!-- Subtle Crema Ring -->
                    <ellipse cx="150" cy="150" rx="85" ry="85" fill="none" stroke="#3d2317" stroke-width="1.5"
                        opacity="0.25" />
                    <ellipse cx="150" cy="150" rx="75" ry="75" fill="none" stroke="#4a2e1e" stroke-width="1"
                        opacity="0.15" />

                    <!-- Oil Slick Reflection -->
                    <ellipse cx="135" cy="135" rx="15" ry="8" fill="#2A1810" opacity="0.4"
                        transform="rotate(-30 135 135)" />
                    <ellipse cx="165" cy="165" rx="10" ry="5" fill="#1A0F08" opacity="0.3"
                        transform="rotate(20 165 165)" />

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
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(139,111,92,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a4a42] uppercase tracking-[0.2em] mb-1">Temperature</div>
                <div class="font-display text-3xl text-[#f0e6e0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">92°C Intense</div>
            </div>

            <!-- Metric 2 -->
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(139,111,92,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a4a42] uppercase tracking-[0.2em] mb-1">Body</div>
                <div class="font-display text-3xl text-[#f0e6e0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Pure Black</div>
            </div>

            <!-- Metric 3 -->
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(139,111,92,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#5a4a42] uppercase tracking-[0.2em] mb-1">Origin</div>
                <div class="font-display text-3xl text-[#f0e6e0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Sumatra</div>
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