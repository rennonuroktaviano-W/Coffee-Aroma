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

</body>

</html>