<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aroma &amp; Alchemy</title>

    <!-- External Fonts & Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&family=Playfair+Display:wght@100..900&family=Source+Sans+3:wght@400;600&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    brand: {
                        primary: '#ffdad4',
                        'on-primary': '#271310',
                        'primary-container': '#3e2723',
                        surface: '#3e2723',
                        'on-surface': '#f4eceb',
                        'on-surface-variant': '#e8e1df',
                        background: '#3e2723',
                        outline: '#827472',
                    }
                },
                fontFamily: {
                    display: ['Playfair Display', 'serif'],
                    body: ['Manrope', 'sans-serif'],
                }
            }
        }
    }
    </script>

    {{-- Global Styles --}}
    <style>
    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    .material-symbols-outlined {
        font-family: 'Material Symbols Outlined', sans-serif !important;
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        font-style: normal !important;
        letter-spacing: normal !important;
        text-transform: none !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        white-space: nowrap !important;
        word-wrap: normal !important;
        direction: ltr !important;
        -webkit-font-feature-settings: 'liga' !important;
        -webkit-font-smoothing: antialiased !important;
        text-rendering: optimizeLegibility !important;
        line-height: 1 !important;
        vertical-align: middle !important;
        user-select: none !important;
    }

    /* Nav bottom entrance animation */
    @keyframes nav-up {
        0% {
            opacity: 0;
            transform: translateX(-50%) translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }

    .nav-bottom-wrapper {
        animation: nav-up 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes quake-shake {

        0%,
        100% {
            transform: translate(0, 0);
        }

        8% {
            transform: translate(-3px, 2px);
        }

        16% {
            transform: translate(3px, -2px);
        }

        24% {
            transform: translate(-4px, 3px);
        }

        32% {
            transform: translate(4px, -3px);
        }

        40% {
            transform: translate(-3px, 2px);
        }

        48% {
            transform: translate(3px, -2px);
        }

        56% {
            transform: translate(-2px, 1px);
        }

        64% {
            transform: translate(2px, -1px);
        }

        72% {
            transform: translate(-1px, 2px);
        }

        80% {
            transform: translate(1px, -2px);
        }

        88% {
            transform: translate(-2px, 1px);
        }

        96% {
            transform: translate(2px, -1px);
        }
    }

    .quake-shake {
        animation: quake-shake 0.7s ease-in-out;
    }

    #hero-slider {
        transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.6s ease;
        will-change: transform;
    }
    </style>
</head>

<body class="bg-[#3e2723] text-white font-body antialiased relative h-screen w-screen overflow-hidden">

    {{-- HERO SLIDER --}}
    @include('partials.hero-slider')

    {{-- DOTS + NAVBAR (BOTTOM FIXED) --}}
    <div
        class="nav-bottom-wrapper fixed bottom-4 left-1/2 -translate-x-1/2 z-[100] w-[92%] max-w-[720px] flex flex-col items-center gap-2.5">
        @include('partials.slide-dots')
        @include('partials.navbar')
    </div>


    {{-- CRACK OVERLAY (Earthquake Effect) --}}
    <div id="crack-overlay" class="fixed inset-0 z-[200] pointer-events-none opacity-0"
        style="transition: opacity 0.1s ease;">
        <svg id="crack-svg" class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <filter id="crack-glow" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="0.2" result="blur" />
                    <feMerge>
                        <feMergeNode in="blur" />
                        <feMergeNode in="SourceGraphic" />
                    </feMerge>
                </filter>
            </defs>
            <path id="crack-main" d="M50,50 L50,50" stroke="#ff6b35" stroke-width="0.12" fill="none"
                filter="url(#crack-glow)" opacity="0" />
            <path id="crack-b1" d="M50,50 L50,50" stroke="#ff8c42" stroke-width="0.08" fill="none" opacity="0" />
            <path id="crack-b2" d="M50,50 L50,50" stroke="#ff6b35" stroke-width="0.1" fill="none" opacity="0" />
            <path id="crack-b3" d="M50,50 L50,50" stroke="#ff8c42" stroke-width="0.07" fill="none" opacity="0" />
            <path id="crack-b4" d="M50,50 L50,50" stroke="#ff6b35" stroke-width="0.09" fill="none" opacity="0" />
            <path id="crack-b5" d="M50,50 L50,50" stroke="#ff8c42" stroke-width="0.06" fill="none" opacity="0" />
        </svg>
        <div id="crack-darken" class="absolute inset-0 bg-black/0 transition-all duration-700"></div>
    </div>

    {{-- OUR STORY PAGE --}}
    @include('partials.our-story')

    {{-- PAGE TRANSITION SCRIPTS --}}
    <script>
    let isTransitioning = false;

    function openOurStory() {
        if (isTransitioning) return;
        isTransitioning = true;

        const body = document.body;
        const overlay = document.getElementById('crack-overlay');
        const darken = document.getElementById('crack-darken');
        const heroSlider = document.getElementById('hero-slider');
        const dotsContainer = document.querySelector('.slide-dots-wrapper');
        const ourStory = document.getElementById('our-story-page');

        // 1. SHAKE EFFECT
        body.classList.add('quake-shake');

        // 2. Show overlay + darken after shake starts
        setTimeout(() => {
            overlay.style.opacity = '1';
            darken.style.backgroundColor = 'rgba(0,0,0,0.75)';

            // Animate cracks spreading from center
            const cracks = [{
                    id: 'crack-main',
                    d: 'M50,50 L50,0 M50,50 L50,100 M50,50 L0,50 M50,50 L100,50',
                    delay: 0
                },
                {
                    id: 'crack-b1',
                    d: 'M50,50 L25,25 L10,8 M50,50 L75,25 L92,12',
                    delay: 80
                },
                {
                    id: 'crack-b2',
                    d: 'M50,50 L22,78 L8,92 M50,50 L78,78 L92,88',
                    delay: 160
                },
                {
                    id: 'crack-b3',
                    d: 'M50,50 L32,32 L18,15 M50,50 L68,32 L85,18',
                    delay: 120
                },
                {
                    id: 'crack-b4',
                    d: 'M50,50 L28,72 L12,85 M50,50 L72,72 L88,82',
                    delay: 200
                },
                {
                    id: 'crack-b5',
                    d: 'M50,50 L38,28 L28,10 M50,50 L62,28 L75,10',
                    delay: 240
                }
            ];

            cracks.forEach(c => {
                const path = document.getElementById(c.id);
                path.setAttribute('d', c.d);
                const len = 180;
                path.style.strokeDasharray = len;
                path.style.strokeDashoffset = len;
                path.style.opacity = '0';
                path.style.transition =
                    `stroke-dashoffset 0.7s ease-out ${c.delay}ms, opacity 0.15s ease ${c.delay}ms`;
                requestAnimationFrame(() => {
                    path.style.opacity = '1';
                    path.style.strokeDashoffset = '0';
                });
            });
        }, 250);

        // 3. SPLIT OPEN — cracks retract, reveal Our Story
        setTimeout(() => {
            // Hide hero, show our story
            heroSlider.style.opacity = '0';
            heroSlider.style.pointerEvents = 'none';
            if (dotsContainer) {
                dotsContainer.style.opacity = '0';
                dotsContainer.style.pointerEvents = 'none';
            }

            // Crack overlay splits and fades
            overlay.style.transition = 'clip-path 0.7s cubic-bezier(0.4,0,0.2,1), opacity 0.5s ease 0.3s';
            overlay.style.clipPath = 'inset(0 50% 0 50%)';
            overlay.style.opacity = '0';

            // Show Our Story
            ourStory.style.opacity = '1';
            ourStory.style.pointerEvents = 'auto';
            ourStory.style.transform = 'translateY(0)';
        }, 1400);

        // 4. Cleanup
        setTimeout(() => {
            body.classList.remove('quake-shake');
            // Reset cracks
            document.querySelectorAll('#crack-svg path').forEach(p => {
                p.style.transition = 'none';
                p.style.opacity = '0';
                p.setAttribute('d', 'M50,50 L50,50');
            });
            overlay.style.transition = 'none';
            overlay.style.clipPath = 'inset(0 0% 0 0%)';
            overlay.style.opacity = '0';
            darken.style.backgroundColor = 'rgba(0,0,0,0)';
            isTransitioning = false;
        }, 2200);
    }

    function goHome() {
        const heroSlider = document.getElementById('hero-slider');
        const dotsContainer = document.querySelector('.slide-dots-wrapper');
        const ourStory = document.getElementById('our-story-page');

        // Fade out our story
        ourStory.style.opacity = '0';
        ourStory.style.pointerEvents = 'none';
        ourStory.style.transform = 'translateY(24px)';

        // Fade in hero
        setTimeout(() => {
            heroSlider.style.opacity = '1';
            heroSlider.style.pointerEvents = 'auto';
            if (dotsContainer) {
                dotsContainer.style.opacity = '1';
                dotsContainer.style.pointerEvents = 'auto';
            }
        }, 300);
    }
    </script>

</body>

</html>