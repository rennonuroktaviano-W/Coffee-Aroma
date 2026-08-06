<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <style>
    @layer base {

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            overscroll-behavior: none;
        }

        main>:first-child {
            margin-top: 0 !important;
        }

        main>:last-child {
            margin-bottom: 0 !important;
        }
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "inverse-surface": "#f5ded5",
                    "outline-variant": "#4d4635",
                    "surface-container": "#291d17",
                    "tertiary-container": "#bfb197",
                    "on-secondary-fixed": "#2a170f",
                    "inverse-primary": "#735c00",
                    "on-tertiary-container": "#4d4430",
                    "surface-bright": "#453630",
                    "surface-dim": "#1c110c",
                    "on-error-container": "#ffdad6",
                    "on-tertiary-fixed": "#221b0a",
                    "tertiary": "#dbcdb2",
                    "on-primary": "#3c2f00",
                    "inverse-on-surface": "#3b2d27",
                    "on-secondary-container": "#d4b1a4",
                    "error": "#ffb4ab",
                    "primary-fixed": "#ffe088",
                    "primary-container": "#d4af37",
                    "tertiary-fixed": "#f0e1c5",
                    "on-background": "#f5ded5",
                    "surface-variant": "#40322c",
                    "on-surface-variant": "#d0c5af",
                    "primary": "#f2ca50",
                    "on-tertiary": "#382f1d",
                    "surface-container-low": "#251913",
                    "surface-container-highest": "#40322c",
                    "on-primary-fixed-variant": "#574500",
                    "on-secondary": "#422b22",
                    "secondary-fixed-dim": "#e3bfb2",
                    "secondary": "#e3bfb2",
                    "on-primary-container": "#554300",
                    "secondary-container": "#5d4339",
                    "background": "#1c110c",
                    "on-tertiary-fixed-variant": "#4f4631",
                    "surface-container-high": "#342721",
                    "tertiary-fixed-dim": "#d3c5aa",
                    "error-container": "#93000a",
                    "on-primary-fixed": "#241a00",
                    "secondary-fixed": "#ffdbce",
                    "surface-container-lowest": "#160c07",
                    "on-error": "#690005",
                    "outline": "#99907c",
                    "surface-tint": "#e9c349",
                    "surface": "#1c110c",
                    "on-secondary-fixed-variant": "#5a4137",
                    "on-surface": "#f5ded5",
                    "primary-fixed-dim": "#e9c349"
                },
                "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
                "spacing": {
                    "unit": "8px",
                    "container-max": "1280px",
                    "margin-desktop": "64px",
                    "margin-mobile": "20px",
                    "gutter": "24px"
                },
                "fontFamily": {
                    "headline-lg": ["ebGaramond"],
                    "body-md": ["hankenGrotesk"],
                    "headline-lg-mobile": ["ebGaramond"],
                    "label-md": ["hankenGrotesk"],
                    "display-lg": ["ebGaramond"],
                    "label-sm": ["hankenGrotesk"],
                    "body-lg": ["hankenGrotesk"],
                    "headline-md": ["ebGaramond"]
                },
                "fontSize": {
                    "headline-lg": ["40px", {
                        "lineHeight": "48px",
                        "fontWeight": "500"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-lg-mobile": ["32px", {
                        "lineHeight": "40px",
                        "fontWeight": "500"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "display-lg": ["64px", {
                        "lineHeight": "72px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "500"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "500"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["28px", {
                        "lineHeight": "36px",
                        "fontWeight": "500"
                    }]
                }
            }
        }
    }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=ebGaramond:wght@100..900&amp;family=hankenGrotesk:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <!-- Slide Enter Effect -->
    <style>
    @keyframes curtainReveal {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .page-curtain {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: #1c110c;
        animation: curtainReveal 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.3s forwards;
        pointer-events: none;
    }

    @keyframes pageEnterMain {
        0% {
            transform: perspective(1200px) rotateY(90deg) scale(0.92);
            opacity: 0;
        }

        100% {
            transform: perspective(1200px) rotateY(0deg) scale(1);
            opacity: 1;
        }
    }

    main {
        animation: pageEnterMain 0.85s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    <main class="w-full h-screen overflow-y-auto flex items-center justify-center p-margin-mobile">
        <div class="flex flex-col w-full relative">
            <!-- Background Layer: WebGL Shader -->
            <div class="fixed inset-0 z-[-2] pointer-events-none">
                <!-- STITCH_SHADER_START:ANIMATION_1 class="absolute inset-0 w-full h-full" -->
                <div class="absolute inset-0 w-full h-full" style="display:block;">
                    <canvas id="shader-canvas-ANIMATION_1" style="display:block;width:100%;height:100%"></canvas>
                    <script>
                    (function() {
                        const canvas = document.getElementById('shader-canvas-ANIMATION_1');

                        // Sync the WebGL drawing-buffer size with the CSS-driven layout size.
                        // This fires on initial layout and whenever the element is resized.
                        function syncSize() {
                            const w = canvas.clientWidth || 1280;
                            const h = canvas.clientHeight || 720;
                            if (canvas.width !== w || canvas.height !== h) {
                                canvas.width = w;
                                canvas.height = h;
                            }
                        }
                        if (typeof ResizeObserver !== 'undefined') {
                            new ResizeObserver(syncSize).observe(canvas);
                        }
                        syncSize();

                        const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
                        if (!gl) return;
                        const vs = `attribute vec2 a_position;
varying vec2 v_texCoord;
void main() {
  v_texCoord = a_position * 0.5 + 0.5;
  gl_Position = vec4(a_position, 0.0, 1.0);
}`;
                        const fs = `precision highp float;
uniform float u_time;
uniform vec2 u_resolution;
uniform vec2 u_mouse;
varying vec2 v_texCoord;

float noise(vec2 p) {
    return fract(sin(dot(p, vec2(127.1, 311.7))) * 43758.5453123);
}

void main() {
    vec2 uv = v_texCoord;
    vec2 mouse = u_mouse / u_resolution;
    
    // Base dark coffee gradient
    vec3 color1 = vec3(0.08, 0.05, 0.04); // Darkest bean
    vec3 color2 = vec3(0.15, 0.08, 0.05); // Deep espresso
    vec3 color = mix(color1, color2, uv.y + sin(u_time * 0.2) * 0.1);
    
    // Ambient Glow following mouse
    float dist = distance(uv, mouse);
    float glow = smoothstep(0.5, 0.0, dist);
    color += vec3(0.3, 0.15, 0.05) * glow * 0.4;
    
    // Floating Particles
    for(int i = 0; i < 15; i++) {
        float t = u_time * (0.1 + 0.05 * float(i));
        vec2 p = vec2(noise(vec2(float(i), 1.0)), noise(vec2(float(i), 2.0)));
        p.x += sin(t + float(i)) * 0.1;
        p.y = fract(p.y - t * 0.2);
        float size = 0.002 + 0.001 * sin(u_time + float(i));
        float spark = smoothstep(size, 0.0, distance(uv, p));
        color += vec3(0.8, 0.6, 0.3) * spark * (0.5 + 0.5 * sin(u_time + float(i)));
    }
    
    // Subtle radial vignetting
    float vignette = smoothstep(1.2, 0.5, length(uv - 0.5));
    color *= vignette;

    gl_FragColor = vec4(color, 1.0);
}`;

                        function cs(type, src) {
                            const s = gl.createShader(type);
                            gl.shaderSource(s, src);
                            gl.compileShader(s);
                            return s;
                        }
                        const prog = gl.createProgram();
                        gl.attachShader(prog, cs(gl.VERTEX_SHADER, vs));
                        gl.attachShader(prog, cs(gl.FRAGMENT_SHADER, fs));
                        gl.linkProgram(prog);
                        gl.useProgram(prog);
                        const buf = gl.createBuffer();
                        gl.bindBuffer(gl.ARRAY_BUFFER, buf);
                        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, 1, -1, -1, 1, 1, 1]), gl
                            .STATIC_DRAW);
                        const pos = gl.getAttribLocation(prog, 'a_position');
                        gl.enableVertexAttribArray(pos);
                        gl.vertexAttribPointer(pos, 2, gl.FLOAT, false, 0, 0);
                        const uTime = gl.getUniformLocation(prog, 'u_time');
                        const uRes = gl.getUniformLocation(prog, 'u_resolution');
                        const uMouse = gl.getUniformLocation(prog, 'u_mouse');

                        // u_mouse is in pixel coordinates matching u_resolution (ShaderToy convention).
                        // Shaders that need normalized coords should use: u_mouse / u_resolution.
                        let mouse = {
                            x: canvas.width / 2,
                            y: canvas.height / 2
                        };
                        window.addEventListener('mousemove', (event) => {
                            const rect = canvas.getBoundingClientRect();
                            if (rect.width && rect.height) {
                                const nx = (event.clientX - rect.left) / rect.width;
                                const ny = 1.0 - (event.clientY - rect.top) / rect.height;
                                mouse.x = nx * canvas.width;
                                mouse.y = ny * canvas.height;
                            }
                        });

                        function render(t) {
                            if (typeof ResizeObserver === 'undefined') syncSize();
                            gl.viewport(0, 0, canvas.width, canvas.height);
                            if (uTime) gl.uniform1f(uTime, t * 0.001);
                            if (uRes) gl.uniform2f(uRes, canvas.width, canvas.height);
                            if (uMouse) gl.uniform2f(uMouse, mouse.x, mouse.y);
                            gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
                            requestAnimationFrame(render);
                        }
                        render(0);
                    })();
                    </script>
                </div>
            </div>
            <!-- Decorative CSS Layers -->
            <div class="fixed inset-0 z-[-1] pointer-events-none overflow-hidden opacity-30">
                <!-- Steam Animation -->
                <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                <div class="steam-container absolute inset-0"></div>
                <!-- Floating Coffee Beans -->
                <div class="beans-container absolute inset-0"></div>
            </div>
            <!-- Spotlight Cursor Effect -->
            <div class="fixed inset-0 z-[50] pointer-events-none opacity-0 transition-opacity duration-500"
                id="spotlight"
                style="background: radial-gradient(circle 400px at var(--x) var(--y), rgba(242, 202, 80, 0.08), transparent 80%);">
            </div>
            <!-- Top Section: Ritual Progress -->
            <div class="w-full max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop mb-12">
                <div class="flex items-center justify-between relative py-8">
                    <div class="absolute top-1/2 left-0 w-full h-[1px] bg-outline-variant/30 -translate-y-1/2 z-0">
                    </div>
                    <div class="absolute top-1/2 left-0 w-1/3 h-[1px] bg-primary -translate-y-1/2 z-0 transition-all duration-1000 ease-out"
                        id="progress-line"></div>
                    <div class="relative z-10 flex flex-col items-center gap-2 group">
                        <div
                            class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary shadow-[0_0_20px_rgba(242,202,80,0.4)]">
                            <span class="material-symbols-outlined text-[20px]">shopping_cart</span>
                        </div>
                        <span class="font-label-sm text-primary uppercase tracking-widest">Cart</span>
                    </div>
                    <div class="relative z-10 flex flex-col items-center gap-2">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container border border-primary/50 flex items-center justify-center text-primary backdrop-blur-md">
                            <span class="material-symbols-outlined text-[20px]">payments</span>
                        </div>
                        <span class="font-label-sm text-on-surface uppercase tracking-widest">Payment</span>
                    </div>
                    <div class="relative z-10 flex flex-col items-center gap-2 opacity-50">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant flex items-center justify-center text-on-surface-variant backdrop-blur-md">
                            <span class="material-symbols-outlined text-[20px]">verified</span>
                        </div>
                        <span class="font-label-sm text-on-surface-variant uppercase tracking-widest">Confirm</span>
                    </div>
                    <div class="relative z-10 flex flex-col items-center gap-2 opacity-50">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container border border-outline-variant flex items-center justify-center text-on-surface-variant backdrop-blur-md">
                            <span class="material-symbols-outlined text-[20px]">coffee</span>
                        </div>
                        <span class="font-label-sm text-on-surface-variant uppercase tracking-widest">Ready</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-container-max mx-auto px-margin-mobile lg:px-margin-desktop grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start pb-32">
                <!-- LEFT SIDE: Order Summary -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <div
                        class="bg-surface-container/40 backdrop-blur-2xl p-8 rounded-xl border-t border-l border-white/10 shadow-2xl">
                        <h2 class="font-headline-md text-on-surface mb-8 flex items-center gap-4">
                            <span class="w-8 h-[1px] bg-primary"></span>
                            Your Selection
                        </h2>
                        <div class="flex flex-col gap-8" id="cart-items">
                            <!-- Item 1 -->
                            <div class="cart-item group flex gap-6 items-center" data-price="48000">
                                <div class="relative w-24 h-32 overflow-hidden rounded-lg bg-surface-container-highest">
                                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                        data-alt="High-end studio photography of a premium dark roasted coffee bag 'Alchemy House Blend' on a dark stone surface with golden atmospheric lighting."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuArCJmHYpIUD2RaZHyq4EZYV78mK8Y52q7ZrqdGFDOXfPF-5HtuK9RCCcYwJ24NNPUyOexbloCKw6uGmkhTEtpX660DDitqeHezAbSwswV3SmiaI24Gm3rbu8cbhcIv-y6F2aEY8J3VvLHJs3idxoQJZxNThnldXTKCy5arSKVUg2Z4u4MQcPABIgBtMkWcyugxVewm8D6z5qvaSC54--g2rPwVECrspyCTYUkgi8A-ORNgxGpaMyo" />
                                </div>
                                <div class="flex-1 flex flex-col gap-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span
                                                class="font-label-sm text-primary uppercase tracking-[0.2em] mb-1 block">Reserve</span>
                                            <h3 class="font-headline-md text-[20px] text-on-surface">Alchemy House Blend
                                            </h3>
                                        </div>
                                        <button class="text-on-surface-variant hover:text-error transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">close</span>
                                        </button>
                                    </div>
                                    <div class="flex justify-between items-end mt-4">
                                        <div
                                            class="flex items-center bg-surface-container-lowest/50 rounded-full px-3 py-1 border border-outline-variant/30">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-on-surface hover:text-primary transition-colors"
                                                onclick="updateQty(this, -1)">-</button>
                                            <span class="qty font-label-md w-8 text-center">1</span>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-on-surface hover:text-primary transition-colors"
                                                onclick="updateQty(this, 1)">+</button>
                                        </div>
                                        <span class="font-label-md text-on-surface text-lg">IDR <span
                                                class="item-total">48,000</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="cart-item group flex gap-6 items-center" data-price="55000">
                                <div class="relative w-24 h-32 overflow-hidden rounded-lg bg-surface-container-highest">
                                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                        data-alt="Close up of a luxurious 'Midnight Velvet Latte' in a tall ribbed glass with golden foam patterns and dark chocolate shavings, moody dramatic lighting."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRvr9jXJ-xVaoJDI0wvO28cAIu80cMQ09TBgTetZEfpz_XQjE544kO2N8rhxxAN5delkW4uDBPBCHOFEVk4SrjSrICOxl8PhJ8SF3C_td9D8UEqoRcPU0n-w3QyPxXhD1yBjq9Io44et7-bjRiReD23VYUhPw6RRj48y9gR0QezEdhslOxpWZc0sK2OljmUHQHazvNNdUM5rO2owyD_7duPyH15pdZy14C-nFQmwVPG2Q-y7XS9Ck" />
                                </div>
                                <div class="flex-1 flex flex-col gap-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span
                                                class="font-label-sm text-secondary uppercase tracking-[0.2em] mb-1 block">Signature</span>
                                            <h3 class="font-headline-md text-[20px] text-on-surface">Midnight Velvet
                                                Latte</h3>
                                        </div>
                                        <button class="text-on-surface-variant hover:text-error transition-colors">
                                            <span class="material-symbols-outlined text-[20px]">close</span>
                                        </button>
                                    </div>
                                    <div class="flex justify-between items-end mt-4">
                                        <div
                                            class="flex items-center bg-surface-container-lowest/50 rounded-full px-3 py-1 border border-outline-variant/30">
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-on-surface hover:text-primary transition-colors"
                                                onclick="updateQty(this, -1)">-</button>
                                            <span class="qty font-label-md w-8 text-center">1</span>
                                            <button
                                                class="w-8 h-8 flex items-center justify-center text-on-surface hover:text-primary transition-colors"
                                                onclick="updateQty(this, 1)">+</button>
                                        </div>
                                        <span class="font-label-md text-on-surface text-lg">IDR <span
                                                class="item-total">55,000</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 pt-8 border-t border-outline-variant/20 flex flex-col gap-4">
                            <div class="flex justify-between items-center text-on-surface-variant font-body-md">
                                <span>Subtotal</span>
                                <span>IDR <span id="subtotal">103,000</span></span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant font-body-md">
                                <span>Ritual Service (5%)</span>
                                <span>IDR <span id="service">5,150</span></span>
                            </div>
                            <div class="relative mt-4">
                                <input
                                    class="w-full bg-surface-container-lowest/30 border-b border-outline-variant/50 py-3 px-1 text-on-surface font-label-md tracking-widest focus:outline-none focus:border-primary transition-colors placeholder:text-outline-variant"
                                    placeholder="GIFT VOUCHER" type="text" />
                                <button
                                    class="absolute right-0 top-1/2 -translate-y-1/2 text-primary font-label-sm">APPLY</button>
                            </div>
                            <div class="flex justify-between items-center mt-6 pt-6 border-t border-outline-variant/40">
                                <span class="font-headline-md text-on-surface text-2xl">Total Ritual Cost</span>
                                <span class="font-headline-md text-primary text-2xl">IDR <span
                                        id="total">108,150</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT SIDE: Payment Ritual -->
                <div class="lg:col-span-5 flex flex-col gap-6 sticky top-8">
                    <div
                        class="bg-surface-container-high/60 backdrop-blur-3xl p-8 rounded-xl border border-white/5 shadow-[0_24px_48px_rgba(0,0,0,0.4)]">
                        <h2 class="font-headline-md text-primary mb-2 animate-pulse-slow">Complete Your Ritual</h2>
                        <p class="font-body-md text-on-surface-variant mb-8">Select your preferred method of exchange.
                        </p>
                        <div class="flex flex-col gap-4" id="payment-methods">
                            <!-- QRIS -->
                            <div class="payment-card group relative overflow-hidden bg-surface-container-highest/40 p-5 rounded-lg border border-outline-variant/20 cursor-pointer transition-all duration-300 hover:border-primary/50"
                                onclick="selectPayment('qris')">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center bg-white rounded-md text-black">
                                        <span class="material-symbols-outlined">qr_code_2</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-label-md text-on-surface uppercase">QRIS Contactless</h4>
                                        <p class="text-xs text-on-surface-variant">Instant confirmation via any e-wallet
                                        </p>
                                    </div>
                                    <div
                                        class="radio-circle w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center">
                                        <div
                                            class="dot w-2 h-2 rounded-full bg-primary scale-0 transition-transform duration-300">
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden flex flex-col items-center gap-6 mt-8 animate-in fade-in zoom-in duration-500"
                                    id="qris-content">
                                    <div
                                        class="relative p-4 bg-white rounded-xl shadow-[0_0_40px_rgba(255,255,255,0.1)]">
                                        <img class="w-48 h-48"
                                            data-alt="A clean, minimalist QR code for digital payment, high resolution, black and white."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPHzwZQyzJ8CjZCecJnNGIQ9torllc7UCmkeWxqWtkYPejg7UWmqbwBMWmXW6I0sQxuf8Z60Kpk6GGmGD390dkEZcri9WxT0j0r9Gl2Zf4Qmsud1COU5sC3PiGJ3gO08C0xMdKRcn9J45f5cfIiW1WgdLsw0hNcFTnBy-1ohhXGar6U1hfRbIOAQgtmPwFFn_av6qzMom6koIXSkx9h-6w-iZ8COPD6y8uF2H-3TOehgynpNE6ig4" />
                                        <div
                                            class="absolute inset-0 border-2 border-primary animate-ping opacity-20 pointer-events-none rounded-xl">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="font-label-sm text-primary tracking-[0.3em] mb-2">WAITING FOR RITUAL
                                        </p>
                                        <div class="flex items-center justify-center gap-1">
                                            <span class="w-1.5 h-1.5 bg-primary rounded-full animate-bounce"></span>
                                            <span
                                                class="w-1.5 h-1.5 bg-primary rounded-full animate-bounce [animation-delay:0.2s]"></span>
                                            <span
                                                class="w-1.5 h-1.5 bg-primary rounded-full animate-bounce [animation-delay:0.4s]"></span>
                                        </div>
                                        <p class="text-[10px] text-on-surface-variant mt-4 font-mono">EXPIRES IN <span
                                                id="timer">05:00</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Debit/Credit Card -->
                            <div class="payment-card group relative overflow-hidden bg-surface-container-highest/40 p-5 rounded-lg border border-outline-variant/20 cursor-pointer transition-all duration-300 hover:border-primary/50"
                                onclick="selectPayment('card')">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center bg-inverse-surface rounded-md text-on-inverse-surface">
                                        <span class="material-symbols-outlined">credit_card</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-label-md text-on-surface uppercase">Debit / Credit Card</h4>
                                        <p class="text-xs text-on-surface-variant">Tap to pay with luxury metal cards
                                        </p>
                                    </div>
                                    <div
                                        class="radio-circle w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center">
                                        <div
                                            class="dot w-2 h-2 rounded-full bg-primary scale-0 transition-transform duration-300">
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden mt-8 animate-in slide-in-from-bottom-4 duration-500"
                                    id="card-content">
                                    <div
                                        class="relative w-full aspect-[1.6/1] rounded-2xl bg-gradient-to-br from-[#2a2a2a] to-[#0a0a0a] border border-white/10 p-6 flex flex-col justify-between overflow-hidden shadow-2xl group/card">
                                        <div
                                            class="absolute top-0 right-0 w-32 h-32 bg-primary/10 blur-3xl -mr-16 -mt-16">
                                        </div>
                                        <div class="flex justify-between items-start">
                                            <span
                                                class="material-symbols-outlined text-primary text-4xl">contactless</span>
                                            <div
                                                class="w-12 h-10 bg-gradient-to-br from-yellow-600 to-yellow-200 rounded-md opacity-80">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-white font-mono tracking-[0.2em] mb-4 text-lg">•••• ••••
                                                •••• 8888</div>
                                            <div class="flex justify-between items-end">
                                                <div
                                                    class="text-[10px] text-on-surface-variant uppercase tracking-widest">
                                                    Ritual Member Card</div>
                                                <div class="w-10 h-10 bg-white/10 rounded-full blur-sm"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover/card:opacity-100 transition-opacity bg-black/60 backdrop-blur-sm">
                                            <p class="font-label-sm text-primary tracking-widest">READY TO TAP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Cash -->
                            <div class="payment-card group relative overflow-hidden bg-surface-container-highest/40 p-5 rounded-lg border border-outline-variant/20 cursor-pointer transition-all duration-300 hover:border-primary/50"
                                onclick="selectPayment('cash')">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 flex items-center justify-center bg-primary rounded-md text-on-primary">
                                        <span class="material-symbols-outlined">payments</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-label-md text-on-surface uppercase">Cash at Counter</h4>
                                        <p class="text-xs text-on-surface-variant">Traditional exchange at the
                                            apothecary</p>
                                    </div>
                                    <div
                                        class="radio-circle w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center">
                                        <div
                                            class="dot w-2 h-2 rounded-full bg-primary scale-0 transition-transform duration-300">
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden mt-6 flex flex-col gap-4 animate-in fade-in duration-300"
                                    id="cash-content">
                                    <div class="flex flex-col gap-2">
                                        <label
                                            class="text-[10px] text-on-surface-variant uppercase tracking-widest">Received
                                            Amount</label>
                                        <input
                                            class="bg-transparent border-b border-outline-variant text-2xl text-on-surface focus:outline-none focus:border-primary transition-colors py-2 font-headline-md"
                                            id="cash-input" placeholder="0" type="number" />
                                    </div>
                                    <div class="flex justify-between items-center py-2">
                                        <span class="text-on-surface-variant text-sm">Return Change</span>
                                        <span class="text-primary font-headline-md">IDR <span
                                                id="change-amount">0</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="group relative w-full mt-12 py-5 bg-primary text-on-primary font-label-md uppercase tracking-[0.3em] overflow-hidden rounded-full shadow-[0_10px_30px_rgba(242,202,80,0.3)] transition-all hover:scale-[1.02] active:scale-95"
                            onclick="triggerSuccess()">
                            <span class="relative z-10">Complete Ritual</span>
                            <div
                                class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                            </div>
                            <div
                                class="absolute inset-0 shadow-[0_0_40px_rgba(252,202,80,0.8)] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Success Modal -->
            <div class="fixed inset-0 z-[100] hidden flex items-center justify-center p-6 bg-background/80 backdrop-blur-3xl animate-in fade-in duration-700"
                id="success-modal">
                <div
                    class="bg-surface-container p-10 rounded-2xl border border-white/10 max-w-lg w-full shadow-[0_50px_100px_rgba(0,0,0,0.8)] relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-primary origin-left scale-x-0" id="loader-bar">
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center mb-6 border border-primary/50 animate-pulse">
                            <span class="material-symbols-outlined text-primary text-4xl">check_circle</span>
                        </div>
                        <h2 class="font-headline-lg text-on-surface mb-2">Ritual Initiated</h2>
                        <p class="text-on-surface-variant mb-8">Order #2948-ALCHEMY is being meticulously prepared.</p>
                        <div class="w-full space-y-4 mb-8">
                            <div class="flex justify-between border-b border-outline-variant/20 pb-2">
                                <span class="text-on-surface-variant text-sm">Apothecary</span>
                                <span class="text-on-surface font-label-md">Central Flagship</span>
                            </div>
                            <div class="flex justify-between border-b border-outline-variant/20 pb-2">
                                <span class="text-on-surface-variant text-sm">Ritual Time</span>
                                <span class="text-on-surface font-label-md">Today, 14:45</span>
                            </div>
                            <div class="flex justify-between border-b border-outline-variant/20 pb-2">
                                <span class="text-on-surface-variant text-sm">Collection</span>
                                <span class="text-on-surface font-label-md">Priority Pickup</span>
                            </div>
                        </div>
                        <div class="bg-white p-4 rounded-lg mb-8">
                            <img class="w-32 h-32"
                                data-alt="A professional QR code representing an order pickup ID, black and white minimal."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjxBEh0Vb2F_uyhQbLH1iUO2d45WmqVZEyjwWJGajWRtKCltYermv6QaIp7dwtzvsQarmic4RqgVOQ2lqLEBxm02Eitad2BoqD6dnUTgstYIQUAaI6HO7ZW3rSs6yuS_qwBBFMCrxhMkDhNWJyTGshXZNS43Ab_a7KLF_fj6gz5B8XpXUQlFur8k--S-UC7OH4qjZi4MrMwGDgOFxYliPFlvdsXoU8djWl_bSGLOGXKoRZlu0YEKY" />
                        </div>
                        <p class="text-[10px] text-primary tracking-[0.4em] uppercase mb-12">Wait for the bell...</p>
                        <button
                            class="font-label-sm text-on-surface hover:text-primary transition-colors underline underline-offset-8"
                            onclick="window.location.reload()">Return to Atelier</button>
                    </div>
                </div>
            </div>
        </div>
        <style>
        @keyframes steam {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                transform: translateY(-100px) scale(1.5);
                opacity: 0;
            }
        }

        .steam-container::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 100%, rgba(255, 255, 255, 0.1), transparent 50%);
            filter: blur(40px);
            animation: steam 8s infinite linear;
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 1;
                text-shadow: 0 0 10px rgba(242, 202, 80, 0);
            }

            50% {
                opacity: 0.8;
                text-shadow: 0 0 20px rgba(242, 202, 80, 0.4);
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s infinite ease-in-out;
        }

        .payment-card.selected {
            border-color: #f2ca50;
            background: rgba(242, 202, 80, 0.05);
        }

        .payment-card.selected .radio-circle {
            border-color: #f2ca50;
        }

        .payment-card.selected .dot {
            transform: scale(1);
        }
        </style>
        <script>
        // Spotlight Effect
        const spotlight = document.getElementById('spotlight');
        document.addEventListener('mousemove', (e) => {
            spotlight.style.setProperty('--x', `${e.clientX}px`);
            spotlight.style.setProperty('--y', `${e.clientY}px`);
            spotlight.style.opacity = '1';
        });

        // Qty Management & Calculations
        function updateQty(btn, change) {
            const item = btn.closest('.cart-item');
            const qtySpan = item.querySelector('.qty');
            const price = parseInt(item.dataset.price);
            let qty = parseInt(qtySpan.innerText) + change;

            if (qty < 1) return;

            qtySpan.innerText = qty;
            item.querySelector('.item-total').innerText = (qty * price).toLocaleString();

            calculateTotals();
        }

        function calculateTotals() {
            const itemTotals = document.querySelectorAll('.item-total');
            let subtotal = 0;
            itemTotals.forEach(el => {
                subtotal += parseInt(el.innerText.replace(/,/g, ''));
            });

            const service = subtotal * 0.05;
            const total = subtotal + service;

            document.getElementById('subtotal').innerText = subtotal.toLocaleString();
            document.getElementById('service').innerText = service.toLocaleString();
            document.getElementById('total').innerText = total.toLocaleString();

            // Update change if cash is active
            updateChange();
        }

        // Payment Selection
        function selectPayment(type) {
            // Reset
            document.querySelectorAll('.payment-card').forEach(card => card.classList.remove('selected'));
            document.getElementById('qris-content').classList.add('hidden');
            document.getElementById('card-content').classList.add('hidden');
            document.getElementById('cash-content').classList.add('hidden');

            // Activate
            const selectedCard = event.currentTarget;
            selectedCard.classList.add('selected');

            const contentId = `${type}-content`;
            document.getElementById(contentId).classList.remove('hidden');

            // Progress Update
            document.getElementById('progress-line').style.width = '66%';

            if (type === 'qris') startTimer();
        }

        // Cash Logic
        const cashInput = document.getElementById('cash-input');
        cashInput.addEventListener('input', updateChange);

        function updateChange() {
            const received = parseInt(cashInput.value) || 0;
            const total = parseInt(document.getElementById('total').innerText.replace(/,/g, ''));
            const change = Math.max(0, received - total);
            document.getElementById('change-amount').innerText = change.toLocaleString();
        }

        // Timer Logic for QRIS
        function startTimer() {
            let seconds = 300;
            const display = document.getElementById('timer');
            const interval = setInterval(() => {
                let m = Math.floor(seconds / 60);
                let s = seconds % 60;
                display.innerText = `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
                if (--seconds < 0) clearInterval(interval);
            }, 1000);
        }

        // Modal Trigger
        function triggerSuccess() {
            const modal = document.getElementById('success-modal');
            const loader = document.getElementById('loader-bar');
            modal.classList.remove('hidden');

            document.getElementById('progress-line').style.width = '100%';

            setTimeout(() => {
                loader.style.transition = 'transform 3s ease-in-out';
                loader.style.transform = 'scaleX(1)';
            }, 100);
        }

        // Floating Particles Generator
        const beansContainer = document.querySelector('.beans-container');
        for (let i = 0; i < 20; i++) {
            const bean = document.createElement('div');
            bean.className = 'absolute bg-primary/20 rounded-full blur-[1px] pointer-events-none';
            const size = Math.random() * 8 + 4;
            bean.style.width = `${size}px`;
            bean.style.height = `${size * 1.5}px`;
            bean.style.left = `${Math.random() * 100}%`;
            bean.style.top = `${Math.random() * 100}%`;
            bean.style.animation = `steam ${Math.random() * 10 + 10}s infinite linear`;
            bean.style.animationDelay = `-${Math.random() * 20}s`;
            bean.style.transform = `rotate(${Math.random() * 360}deg)`;
            beansContainer.appendChild(bean);
        }
        </script>
    </main>
    <!-- Navbar -->
    <div class="fixed bottom-4 left-1/2 -translate-x-1/2 z-[100] w-[92%] max-w-[720px]">
        @include('partials.navbar')
    </div>
</body>

</html>