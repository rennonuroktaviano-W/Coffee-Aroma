<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aroma &amp; Alchemy | Jade Ritual</title>

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600&amp;family=Playfair+Display:wght@500;600;700&amp;display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    jade: {
                        'background': '#131313',
                        'surface': '#131313',
                        'on-surface': '#e5e2e1',
                        'on-surface-variant': '#c2c8c2',
                        'on-background': '#e5e2e1',
                        'primary': '#b4ccbb',
                        'on-primary': '#203529',
                        'primary-container': '#1a2f23',
                        'primary-fixed': '#d0e9d6',
                        'on-secondary-container': '#bab5a9',
                        'outline': '#8c928c',
                        'outline-variant': '#424843',
                    }
                },
                fontFamily: {
                    body: ["Source Sans 3", "sans-serif"],
                    display: ["Playfair Display", "serif"]
                }
            }
        }
    }
    </script>
    <style>
    /* Hide scrollbar */
    ::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<body class="bg-jade-background text-jade-on-surface font-body min-h-screen overflow-x-hidden antialiased">
    <main
        class="min-h-screen flex items-center justify-center relative p-6 bg-[#182a20] text-jade-on-surface font-body overflow-hidden">

        <!-- Background Decoration -->
        <div
            class="absolute inset-0 pointer-events-none z-0 flex items-center justify-center opacity-[0.08] text-jade-primary">
            <svg class="w-full h-full max-w-[900px]" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M44.7,-76.4C58.1,-69.2,69.5,-57.4,77.3,-43.8C85.1,-30.2,89.2,-15.1,87.3,-0.6C85.5,13.9,77.7,27.7,68.1,38.5C58.5,49.2,47,56.9,34.8,63.9C22.6,70.9,9.8,77.2,-3.3,82.9C-16.4,88.6,-29.8,93.7,-41.8,89.2C-53.8,84.7,-64.4,70.6,-71.4,56.3C-78.4,42,-81.8,27.5,-82.1,13.1C-82.4,-1.3,-79.6,-15.6,-73.4,-28.4C-67.2,-41.2,-57.6,-52.5,-45.6,-60.7C-33.6,-68.9,-19.2,-74,-2.2,-70.2C14.8,-66.4,29.6,-53.7,44.7,-76.4Z"
                    fill="currentColor" transform="translate(100 100)"></path>
            </svg>
        </div>

        <div class="w-full max-w-[1200px] grid grid-cols-1 md:grid-cols-12 items-center gap-6 relative z-10">

            <!-- Left Column: Branding & Intro -->
            <div class="order-2 md:order-1 md:col-span-4 flex flex-col gap-12">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <span class="h-[1px] w-8 bg-jade-primary"></span>
                        <span class="text-[12px] font-semibold text-jade-primary uppercase tracking-[0.2em]">The
                            Ritual</span>
                    </div>
                    <h1
                        class="font-display text-[clamp(36px,5vw,64px)] leading-[1.1] text-jade-on-background font-bold tracking-[-0.02em]">
                        Jade Ritual
                    </h1>
                </div>

                <div class="max-w-[380px] flex flex-col gap-6">
                    <p class="text-[18px] text-jade-on-surface-variant leading-relaxed">
                        A fusion of ancient tradition and modern alchemy. Experience the depth of hand-picked tea leaves
                        and velvety microfoam.
                    </p>
                    <p class="text-[14px] text-jade-on-secondary-container italic opacity-80 leading-relaxed">
                        Crafted for those who understand that perfection lies in the balance of temperature, texture,
                        and timing.
                    </p>
                </div>

                <div>
                    <button
                        class="px-10 py-5 bg-jade-primary text-jade-on-primary border-none text-[12px] font-semibold uppercase tracking-[0.15em] cursor-pointer rounded-[0.125rem] transition-all duration-200 hover:-translate-y-1 hover:bg-jade-primary-fixed active:translate-y-0">
                        Experience the Fusion
                    </button>
                </div>
            </div>

            <!-- Center Column: Focal Image -->
            <div class="order-1 md:order-2 md:col-span-4 flex justify-center items-center py-12 md:py-0">
                <div class="relative w-full max-w-[340px] aspect-square">
                    <div class="absolute inset-0 bg-[#b4ccbb]/20 blur-[80px] rounded-full scale-90"></div>
                    <img alt="Artisan matcha latte"
                        class="hero-image relative z-10 w-full h-full object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.6)] scale-[1.25] transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] hover:scale-[1.3]"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo7QiJ2d6JZZ-UOPeneNpSQvZUpMG5Hvqf-UWXxx5UPH5PysMBlZq5K5abZ99MAkJBR4RRckYtAekHSd8-DBXXS6Uj7Fbs2eBhMpiH463extOXRxPIUuEdNgdo2N-hyOSqxKMTCmN50dm4fnDoLHZqjnfx9qvDYo8QDTZ7br1fEcTiE8b7ovInYtVx75V9zgybNsI_SoOtfQ6SXPEXWICUdxZN-C6LUzTIA1EZ4xAXIoNluCOPdHPcgg" />
                </div>
            </div>

            <!-- Right Column: Technical Details -->
            <div class="order-3 md:order-3 md:col-span-4 flex flex-col gap-[64px] md:items-end">
                <div class="w-full max-w-[240px] flex flex-col gap-12">
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(140,146,140,0.15)] pl-6 md:pl-0 md:pr-6 py-2 md:text-right">
                        <span
                            class="block text-[12px] font-semibold text-jade-outline uppercase tracking-[0.15em] mb-2">Temperature</span>
                        <span class="font-display text-[clamp(24px,3vw,32px)] text-jade-on-surface font-semibold">80°C
                            Umami</span>
                    </div>
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(140,146,140,0.15)] pl-6 md:pl-0 md:pr-6 py-2 md:text-right">
                        <span
                            class="block text-[12px] font-semibold text-jade-outline uppercase tracking-[0.15em] mb-2">Texture</span>
                        <span
                            class="font-display text-[clamp(24px,3vw,32px)] text-jade-on-surface font-semibold">Whisked
                            Perfection</span>
                    </div>
                    <div
                        class="border-l md:border-l-0 md:border-r border-[rgba(140,146,140,0.15)] pl-6 md:pl-0 md:pr-6 py-2 md:text-right">
                        <span
                            class="block text-[12px] font-semibold text-jade-outline uppercase tracking-[0.15em] mb-2">Origin</span>
                        <span class="font-display text-[clamp(24px,3vw,32px)] text-jade-on-surface font-semibold">Uji,
                            Japan</span>
                    </div>
                </div>

                <div
                    class="hidden md:block [writing-mode:vertical-rl] text-[12px] font-semibold text-[rgba(180,204,187,0.4)] uppercase tracking-[0.5em] pt-8 select-none">
                    Ceremonial Grade • Hand-Picked • Obsidian Leaf
                </div>
            </div>

        </div>
    </main>

    <script>
    // Subtle parallax effect on mouse move
    document.addEventListener('mousemove', (e) => {
        const img = document.querySelector('.hero-image');
        if (img && window.innerWidth > 768) {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            img.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.25)`;
        }
    });
    </script>
</body>

</html>