<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aroma &amp; Alchemy | The Ritual</title>

    <!-- External Fonts & Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@100..900&family=Playfair+Display:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        primary: '#ffdad4',
                        'on-primary': '#271310',
                        'primary-container': '#3e2723',
                        'on-primary-container': '#ae8d87',
                        secondary: '#655d5a',
                        'on-secondary-container': '#6b6360',
                        surface: '#3e2723',
                        'on-surface': '#f4eceb',
                        'on-surface-variant': '#e8e1df',
                        background: '#3e2723',
                        'on-background': '#ffffff',
                        outline: '#827472',
                        'outline-variant': '#d3c3c0',
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
    <style>
    html,
    body {
        height: 100%;
        overflow: hidden;
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<body class="bg-brand-background text-brand-on-surface font-body h-screen w-screen overflow-hidden antialiased">
    <main class="h-full w-full flex items-center justify-center relative p-4 md:p-6">

        <!-- Background Decoration -->
        <div
            class="absolute inset-0 pointer-events-none z-0 flex items-center justify-center opacity-[0.03] text-brand-primary">
            <svg class="w-full h-full max-w-[600px]" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M44.7,-76.4C58.1,-69.2,69.5,-57.4,77.3,-43.8C85.1,-30.2,89.2,-15.1,87.3,-0.6C85.5,13.9,77.7,27.7,68.1,38.5C58.5,49.2,47,56.9,34.8,63.9C22.6,70.9,9.8,77.2,-3.3,82.9C-16.4,88.6,-29.8,93.7,-41.8,89.2C-53.8,84.7,-64.4,70.6,-71.4,56.3C-78.4,42,-81.8,27.5,-82.1,13.1C-82.4,-1.3,-79.6,-15.6,-73.4,-28.4C-67.2,-41.2,-57.6,-52.5,-45.6,-60.7C-33.6,-68.9,-19.2,-74,-2.2,-70.2C14.8,-66.4,29.6,-53.7,44.7,-76.4Z"
                    fill="currentColor" transform="translate(100 100)"></path>
            </svg>
        </div>

        <div class="w-full max-w-[1100px] grid grid-cols-1 md:grid-cols-12 items-center gap-4 md:gap-6 relative z-10">

            <!-- Left Column: Branding & Intro -->
            <div class="order-2 md:order-1 md:col-span-4 flex flex-col gap-5 md:gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-3 md:mb-4">
                        <span class="h-[1px] w-6 bg-brand-primary"></span>
                        <span
                            class="text-[10px] md:text-[11px] font-semibold text-brand-primary uppercase tracking-[0.2em]">The
                            Ritual</span>
                    </div>
                    <h1
                        class="font-display text-[clamp(26px,4vw,48px)] leading-[1.1] text-brand-on-background font-bold tracking-[-0.02em]">
                        Aroma &amp; Alchemy
                    </h1>
                </div>

                <div class="max-w-[340px] flex flex-col gap-3 md:gap-4">
                    <p class="text-[14px] md:text-[15px] text-brand-on-surface-variant leading-relaxed">
                        Experience the perfect balance of hand-roasted beans and velvety microfoam. A moment of
                        stillness in every sip.
                    </p>
                    <p class="text-[11px] md:text-[12px] text-brand-secondary italic opacity-80 leading-relaxed">
                        Crafted for those who understand that coffee isn't just a drink, but a dialogue between earth
                        and water.
                    </p>
                </div>

                <div>
                    <button
                        class="px-7 py-3 bg-brand-primary text-brand-on-primary border-none text-[11px] font-semibold uppercase tracking-[0.15em] cursor-pointer transition-transform duration-200 hover:-translate-y-1 active:translate-y-0">
                        Discover the Roast
                    </button>
                </div>
            </div>

            <!-- Center Column: Focal Image -->
            <div class="order-1 md:order-2 md:col-span-4 flex justify-center items-center">
                <div class="relative w-full max-w-[240px] md:max-w-[280px] aspect-square">
                    <div class="absolute inset-0 bg-[rgba(62,39,35,0.2)] blur-[60px] rounded-full scale-90"></div>
                    <img alt="Artisan coffee cup"
                        class="hero-image relative z-10 w-full h-full object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)] scale-[1.15] transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] hover:scale-[1.2]"
                        src="https://lh3.googleusercontent.com/aida/AP1WRLt1Svp0RT3-iycvTrTvG6-LCvaQ04UC3rVAoj921ukixET0kQrhQcEDwiTCe7K2XzUDKOK6HE2bakNcTVxnnOaJJNHnNvSSbiKTk7hKWjWUe2SuZPfpAk75VrWchUhEIVdA6FmkhNf3rwEtalb7r0uFwpvnipU5gBlwzuCnbhSUgOMtiVO-InIuDSuWn81vFlHHWj-w42qk29Mj1IffFGnpNgv2Dz_lNzeJ11zzS18BUBKUJE9RCEUMxTKq" />
                </div>
            </div>

            <!-- Right Column: Technical Details -->
            <div class="order-3 md:order-3 md:col-span-4 flex flex-col gap-6 md:gap-8 md:items-end">
                <div class="w-full max-w-[200px] flex flex-col gap-6 md:gap-8">
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(211,195,192,0.15)] pl-4 md:pl-0 md:pr-4 py-1 md:text-right">
                        <span
                            class="block text-[10px] md:text-[11px] font-semibold text-brand-outline uppercase tracking-[0.15em] mb-1">Temperature</span>
                        <span
                            class="font-display text-[clamp(18px,2.5vw,26px)] text-brand-on-surface font-semibold">68°C
                            Precision</span>
                    </div>
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(211,195,192,0.15)] pl-4 md:pl-0 md:pr-4 py-1 md:text-right">
                        <span
                            class="block text-[10px] md:text-[11px] font-semibold text-brand-outline uppercase tracking-[0.15em] mb-1">Texture</span>
                        <span
                            class="font-display text-[clamp(18px,2.5vw,26px)] text-brand-on-surface font-semibold">Silken
                            Cloud</span>
                    </div>
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(211,195,192,0.15)] pl-4 md:pl-0 md:pr-4 py-1 md:text-right">
                        <span
                            class="block text-[10px] md:text-[11px] font-semibold text-brand-outline uppercase tracking-[0.15em] mb-1">Origin</span>
                        <span
                            class="font-display text-[clamp(18px,2.5vw,26px)] text-brand-on-surface font-semibold">Ethiopia</span>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
    // Subtle parallax effect on mouse move
    document.addEventListener('mousemove', (e) => {
        const img = document.querySelector('.hero-image');
        if (img && window.innerWidth > 768) {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.008;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.008;
            img.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.15)`;
        }
    });
    </script>
</body>

</html>