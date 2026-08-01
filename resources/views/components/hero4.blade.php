{{-- HERO 4: Oreo Obsession --}}
<div class="relative w-full h-full bg-[#0a0c14] overflow-hidden flex items-center justify-center">

    {{-- Ambient Background Glow (Oreo blue tone) --}}
    <div class="absolute inset-0 pointer-events-none"
        style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.04) 0%, transparent 60%);">
    </div>

    {{-- Floating Particles (Oreo blue/white tone) --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(200,210,230,0.25)] top-[18%] left-[12%] animate-[float_6s_ease-in-out_infinite]">
        </div>
        <div
            class="absolute w-1.5 h-1.5 rounded-full bg-[rgba(200,210,230,0.2)] top-[28%] left-[82%] animate-[float_8s_ease-in-out_infinite_1s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(200,210,230,0.15)] top-[72%] left-[18%] animate-[float_7s_ease-in-out_infinite_2s]">
        </div>
        <div
            class="absolute w-1 h-1 rounded-full bg-[rgba(200,210,230,0.2)] top-[62%] left-[78%] animate-[float_9s_ease-in-out_infinite_3s]">
        </div>
        <div
            class="absolute w-0.5 h-0.5 rounded-full bg-[rgba(200,210,230,0.25)] top-[12%] left-[48%] animate-[float_5s_ease-in-out_infinite_0.5s]">
        </div>
    </div>

    {{-- Main Content Grid --}}
    <div
        class="relative z-10 w-full max-w-6xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

        {{-- LEFT: Text Content --}}
        <div class="text-left space-y-6">
            <div class="flex items-center gap-3">
                <span class="w-8 h-[1px] bg-[#3b82f6]"></span>
                <span class="text-[11px] font-semibold text-[#3b82f6] uppercase tracking-[0.3em]">The Indulgence</span>
            </div>

            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl text-[#f0f2f8] leading-[1.05] font-bold">
                Oreo <em class="italic text-[#93bbfc]">Obsession</em>
            </h1>

            <p class="text-[15px] text-[#a8b0c8] leading-relaxed max-w-sm font-light">
                Creamy, crunchy, and utterly addictive. Rich chocolate espresso swirled with Oreo cream foam and cookie
                crumble.
            </p>

            <p class="text-[13px] text-[#6b7290] italic leading-relaxed max-w-sm">
                For the sweet tooth who believes dessert belongs in every cup — twist, lick, sip.
            </p>

            <a href="#"
                class="inline-block mt-4 px-8 py-4 bg-[#3b82f6] text-[#0a0c14] text-[11px] font-bold uppercase tracking-[0.2em] rounded-sm
                      transition-all duration-500 hover:-translate-y-0.5 hover:shadow-[0_8px_30px_rgba(59,130,246,0.3),0_0_40px_rgba(59,130,246,0.1)] hover:bg-[#60a5fa]">
                Indulge Now
            </a>
        </div>

        {{-- CENTER: Oreo with Glowing Orb --}}
        <div class="relative flex items-center justify-center py-8">

            {{-- GLOWING ORB (Cool white/blue, menyala) --}}
            <div class="absolute w-[280px] h-[280px] md:w-[320px] md:h-[320px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(240,245,255,0.95) 0%, rgba(220,230,255,0.6) 25%, rgba(180,200,255,0.25) 50%, rgba(150,180,255,0.1) 70%, transparent 80%);
                        filter: blur(18px);
                        animation: glowPulse 3s ease-in-out infinite;">
            </div>
            <div class="absolute w-[340px] h-[340px] md:w-[380px] md:h-[380px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(200,220,255,0.2) 0%, transparent 65%);
                        animation: glowPulse 3s ease-in-out infinite reverse;">
            </div>
            <div class="absolute w-[180px] h-[180px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(240,245,255,0.3) 40%, transparent 70%);
                        filter: blur(10px);
                        animation: innerGlow 3s ease-in-out infinite;">
            </div>

            {{-- Steam --}}
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

            {{-- SVG VECTOR OREO (Top View, Cream Swirl + Cookie Crumbs) --}}
            <div class="relative z-10 w-[220px] h-[220px] md:w-[260px] md:h-[260px]"
                style="filter: drop-shadow(0 15px 40px rgba(0,0,0,0.7));">
                <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <defs>
                        <filter id="oreoShadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#000" flood-opacity="0.6" />
                        </filter>
                        <radialGradient id="oreoLiquid" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#3E2723" />
                            <stop offset="40%" stop-color="#2A1B15" />
                            <stop offset="80%" stop-color="#1A100A" />
                            <stop offset="100%" stop-color="#0F0905" />
                        </radialGradient>
                        <linearGradient id="oreoCream" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#FFFFFF" />
                            <stop offset="50%" stop-color="#F0F0F0" />
                            <stop offset="100%" stop-color="#E0E0E0" />
                        </linearGradient>
                        <linearGradient id="oreoCeramic" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#F5F0EB" />
                            <stop offset="50%" stop-color="#E8E0D8" />
                            <stop offset="100%" stop-color="#D4C8BC" />
                        </linearGradient>
                    </defs>

                    {{-- Saucer --}}
                    <ellipse cx="150" cy="155" rx="145" ry="145" fill="#E8E0D8" filter="url(#oreoShadow)" />
                    <ellipse cx="150" cy="155" rx="140" ry="140" fill="#F0EBE5" />
                    <ellipse cx="150" cy="155" rx="100" ry="100" fill="#E5DDD5" />

                    {{-- Handle --}}
                    <path d="M260,130 C290,130 290,180 260,180" fill="none" stroke="#E8E0D8" stroke-width="14"
                        stroke-linecap="round" />
                    <path d="M260,130 C290,130 290,180 260,180" fill="none" stroke="#F5F0EB" stroke-width="8"
                        stroke-linecap="round" />

                    {{-- Cup Body --}}
                    <ellipse cx="150" cy="150" rx="115" ry="115" fill="url(#oreoCeramic)" filter="url(#oreoShadow)" />
                    <ellipse cx="150" cy="150" rx="112" ry="112" fill="none" stroke="#FFF" stroke-width="2"
                        opacity="0.6" />

                    {{-- Oreo Liquid (Dark Chocolate) --}}
                    <ellipse cx="150" cy="150" rx="105" ry="105" fill="url(#oreoLiquid)" />
                    <ellipse cx="150" cy="150" rx="100" ry="100" fill="none" stroke="#0F0905" stroke-width="3"
                        opacity="0.6" />
                    <ellipse cx="150" cy="150" rx="95" ry="95" fill="none" stroke="#2A1B15" stroke-width="2"
                        opacity="0.4" />

                    {{-- Cream Swirl (like Oreo filling) --}}
                    <g transform="translate(150,150)" opacity="0.9">
                        <path d="M0,0 m-30,0 a30,30 0 1,1 60,0 a30,30 0 1,1 -60,0" fill="none" stroke="url(#oreoCream)"
                            stroke-width="3" opacity="0.7" />
                        <path d="M0,0 m-20,0 a20,20 0 1,0 40,0 a20,20 0 1,0 -40,0" fill="none" stroke="url(#oreoCream)"
                            stroke-width="2.5" opacity="0.6" />
                        <path d="M0,0 m-10,0 a10,10 0 1,1 20,0 a10,10 0 1,1 -20,0" fill="none" stroke="url(#oreoCream)"
                            stroke-width="2" opacity="0.5" />
                        <circle cx="0" cy="0" r="5" fill="#FFFFFF" opacity="0.8" />
                    </g>

                    {{-- Cookie Crumbs (Oreo biscuit pieces) --}}
                    <rect x="125" y="120" width="4" height="3" fill="#1a0f08" opacity="0.85"
                        transform="rotate(15 125 120)" />
                    <rect x="170" y="130" width="3" height="4" fill="#1a0f08" opacity="0.75"
                        transform="rotate(-20 170 130)" />
                    <rect x="140" y="175" width="5" height="3" fill="#1a0f08" opacity="0.8"
                        transform="rotate(45 140 175)" />
                    <rect x="180" y="160" width="3" height="3" fill="#1a0f08" opacity="0.9"
                        transform="rotate(30 180 160)" />
                    <rect x="115" y="150" width="4" height="2" fill="#1a0f08" opacity="0.7"
                        transform="rotate(-10 115 150)" />
                    <rect x="160" y="110" width="3" height="5" fill="#1a0f08" opacity="0.8"
                        transform="rotate(60 160 110)" />
                    <rect x="135" y="140" width="2" height="2" fill="#1a0f08" opacity="0.9" />
                    <rect x="185" y="145" width="3" height="3" fill="#1a0f08" opacity="0.75"
                        transform="rotate(40 185 145)" />
                    <rect x="120" y="170" width="4" height="3" fill="#1a0f08" opacity="0.8"
                        transform="rotate(-35 120 170)" />
                    <rect x="155" y="185" width="3" height="4" fill="#1a0f08" opacity="0.85"
                        transform="rotate(25 155 185)" />
                    <rect x="145" y="125" width="2" height="3" fill="#1a0f08" opacity="0.8"
                        transform="rotate(55 145 125)" />
                    <rect x="128" y="158" width="3" height="2" fill="#1a0f08" opacity="0.7"
                        transform="rotate(-25 128 158)" />

                    {{-- White cream specks --}}
                    <circle cx="132" cy="138" r="1.2" fill="#FFF" opacity="0.5" />
                    <circle cx="168" cy="152" r="1" fill="#FFF" opacity="0.4" />
                    <circle cx="148" cy="168" r="1.3" fill="#FFF" opacity="0.6" />
                    <circle cx="158" cy="128" r="1" fill="#FFF" opacity="0.45" />

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
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(59,130,246,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#4b5568] uppercase tracking-[0.2em] mb-1">Temperature</div>
                <div class="font-display text-3xl text-[#f0f2f8] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">65°C Creamy</div>
            </div>
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(59,130,246,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#4b5568] uppercase tracking-[0.2em] mb-1">Texture</div>
                <div class="font-display text-3xl text-[#f0f2f8] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Cookie Crunch</div>
            </div>
            <div class="relative pr-6">
                <div
                    class="absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-transparent via-[rgba(59,130,246,0.5)] to-transparent">
                </div>
                <div class="text-[11px] font-semibold text-[#4b5568] uppercase tracking-[0.2em] mb-1">Origin</div>
                <div class="font-display text-3xl text-[#f0f2f8] font-bold"
                    style="text-shadow: 0 2px 10px rgba(0,0,0,0.2);">The Cookie Jar</div>
            </div>
        </div>

    </div>

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