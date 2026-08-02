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

    #hero-slider {
        transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.6s ease;
        will-change: transform;
    }
    </style>
</head>

<body class="bg-[#3e2723] text-white font-body antialiased relative h-screen w-screen overflow-hidden">
    {{-- LOADING SCREEN --}}
    <div id="loading-screen"
        class="fixed inset-0 z-[9999] flex flex-col items-center justify-center transition-opacity duration-700 overflow-y-auto"
        style="background: linear-gradient(180deg, #d4b996 0%, #c4a882 100%); font-family: 'Manrope', sans-serif;">

        <!-- Decorative faint text background -->
        <div class="absolute inset-0 overflow-hidden opacity-[0.06] pointer-events-none select-none"
            style="background-image: repeating-linear-gradient(0deg, transparent, transparent 80px, #3e2723 80px, #3e2723 81px), repeating-linear-gradient(90deg, transparent, transparent 80px, #3e2723 80px, #3e2723 81px); background-size: 100% 100%, 100% 100%;">
        </div>
        <div class="absolute inset-0 flex flex-wrap content-center justify-center gap-16 opacity-[0.04] pointer-events-none select-none"
            style="font-family: 'Playfair Display', serif; font-size: 64px; color: #3e2723; transform: rotate(-12deg);">
            <span>AROMA</span><span>ALCHEMY</span><span>AROMA</span><span>ALCHEMY</span>
            <span>AROMA</span><span>ALCHEMY</span><span>AROMA</span><span>ALCHEMY</span>
            <span>AROMA</span><span>ALCHEMY</span><span>AROMA</span><span>ALCHEMY</span>
        </div>

        <!-- Content Wrapper with safe padding -->
        <div class="relative z-10 flex flex-col items-center justify-center w-full px-4 py-12 min-h-full">

            <!-- Coffee Cup Character -->
            <div id="cup-character"
                class="relative mb-6 cursor-pointer transition-transform duration-200 active:scale-95 select-none"
                onclick="boostLoading()">

                <!-- Combined Cloud + Cup SVG -->
                <svg viewBox="0 -30 140 200" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-36 h-52 drop-shadow-xl" style="overflow: visible;">
                    <!-- Cloud / Steam -->
                    <g class="animate-bounce" style="animation-duration: 3s;">
                        <ellipse cx="45" cy="55" rx="28" ry="22" fill="#f4c430" />
                        <ellipse cx="70" cy="45" rx="32" ry="26" fill="#f4c430" />
                        <ellipse cx="95" cy="55" rx="28" ry="22" fill="#f4c430" />
                        <ellipse cx="60" cy="35" rx="22" ry="18" fill="#f4c430" />
                        <ellipse cx="80" cy="35" rx="22" ry="18" fill="#f4c430" />
                        <ellipse cx="52" cy="52" rx="8" ry="5" fill="#e8913a" opacity="0.6" />
                        <circle cx="58" cy="48" r="3.5" fill="#3e2723" />
                        <circle cx="82" cy="48" r="3.5" fill="#3e2723" />
                        <path d="M62 56 Q70 64 78 56" stroke="#3e2723" stroke-width="2.5" stroke-linecap="round"
                            fill="none" />
                    </g>
                    <!-- Cup Body -->
                    <path d="M22 86 C22 122 34 128 62 128 C90 128 102 122 102 86 Z" fill="#2d1b16" />
                    <!-- Cup Rim Top -->
                    <path d="M22 86 C22 78 34 74 62 74 C90 74 102 78 102 86 C102 90 90 92 62 92 C34 92 22 90 22 86 Z"
                        fill="#1a0f0c" />
                    <!-- Coffee Surface -->
                    <ellipse cx="62" cy="86" rx="38" ry="8" fill="#3e2723" />
                    <!-- Cup Handle -->
                    <path d="M102 94 C114 94 118 102 118 110 C118 118 110 122 102 122" stroke="#2d1b16" stroke-width="5"
                        stroke-linecap="round" fill="none" />
                </svg>

                <!-- Boost Particles Container -->
                <div id="boost-particles" class="absolute inset-0 pointer-events-none"></div>
            </div>

            <!-- Title -->
            <h1 id="loading-title" class="text-[#2d1b16] text-4xl font-bold tracking-tight mb-3 text-center"
                style="font-family: 'Playfair Display', serif;">Order Ready!</h1>

            <!-- Description -->
            <p id="loading-desc" class="text-[#5c3d2e] text-sm text-center max-w-xs leading-relaxed mb-8 px-4">
                Grinding fresh beans and frothing the perfect milk just for you. We're getting things ready for your
                next
                favorite cup.
            </p>

            <!-- Progress Card -->
            <div class="bg-[#e8d5c0] rounded-2xl px-6 py-4 w-full max-w-[320px] shadow-lg mb-6">
                <div class="w-full h-3 bg-[#c4a882] rounded-full overflow-hidden mb-3">
                    <div id="progress-bar" class="h-full bg-[#2d1b16] rounded-full transition-all duration-300 ease-out"
                        style="width: 0%"></div>
                </div>
                <div class="flex justify-between items-center">
                    <span id="progress-label"
                        class="text-[#5c3d2e] text-[10px] font-bold tracking-widest uppercase">Temperature: Heating
                        Up</span>
                    <span id="progress-percent" class="text-[#2d1b16] text-xs font-bold">0%</span>
                </div>
            </div>

            <!-- Boost Button -->
            <button id="boost-btn" onclick="boostLoading()"
                class="bg-[#2d1b16] text-[#ffdad4] px-6 py-3 rounded-full text-sm font-semibold flex items-center gap-2 shadow-lg hover:bg-[#3e2723] transition-all duration-200 active:scale-95 cursor-pointer">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v0" />
                    <path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v2" />
                    <path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8" />
                    <path
                        d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15" />
                </svg>
                Tap the cup for a boost!
            </button>
        </div>
    </div>

    {{-- LOADING SCREEN SCRIPT --}}
    <script>
    (function() {
        let progress = 0;
        let boostAmount = 0;
        let isComplete = false;
        const bar = document.getElementById('progress-bar');
        const pct = document.getElementById('progress-percent');
        const label = document.getElementById('progress-label');
        const title = document.getElementById('loading-title');
        const desc = document.getElementById('loading-desc');
        const boostBtn = document.getElementById('boost-btn');
        const cup = document.getElementById('cup-character');
        const screen = document.getElementById('loading-screen');
        const hero = document.getElementById('hero-slider');

        const messages = [
            'Temperature: Heating Up',
            'Temperature: Steaming',
            'Temperature: Almost There',
            'Temperature: Perfect'
        ];

        function updateUI() {
            const total = Math.min(progress + boostAmount, 100);
            bar.style.width = total + '%';
            pct.textContent = Math.round(total) + '%';

            const msgIndex = Math.min(Math.floor(total / 26), 3);
            label.textContent = messages[msgIndex];

            if (total >= 100 && !isComplete) {
                isComplete = true;
                label.textContent = 'Temperature: Perfect';
                title.textContent = 'Enjoy Your Coffee!';
                desc.textContent = 'Everything is set. Welcome to Aroma & Alchemy.';
                boostBtn.innerHTML = '<span class="animate-spin inline-block mr-2">☕</span> Entering...';
                boostBtn.disabled = true;

                setTimeout(() => {
                    screen.style.opacity = '0';
                    screen.style.pointerEvents = 'none';
                    setTimeout(() => {
                        screen.style.display = 'none';
                        // Reveal hero slider
                        if (hero) {
                            hero.style.opacity = '1';
                            hero.style.transform = 'perspective(1200px) rotateY(0deg) scale(1)';
                        }
                    }, 700);
                }, 800);
            }
        }

        // Natural loading
        const interval = setInterval(() => {
            if (isComplete) {
                clearInterval(interval);
                return;
            }
            progress += Math.random() * 1.5 + 0.3;
            if (progress > 85) progress = 85;
            updateUI();
        }, 80);

        window.boostLoading = function() {
            if (isComplete) return;
            boostAmount += 15;

            cup.style.transform = 'scale(1.15) rotate(-5deg)';
            setTimeout(() => {
                cup.style.transform = '';
            }, 200);

            for (let i = 0; i < 6; i++) {
                const p = document.createElement('div');
                p.className = 'absolute w-2 h-2 rounded-full';
                p.style.background = ['#f4c430', '#ffdad4', '#e8913a'][Math.floor(Math.random() * 3)];
                p.style.left = '50%';
                p.style.top = '30%';
                p.style.transition = 'all 0.6s ease-out';
                document.getElementById('boost-particles').appendChild(p);

                requestAnimationFrame(() => {
                    const angle = Math.random() * Math.PI * 2;
                    const dist = 30 + Math.random() * 40;
                    p.style.transform =
                        `translate(${Math.cos(angle)*dist}px, ${Math.sin(angle)*dist - 20}px) scale(0)`;
                    p.style.opacity = '0';
                });

                setTimeout(() => p.remove(), 600);
            }

            updateUI();
        };
    })();
    </script>

    {{-- HERO SLIDER --}}
    @include('partials.hero-slider')

    {{-- DOTS + NAVBAR (BOTTOM FIXED) --}}
    <div
        class="nav-bottom-wrapper fixed bottom-4 left-1/2 -translate-x-1/2 z-[100] w-[92%] max-w-[720px] flex flex-col items-center gap-2.5">
        @include('partials.slide-dots')
        @include('partials.navbar')
    </div>

    {{-- OUR STORY PAGE --}}
    @include('partials.our-story')

    {{-- EXPERIENCE PAGE --}}
    @include('partials.experience')

    {{-- MENU PAGE --}}
    @include('partials.menu')

    {{-- 3D RUBIK PAGE TRANSITION SYSTEM --}}
    <script>
    let currentView = 'home';
    let isTransitioning = false;

    function transitionTo(pageId) {
        if (isTransitioning || currentView === pageId) return;
        isTransitioning = true;

        const pages = {
            'home': document.getElementById('hero-slider'),
            'our-story': document.getElementById('our-story-page'),
            'experience': document.getElementById('experience-page'),
            'menu': document.getElementById('menu-page')
        };

        const dotsContainer = document.querySelector('.slide-dots-wrapper');
        const current = pages[currentView];
        const next = pages[pageId];

        if (!current || !next) {
            isTransitioning = false;
            return;
        }

        // Prepare next page: start from right face (rotateY 90deg)
        next.style.transition = 'none';
        next.style.transform = 'perspective(1200px) rotateY(90deg) scale(0.92)';
        next.style.opacity = '0';
        next.style.pointerEvents = 'none';
        next.classList.remove('active');

        // Force reflow
        void next.offsetWidth;

        // Current page exits to left face (rotateY -90deg)
        current.style.transition = 'transform 0.85s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.55s ease';
        current.style.transform = 'perspective(1200px) rotateY(-90deg) scale(0.92)';
        current.style.opacity = '0';
        current.style.pointerEvents = 'none';

        if (current.classList.contains('active')) {
            current.classList.remove('active');
        }

        // Hide dots when leaving home
        if (dotsContainer && pageId !== 'home') {
            dotsContainer.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            dotsContainer.style.opacity = '0';
            dotsContainer.style.transform = 'translateY(10px)';
            dotsContainer.style.pointerEvents = 'none';
        }

        // Animate next page in from right to center
        requestAnimationFrame(() => {
            next.style.transition = 'transform 0.85s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.65s ease';
            next.style.transform = 'perspective(1200px) rotateY(0deg) scale(1)';
            next.style.opacity = '1';
            next.style.pointerEvents = 'auto';
            next.classList.add('active');

            setTimeout(() => {
                next.dispatchEvent(new CustomEvent('pageactivated'));
            }, 400);
        });

        setTimeout(() => {
            isTransitioning = false;
            currentView = pageId;
        }, 900);
    }

    function goHome() {
        if (isTransitioning || currentView === 'home') return;
        isTransitioning = true;

        const pages = {
            'home': document.getElementById('hero-slider'),
            'our-story': document.getElementById('our-story-page'),
            'experience': document.getElementById('experience-page'),
            'menu': document.getElementById('menu-page')
        };

        const dotsContainer = document.querySelector('.slide-dots-wrapper');
        const current = pages[currentView];
        const home = pages['home'];

        if (!current || !home) {
            isTransitioning = false;
            return;
        }

        // Current page exits to right
        current.style.transition = 'transform 0.85s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.55s ease';
        current.style.transform = 'perspective(1200px) rotateY(90deg) scale(0.92)';
        current.style.opacity = '0';
        current.style.pointerEvents = 'none';
        current.classList.remove('active');

        // Prepare home from left
        home.style.transition = 'none';
        home.style.transform = 'perspective(1200px) rotateY(-90deg) scale(0.92)';
        home.style.opacity = '0';
        home.style.pointerEvents = 'auto';
        void home.offsetWidth;

        // Show dots
        if (dotsContainer) {
            dotsContainer.style.transition = 'none';
            dotsContainer.style.opacity = '0';
            dotsContainer.style.transform = 'translateY(10px)';
            void dotsContainer.offsetWidth;
            dotsContainer.style.transition = 'opacity 0.5s ease 0.3s, transform 0.5s ease 0.3s';
            dotsContainer.style.opacity = '1';
            dotsContainer.style.transform = 'translateY(0)';
            dotsContainer.style.pointerEvents = 'auto';
        }

        requestAnimationFrame(() => {
            home.style.transition = 'transform 0.85s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.65s ease';
            home.style.transform = 'perspective(1200px) rotateY(0deg) scale(1)';
            home.style.opacity = '1';
        });

        setTimeout(() => {
            const homeLink = document.querySelector('.nav-link');
            if (homeLink && window.setActiveLink) {
                window.setActiveLink(homeLink);
            }
            isTransitioning = false;
            currentView = 'home';
        }, 900);
    }

    function openOurStory() {
        transitionTo('our-story');
    }

    function openExperience() {
        transitionTo('experience');
    }

    function openMenu() {
        transitionTo('menu');
    }
    </script>

</body>

</html>