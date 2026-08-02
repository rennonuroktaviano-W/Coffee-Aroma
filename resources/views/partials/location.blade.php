{{-- LOCATION / SANCTUARIES PAGE --}}
<div id="location-page"
    class="fixed inset-0 w-full h-full bg-[#412D15] text-[#e2e2e2] opacity-0 pointer-events-none z-10 overflow-y-auto transition-all duration-700 ease-out"
    style="transform: perspective(1200px) rotateY(90deg) scale(0.92); transform-origin: center center; will-change: transform, opacity;">

    <main class="w-full min-h-screen bg-[#412D15] relative">
        <div class="flex flex-col w-full text-[#e2e2e2] pb-32">
            <!-- Background overlays -->
            <div class="fixed inset-0 pointer-events-none z-0 mix-blend-overlay opacity-20">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <filter id="noiseFilterLocation">
                        <feTurbulence baseFrequency="0.65" numOctaves="3" stitchTiles="stitch" type="fractalNoise">
                        </feTurbulence>
                    </filter>
                    <rect filter="url(#noiseFilterLocation)" height="100%" width="100%"></rect>
                </svg>
            </div>
            <div
                class="fixed top-0 left-0 w-full h-[50vh] bg-gradient-to-b from-[#e1c19f]/10 to-transparent pointer-events-none z-0">
            </div>
            <div class="fixed top-[20%] right-[10%] w-[40vw] h-[40vw] rounded-full bg-[#e1c19f]/20 blur-[120px] pointer-events-none z-0 animate-pulse"
                style="animation-duration: 8s;"></div>
            <div class="fixed bottom-[10%] left-[5%] w-[30vw] h-[30vw] rounded-full bg-[#d7c3b4]/10 blur-[100px] pointer-events-none z-0 animate-pulse"
                style="animation-duration: 10s;"></div>

            <div class="max-w-[1280px] mx-auto px-5 md:px-16 relative z-10 pt-24 md:pt-32">
                <!-- Header -->
                <div class="mb-16 md:mb-24 flex flex-col md:flex-row justify-between items-end gap-8">
                    <div class="max-w-2xl">
                        <h1 class="font-display text-[#e1c19f] text-5xl md:text-7xl mb-6 tracking-tight leading-none uppercase"
                            style="font-family: 'Playfair Display', serif;">
                            Our Sanctuaries
                        </h1>
                        <p class="text-[#d1c4b9] max-w-xl text-lg md:text-xl font-light leading-relaxed">
                            Discover our curated spaces designed for contemplation, connection, and the meticulous craft
                            of exceptional coffee. Each location is a distinct architectural expression of our
                            philosophy.
                        </p>
                    </div>
                    <div
                        class="hidden md:flex items-center gap-4 text-[#e1c19f]/60 text-xs font-semibold uppercase tracking-widest [writing-mode:vertical-rl] rotate-180 h-32 justify-end">
                        <span>Aroma &amp; Alchemy</span>
                        <div class="w-[1px] h-12 bg-[#e1c19f]/30"></div>
                        <span>Since 2018</span>
                    </div>
                </div>

                <!-- Main Grid Locations & Map -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 min-h-[800px] relative">
                    <!-- Cards Column -->
                    <div class="lg:col-span-5 flex flex-col gap-6 relative z-20">
                        <div class="sticky top-8 md:top-32 h-[80vh] relative location-list pb-24"
                            style="scrollbar-width: none;">
                            <!-- SCBD Card -->
                            <button
                                class="location-card w-full text-left group absolute top-0 left-0 z-30 transition-all duration-700 ease-out focus:outline-none -rotate-2"
                                data-address="District 8, SCBD Lot 28, Jakarta" data-id="scbd" data-name="Jakarta SCBD"
                                data-phone="+62 21 555 0123" data-status="Open until 22:00">
                                <div class="absolute inset-0 bg-[#2a2a2a]/40 backdrop-blur-xl rounded-3xl transition-opacity duration-500 opacity-100"
                                    style="box-shadow: rgba(225, 193, 159, 0.4) 0px 0px 0px 1px inset, rgba(225, 193, 159, 0.2) 0px 30px 60px -15px, rgba(0, 0, 0, 0.5) 0px 20px 40px -10px;">
                                </div>
                                <div class="absolute inset-0 bg-[#1f1f1f]/60 backdrop-blur-md rounded-3xl transition-opacity duration-500 group-hover:opacity-0 opacity-0"
                                    style="box-shadow: inset 0 0 0 1px rgba(225,193,159,0.1);"></div>
                                <div class="relative p-6 flex flex-col gap-4 z-10">
                                    <div class="w-full h-48 rounded-2xl overflow-hidden relative mb-2">
                                        <div
                                            class="absolute inset-0 bg-[#353535]/20 mix-blend-overlay z-10 transition-opacity group-hover:opacity-0">
                                        </div>
                                        <div class="w-full h-full bg-cover bg-center transition-transform duration-1000 group-hover:scale-105"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1oxwoxXSxsmsPilyGSQhrfvwX5OTDR3iKG5NHnm2z_QLgtfyGKv8gMaCRxP8COztSIcXXgY_xvVX-tcpFwVRcF-2Oq0EyR1bMI7FubiVGHcZ3eOz95InXVbY-hhjcac_TymFVIYefNOyq3d4KASWsXnw2JQfBvSpjZyefODr-ZA6cG1vaU-tJnzIpDS-PSlSHM2KqWFcaoHOr3KTvqZDgFyGbuYZM2_VHbMLkypyjx_mnM8xExRXp-g');">
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="w-2 h-2 rounded-full bg-[#e1c19f] animate-pulse"></span>
                                                <span
                                                    class="text-xs font-semibold text-[#e1c19f] uppercase tracking-widest">Jakarta</span>
                                            </div>
                                            <h3 class="text-2xl mb-1 text-[#e2e2e2]"
                                                style="font-family: 'Playfair Display', serif;">SCBD District 8</h3>
                                            <p class="text-sm text-[#d1c4b9] flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[16px]">star</span>
                                                <span class="font-medium text-[#e1c19f]">4.9</span>
                                                <span class="opacity-50">(342 Reviews)</span>
                                            </p>
                                        </div>
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#412d15] flex items-center justify-center border border-[#e1c19f]/20 text-[#e1c19f] transition-transform group-hover:rotate-[-45deg] group-hover:bg-[#e1c19f] group-hover:text-[#402c14]">
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                            </button>

                            <!-- Dago Card -->
                            <button
                                class="location-card w-full text-left group absolute top-24 left-2 z-20 transition-all duration-700 ease-out focus:outline-none rotate-1"
                                data-address="Jl. Ir. H. Juanda No. 125, Bandung" data-id="dago"
                                data-name="Bandung Dago" data-phone="+62 22 555 4567" data-status="Open until 23:00">
                                <div class="absolute inset-0 bg-[#2a2a2a]/40 backdrop-blur-xl rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                                    style="box-shadow: rgba(225, 193, 159, 0.4) 0px 0px 0px 1px inset, rgba(225, 193, 159, 0.2) 0px 30px 60px -15px, rgba(0, 0, 0, 0.5) 0px 20px 40px -10px;">
                                </div>
                                <div class="absolute inset-0 bg-[#1f1f1f]/60 backdrop-blur-md rounded-3xl transition-opacity duration-500 group-hover:opacity-0"
                                    style="box-shadow: inset 0 0 0 1px rgba(225,193,159,0.1);"></div>
                                <div class="relative p-6 flex flex-col gap-4 z-10">
                                    <div class="w-full h-48 rounded-2xl overflow-hidden relative mb-2">
                                        <div
                                            class="absolute inset-0 bg-[#353535]/20 mix-blend-overlay z-10 transition-opacity group-hover:opacity-0">
                                        </div>
                                        <div class="w-full h-full bg-cover bg-center transition-transform duration-1000 group-hover:scale-105"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCZ8Pka1ITkJQylZuow1dr6ahydEAZ_0qFVp2lX92Xv7ZZrAQuQNOIffnekZhKJYWpV4EKgsMdpuk23QLDCVzAqSitLIeTcA6Ixd_vn-qt1eJvde1fd8fxFyZPd18CgRujeoTYvMVnkkjVOAmIoD762-lCWsXmfebaIIKDJBgjIHC4Gl7ZL6DisR2oCjbIid-XoNbWRCYTmAwGjihg4gsDTx5ZiT-A5YnS7Ej9UoD1Nw01d6wcgvmeZow');">
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="w-2 h-2 rounded-full bg-[#e1c19f]"></span>
                                                <span
                                                    class="text-xs font-semibold text-[#e1c19f] uppercase tracking-widest">Bandung</span>
                                            </div>
                                            <h3 class="text-2xl mb-1 text-[#e2e2e2]"
                                                style="font-family: 'Playfair Display', serif;">Dago Atas</h3>
                                            <p class="text-sm text-[#d1c4b9] flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[16px]">star</span>
                                                <span class="font-medium text-[#e1c19f]">4.8</span>
                                                <span class="opacity-50">(289 Reviews)</span>
                                            </p>
                                        </div>
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#412d15] flex items-center justify-center border border-[#e1c19f]/20 text-[#e1c19f] transition-transform group-hover:rotate-[-45deg] group-hover:bg-[#e1c19f] group-hover:text-[#402c14]">
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                            </button>

                            <!-- Bali Card -->
                            <button
                                class="location-card w-full text-left group absolute top-48 left-4 z-10 transition-all duration-700 ease-out focus:outline-none -rotate-1"
                                data-address="Jl. Kayu Aya No. 8, Seminyak, Bali" data-id="bali"
                                data-name="Bali Seminyak" data-phone="+62 361 555 8901" data-status="Open until 20:00">
                                <div class="absolute inset-0 bg-[#2a2a2a]/40 backdrop-blur-xl rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                                    style="box-shadow: rgba(225, 193, 159, 0.4) 0px 0px 0px 1px inset, rgba(225, 193, 159, 0.2) 0px 30px 60px -15px, rgba(0, 0, 0, 0.5) 0px 20px 40px -10px;">
                                </div>
                                <div class="absolute inset-0 bg-[#1f1f1f]/60 backdrop-blur-md rounded-3xl transition-opacity duration-500 group-hover:opacity-0"
                                    style="box-shadow: inset 0 0 0 1px rgba(225,193,159,0.1);"></div>
                                <div class="relative p-6 flex flex-col gap-4 z-10">
                                    <div class="w-full h-48 rounded-2xl overflow-hidden relative mb-2">
                                        <div
                                            class="absolute inset-0 bg-[#353535]/20 mix-blend-overlay z-10 transition-opacity group-hover:opacity-0">
                                        </div>
                                        <div class="w-full h-full bg-cover bg-center transition-transform duration-1000 group-hover:scale-105"
                                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOOZDNcxLjDeTXN-Q9gvcpIlITv_Xyv6Hr67QzByHxazUrJIUu02KrFaLFdfUBDIhsxNsDQw8RfUm_enO_swk8g6CcylN3UW9evUa84_qsEboWTimCqmUwO-sMF5-qgIECh_gmKxH239yHu_eQL65oNIFh3GqfBOHzSSCk6zjXvmvhhEjXZFkb-vzdkw4WfM6bp4ur7vEzt2PcnfCj4TVk8EdKrSA3vGieT3KmQu85gt8ePfssmNldlQ');">
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <div class="flex items-center gap-2 mb-1">
                                                <span class="w-2 h-2 rounded-full bg-[#e1c19f]"></span>
                                                <span
                                                    class="text-xs font-semibold text-[#e1c19f] uppercase tracking-widest">Bali</span>
                                            </div>
                                            <h3 class="text-2xl mb-1 text-[#e2e2e2]"
                                                style="font-family: 'Playfair Display', serif;">Seminyak Reserve</h3>
                                            <p class="text-sm text-[#d1c4b9] flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[16px]">star</span>
                                                <span class="font-medium text-[#e1c19f]">5.0</span>
                                                <span class="opacity-50">(512 Reviews)</span>
                                            </p>
                                        </div>
                                        <div
                                            class="w-12 h-12 rounded-full bg-[#412d15] flex items-center justify-center border border-[#e1c19f]/20 text-[#e1c19f] transition-transform group-hover:rotate-[-45deg] group-hover:bg-[#e1c19f] group-hover:text-[#402c14]">
                                            <span class="material-symbols-outlined">arrow_forward</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                    <!-- Map Preview Column -->
                    <div class="lg:col-span-7 relative flex flex-col h-[600px] lg:h-[80vh] lg:sticky lg:top-32">
                        <div
                            class="absolute inset-0 bg-[#e1c19f]/5 rounded-[40px] blur-2xl transform -rotate-3 scale-105 pointer-events-none">
                        </div>
                        <div class="relative w-full h-full rounded-[40px] bg-[#1b1b1b]/80 backdrop-blur-2xl flex flex-col overflow-hidden shadow-2xl"
                            style="box-shadow: inset 0 0 0 1px rgba(225,193,159,0.15), 0 30px 60px -20px rgba(0,0,0,0.8);">
                            <div
                                class="p-8 md:p-10 flex flex-col gap-2 z-20 relative bg-gradient-to-b from-[#1b1b1b] to-transparent">
                                <h2 class="text-primary text-4xl md:text-5xl transition-all duration-300 text-[#e1c19f]"
                                    id="active-location-name" style="font-family: 'Playfair Display', serif;">Jakarta
                                    SCBD</h2>
                                <div class="flex flex-wrap gap-x-6 gap-y-2 mt-2">
                                    <p class="text-[#d1c4b9] flex items-center gap-2" id="active-location-address">
                                        <span
                                            class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">location_on</span>
                                        <span>District 8, SCBD Lot 28, Jakarta</span>
                                    </p>
                                    <p class="text-[#d1c4b9] flex items-center gap-2" id="active-location-status">
                                        <span
                                            class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">schedule</span>
                                        <span>Open until 22:00</span>
                                    </p>
                                    <p class="text-[#d1c4b9] flex items-center gap-2" id="active-location-phone">
                                        <span
                                            class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">call</span>
                                        <span>+62 21 555 0123</span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex-grow relative w-full overflow-hidden mt-[-20px] rounded-b-[40px]">
                                <div
                                    class="absolute inset-0 bg-[#412d15] mix-blend-color z-10 pointer-events-none opacity-40">
                                </div>
                                <div class="w-full h-full bg-cover bg-center transition-opacity duration-500"
                                    id="map-container"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDubelsNFb4k-s8qICKzq4cD3K6PVP0tQoGBZWqfXnv1RxihksstQA_iM8Po-hFB0jZ_fyHf7RuLhB9iWTJXCg4ShbHSXVulPZ9dk62yo9mYKoRWtiLldciEwCNkb9KrNj__z1e7pzakA7qp23gGbQCJptKQqzknbq3-Xetbe5pXnPnRPv98EfVlvrltZXRrL7VCHW-TLS0Sta7W4h9wn46InxMF3-cqazSX4aHNqLUZmZ32yVPPFGwWA');">
                                </div>
                            </div>
                            <div class="absolute bottom-8 right-8 z-20">
                                <button
                                    class="px-8 py-4 bg-[#e1c19f] text-[#402c14] rounded-full text-xs font-semibold uppercase tracking-widest flex items-center gap-3 hover:bg-[#ffddb9] transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-1 duration-300">
                                    <span class="material-symbols-outlined text-[20px]">directions</span>
                                    Get Directions
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step Ritual Section -->
                <div class="mt-40 mb-20">
                    <div class="flex items-center gap-6 mb-16">
                        <div class="h-[1px] flex-grow bg-[#e1c19f]/20"></div>
                        <h3 class="text-[#e1c19f] text-3xl uppercase tracking-widest text-center px-4"
                            style="font-family: 'Playfair Display', serif;">The Ritual</h3>
                        <div class="h-[1px] flex-grow bg-[#e1c19f]/20"></div>
                    </div>
                    <div class="relative w-full max-w-5xl mx-auto hidden md:block">
                        <div class="absolute top-1/2 left-0 w-full h-[1px] bg-[#e1c19f]/10 -translate-y-1/2 z-0">
                            <div class="h-full bg-[#e1c19f] w-1/3 absolute top-0 left-0 animate-pulse"
                                style="box-shadow: 0 0 10px rgba(225,193,159,0.5);"></div>
                        </div>
                        <div class="flex justify-between items-center relative z-10">
                            <div class="flex flex-col items-center gap-6 group w-48">
                                <div
                                    class="w-16 h-16 rounded-full bg-[#353535] border border-[#e1c19f]/30 flex items-center justify-center text-[#e1c19f] group-hover:scale-110 group-hover:bg-[#e1c19f] group-hover:text-[#402c14] transition-all duration-300 shadow-[0_0_20px_rgba(225,193,159,0.1)]">
                                    <span class="material-symbols-outlined text-2xl">location_searching</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 block mb-2 uppercase tracking-widest">Step
                                        01</span>
                                    <h4 class="text-lg text-[#e2e2e2]" style="font-family: 'Playfair Display', serif;">
                                        Select Space</h4>
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-6 group w-48 translate-y-8">
                                <div
                                    class="w-16 h-16 rounded-full bg-[#353535] border border-[#e1c19f]/30 flex items-center justify-center text-[#e1c19f] group-hover:scale-110 group-hover:bg-[#e1c19f] group-hover:text-[#402c14] transition-all duration-300 shadow-[0_0_20px_rgba(225,193,159,0.1)]">
                                    <span class="material-symbols-outlined text-2xl">coffee_maker</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 block mb-2 uppercase tracking-widest">Step
                                        02</span>
                                    <h4 class="text-lg text-[#e2e2e2]" style="font-family: 'Playfair Display', serif;">
                                        The Craft</h4>
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-6 group w-48">
                                <div
                                    class="w-16 h-16 rounded-full bg-[#353535] border border-[#e1c19f]/30 flex items-center justify-center text-[#e1c19f] group-hover:scale-110 group-hover:bg-[#e1c19f] group-hover:text-[#402c14] transition-all duration-300 shadow-[0_0_20px_rgba(225,193,159,0.1)]">
                                    <span class="material-symbols-outlined text-2xl">emoji_people</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 block mb-2 uppercase tracking-widest">Step
                                        03</span>
                                    <h4 class="text-lg text-[#e2e2e2]" style="font-family: 'Playfair Display', serif;">
                                        Connection</h4>
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-6 group w-48 translate-y-8">
                                <div
                                    class="w-16 h-16 rounded-full bg-[#353535] border border-[#e1c19f]/30 flex items-center justify-center text-[#e1c19f] group-hover:scale-110 group-hover:bg-[#e1c19f] group-hover:text-[#402c14] transition-all duration-300 shadow-[0_0_20px_rgba(225,193,159,0.1)]">
                                    <span class="material-symbols-outlined text-2xl">weekend</span>
                                </div>
                                <div class="text-center">
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 block mb-2 uppercase tracking-widest">Step
                                        04</span>
                                    <h4 class="text-lg text-[#e2e2e2]" style="font-family: 'Playfair Display', serif;">
                                        Immersion</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alchemy Section -->
                <div class="mt-40 mb-32">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="flex flex-col gap-8 z-10">
                            <h3 class="text-[#e1c19f] text-4xl uppercase tracking-widest"
                                style="font-family: 'Playfair Display', serif;">The Alchemy of Brewing</h3>
                            <p class="text-[#d1c4b9] text-lg font-light leading-relaxed">
                                Our process is a meticulous dance between science and soul. Every bean is treated with
                                the reverence of an ancient relic, weighed to the milligram, and bloomed with
                                precision-temperature water to extract the peak aromatics.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                                <div
                                    class="bg-[#353535]/40 backdrop-blur-md rounded-2xl p-6 border border-[#e1c19f]/20 flex flex-col items-center justify-center text-center shadow-[0_4px_24px_rgba(0,0,0,0.2)]">
                                    <span class="material-symbols-outlined text-[#e1c19f] mb-2 text-3xl">scale</span>
                                    <span class="text-2xl text-[#e2e2e2]"
                                        style="font-family: 'Playfair Display', serif;">18g</span>
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 uppercase tracking-widest mt-1">Dosage</span>
                                </div>
                                <div
                                    class="bg-[#353535]/40 backdrop-blur-md rounded-2xl p-6 border border-[#e1c19f]/20 flex flex-col items-center justify-center text-center shadow-[0_4px_24px_rgba(0,0,0,0.2)]">
                                    <span
                                        class="material-symbols-outlined text-[#e1c19f] mb-2 text-3xl">thermostat</span>
                                    <span class="text-2xl text-[#e2e2e2]"
                                        style="font-family: 'Playfair Display', serif;">94°C</span>
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 uppercase tracking-widest mt-1">Extraction</span>
                                </div>
                                <div
                                    class="bg-[#353535]/40 backdrop-blur-md rounded-2xl p-6 border border-[#e1c19f]/20 flex flex-col items-center justify-center text-center shadow-[0_4px_24px_rgba(0,0,0,0.2)]">
                                    <span class="material-symbols-outlined text-[#e1c19f] mb-2 text-3xl">timer</span>
                                    <span class="text-2xl text-[#e2e2e2]"
                                        style="font-family: 'Playfair Display', serif;">2:45</span>
                                    <span
                                        class="text-xs font-semibold text-[#e1c19f]/60 uppercase tracking-widest mt-1">Brew
                                        Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative h-[600px] w-full rounded-[40px] overflow-hidden group">
                            <div
                                class="absolute inset-0 bg-[#e1c19f]/10 mix-blend-overlay z-10 transition-opacity group-hover:opacity-0">
                            </div>
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-1000 group-hover:scale-105"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBgQrIfYlg5NBtOtYnDRrnxsLLlwNLkoRu5K8xVKPCxuqLUoqFybhBIhRvAAGlB0IprB92oL6Cb4M77EeinASVpkEQySjSHRioNrm7c_bS1MffYn_N-z2TjtS_OfgObuBIaE2URHy6MoocEBs-8kS5WEy2cs_PaQp_KKh9lY57lGW2DuvzV7Gk8td0Id8KGZ1inYhmmtjYGgnT2uvHcBiKe7mUqHY9YkagpucFd1YE2ZOJRur1OwAYuAw');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const locationList = document.querySelector('#location-page .location-list');
    const cards = document.querySelectorAll('#location-page .location-card');
    const mapContainer = document.getElementById('map-container');
    const nameEl = document.getElementById('active-location-name');
    const addressEl = document.getElementById('active-location-address');
    const statusEl = document.getElementById('active-location-status');
    const phoneEl = document.getElementById('active-location-phone');

    if (locationList && cards.length > 0) {
        locationList.addEventListener('mouseenter', () => {
            cards.forEach((card, index) => {
                let tx = 0,
                    ty = 0,
                    rot = 0;
                if (index === 0) {
                    tx = -30;
                    ty = -60;
                    rot = -8;
                } else if (index === 1) {
                    tx = 40;
                    ty = 0;
                    rot = 5;
                } else if (index === 2) {
                    tx = -20;
                    ty = 60;
                    rot = -4;
                }
                card.style.transform = `translate(${tx}px, ${ty}px) rotate(${rot}deg)`;
                card.style.zIndex = '50';
            });
        });

        locationList.addEventListener('mouseleave', () => {
            cards.forEach((card) => {
                card.style.transform = '';
                card.style.zIndex = '';
            });
        });
    }

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(c => {
                c.querySelector('.bg-\\[\\#2a2a2a\\]\\/40')?.classList.remove(
                    'opacity-100');
                c.querySelector('.bg-\\[\\#1f1f1f\\]\\/60')?.classList.remove(
                    'opacity-0');
            });

            card.querySelector('.bg-\\[\\#2a2a2a\\]\\/40')?.classList.add('opacity-100');
            card.querySelector('.bg-\\[\\#1f1f1f\\]\\/60')?.classList.add('opacity-0');

            if (nameEl) nameEl.textContent = card.dataset.name;
            if (addressEl) addressEl.innerHTML =
                `<span class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">location_on</span><span>${card.dataset.address}</span>`;
            if (statusEl) statusEl.innerHTML =
                `<span class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">schedule</span><span>${card.dataset.status}</span>`;
            if (phoneEl) phoneEl.innerHTML =
                `<span class="material-symbols-outlined text-[#e1c19f]/70 text-[20px]">call</span><span>${card.dataset.phone}</span>`;
        });
    });
});
</script>