<!-- MENU -->

<div id="menu-page" class="absolute inset-0 z-30 opacity-0 pointer-events-none"
    style="transform: perspective(1200px) rotateY(90deg) scale(0.92); transform-origin: center left; backface-visibility: hidden;">

    <!-- Background matching hero1 style -->
    <div class="absolute inset-0 bg-[#3e2723] overflow-hidden">
        <!-- Ambient radial glow -->
        <div class="absolute inset-0 pointer-events-none"
            style="background: radial-gradient(circle at 50% 50%, rgba(255,220,180,0.04) 0%, transparent 60%);">
        </div>
        <!-- Top ambient glow -->
        <div
            class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-[#C89B6D]/[0.04] rounded-full blur-[120px] pointer-events-none">
        </div>
        {{-- Bottom ambient glow -- 
        <div
            class="absolute -bottom-32 right-1/4 w-[500px] h-[400px] bg-[#C89B6D]/[0.03] rounded-full blur-[100px] pointer-events-none">
        </div>
        {{-- Floating particles --}}
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
    </div>

    {{-- Scrollable Content --}}
    <div id="menu-scroll" class="relative w-full h-full overflow-y-auto overflow-x-hidden">

        {{-- Top fade line --}}
        <div class="sticky top-0 z-20 h-[1px] bg-gradient-to-r from-transparent via-[#C89B6D]/20 to-transparent"></div>

        <div class="min-h-full px-5 md:px-10 lg:px-16 py-20 md:py-28">
            <div class="max-w-7xl mx-auto">

                {{-- HEADER --}}
                <div class="text-center mb-12 md:mb-16">
                    <div class="reveal-item mb-5">
                        <span
                            class="inline-block px-3 py-1 rounded-full border border-[#C89B6D]/20 bg-[#C89B6D]/5 text-[10px] font-semibold text-[#C89B6D] uppercase tracking-[0.35em] font-body">
                            Experimental Series 01
                        </span>
                    </div>
                    <h1
                        class="reveal-item font-display text-4xl md:text-6xl lg:text-7xl text-white font-medium tracking-tight mb-4">
                        Our Menu
                    </h1>
                    <p class="reveal-item text-[15px] md:text-[17px] text-white/40 font-body font-light italic">
                        A documented experiment in flavor.
                    </p>
                </div>

                {{-- FILTER TOOLBAR --}}
                <div class="reveal-item mb-10 md:mb-14">
                    <div class="flex flex-col lg:flex-row items-stretch lg:items-center gap-4 lg:gap-6">

                        {{-- Search --}}
                        <div class="relative shrink-0">
                            <span
                                class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-white/30 text-[18px]">search</span>
                            <input type="text" id="menu-search" placeholder="Search the archives..."
                                class="w-full lg:w-[260px] pl-10 pr-4 py-2.5 rounded-full bg-white/[0.04] border border-white/[0.08] text-[12px] text-white placeholder-white/25 font-body focus:outline-none focus:border-[#C89B6D]/30 focus:bg-white/[0.06] transition-all">
                        </div>

                        {{-- Category Pills --}}
                        <div class="flex-1 overflow-x-auto pb-1 lg:pb-0 scrollbar-hide">
                            <div class="flex items-center gap-2 min-w-max" id="category-filters">
                                <button data-filter="all"
                                    class="filter-pill active relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-[#C89B6D] text-[#3e2723]">All</button>
                                <button data-filter="espresso"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Espresso</button>
                                <button data-filter="latte"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Latte</button>
                                <button data-filter="manual"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Manual
                                    Brew</button>
                                <button data-filter="signature"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Signature</button>
                                <button data-filter="cold"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Cold
                                    Brew</button>
                                <button data-filter="tea"
                                    class="filter-pill relative overflow-hidden px-4 py-1.5 rounded-full text-[11px] font-semibold uppercase tracking-wider transition-all duration-300 bg-white/[0.04] text-white/50 border border-white/[0.08] hover:text-white hover:border-white/[0.15]">Tea</button>
                            </div>
                        </div>

                        {{-- Price Slider --}}
                        <div class="flex items-center gap-3 shrink-0">
                            <span class="material-symbols-outlined text-white/30 text-[16px]">payments</span>
                            <input type="range" id="price-range" min="0" max="100" value="100"
                                class="w-24 h-[3px] rounded-full appearance-none bg-white/10 accent-[#C89B6D] cursor-pointer">
                            <span id="price-label" class="text-[11px] text-white/40 font-body font-medium w-10">Rp
                                100K+</span>
                        </div>
                    </div>
                </div>

                {{-- MENU GRID --}}
                <div id="menu-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

                    {{-- Card 1 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="signature" data-price="38000"
                        data-name="alchemy signature latte" data-id="alchemy">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?w=600&h=750&fit=crop"
                                    alt="Alchemy Signature Latte"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.9</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Alchemy
                                        Signature Latte</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        38K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Best
                                        Seller</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Ethiopian</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[60%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Medium</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="espresso" data-price="25000"
                        data-name="midnight espresso" data-id="midnight">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600&h=750&fit=crop"
                                    alt="Midnight Espresso"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">5.0</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Midnight
                                        Espresso</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        25K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Best
                                        Seller</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Brazil</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[90%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Strong</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="latte" data-price="42000"
                        data-name="caramel cloud latte" data-id="caramel">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600&h=750&fit=crop"
                                    alt="Caramel Cloud Latte"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.8</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Caramel
                                        Cloud Latte</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        42K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Signature</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[40%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Mild</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="latte" data-price="45000"
                        data-name="tiramisu latte" data-id="tiramisu">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=600&h=750&fit=crop"
                                    alt="Tiramisu Latte"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.7</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Tiramisu
                                        Latte</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        45K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Dessert</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[50%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Medium</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 5 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="cold" data-price="40000"
                        data-name="velvet cold brew" data-id="velvet">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1517701604599-bb29b5dd7359?w=600&h=750&fit=crop"
                                    alt="Velvet Cold Brew"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.9</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Velvet Cold
                                        Brew</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        40K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Cold
                                        Brew</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Oat
                                        Milk</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[75%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Bold</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 6 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="manual" data-price="35000"
                        data-name="v60 ethiopian" data-id="v60">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?w=600&h=750&fit=crop"
                                    alt="V60 Ethiopian"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.6</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">V60
                                        Ethiopian</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        35K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Manual
                                        Brew</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Floral</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[35%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Light</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 7 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="tea" data-price="32000"
                        data-name="yuzu matcha fizz" data-id="yuzu">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&h=750&fit=crop"
                                    alt="Yuzu Matcha Fizz"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.8</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Yuzu Matcha
                                        Fizz</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        32K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Tea</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Seasonal</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[25%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Light</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card 8 --}}
                    <div class="menu-item reveal-item group cursor-pointer" data-category="signature" data-price="48000"
                        data-name="spiced mocha" data-id="spiced">
                        <div
                            class="relative rounded-2xl overflow-hidden bg-[#1a120e] border border-white/[0.06] transition-all duration-500 hover:border-[#C89B6D]/30 hover:-translate-y-2 hover:shadow-[0_20px_50px_-12px_rgba(200,155,109,0.2)] hover:ring-1 hover:ring-[#C89B6D]/20">
                            <div class="relative aspect-[4/5] overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?w=600&h=750&fit=crop"
                                    alt="Spiced Mocha"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-[#1a120e]/30 to-transparent">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>
                                <div
                                    class="absolute top-3 right-3 flex items-center gap-1 px-2 py-1 rounded-full bg-black/50 backdrop-blur-md border border-white/10">
                                    <span class="material-symbols-outlined text-[12px] text-[#C89B6D]">star</span>
                                    <span class="text-[10px] text-white font-semibold font-body">4.7</span>
                                </div>
                            </div>
                            <div class="relative p-5 -mt-8">
                                <div class="flex items-start justify-between gap-2 mb-3">
                                    <h3 class="font-display text-[15px] text-white font-medium leading-snug">Spiced
                                        Mocha</h3>
                                    <span class="text-[13px] text-[#C89B6D] font-semibold font-body shrink-0">Rp
                                        48K</span>
                                </div>
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Signature</span>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-semibold uppercase tracking-wider text-white/50 bg-white/[0.05] border border-white/[0.08]">Warm</span>
                                </div>
                                <div class="mb-5">
                                    <div class="flex items-center justify-between mb-1.5">
                                        <div class="h-[2px] flex-1 bg-white/[0.08] rounded-full overflow-hidden mr-3">
                                            <div
                                                class="h-full w-[70%] bg-gradient-to-r from-[#C89B6D]/60 to-[#C89B6D] rounded-full">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[9px] text-white/30 uppercase tracking-wider font-body">Bold</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2.5 rounded-lg border border-white/[0.12] text-[10px] font-bold uppercase tracking-[0.2em] text-white/70 hover:bg-[#C89B6D] hover:text-[#3e2723] hover:border-[#C89B6D] transition-all duration-300 flex items-center justify-center gap-1.5 group/btn">
                                    <span>View Details</span>
                                    <span
                                        class="material-symbols-outlined text-[13px] group-hover/btn:translate-x-0.5 transition-transform duration-300">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Empty state --}}
                <div id="menu-empty" class="hidden text-center py-20">
                    <span class="material-symbols-outlined text-white/20 text-5xl mb-4">search_off</span>
                    <p class="text-white/40 font-body text-sm">No offerings match your ritual.</p>
                </div>

            </div>
        </div>
    </div>

    {{-- MENU DETAIL MODAL --}}
    <div id="menu-modal"
        class="fixed inset-0 z-[200] flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" id="menu-modal-backdrop"></div>
        <div id="menu-modal-content"
            class="relative w-[92%] max-w-lg max-h-[85vh] overflow-y-auto rounded-3xl bg-[#1a120e] border border-white/[0.08] shadow-[0_25px_80px_-20px_rgba(0,0,0,0.8)] transform scale-95 opacity-0 transition-all duration-300">

            {{-- Close button --}}
            <button id="menu-modal-close"
                class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-white/[0.06] border border-white/[0.1] flex items-center justify-center text-white/50 hover:text-white hover:bg-white/12 transition-all duration-300">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>

            {{-- Modal Image --}}
            <div class="relative aspect-[16/10] overflow-hidden rounded-t-3xl">
                <img id="modal-img" src="" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-[#1a120e] via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-5 right-5">
                    <div class="flex items-center gap-2 mb-2">
                        <span id="modal-tag"
                            class="px-2.5 py-0.5 rounded-full text-[9px] font-semibold uppercase tracking-wider text-[#C89B6D] bg-[#C89B6D]/10 border border-[#C89B6D]/20"></span>
                    </div>
                    <h2 id="modal-title" class="font-display text-2xl md:text-3xl text-white font-medium"></h2>
                </div>
            </div>

            {{-- Modal Body --}}
            <div class="p-6 md:p-8">
                {{-- Price & Rating --}}
                <div class="flex items-center justify-between mb-6 pb-6 border-b border-white/[0.06]">
                    <div>
                        <span class="text-[10px] text-white/30 uppercase tracking-wider font-body">Price</span>
                        <div id="modal-price" class="text-xl text-[#C89B6D] font-semibold font-body"></div>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] text-white/30 uppercase tracking-wider font-body">Rating</span>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px] text-[#C89B6D]">star</span>
                            <span id="modal-rating" class="text-white font-semibold font-body"></span>
                        </div>
                    </div>
                </div>

                {{-- Description --}}
                <div class="mb-6">
                    <h3 class="text-[10px] text-white/40 uppercase tracking-[0.25em] font-body font-semibold mb-3">
                        Description</h3>
                    <p id="modal-desc" class="text-[13px] text-white/60 leading-[1.8] font-body font-light"></p>
                </div>

                {{-- Ingredients --}}
                <div class="mb-6">
                    <h3 class="text-[10px] text-white/40 uppercase tracking-[0.25em] font-body font-semibold mb-3">
                        Ingredients</h3>
                    <div id="modal-ingredients" class="flex flex-wrap gap-2"></div>
                </div>

                {{-- How It's Made --}}
                <div class="mb-6">
                    <h3 class="text-[10px] text-white/40 uppercase tracking-[0.25em] font-body font-semibold mb-3">The
                        Ritual</h3>
                    <p id="modal-ritual" class="text-[13px] text-white/60 leading-[1.8] font-body font-light"></p>
                </div>

                {{-- Intensity --}}
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-2">
                        <span
                            class="text-[10px] text-white/40 uppercase tracking-[0.25em] font-body font-semibold">Intensity</span>
                        <span id="modal-intensity-label"
                            class="text-[10px] text-[#C89B6D] uppercase tracking-wider font-body"></span>
                    </div>
                    <div class="h-[3px] bg-white/[0.06] rounded-full overflow-hidden">
                        <div id="modal-intensity-bar"
                            class="h-full bg-gradient-to-r from-[#C89B6D]/40 to-[#C89B6D] rounded-full transition-all duration-1000 w-0">
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <button
                    class="w-full py-3.5 rounded-xl bg-[#C89B6D] text-[#3e2723] font-bold text-[11px] uppercase tracking-wider hover:bg-[#d4a87a] hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(200,155,109,0.3)] transition-all duration-300 flex items-center justify-center gap-2 group">
                    <span>Add to Ritual</span>
                    <span
                        class="material-symbols-outlined text-[14px] group-hover:rotate-90 transition-transform duration-300">add</span>
                </button>
            </div>
        </div>
    </div>

    {{-- STYLES --}}
    <style>
    #menu-page.active {
        opacity: 1 !important;
        pointer-events: auto !important;
    }

    .reveal-item {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .reveal-item.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .menu-item:nth-child(1) {
        transition-delay: 0ms;
    }

    .menu-item:nth-child(2) {
        transition-delay: 60ms;
    }

    .menu-item:nth-child(3) {
        transition-delay: 120ms;
    }

    .menu-item:nth-child(4) {
        transition-delay: 180ms;
    }

    .menu-item:nth-child(5) {
        transition-delay: 240ms;
    }

    .menu-item:nth-child(6) {
        transition-delay: 300ms;
    }

    .menu-item:nth-child(7) {
        transition-delay: 360ms;
    }

    .menu-item:nth-child(8) {
        transition-delay: 420ms;
    }

    .filter-pill.active {
        background: #C89B6D !important;
        color: #3e2723 !important;
        border-color: #C89B6D !important;
    }

    .filter-pill::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: inherit;
        background: radial-gradient(circle, rgba(200, 155, 109, 0.3) 0%, transparent 70%);
        opacity: 0;
        transform: scale(0.5);
        transition: all 0.4s ease;
    }

    .filter-pill:active::after {
        opacity: 1;
        transform: scale(1.2);
        transition: 0s;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #C89B6D;
        cursor: pointer;
        border: 3px solid #3e2723;
        box-shadow: 0 0 0 2px rgba(200, 155, 109, 0.3);
        transition: transform 0.2s;
    }

    input[type="range"]::-webkit-slider-thumb:hover {
        transform: scale(1.2);
    }

    input[type="range"]::-moz-range-thumb {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #C89B6D;
        cursor: pointer;
        border: 3px solid #3e2723;
        box-shadow: 0 0 0 2px rgba(200, 155, 109, 0.3);
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    #menu-modal.open {
        opacity: 1;
        pointer-events: auto;
    }

    #menu-modal.open #menu-modal-content {
        transform: scale(1);
        opacity: 1;
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

    @media (prefers-reduced-motion: reduce) {
        .reveal-item {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
    }
    </style>

    {{-- SCRIPTS --}}
    <script>
    (function() {
        const page = document.getElementById('menu-page');
        const scrollContainer = document.getElementById('menu-scroll');

        // Scroll Reveal
        const revealItems = page.querySelectorAll('.reveal-item');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('revealed');
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -30px 0px'
        });
        revealItems.forEach(item => revealObserver.observe(item));

        page.addEventListener('pageactivated', () => {
            setTimeout(() => {
                revealItems.forEach(item => {
                    const rect = item.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) item.classList
                        .add('revealed');
                });
            }, 200);
        });

        // Filter Logic
        const searchInput = document.getElementById('menu-search');
        const priceRange = document.getElementById('price-range');
        const priceLabel = document.getElementById('price-label');
        const filterPills = document.querySelectorAll('.filter-pill');
        const menuItems = document.querySelectorAll('.menu-item');
        const emptyState = document.getElementById('menu-empty');
        const grid = document.getElementById('menu-grid');

        let activeFilter = 'all';
        let maxPrice = 100000;
        let searchQuery = '';

        function applyFilters() {
            let visibleCount = 0;
            menuItems.forEach(item => {
                const category = item.dataset.category;
                const price = parseInt(item.dataset.price);
                const name = item.dataset.name;
                const matchCategory = activeFilter === 'all' || category === activeFilter;
                const matchPrice = price <= maxPrice;
                const matchSearch = !searchQuery || name.includes(searchQuery);
                if (matchCategory && matchPrice && matchSearch) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            if (visibleCount === 0) {
                grid.classList.add('hidden');
                emptyState.classList.remove('hidden');
            } else {
                grid.classList.remove('hidden');
                emptyState.classList.add('hidden');
            }
        }

        filterPills.forEach(pill => {
            pill.addEventListener('click', () => {
                filterPills.forEach(p => p.classList.remove('active'));
                pill.classList.add('active');
                activeFilter = pill.dataset.filter;
                applyFilters();
            });
        });

        searchInput?.addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase().trim();
            applyFilters();
        });

        priceRange?.addEventListener('input', (e) => {
            const val = parseInt(e.target.value);
            maxPrice = val === 100 ? 100000 : Math.round((val / 100) * 100000);
            priceLabel.textContent = val === 100 ? 'Rp 100K+' : 'Rp ' + (maxPrice / 1000).toFixed(0) + 'K';
            applyFilters();
        });

        // Parallax Glows
        const glows = page.querySelectorAll('.blur-\\[120px\\], .blur-\\[100px\\]');
        if (scrollContainer) {
            scrollContainer.addEventListener('scroll', () => {
                const scrollY = scrollContainer.scrollTop;
                glows.forEach((glow, index) => {
                    const speed = index === 0 ? 0.2 : 0.1;
                    glow.style.transform = `translateY(${scrollY * speed}px)`;
                });
            }, {
                passive: true
            });
        }
    })();

    // ============================================
    // MENU DETAIL MODAL — FIXED & OPTIMIZED
    // ============================================
    const menuData = {
        alchemy: {
            title: 'Alchemy Signature Latte',
            price: 'Rp 38K',
            rating: '4.9',
            tag: 'Signature',
            image: 'https://images.unsplash.com/photo-1541167760496-1628856ab772?w=800&h=500&fit=crop',
            desc: 'Our crown jewel — a meticulously crafted latte that embodies the spirit of alchemy. Double shot of Ethiopian Yirgacheffe espresso meets house-made vanilla syrup and velvety steamed milk, finished with edible gold dust.',
            ingredients: ['Ethiopian Yirgacheffe Espresso', 'House Vanilla Syrup', 'Fresh Whole Milk',
                'Edible Gold Dust', 'Microfoam'
            ],
            ritual: 'We begin with a 20-second extraction at 9 bars of pressure, creating a rich crema. The milk is steamed to precisely 65°C with a silk-like microfoam texture. The vanilla is added first, then espresso poured through the center, creating a natural layering effect. Gold dust is delicately sprinkled as the final touch.',
            intensity: 60,
            intensityLabel: 'Medium'
        },
        midnight: {
            title: 'Midnight Espresso',
            price: 'Rp 25K',
            rating: '5.0',
            tag: 'Espresso',
            image: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=800&h=500&fit=crop',
            desc: 'A bold, unapologetic shot of pure Brazilian Santos espresso. Dark chocolate notes with a hint of toasted hazelnut and a caramelized sugar finish. For those who believe coffee should taste like coffee.',
            ingredients: ['Brazilian Santos Beans', 'Mineral Water', 'Natural Crema'],
            ritual: 'The beans are ground fresh to a fine consistency just before extraction. Using our La Marzocco machine, we pull a ristretto shot — 18g in, 25g out, over 28 seconds. The result is a concentrated, syrupy espresso with a thick, persistent crema that coats the palate.',
            intensity: 90,
            intensityLabel: 'Strong'
        },
        caramel: {
            title: 'Caramel Cloud Latte',
            price: 'Rp 42K',
            rating: '4.8',
            tag: 'Latte',
            image: 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=800&h=500&fit=crop',
            desc: 'Like drinking a cloud made of caramel dreams. House-made salted caramel sauce swirled into silky steamed milk, topped with a mountain of vanilla cold foam and a drizzle of burnt caramel.',
            ingredients: ['Espresso Blend', 'House Salted Caramel', 'Whole Milk', 'Vanilla Cold Foam',
                'Burnt Caramel Drizzle'
            ],
            ritual: 'We prepare our salted caramel in-house every morning using raw palm sugar and sea salt from Bali. The milk is frothed extra silky, then the caramel is painted inside the cup before the espresso is poured. Cold foam is whipped to a cloud-like consistency and spooned on top.',
            intensity: 40,
            intensityLabel: 'Mild'
        },
        tiramisu: {
            title: 'Tiramisu Latte',
            price: 'Rp 45K',
            rating: '4.7',
            tag: 'Dessert',
            image: 'https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=800&h=500&fit=crop',
            desc: 'The beloved Italian dessert, reimagined as a latte. Mascarpone-infused milk, espresso, cocoa powder, and a delicate ladyfinger crumble. A dessert you can drink.',
            ingredients: ['Espresso', 'Mascarpone Milk', 'Cocoa Powder', 'Ladyfinger Crumble', 'Cocoa Dust'],
            ritual: 'Mascarpone cheese is gently heated into the milk until fully dissolved, creating a rich, creamy base. A double shot of espresso is layered in, followed by a dusting of premium Valrhona cocoa. The ladyfinger crumble is sprinkled on top for texture and nostalgia.',
            intensity: 50,
            intensityLabel: 'Medium'
        },
        velvet: {
            title: 'Velvet Cold Brew',
            price: 'Rp 40K',
            rating: '4.9',
            tag: 'Cold Brew',
            image: 'https://images.unsplash.com/photo-1517701604599-bb29b5dd7359?w=800&h=500&fit=crop',
            desc: 'Eighteen hours of patience in a glass. Coarsely ground beans steeped in cold filtered water, then nitrogen-charged for a cascading, creamy pour. Served over ice with a splash of oat milk.',
            ingredients: ['Single Origin Beans', 'Filtered Water', 'Oat Milk', 'Nitrogen'],
            ritual: 'Coarse-ground beans are steeped in refrigerated filtered water for exactly 18 hours. The resulting concentrate is filtered twice, then infused with nitrogen gas. When poured, it cascades like a Guinness with a creamy, stout-like head. Oat milk is added to taste.',
            intensity: 75,
            intensityLabel: 'Bold'
        },
        v60: {
            title: 'V60 Ethiopian',
            price: 'Rp 35K',
            rating: '4.6',
            tag: 'Manual Brew',
            image: 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?w=800&h=500&fit=crop',
            desc: 'A pure expression of terroir. Ethiopian Sidama beans, hand-poured through a Hario V60, revealing layers of jasmine, bergamot, and ripe blueberry. Clean, bright, and unforgettable.',
            ingredients: ['Ethiopian Sidama Beans', 'Filtered Water', 'Paper Filter'],
            ritual: 'Water is heated to 93°C. The paper filter is rinsed to remove any paper taste. 20g of freshly ground coffee is added, then bloomed with 40g of water for 30 seconds. We pour in slow, concentric circles up to 320g total, finishing in 2 minutes 30 seconds.',
            intensity: 35,
            intensityLabel: 'Light'
        },
        yuzu: {
            title: 'Yuzu Matcha Fizz',
            price: 'Rp 32K',
            rating: '4.8',
            tag: 'Tea',
            image: 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=800&h=500&fit=crop',
            desc: 'A refreshing East-meets-West creation. Ceremonial-grade Uji matcha whisked with fresh yuzu juice, topped with sparkling water and a twist of lemon peel. A palate cleanser and energizer in one.',
            ingredients: ['Uji Matcha', 'Fresh Yuzu Juice', 'Sparkling Water', 'Lemon Peel', 'Simple Syrup'],
            ritual: 'Matcha is sifted and whisked with a small amount of warm water using a bamboo chasen until frothy. Yuzu juice and simple syrup are added, then the mixture is poured over ice and topped with chilled sparkling water. Garnished with a hand-cut lemon peel twist.',
            intensity: 25,
            intensityLabel: 'Light'
        },
        spiced: {
            title: 'Spiced Mocha',
            price: 'Rp 48K',
            rating: '4.7',
            tag: 'Signature',
            image: 'https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?w=800&h=500&fit=crop',
            desc: 'Warmth in a cup. Dark Belgian chocolate melted into espresso, infused with cinnamon bark, cardamom pods, and a whisper of chili. Topped with cinnamon-dusted cream.',
            ingredients: ['Dark Belgian Chocolate', 'Espresso', 'Cinnamon Bark', 'Cardamom Pods', 'Chili Flakes',
                'Whipped Cream'
            ],
            ritual: 'Whole cinnamon bark and cracked cardamom pods are simmered in milk for 15 minutes to infuse. Dark chocolate is melted directly into the hot espresso. The spiced milk is poured over, creating a marbled effect. Finished with hand-whipped cream and a dusting of cinnamon.',
            intensity: 70,
            intensityLabel: 'Bold'
        }
    };

    // DOM Elements
    const modal = document.getElementById('menu-modal');
    const modalContent = document.getElementById('menu-modal-content');
    const modalBackdrop = document.getElementById('menu-modal-backdrop');
    const modalCloseBtn = document.getElementById('menu-modal-close');

    // Open Modal
    function openMenuDetail(id) {
        const data = menuData[id];
        if (!data) {
            console.error('Menu data not found for id:', id);
            return;
        }

        // Populate data
        document.getElementById('modal-img').src = data.image;
        document.getElementById('modal-img').alt = data.title;
        document.getElementById('modal-title').textContent = data.title;
        document.getElementById('modal-tag').textContent = data.tag;
        document.getElementById('modal-price').textContent = data.price;
        document.getElementById('modal-rating').textContent = data.rating;
        document.getElementById('modal-desc').textContent = data.desc;
        document.getElementById('modal-ritual').textContent = data.ritual;
        document.getElementById('modal-intensity-label').textContent = data.intensityLabel;

        // Reset intensity bar width first for animation
        const intensityBar = document.getElementById('modal-intensity-bar');
        intensityBar.style.width = '0%';

        // Populate ingredients
        const ingContainer = document.getElementById('modal-ingredients');
        ingContainer.innerHTML = '';
        data.ingredients.forEach(ing => {
            const span = document.createElement('span');
            span.className =
                'px-3 py-1.5 rounded-lg text-[11px] text-white/60 bg-white/[0.04] border border-white/[0.08] font-body';
            span.textContent = ing;
            ingContainer.appendChild(span);
        });

        // Show modal
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';

        // Animate intensity bar after modal opens
        setTimeout(() => {
            intensityBar.style.width = data.intensity + '%';
        }, 100);
    }

    // Close Modal
    function closeMenuDetail() {
        modal.classList.remove('open');
        document.body.style.overflow = '';
        // Reset intensity bar
        document.getElementById('modal-intensity-bar').style.width = '0%';
    }

    // Event Listeners — attach to cards
    document.querySelectorAll('.menu-item').forEach(card => {
        card.addEventListener('click', function(e) {
            // Prevent triggering if clicking inside button (let bubble handle it)
            const id = this.dataset.id;
            if (id) openMenuDetail(id);
        });
    });

    // Close on backdrop click
    modalBackdrop.addEventListener('click', closeMenuDetail);

    // Close on close button
    modalCloseBtn.addEventListener('click', closeMenuDetail);

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('open')) {
            closeMenuDetail();
        }
    });

    // Expose globally (fallback)
    window.openMenuDetail = openMenuDetail;
    window.closeMenuDetail = closeMenuDetail;
    </script>
</div>