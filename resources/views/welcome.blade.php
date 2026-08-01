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

    {{-- OUR STORY PAGE --}}
    @include('partials.our-story')

    {{-- EXPERIENCE PAGE --}}
    @include('partials.experience')

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
            'experience': document.getElementById('experience-page')
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

            // Trigger internal page animations
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
            'experience': document.getElementById('experience-page')
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

    // Legacy wrappers
    function openOurStory() {
        transitionTo('our-story');
    }

    function openExperience() {
        transitionTo('experience');
    }
    </script>

</body>

</html>