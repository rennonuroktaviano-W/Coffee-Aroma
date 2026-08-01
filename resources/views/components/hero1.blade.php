{{-- HERO 1: Aroma & Alchemy --}}
<div class="relative w-full h-full bg-[#3e2723] overflow-hidden flex items-center justify-center">

    {{-- Ambient Background Glow --}}
    <div class="absolute inset-0 pointer-events-none"
        style="background: radial-gradient(circle at 50% 50%, rgba(255,220,180,0.04) 0%, transparent 60%);">
    </div>

    {{-- Floating Particles --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(255,220,180,0.3)] top-[20%] left-[15%] animate-[float_6s_ease-in-out_infinite]">
        </div>
        <div
            class="absolute w-1.5 h-1.5 rounded-full bg-[rgba(255,220,180,0.25)] top-[30%] left-[80%] animate-[float_8s_ease-in-out_infinite_1s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(255,220,180,0.2)] top-[70%] left-[20%] animate-[float_7s_ease-in-out_infinite_2s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(255,220,180,0.25)] top-[60%] left-[75%] animate-[float_9s_ease-in-out_infinite_3s]">
        </div>
        <div
            class="absolute w-0.5 h-0.5 rounded-full bg-[rgba(255,220,180,0.3)] top-[15%] left-[50%] animate-[float_5s_ease-in-out_infinite_0.5s]">
        </div>
    </div>

    {{-- Main Content Grid --}}
    <div
        class="relative z-10 w-full max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

        {{-- LEFT: Text Content --}}
        <div class="text-left space-y-6">
            {{-- Label --}}
            <div class="flex items-center gap-3">
                <span class="w-8 h-[1px] bg-[#D4A574]"></span>
                <span class="text-[11px] font-semibold text-[#D4A574] uppercase tracking-[0.3em]">The Ritual</span>
            </div>

            {{-- Title --}}
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-[#FFF8F0] leading-[1.05] font-bold">
                Aroma <em class="italic text-[#E8C4A0]">&</em><br>Alchemy
            </h1>

            {{-- Description --}}
            <p class="text-[15px] text-white/70 leading-relaxed max-w-sm font-light">
                Experience the perfect balance of hand-roasted beans and velvety microfoam. A moment of stillness in
                every sip.
            </p>

            <p class="text-[13px] text-white/30 italic leading-relaxed max-w-sm">
                Crafted for those who understand that coffee isn't just a drink, but a dialogue between earth and water.
            </p>

            {{-- CTA Button --}}
            <a href="#"
                class="inline-block mt-4 px-8 py-4 bg-gradient-to-r from-[#FFD4C7] to-[#F5C6B8] text-[#2C1810] text-[11px] font-bold uppercase tracking-[0.2em] rounded-sm
                      transition-all duration-500 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(255,180,150,0.4),0_0_40px_rgba(255,200,170,0.15)]">
                Discover The Roast
            </a>
        </div>

        {{-- CENTER: Coffee with Glowing Orb --}}
        <div class="relative flex items-center justify-center py-8">

            {{-- GLOWING ORB (Putih, menyala kedap-kedip) --}}
            <div class="absolute w-[280px] h-[280px] md:w-[320px] md:h-[320px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,248,240,0.95) 0%, rgba(255,240,230,0.6) 25%, rgba(255,225,210,0.25) 50%, rgba(255,210,190,0.1) 70%, transparent 80%);
                        filter: blur(18px);
                        animation: glowPulse 3s ease-in-out infinite;">
            </div>
            {{-- Outer glow ring --}}
            <div class="absolute w-[340px] h-[340px] md:w-[380px] md:h-[380px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,245,235,0.2) 0%, transparent 65%);
                        animation: glowPulse 3s ease-in-out infinite reverse;">
            </div>
            {{-- Inner bright core --}}
            <div class="absolute w-[180px] h-[180px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(255,248,240,0.3) 40%, transparent 70%);
                        filter: blur(10px);
                        animation: innerGlow 3s ease-in-out infinite;">
            </div>

            {{-- Steam Animation --}}
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

            {{-- SVG VECTOR COFFEE (Top View, No Background) --}}
            <div class="relative z-10 w-[220px] h-[220px] md:w-[260px] md:h-[260px]"
                style="filter: drop-shadow(0 15px 40px rgba(0,0,0,0.5));">
                <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <filter id="cupShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#000" flood-opacity="0.4" />
                        </filter>
                        <radialGradient id="foamGrad" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#C4956A" />
                            <stop offset="40%" stop-color="#B07D4F" />
                            <stop offset="80%" stop-color="#8B5E3C" />
                            <stop offset="100%" stop-color="#6B4226" />
                        </radialGradient>
                        <linearGradient id="milkGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#FFFDF8" />
                            <stop offset="50%" stop-color="#FFF5E6" />
                            <stop offset="100%" stop-color="#FFE8D0" />
                        </linearGradient>
                        <linearGradient id="ceramicGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F5F0EB" />
                            <stop offset="50%" stop-color="#E8E0D8" />
                            <stop offset="100%" stop-color="#D4C8BC" />
                        </linearGradient>
                    </defs>

                    {{-- Cup Handle --}}

                    {{-- Cup Body --}}
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="url(#ceramicGrad)" filter="url(#cupShadow)" />
                    <ellipse cx="150" cy="150" rx="112" ry="112" fill="none" stroke="#FFF" stroke-width="2"
                        opacity="0.6" />

                    {{-- Coffee Liquid --}}
                    <ellipse cx="150" cy="150" rx="105" ry="105" fill="url(#foamGrad)" />
                    <ellipse cx="150" cy="150" rx="100" ry="100" fill="none" stroke="#6B4226" stroke-width="3"
                        opacity="0.4" />
                    <ellipse cx="150" cy="150" rx="95" ry="95" fill="none" stroke="#8B5E3C" stroke-width="2"
                        opacity="0.3" />

                    {{-- Latte Art - Rosetta --}}
                    <g transform="translate(150,150)">
                        <path d="M0,35 Q2,15 0,-5" fill="none" stroke="url(#milkGrad)" stroke-width="5"
                            stroke-linecap="round" opacity="0.95" />
                        <path d="M-2,25 Q-20,20 -35,10 Q-20,15 -2,20" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M-2,15 Q-25,8 -40,-5 Q-22,2 -2,10" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M-2,5 Q-22,-2 -32,-18 Q-18,-8 -2,0" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M-1,-5 Q-18,-12 -25,-28 Q-12,-18 -1,-8" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M2,25 Q20,20 35,10 Q20,15 2,20" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M2,15 Q25,8 40,-5 Q22,2 2,10" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M2,5 Q22,-2 32,-18 Q18,-8 2,0" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M1,-5 Q18,-12 25,-28 Q12,-18 1,-8" fill="url(#milkGrad)" opacity="0.9" />
                        <path d="M0,-8 Q-8,-20 0,-35 Q8,-20 0,-8" fill="url(#milkGrad)" opacity="0.95" />
                        <ellipse cx="0" cy="8" rx="6" ry="8" fill="#FFFDF8" opacity="0.7" />
                        <path d="M-15,18 Q-10,22 -5,18" fill="none" stroke="#FFFDF8" stroke-width="1.5" opacity="0.5" />
                        <path d="M15,18 Q10,22 5,18" fill="none" stroke="#FFFDF8" stroke-width="1.5" opacity="0.5" />
                        <path d="M-20,5 Q-15,8 -10,5" fill="none" stroke="#FFFDF8" stroke-width="1.5" opacity="0.5" />
                        <path d="M20,5 Q15,8 10,5" fill="none" stroke="#FFFDF8" stroke-width="1.5" opacity="0.5" />
                    </g>

                    {{-- Foam Bubbles --}}
                    <circle cx="120" cy="120" r="1.5" fill="#FFF" opacity="0.3" />
                    <circle cx="180" cy="130" r="1" fill="#FFF" opacity="0.25" />
                    <circle cx="140" cy="190" r="1.2" fill="#FFF" opacity="0.2" />
                    <circle cx="170" cy="170" r="0.8" fill="#FFF" opacity="0.3" />
                    <circle cx="110" cy="160" r="1" fill="#FFF" opacity="0.25" />
                    <circle cx="190" cy="150" r="1.3" fill="#FFF" opacity="0.2" />

                    {{-- Rim Reflection --}}
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="none" stroke="#FFF" stroke-width="1"
                        opacity="0.15" />
                </svg>
            </div>
        </div>

        {{-- RIGHT: Stats --}}
        <div class="flex flex-col gap-8 md:items-end md:text-right">
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(212,165,116,0.6)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[rgba(212,165,116,0.7)] uppercase tracking-[0.2em] mb-1">
                    Temperature</div>
                <div class="font-display text-3xl text-[#FFF8F0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">68°C Precision</div>
            </div>
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(212,165,116,0.6)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[rgba(212,165,116,0.7)] uppercase tracking-[0.2em] mb-1">
                    Texture</div>
                <div class="font-display text-3xl text-[#FFF8F0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Silken Cloud</div>
            </div>
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(212,165,116,0.6)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[rgba(212,165,116,0.7)] uppercase tracking-[0.2em] mb-1">
                    Origin</div>
                <div class="font-display text-3xl text-[#FFF8F0] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Ethiopia</div>
            </div>
        </div>

    </div>

    {{-- Custom Animations (Tambahin ke style global atau tailwind config) --}}
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