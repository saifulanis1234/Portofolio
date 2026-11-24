<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saiful Anis - Premium Portfolio</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Script Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        base: '#030303',
                        surface: '#0a0a0c',
                        surfaceHover: '#121216',
                        accent: {
                            cyan: '#00F0FF',
                            blue: '#5773FF',
                            purple: '#9D4EDD'
                        }
                    },
                    fontFamily: {
                        jakarta: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 3s infinite',
                        'pulse-slow': 'pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'scroll': 'scroll 30s linear infinite',
                        'border-glow': 'border-glow 4s linear infinite',
                        'scanline': 'scanline 3s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        'border-glow': {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        scanline: {
                            '0%': { transform: 'translateY(-100%)' },
                            '100%': { transform: 'translateY(1000%)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Ultra Premium Custom CSS -->
    <style>
        html {
            background-color: #030303;
            overflow-x: clip;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #e4e4e7;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: clip;
            background-color: #030303;
            color: #e4e4e7;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        p, h1, h2, h3, h4, h5, h6, a, span, button, li, div {
            color: inherit;
        }

        /* Modern Invisible Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #030303; }
        ::-webkit-scrollbar-thumb { background: #1f1f22; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #5773FF; }

        /* Galaxy Canvas Background */
        #space-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 0;
        }

        /* Glassmorphism Floating Pill Navigation */
        .floating-nav {
            background: rgba(10, 10, 12, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Scrolled Navbar State */
        #site-nav.is-scrolled {
            max-width: 72px !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
            justify-content: center !important;
        }
        #site-nav.is-scrolled #logo-text,
        #site-nav.is-scrolled #nav-menu,
        #site-nav.is-scrolled #nav-cta {
            display: none !important;
        }
        #site-nav.is-scrolled #logo-icon {
            display: flex !important;
        }

        /* Glass Cards with 3D feel */
        .premium-card {
            background: linear-gradient(145deg, rgba(20, 20, 24, 0.7) 0%, rgba(10, 10, 12, 0.9) 100%);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 10px 30px -10px rgba(0, 0, 0, 0.6);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .premium-card:hover {
            border-color: rgba(0, 240, 255, 0.5);
            transform: translateY(-8px) scale(1.02);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 25px 50px -12px rgba(0, 240, 255, 0.25);
        }

        /* Enhanced Photo Spot Hover Effects */
        .photo-spot {
            overflow: hidden;
            border-radius: 1rem;
            position: relative;
        }
        .photo-spot img {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1), filter 0.7s ease;
            filter: brightness(0.95) contrast(1.05) saturate(1.1);
        }
        .photo-spot:hover img {
            transform: scale(1.06) rotate(0.5deg);
            filter: brightness(1.05) contrast(1.1) saturate(1.2);
        }
        .photo-overlay {
            background: linear-gradient(to top, rgba(3,3,3,0.95) 0%, rgba(3,3,3,0.4) 50%, transparent 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .photo-spot:hover .photo-overlay {
            opacity: 1;
        }

        /* Gradient Text Custom */
        .text-glow {
            background: linear-gradient(135deg, #00F0FF 0%, #5773FF 50%, #C084FC 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% auto;
            animation: border-glow 5s linear infinite;
        }

        /* Glowing Nebula Orbs */
        .orb-1 { background: radial-gradient(circle, rgba(0,240,255,0.2) 0%, rgba(3,3,3,0) 70%); }
        .orb-2 { background: radial-gradient(circle, rgba(87,115,255,0.2) 0%, rgba(3,3,3,0) 70%); }
        .orb-3 { background: radial-gradient(circle, rgba(157,78,221,0.18) 0%, rgba(3,3,3,0) 70%); }

        /* Hero Cloud Animations - Seamless Edge Fade */
        @keyframes cloudDriftLeft {
            0%, 100% { transform: translate3d(0px, 0px, 0) scale(1); }
            50% { transform: translate3d(36px, -10px, 0) scale(1.05); }
        }
        @keyframes cloudDriftRight {
            0%, 100% { transform: translate3d(0px, 0px, 0) scale(1.03); }
            50% { transform: translate3d(-38px, 10px, 0) scale(0.98); }
        }

        .cloud-layer-seamless {
            -webkit-mask-image: linear-gradient(to bottom, transparent 0%, #000 18%, #000 78%, transparent 100%);
            mask-image: linear-gradient(to bottom, transparent 0%, #000 18%, #000 78%, transparent 100%);
        }

        .cloud-mist-cyan {
            background: radial-gradient(ellipse at center, rgba(0, 240, 255, 0.2) 0%, rgba(87, 115, 255, 0.08) 50%, transparent 72%);
            filter: blur(48px);
            animation: cloudDriftLeft 16s ease-in-out infinite;
        }
        .cloud-mist-purple {
            background: radial-gradient(ellipse at center, rgba(157, 78, 221, 0.22) 0%, rgba(87, 115, 255, 0.09) 50%, transparent 72%);
            filter: blur(52px);
            animation: cloudDriftRight 20s ease-in-out infinite;
        }

        /* Vibrant Tri-Tone Galaxy Poster Typography */
        .ref-portofolio-giant {
            font-size: clamp(2.4rem, 11.4vw, 10.6rem);
            line-height: 0.86;
            letter-spacing: -0.02em;
            transform: scaleY(1.26);
            transform-origin: center;
            background: linear-gradient(180deg, #FFFFFF 0%, #67E8F9 44%, #818CF8 74%, #C084FC 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 18px 42px rgba(0, 240, 255, 0.22));
            user-select: none;
            max-width: 100%;
        }

        .hero-role-gradient {
            background: linear-gradient(90deg, #00F0FF 0%, #7DD3FC 55%, #D8B4FE 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-name-gradient {
            background: linear-gradient(90deg, #FFFFFF 0%, #E0F2FE 60%, #00F0FF 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Smooth Fade at Bottom of Subject */
        .ref-subject-mask {
            -webkit-mask-image: linear-gradient(to bottom, #000 76%, transparent 100%);
            mask-image: linear-gradient(to bottom, #000 76%, transparent 100%);
        }
    </style>
</head>
<body class="font-jakarta bg-base text-zinc-200 selection:bg-accent-blue/40 selection:text-white relative">

    <!-- Canvas Galaxy, Stars & Meteor Shower Background Animation -->
    <canvas id="space-canvas"></canvas>

    <!-- Fixed Ambient Nebula Orbs -->
    <div class="fixed top-[-10%] left-[-10%] w-[60vw] h-[60vw] orb-1 rounded-full pointer-events-none z-0 animate-pulse-slow"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[60vw] h-[60vw] orb-2 rounded-full pointer-events-none z-0 animate-pulse-slow" style="animation-delay: 3s;"></div>
    <div class="fixed top-[40%] right-[20%] w-[40vw] h-[40vw] orb-3 rounded-full pointer-events-none z-0 animate-pulse-slow" style="animation-delay: 6s;"></div>

    <!-- Floating Pill Navigation Header -->
    <header id="site-header" class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4 transition-opacity duration-200">
        <nav id="site-nav" class="w-full max-w-4xl floating-nav rounded-full px-6 py-3.5 flex items-center justify-between">
            <div class="flex-shrink-0 cursor-pointer">
                <a href="#home" class="flex items-center gap-2 text-xl sm:text-2xl font-black text-white tracking-tighter hover:opacity-80 transition-opacity">
                    <span id="logo-text">SA<span class="text-accent-cyan">.</span></span>
                    <div id="logo-icon" class="hidden w-9 h-9 rounded-xl bg-accent-cyan/10 border border-accent-cyan/30 items-center justify-center text-accent-cyan shadow-[0_0_15px_rgba(0,240,255,0.3)] transition-all transform hover:scale-105">
                        <i class="fas fa-code text-sm"></i>
                    </div>
                </a>
            </div>

            <div id="nav-menu" class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="#home" class="text-zinc-300 hover:text-white hover:bg-white/10 transition-all px-4 py-2 rounded-full text-sm font-semibold tracking-wide">Home</a>
                <a href="#about" class="text-zinc-300 hover:text-white hover:bg-white/10 transition-all px-4 py-2 rounded-full text-sm font-semibold tracking-wide">About</a>
                <a href="#experience" class="text-zinc-300 hover:text-white hover:bg-white/10 transition-all px-4 py-2 rounded-full text-sm font-semibold tracking-wide">Experience</a>
                <a href="#projects" class="text-zinc-300 hover:text-white hover:bg-white/10 transition-all px-4 py-2 rounded-full text-sm font-semibold tracking-wide">Work</a>
                <a href="#gallery" class="text-zinc-300 hover:text-white hover:bg-white/10 transition-all px-4 py-2 rounded-full text-sm font-semibold tracking-wide">Gallery</a>
            </div>

            <div id="nav-cta" class="hidden md:block">
                <a href="#contact" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-accent-cyan to-accent-blue text-black font-bold text-xs uppercase tracking-wider hover:opacity-95 transition-all shadow-[0_0_20px_rgba(0,240,255,0.3)]">
                    Let's Talk
                </a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-white focus:outline-none p-2 rounded-xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors">
                    <i class="fas fa-bars text-lg" id="menu-icon"></i>
                </button>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-4 right-4 bg-surface/95 backdrop-blur-2xl border border-white/10 rounded-3xl p-6 space-y-3 shadow-2xl transition-all">
            <a href="#home" class="mobile-link block text-base font-medium text-white hover:text-accent-cyan transition-colors py-2 px-4 rounded-xl hover:bg-white/5">Home</a>
            <a href="#about" class="mobile-link block text-base font-medium text-white hover:text-accent-cyan transition-colors py-2 px-4 rounded-xl hover:bg-white/5">About</a>
            <a href="#experience" class="mobile-link block text-base font-medium text-white hover:text-accent-cyan transition-colors py-2 px-4 rounded-xl hover:bg-white/5">Experience</a>
            <a href="#projects" class="mobile-link block text-base font-medium text-white hover:text-accent-cyan transition-colors py-2 px-4 rounded-xl hover:bg-white/5">Work</a>
            <a href="#gallery" class="mobile-link block text-base font-medium text-white hover:text-accent-cyan transition-colors py-2 px-4 rounded-xl hover:bg-white/5">Gallery</a>
            <a href="#contact" class="mobile-link block text-center mt-2 px-6 py-3 rounded-xl bg-accent-cyan text-black font-bold text-sm">Let's Talk</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex flex-col justify-between pt-28 pb-10 px-4 sm:px-8 lg:px-12 relative z-10">

        <!-- Seamless Animated Clouds Layer (No Hard Top/Bottom Edge) -->
        <div class="absolute inset-x-0 top-0 h-[460px] pointer-events-none z-0 cloud-layer-seamless">
            <div class="absolute -left-16 top-16 w-80 sm:w-[540px] h-48 sm:h-64 rounded-full cloud-mist-cyan"></div>
            <div class="absolute -right-16 top-20 w-80 sm:w-[560px] h-52 sm:h-68 rounded-full cloud-mist-purple"></div>

            <svg class="absolute left-[2%] top-20 w-64 sm:w-[440px] opacity-25 cloud-mist-cyan" viewBox="0 0 600 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M95 175C50 175 15 142 15 102C15 65 44 35 80 31C99 11 127 0 158 0C205 0 245 31 257 74C268 69 280 67 292 67C337 67 374 102 374 146C374 161 368 175 358 175H95Z" fill="url(#refCloudA)"/>
                <defs>
                    <linearGradient id="refCloudA" x1="0" y1="0" x2="600" y2="220" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00F0FF" stop-opacity="0.5"/>
                        <stop offset="0.6" stop-color="#5773FF" stop-opacity="0.25"/>
                        <stop offset="1" stop-color="#9D4EDD" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="absolute right-[2%] top-24 w-64 sm:w-[460px] opacity-25 cloud-mist-purple" viewBox="0 0 600 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M505 175C550 175 585 142 585 102C585 65 556 35 520 31C501 11 473 0 442 0C395 0 355 31 343 74C332 69 320 67 308 67C263 67 226 102 226 146C226 161 232 175 242 175H505Z" fill="url(#refCloudB)"/>
                <defs>
                    <linearGradient id="refCloudB" x1="600" y1="0" x2="0" y2="220" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9D4EDD" stop-opacity="0.5"/>
                        <stop offset="0.6" stop-color="#5773FF" stop-opacity="0.25"/>
                        <stop offset="1" stop-color="#00F0FF" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <!-- 1. Top Row: Gradient Role Badge & Name Pill -->
        <div class="max-w-7xl w-full mx-auto flex flex-wrap items-center justify-between gap-3 sm:gap-4 relative z-30 pt-2">
            <div class="inline-flex items-center gap-2.5 px-3.5 sm:px-4 py-1.5 rounded-full bg-surface/90 border border-accent-cyan/40 backdrop-blur-md shadow-lg">
                <span class="w-2 h-2 rounded-full bg-accent-cyan animate-pulse"></span>
                <span class="text-[11px] sm:text-sm font-extrabold tracking-[0.12em] sm:tracking-[0.14em] uppercase hero-role-gradient">
                    <span id="typed-text"></span>
                </span>
            </div>

            <div class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-1.5 rounded-full bg-surface/90 border border-accent-purple/35 backdrop-blur-md shadow-lg">
                <span class="text-[11px] sm:text-sm font-extrabold tracking-[0.12em] sm:tracking-[0.16em] uppercase hero-name-gradient">
                    SAIFUL ANIS, S.KOM
                </span>
            </div>
        </div>

        <!-- 2. Center Stage: Giant "PORTOFOLIO" + Proportional Overlapping Subject -->
        <div class="max-w-7xl w-full mx-auto relative flex flex-col lg:flex-row items-center justify-center my-auto py-8 sm:py-10 min-h-[340px] sm:min-h-[430px]">
            <!-- Giant Condensed "PORTOFOLIO" -->
            <h1 class="ref-portofolio-giant font-black uppercase text-center relative z-10 w-full">
                PORTOFOLIO
            </h1>

            <!-- Centered Subject Overlapping "PORTOFOLIO" -->
            <div class="relative lg:absolute lg:top-1/2 lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-[36%] w-72 sm:w-80 md:w-[410px] lg:w-[460px] h-80 sm:h-96 md:h-[490px] lg:h-[530px] flex items-end justify-center z-20 pointer-events-none -mt-16 sm:-mt-20 lg:mt-0">
                <div class="absolute inset-x-8 bottom-6 h-3/4 bg-gradient-to-t from-accent-cyan/25 via-accent-purple/20 to-transparent blur-2xl rounded-full"></div>
                <img
                    src="{{ asset('images/foto-saiful-cutout.png') }}"
                    onerror="this.onerror=null; this.src='{{ asset('images/foto-saiful.jpg') }}';"
                    alt="Saiful Anis"
                    class="w-full h-full object-contain object-bottom ref-subject-mask relative z-10 drop-shadow-[0_22px_44px_rgba(0,0,0,0.95)]"
                >
            </div>
        </div>

        <!-- 3. Bottom Row: Symmetrical Left-Right Cards + Centered Action Buttons -->
        <div class="max-w-7xl w-full mx-auto relative z-30 pt-2">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
                <!-- Left Info Card -->
                <div class="lg:col-span-5" data-aos="fade-right">
                    <p class="text-xs sm:text-sm text-zinc-200 leading-relaxed bg-surface/85 backdrop-blur-md px-5 py-4 rounded-2xl border border-accent-cyan/20 shadow-lg">
                        Lulusan <strong class="text-white font-bold">S1 Informatika Universitas Ahmad Dahlan</strong> (<strong class="text-accent-cyan font-bold">Cumlaude, IPK 3.53</strong>)
                    </p>
                </div>

                <!-- Center Action Buttons -->
                <div class="lg:col-span-2 flex items-center justify-center gap-2.5" data-aos="fade-up">
                    <a href="#projects" class="px-5 py-3 bg-gradient-to-r from-white via-cyan-100 to-white text-black font-extrabold text-xs sm:text-sm rounded-xl hover:opacity-95 transition-all shadow-[0_0_25px_rgba(0,240,255,0.28)] flex items-center gap-1.5 group">
                        Work <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <button
                        type="button"
                        onclick="openCvReviewModal()"
                        class="px-4 py-3 border border-accent-cyan/40 bg-surface/90 text-white font-bold text-xs sm:text-sm rounded-xl hover:bg-accent-cyan/15 transition-colors flex items-center gap-1.5 backdrop-blur-md cursor-pointer"
                    >
                        <i class="fas fa-file-pdf text-accent-cyan"></i> CV
                    </button>
                </div>

                <!-- Pop-up Modal Review CV -->
                <div
                    id="cvReviewModal"
                    onclick="closeCvReviewOnBackdrop(event)"
                    class="fixed inset-0 z-[9999] hidden items-center justify-center p-2 sm:p-6 bg-black/85 backdrop-blur-md"
                >
                    <div class="relative w-full max-w-5xl max-h-[92vh] flex flex-col bg-slate-900 border border-white/20 rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden">
                        <!-- Header Modal -->
                        <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4 border-b border-white/10 bg-white/5 gap-3 shrink-0">
                            <div class="flex items-center gap-2.5 sm:gap-3 min-w-0">
                                <i class="fas fa-file-alt text-accent-cyan text-base sm:text-lg shrink-0"></i>
                                <div class="min-w-0">
                                    <h3 class="text-white font-bold text-sm sm:text-lg truncate">Curriculum Vitae — Saiful Anis</h3>
                                    <p class="text-zinc-300 text-[11px] sm:text-xs truncate">CV_Saiful_Anis.pdf</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-1.5 sm:gap-2 shrink-0">
                                <a
                                    href="{{ asset('documents/CV-Saiful-Anis.pdf') }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="px-2.5 sm:px-3 py-1.5 sm:py-2 rounded-xl bg-white/10 hover:bg-white/15 border border-white/15 text-xs font-semibold text-zinc-200 transition-colors flex items-center gap-1.5"
                                >
                                    <i class="fas fa-external-link-alt"></i>
                                    <span class="hidden sm:inline">Tab Baru</span>
                                </a>
                                <a
                                    href="{{ asset('documents/CV-Saiful-Anis.pdf') }}"
                                    download="CV-Saiful-Anis.pdf"
                                    class="px-3 sm:px-3.5 py-1.5 sm:py-2 rounded-xl bg-accent-cyan/20 hover:bg-accent-cyan/30 border border-accent-cyan/50 text-xs font-bold text-accent-cyan transition-colors flex items-center gap-1.5"
                                >
                                    <i class="fas fa-download"></i>
                                    <span class="hidden xs:inline sm:inline">Download</span>
                                </a>
                                <button
                                    type="button"
                                    onclick="closeCvReviewModal()"
                                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-white/10 hover:bg-red-500/20 text-zinc-300 hover:text-red-400 flex items-center justify-center transition-colors cursor-pointer"
                                    aria-label="Close"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Area Preview CV -->
                        <div class="p-2.5 sm:p-5 bg-slate-950/70 flex-1 overflow-y-auto">
                            <iframe
                                id="cvReviewFrame"
                                data-src="{{ asset('documents/CV-Saiful-Anis.pdf') }}#view=FitH&toolbar=1&navpanes=0"
                                src=""
                                title="CV Saiful Anis"
                                class="w-full h-[65vh] sm:h-[75vh] rounded-xl sm:rounded-2xl border border-white/15 bg-white shadow-inner"
                            ></iframe>
                        </div>
                    </div>
                </div>

                <!-- Right Info Card -->
                <div class="lg:col-span-5" data-aos="fade-left">
                    <p class="text-xs sm:text-sm text-zinc-200 leading-relaxed lg:text-right bg-surface/85 backdrop-blur-md px-5 py-4 rounded-2xl border border-accent-purple/25 shadow-lg">
                        Berpengalaman membangun aplikasi enterprise <strong class="text-accent-cyan font-bold">ASP.NET Core &amp; Laravel</strong> serta model <strong class="text-purple-300 font-bold">Machine Learning</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Tech Stack Animation (Seamless Transparent Background) -->
    <div class="w-full py-6 overflow-hidden relative z-10 flex">
        <div class="animate-scroll whitespace-nowrap flex gap-16 px-8 text-xl sm:text-2xl font-black text-transparent" style="-webkit-text-stroke: 1px rgba(255,255,255,0.35);">
            <span>LARAVEL</span>
            <span>ASP.NET CORE</span>
            <span>C#</span>
            <span>PYTHON</span>
            <span>MYSQL</span>
            <span>SQL SERVER</span>
            <span>JAVASCRIPT</span>
            <span>MACHINE LEARNING</span>
            <span>LARAVEL</span>
            <span>ASP.NET CORE</span>
            <span>C#</span>
            <span>PYTHON</span>
            <span>MYSQL</span>
            <span>SQL SERVER</span>
            <span>JAVASCRIPT</span>
            <span>MACHINE LEARNING</span>
        </div>
    </div>

    <!-- About Section with Bento Grid -->
    <section id="about" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-6 mb-16" data-aos="fade-right">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white">About <span class="text-glow">Me.</span></h2>
                <div class="h-px bg-white/20 flex-grow"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-6 flex flex-col justify-center" data-aos="fade-up">
                    <p class="text-lg sm:text-xl leading-relaxed mb-6 text-zinc-200 font-normal">
                        Saya merupakan lulusan <strong class="text-white font-bold">S1 Informatika Universitas Ahmad Dahlan</strong> dengan predikat <strong class="text-accent-cyan font-bold">Cumlaude (IPK 3.53)</strong>. Bagi saya, sistem yang baik lahir dari analisis yang matang, struktur data yang rapi, dan implementasi kode yang konsisten.
                    </p>
                    <p class="text-base sm:text-lg leading-relaxed mb-10 text-zinc-300">
                        Berpengalaman dalam perancangan arsitektur sistem dan basis data, pengembangan back-end dan full-stack menggunakan PHP, Laravel, C#, ASP.NET, hingga pengolahan data dan implementasi Machine Learning (Support Vector Machine) dengan Python.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="p-6 rounded-2xl bg-white/10 border border-white/20 backdrop-blur-sm flex-1 relative overflow-hidden group shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent-cyan/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <h4 class="text-4xl font-black text-white mb-2">3.53</h4>
                            <p class="text-sm text-accent-cyan font-bold">IPK Cumlaude</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/10 border border-white/20 backdrop-blur-sm flex-1 relative overflow-hidden group shadow-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent-blue/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <h4 class="text-4xl font-black text-white mb-2">4+</h4>
                            <p class="text-sm text-accent-blue font-bold">Proyek</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4 h-auto lg:h-[500px]" data-aos="fade-left">
                    <div class="sm:col-span-2 row-span-2 premium-card rounded-3xl photo-spot h-[280px] sm:h-auto shadow-2xl">
                        <img src="{{ asset('images/foto-wisuda.jpg') }}" alt="Graduation" class="w-full h-full object-cover">
                        <div class="absolute inset-0 photo-overlay z-20"></div>
                        <div class="absolute bottom-6 left-6 z-30">
                            <p class="text-white font-bold text-xl"><i class="fas fa-graduation-cap text-accent-cyan mr-2"></i> Cumlaude UAD</p>
                            <p class="text-zinc-200 text-sm font-medium">Wisuda Oktober 2026</p>
                        </div>
                    </div>

                    <div class="premium-card rounded-3xl photo-spot h-48 shadow-xl">
                        <img src="{{ asset('images/setup-coding.jpg') }}" alt="Workspace" class="w-full h-full object-cover">
                        <div class="absolute inset-0 photo-overlay z-20"></div>
                        <div class="absolute bottom-4 left-4 z-30">
                            <p class="text-white font-bold"><i class="fas fa-laptop-code text-accent-blue mr-2"></i> Dev Workspace</p>
                        </div>
                    </div>

                    <div class="premium-card rounded-3xl photo-spot h-48 shadow-xl">
                        <img src="{{ asset('images/Sidang.jpeg') }}" alt="Creative Lens" class="w-full h-full object-cover">
                        <div class="absolute inset-0 photo-overlay z-20"></div>
                        <div class="absolute bottom-4 left-4 z-30">
                            <p class="text-white font-bold"><i class="fas fa-camera text-accent-purple mr-2"></i> After The Thesis Defense</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center gap-6 mb-16" data-aos="fade-right">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white">Experience<span class="text-accent-cyan">.</span></h2>
                <div class="h-px bg-white/20 flex-grow"></div>
            </div>

            <div class="relative md:pl-8">
                <div class="hidden md:block absolute left-0 top-4 bottom-4 w-1 bg-gradient-to-b from-accent-cyan via-accent-purple to-transparent rounded-full shadow-[0_0_20px_#00F0FF]"></div>

                <div class="relative md:pl-12 mb-12" data-aos="fade-up">
                    <div class="premium-card rounded-3xl p-6 sm:p-8 flex flex-col md:flex-row gap-8 items-start shadow-2xl">

                        <!-- Kolom Kiri: Gambar + Button Open SK -->
                        <div class="w-full md:w-48 shrink-0 flex flex-col gap-3 mx-auto md:mx-0">
                            <div class="w-full h-48 rounded-2xl overflow-hidden photo-spot border border-white/20 shadow-2xl">
                                <img src="{{ asset('images/pertamina-ru-vi.jpg') }}" alt="Pertamina RU VI" class="w-full h-full object-cover">
                            </div>

                            <button
                                type="button"
                                onclick="openPertaminaSkModal()"
                                class="w-full py-2.5 px-4 rounded-xl bg-white/10 hover:bg-accent-cyan/20 border border-white/20 hover:border-accent-cyan/50 text-white hover:text-accent-cyan text-xs sm:text-sm font-semibold tracking-wide transition-all duration-300 flex items-center justify-center gap-2 shadow-lg cursor-pointer"
                            >
                                <i class="fas fa-eye text-accent-cyan"></i>
                                <span>Open SK</span>
                            </button>
                        </div>

                        <!-- Kolom Kanan: Detail Pengalaman -->
                        <div class="flex-grow w-full">
                            <div class="flex flex-col md:flex-row md:items-start justify-between mb-4">
                                <div>
                                    <h3 class="text-2xl sm:text-3xl font-bold text-white mb-2">IT Intern</h3>
                                    <h4 class="text-lg sm:text-xl font-semibold text-accent-cyan">PT Kilang Pertamina Internasional RU VI</h4>
                                </div>
                                <span class="mt-4 md:mt-0 inline-flex text-xs sm:text-sm font-bold uppercase tracking-wider px-4 py-2 bg-white/15 text-white rounded-xl backdrop-blur-md self-start border border-white/20 shadow">
                                    Okt '25 - Jan '26
                                </span>
                            </div>

                            <p class="mb-6 leading-relaxed text-zinc-200 text-base font-normal">
                                Berkontribusi sebagai backend developer untuk membangun ulang website <em>Meeting Management HSSE</em> guna meningkatkan keteraturan struktur data serta efisiensi digitalisasi pengelolaan rapat dan isu HSSE kilang.
                            </p>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex items-start gap-3 bg-white/10 p-4 rounded-xl border border-white/10">
                                    <i class="fas fa-laptop-code text-accent-cyan mt-1 text-lg"></i>
                                    <span class="text-sm text-zinc-200">Pengembangan aplikasi enterprise dengan <strong class="text-white">ASP.NET Core MVC</strong> &amp; C#.</span>
                                </div>
                                <div class="flex items-start gap-3 bg-white/10 p-4 rounded-xl border border-white/10">
                                    <i class="fas fa-database text-accent-blue mt-1 text-lg"></i>
                                    <span class="text-sm text-zinc-200">Merancang arsitektur database relasional pada <strong class="text-white">SQL Server</strong>.</span>
                                </div>
                                <div class="flex items-start gap-3 bg-white/10 p-4 rounded-xl border border-white/10 sm:col-span-2">
                                    <i class="fas fa-shield-alt text-accent-purple mt-1 text-lg"></i>
                                    <span class="text-sm text-zinc-200">Implementasi Entity Framework Core.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up Modal SK (View-Only PDF) -->
    <div
        id="sk-pertamina-modal"
        onclick="closePertaminaSkOnBackdrop(event)"
        oncontextmenu="return false;"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-2 sm:p-4 bg-black/80 backdrop-blur-md select-none"
    >
        <div class="relative w-full max-w-4xl max-h-[92vh] flex flex-col bg-zinc-900/95 border border-white/20 rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden">
            <!-- Header Modal -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4 border-b border-white/10 bg-white/5 gap-3 shrink-0">
                <div class="flex items-center gap-2.5 sm:gap-3 min-w-0">
                    <i class="fas fa-file-pdf text-accent-cyan text-base sm:text-lg shrink-0"></i>
                    <h3 class="text-sm sm:text-lg font-bold text-white truncate">Surat Keterangan Magang — PT KPI RU VI Balongan (View Only)</h3>
                </div>

                <button
                    type="button"
                    onclick="closePertaminaSkModal()"
                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-white/10 hover:bg-red-500/20 text-zinc-300 hover:text-red-400 flex items-center justify-center transition-colors cursor-pointer shrink-0"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Isi Modal (PDF Viewer Tanpa Toolbar Download/Print) -->
            <div class="p-2.5 sm:p-5 bg-black/40 flex-1 overflow-y-auto">
                <iframe
                    id="sk-pertamina-frame"
                    data-src="{{ asset('documents/sk-pertamina.pdf') }}#toolbar=0&navpanes=0&scrollbar=1"
                    src=""
                    title="SK Magang PT Kilang Pertamina Internasional RU VI"
                    class="w-full h-[65vh] sm:h-[72vh] rounded-xl border border-white/10 bg-zinc-950"
                ></iframe>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4">Behind the <span class="text-glow">Screen.</span></h2>
                <p class="max-w-2xl mx-auto text-zinc-300 text-base">Sekilas tentang aktivitas, kolaborasi tim, dan momen profesional saya.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="premium-card h-64 rounded-3xl photo-spot relative overflow-hidden cursor-pointer group shadow-2xl"
                    data-aos="zoom-in"
                    data-aos-delay="100"
                    onclick="openCommitteeSelectionModal()"
                >
                    <img src="{{ asset('images/kegiatan-kampus.jpg') }}" alt="Committee Experience" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 photo-overlay z-20"></div>
                    <div class="absolute bottom-6 left-6 z-30">
                        <p class="text-white font-bold text-lg">Committee Experience</p>
                        <p class="text-accent-cyan text-xs font-bold mt-2 flex items-center gap-1">
                            <i class="fas fa-eye mr-1"></i> View Committee Certificates (3)
                        </p>
                    </div>
                </div>

                <div
                    class="premium-card h-64 rounded-3xl photo-spot relative overflow-hidden cursor-pointer group shadow-2xl"
                    data-aos="zoom-in"
                    data-aos-delay="200"
                    onclick="openCertificate()"
                >
                    <img src="{{ asset('images/sertifikasi-vsga.jpg') }}" alt="Certification" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 photo-overlay z-20"></div>
                    <div class="absolute bottom-6 left-6 z-30">
                        <p class="text-white font-bold text-lg">Junior Cyber Security</p>
                        <p class="text-accent-blue text-sm font-medium">VSGA Digitalent Kominfo</p>
                        <p class="text-accent-cyan text-xs font-bold mt-2 flex items-center gap-1">
                            <i class="fas fa-eye mr-1"></i> View 2 Certificates (PDF)
                        </p>
                    </div>
                </div>

                <div
                    class="premium-card h-64 rounded-3xl photo-spot relative overflow-hidden cursor-pointer group shadow-2xl"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                    onclick="openThesisModal()"
                >
                    <img src="{{ asset('images/sidang-skripsi.jpg') }}" alt="Presentation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 photo-overlay z-20"></div>
                    <div class="absolute bottom-6 left-6 z-30">
                        <p class="text-white font-bold text-lg">Thesis</p>
                        <p class="text-accent-purple text-sm font-medium">Machine Learning Classification</p>
                        <p class="text-accent-cyan text-xs font-bold mt-2 flex items-center gap-1">
                            <i class="fas fa-eye mr-1"></i> View Thesis Details
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up Modal Detail Skripsi -->
    <div
        id="thesisModal"
        onclick="closeThesisOnBackdrop(event)"
        class="fixed inset-0 z-[9999] hidden items-center justify-center p-2 sm:p-6 bg-black/85 backdrop-blur-md"
    >
        <div class="bg-slate-900 w-full max-w-5xl max-h-[92vh] overflow-y-auto rounded-2xl sm:rounded-3xl shadow-2xl border border-white/20">
            <!-- Header Modal -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4 border-b border-white/10 bg-white/5 gap-3 sticky top-0 z-10 backdrop-blur-md">
                <div class="min-w-0">
                    <h3 class="text-white font-bold text-sm sm:text-xl truncate">Klasifikasi Tingkat Stres Mahasiswa Menggunakan Support Vector Machine</h3>
                    <p class="text-accent-purple text-xs sm:text-sm font-medium truncate">S1 Informatika — Universitas Ahmad Dahlan</p>
                </div>
                <button
                    type="button"
                    onclick="closeThesisModal()"
                    class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-white/10 hover:bg-red-500/20 text-zinc-300 hover:text-red-400 flex items-center justify-center transition-colors cursor-pointer shrink-0"
                    aria-label="Close"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Isi Modal: 2 Foto & Penjelasan/Deskripsi/Kesimpulan -->
            <div class="p-4 sm:p-6 grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
                <!-- Kolom 2 Foto Skripsi -->
                <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                    <div class="rounded-2xl overflow-hidden border border-white/15 bg-slate-950/60 shadow-lg">
                        <img
                            src="{{ asset('images/hobi-macro.jpg') }}"
                            alt="Presentasi Sidang Skripsi"
                            class="w-full h-44 sm:h-48 object-cover"
                        >
                        <div class="px-4 py-2.5 border-t border-white/10">
                            <p class="text-xs font-semibold text-zinc-200">Dokumentasi Sidang Skripsi</p>
                        </div>
                    </div>

                    <div class="rounded-2xl overflow-hidden border border-white/15 bg-slate-950/60 shadow-lg">
                        <!-- Ganti path gambar kedua sesuai nama file dokumentasi skripsimu di public/images/ -->
                        <img
                            src="{{ asset('images/skripsi-dokumentasi-2.jpg') }}"
                            alt="Eksperimen dan Evaluasi Model SVM & PCA"
                            class="w-full h-44 sm:h-48 object-cover"
                        >
                        <div class="px-4 py-2.5 border-t border-white/10">
                            <p class="text-xs font-semibold text-zinc-200">Eksperimen SVM (RBF) &amp; PCA</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Penjelasan, Deskripsi & Kesimpulan Skripsi -->
                <div class="lg:col-span-7 space-y-4 sm:space-y-5 text-zinc-200">
                    <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/10">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-accent-cyan mb-2">Deskripsi Skripsi</h4>
                        <p class="text-xs sm:text-sm leading-relaxed text-zinc-200">
                            Penelitian ini membahas klasifikasi tingkat stres mahasiswa menggunakan algoritma <strong class="text-white">Support Vector Machine (SVM)</strong> dengan reduksi dimensi <strong class="text-white">Principal Component Analysis (PCA)</strong> untuk membantu mengidentifikasi pola tingkat stres secara terukur.
                        </p>
                    </div>

                    <div class="p-4 sm:p-5 rounded-2xl bg-white/5 border border-white/10">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-accent-blue mb-2">Penjelasan Metode &amp; Pengujian</h4>
                        <p class="text-xs sm:text-sm leading-relaxed text-zinc-200">
                            Tahapan penelitian mencakup praproses dan penskalaan fitur, penerapan <strong class="text-white">PCA</strong> untuk mereduksi dimensi data, serta pengujian model <strong class="text-white">SVM dengan kernel RBF</strong> dan validasi silang untuk mengevaluasi performa klasifikasi.
                        </p>
                    </div>

                    <div class="p-4 sm:p-5 rounded-2xl bg-accent-purple/10 border border-accent-purple/30">
                        <h4 class="text-xs font-bold uppercase tracking-wider text-purple-300 mb-2">Kesimpulan</h4>
                        <p class="text-xs sm:text-sm leading-relaxed text-zinc-100">
                            Kombinasi <strong class="text-white">PCA</strong> dan <strong class="text-white">SVM kernel RBF</strong> efektif digunakan untuk mengklasifikasikan tingkat stres mahasiswa dengan capaian <strong class="text-accent-cyan">akurasi pengujian sebesar 81,48%</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pilihan & Viewer Sertifikat Kepanitiaan -->
    <div
        id="committeeCertHubModal"
        onclick="closeCommitteeCertHubOnBackdrop(event)"
        class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/90 backdrop-blur-md p-2 sm:p-3 md:p-6"
    >
        <div class="bg-slate-900 w-full max-w-5xl max-h-[92vh] overflow-y-auto rounded-2xl shadow-2xl border border-white/20">
            <!-- Header Modal -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4 border-b border-white/10 gap-3 sticky top-0 z-10 bg-slate-900/95 backdrop-blur-md">
                <div class="flex items-center gap-2 sm:gap-3 min-w-0">
                    <button
                        id="committeeBackBtn"
                        type="button"
                        onclick="showCommitteeCertList()"
                        class="hidden px-2.5 sm:px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs font-semibold text-accent-cyan transition items-center gap-1.5 shrink-0 cursor-pointer"
                    >
                        <i class="fas fa-arrow-left"></i>
                        <span class="hidden sm:inline">Daftar Sertifikat</span>
                        <span class="sm:hidden">Kembali</span>
                    </button>
                    <div class="min-w-0">
                        <h3 id="committeeHubTitle" class="text-white font-bold text-sm sm:text-lg truncate">Sertifikat Kepanitiaan</h3>
                        <p id="committeeHubSubtitle" class="text-zinc-300 text-xs sm:text-sm truncate">Pilih sertifikat kepanitiaan untuk ditampilkan</p>
                    </div>
                </div>
                <button
                    type="button"
                    onclick="closeCommitteeCertHubModal()"
                    class="text-zinc-300 hover:text-white text-2xl sm:text-3xl leading-none transition cursor-pointer shrink-0"
                    aria-label="Close"
                >&times;</button>
            </div>

            <!-- Tampilan 1: Pilihan Sertifikat Kepanitiaan -->
            <div id="committeeCertListView" class="p-4 sm:p-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <button
                    type="button"
                    onclick="selectCommitteeCert('{{ asset('certificates/Ngec.pdf') }}', 'Next Gen Entrepreneur Competition', 'Staff Humas')"
                    class="text-left p-4 sm:p-5 rounded-2xl bg-white/5 hover:bg-accent-cyan/15 border border-white/15 hover:border-accent-cyan/50 transition-all group cursor-pointer flex flex-col justify-between gap-4"
                >
                    <div>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent-cyan/15 text-accent-cyan mb-3">
                            <i class="fas fa-award"></i>
                        </span>
                        <h4 class="text-white font-bold text-sm sm:text-base group-hover:text-accent-cyan transition-colors">Next Gen Entrepreneur Competition</h4>
                        <p class="text-zinc-300 text-xs sm:text-sm mt-1">Staff Humas</p>
                    </div>
                    <span class="text-xs font-semibold text-accent-cyan flex items-center gap-1.5">
                        <i class="fas fa-file-pdf"></i> Lihat Sertifikat
                    </span>
                </button>

                <button
                    type="button"
                    onclick="selectCommitteeCert('{{ asset('certificates/Tdays.pdf') }}', 'Technology Days #13', 'Staff Humas')"
                    class="text-left p-4 sm:p-5 rounded-2xl bg-white/5 hover:bg-accent-blue/15 border border-white/15 hover:border-accent-blue/50 transition-all group cursor-pointer flex flex-col justify-between gap-4"
                >
                    <div>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent-blue/15 text-accent-blue mb-3">
                            <i class="fas fa-award"></i>
                        </span>
                        <h4 class="text-white font-bold text-sm sm:text-base group-hover:text-accent-cyan transition-colors">Technology Days #13</h4>
                        <p class="text-zinc-300 text-xs sm:text-sm mt-1">Staff Humas</p>
                    </div>
                    <span class="text-xs font-semibold text-accent-cyan flex items-center gap-1.5">
                        <i class="fas fa-file-pdf"></i> Lihat Sertifikat
                    </span>
                </button>

                <button
                    type="button"
                    onclick="selectCommitteeCert('{{ asset('certificates/KPPS.pdf') }}', 'Komisi Pemilihan Umum Mahasiswa', 'Staf KPPS')"
                    class="text-left p-4 sm:p-5 rounded-2xl bg-white/5 hover:bg-accent-purple/15 border border-white/15 hover:border-accent-purple/50 transition-all group cursor-pointer flex flex-col justify-between gap-4"
                >
                    <div>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-accent-purple/15 text-accent-purple mb-3">
                            <i class="fas fa-award"></i>
                        </span>
                        <h4 class="text-white font-bold text-sm sm:text-base group-hover:text-accent-cyan transition-colors">Komisi Pemilihan Umum Mahasiswa</h4>
                        <p class="text-zinc-300 text-xs sm:text-sm mt-1">Staf KPPS</p>
                    </div>
                    <span class="text-xs font-semibold text-accent-cyan flex items-center gap-1.5">
                        <i class="fas fa-file-pdf"></i> Lihat Sertifikat
                    </span>
                </button>
            </div>

            <!-- Tampilan 2: Sertifikat PDF Terkait -->
            <div id="committeeCertViewerView" class="hidden p-2.5 sm:p-4">
                <div class="bg-slate-800 rounded-xl overflow-hidden shadow-xl border border-white/10">
                    <iframe id="committeeCertHubFrame" src="" class="w-full h-[65vh] sm:h-[72vh] bg-white" title="Sertifikat Kepanitiaan"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificate Modal -->
    <div id="certificateModal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/90 backdrop-blur-md p-2 sm:p-3 md:p-6">
        <div class="bg-slate-900 w-full max-w-7xl max-h-[92vh] overflow-y-auto rounded-2xl shadow-2xl border border-white/20">
            <div class="flex items-center justify-between px-4 sm:px-6 py-3.5 sm:py-4 border-b border-white/10 sticky top-0 z-10 bg-slate-900/95 backdrop-blur-md">
                <div>
                    <h3 class="text-white font-bold text-sm sm:text-lg">Junior Cyber Security</h3>
                    <p class="text-zinc-300 text-xs sm:text-sm">VSGA Digitalent Kominfo</p>
                </div>
                <button onclick="closeCertificate()" class="text-zinc-300 hover:text-white text-2xl sm:text-3xl leading-none transition" aria-label="Close">&times;</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-3 sm:p-4">
                <div class="bg-slate-800 rounded-xl overflow-hidden shadow-xl">
                    <div class="px-4 py-3 border-b border-white/10">
                        <p class="text-white font-semibold text-xs sm:text-sm">
                            <i class="fas fa-file-pdf text-red-500 mr-2"></i> Sertifikat 1
                        </p>
                    </div>
                    <iframe src="{{ asset('certificates/cyber-security-1.pdf') }}#toolbar=0&navpanes=0" class="w-full h-[58vh] sm:h-[70vh] bg-white" title="Sertifikat Cyber Security 1"></iframe>
                </div>

                <div class="bg-slate-800 rounded-xl overflow-hidden shadow-xl">
                    <div class="px-4 py-3 border-b border-white/10">
                        <p class="text-white font-semibold text-xs sm:text-sm">
                            <i class="fas fa-file-pdf text-red-500 mr-2"></i> Sertifikat 2
                        </p>
                    </div>
                    <iframe src="{{ asset('certificates/cyber-security-2.pdf') }}#toolbar=0&navpanes=0" class="w-full h-[58vh] sm:h-[70vh] bg-white" title="Sertifikat Cyber Security 2"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section (Seamless Background) -->
    <section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-6 mb-12" data-aos="fade-right">
                <h2 class="text-3xl md:text-5xl font-extrabold text-white">Featured <span class="text-glow">Work.</span></h2>
                <div class="h-px bg-white/20 flex-grow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="project-card premium-card rounded-3xl overflow-hidden group shadow-2xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-64 overflow-hidden relative border-b border-white/10">
                        <div class="absolute inset-0 bg-base/40 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('images/11.jpg') }}" alt="project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-accent-cyan text-xs font-black tracking-widest uppercase bg-accent-cyan/15 px-3 py-1 rounded-full border border-accent-cyan/30">Pertamina Internship</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">Meeting Management HSSE</h3>
                        <p class="text-zinc-200 mb-6 leading-relaxed text-base">
                            Pengembangan aplikasi enterprise pengelolaan rapat HSSE dilengkapi autentikasi, manajemen dokumen, pelaporan isu, dan RBAC.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">ASP.NET Core</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">C#</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">SQL Server</span>
                        </div>
                    </div>
                </div>

                <div class="project-card premium-card rounded-3xl overflow-hidden group shadow-2xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-64 overflow-hidden relative border-b border-white/10">
                        <div class="absolute inset-0 bg-base/40 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('images/12.jpg') }}" alt="project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-accent-blue text-xs font-black tracking-widest uppercase bg-accent-blue/15 px-3 py-1 rounded-full border border-accent-blue/30">Project Manager</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">Sistem Informasi HPP</h3>
                        <p class="text-zinc-200 mb-6 leading-relaxed text-base">
                            Sistem informasi untuk Pabrik Beras Kidang Kembar. Mengelola alur biaya produksi mulai dari bahan baku hingga kalkulasi laba/rugi.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">PHP</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">MySQL</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">HTML</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">JavaScript</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">CSS</span>
                        </div>
                    </div>
                </div>

                <div class="project-card premium-card rounded-3xl overflow-hidden group shadow-2xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-64 overflow-hidden relative border-b border-white/10">
                        <div class="absolute inset-0 bg-base/40 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('images/13.jpg') }}" alt="project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-accent-purple text-xs font-black tracking-widest uppercase bg-accent-purple/15 px-3 py-1 rounded-full border border-accent-purple/30">Full Stack Dev</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">Platform E-Learning PAI AI</h3>
                        <p class="text-zinc-200 mb-6 leading-relaxed text-base">
                            LMS Pendidikan Agama Islam untuk SD-SMA yang mengintegrasikan kecerdasan buatan guna mempersonalisasi pembelajaran digital.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">Laravel</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">JavaScript</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">CSS</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">OpenAI API</span>
                        </div>
                    </div>
                </div>

                <div class="project-card premium-card rounded-3xl overflow-hidden group shadow-2xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-64 overflow-hidden relative border-b border-white/10">
                        <div class="absolute inset-0 bg-base/40 group-hover:bg-transparent transition-all duration-700 z-10"></div>
                        <img src="{{ asset('images/skripsi-dokumentasi-2.jpg') }}" alt="project" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-accent-cyan text-xs font-black tracking-widest uppercase bg-accent-cyan/15 px-3 py-1 rounded-full border border-accent-cyan/30">Study</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">Klasifikasi Stres SVM</h3>
                        <p class="text-zinc-200 mb-6 leading-relaxed text-base">
                            Penelitian pengembangan model Machine Learning (Support Vector Machine &amp; PCA) untuk mengklasifikasi tingkat stres mahasiswa.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">Python</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">Scikit-learn</span>
                            <span class="text-xs font-bold px-3 py-2 bg-white/10 text-white rounded-lg border border-white/10">Pandas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 sm:py-32 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in">
            <h2 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white mb-6">Let's build something <br><span class="text-glow">extraordinary.</span></h2>
            <p class="text-lg sm:text-xl mb-12 text-zinc-200">
                Terbuka untuk peluang karir Software Engineer, diskusi teknologi, atau kolaborasi proyek inovatif.
            </p>

            <a
                href="https://mail.google.com/mail/?view=cm&fs=1&to=saifulanis373@gmail.com"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center px-8 sm:px-10 py-4 sm:py-5 text-lg sm:text-xl font-black bg-white text-black rounded-2xl hover:scale-105 transition-all shadow-[0_0_50px_rgba(255,255,255,0.3)]"
            >
                <i class="far fa-envelope mr-3 text-accent-cyan"></i> Get In Touch
            </a>

            <div class="flex justify-center gap-6 mt-16 sm:mt-20">
                <a
                    href="https://www.linkedin.com/in/saifulanis"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="LinkedIn Saiful Anis"
                    class="w-14 h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center hover:bg-accent-blue hover:text-white hover:border-transparent transition-all hover:-translate-y-2 shadow-lg"
                >
                    <i class="fab fa-linkedin-in text-2xl"></i>
                </a>
                <a
                    href="https://www.instagram.com/puuull____?dmpr=MXVjN24zczB2aHkycA%3D%3D&utm_source=qr"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Instagram Saiful Anis"
                    class="w-14 h-14 rounded-full bg-white/10 border border-white/20 flex items-center justify-center hover:bg-accent-purple hover:text-white hover:border-transparent transition-all hover:-translate-y-2 shadow-lg"
                >
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 text-center relative z-10">
        <p class="text-sm font-mono text-zinc-400">
            Designed &amp; Built by <span class="text-white font-bold">Saiful Anis</span> &copy; <span id="year"></span>
        </p>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        const siteNav = document.getElementById('site-nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                siteNav.classList.add('is-scrolled');
            } else {
                siteNav.classList.remove('is-scrolled');
            }
        });

        function setSiteHeaderVisible(isVisible) {
            const siteHeader = document.getElementById('site-header');
            if (!siteHeader) return;
            if (isVisible) {
                siteHeader.classList.remove('hidden');
            } else {
                siteHeader.classList.add('hidden');
            }
        }

        function openCvReviewModal() {
            const modal = document.getElementById('cvReviewModal');
            const frame = document.getElementById('cvReviewFrame');
            if (!modal) return;

            if (frame && !frame.getAttribute('src')) {
                frame.setAttribute('src', frame.getAttribute('data-src'));
            }

            setSiteHeaderVisible(false);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeCvReviewModal() {
            const modal = document.getElementById('cvReviewModal');
            if (!modal) return;

            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            setSiteHeaderVisible(true);
        }

        function closeCvReviewOnBackdrop(event) {
            if (event.target.id === 'cvReviewModal') {
                closeCvReviewModal();
            }
        }

        let isPertaminaSkOpen = false;

        function openPertaminaSkModal() {
            const modal = document.getElementById('sk-pertamina-modal');
            const frame = document.getElementById('sk-pertamina-frame');
            if (!modal) return;

            if (frame && !frame.getAttribute('src')) {
                frame.setAttribute('src', frame.getAttribute('data-src'));
            }

            setSiteHeaderVisible(false);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            isPertaminaSkOpen = true;
        }

        function closePertaminaSkModal() {
            const modal = document.getElementById('sk-pertamina-modal');
            if (!modal) return;

            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            isPertaminaSkOpen = false;
            setSiteHeaderVisible(true);
        }

        function closePertaminaSkOnBackdrop(event) {
            if (event.target.id === 'sk-pertamina-modal') {
                closePertaminaSkModal();
            }
        }

        function openCommitteeSelectionModal() {
            const modal = document.getElementById('committeeCertHubModal');
            showCommitteeCertList();
            if (modal) {
                setSiteHeaderVisible(false);
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
        }

        function showCommitteeCertList() {
            const listView = document.getElementById('committeeCertListView');
            const viewerView = document.getElementById('committeeCertViewerView');
            const backBtn = document.getElementById('committeeBackBtn');
            const frame = document.getElementById('committeeCertHubFrame');
            const titleEl = document.getElementById('committeeHubTitle');
            const subtitleEl = document.getElementById('committeeHubSubtitle');

            if (frame) frame.src = '';
            if (listView) listView.classList.remove('hidden');
            if (viewerView) viewerView.classList.add('hidden');
            if (backBtn) backBtn.classList.add('hidden');
            if (titleEl) titleEl.textContent = 'Sertifikat Kepanitiaan';
            if (subtitleEl) subtitleEl.textContent = 'Pilih sertifikat kepanitiaan untuk ditampilkan';
        }

        function selectCommitteeCert(pdfUrl, title, role) {
            const listView = document.getElementById('committeeCertListView');
            const viewerView = document.getElementById('committeeCertViewerView');
            const backBtn = document.getElementById('committeeBackBtn');
            const frame = document.getElementById('committeeCertHubFrame');
            const titleEl = document.getElementById('committeeHubTitle');
            const subtitleEl = document.getElementById('committeeHubSubtitle');

            if (titleEl) titleEl.textContent = title;
            if (subtitleEl) subtitleEl.textContent = role;
            if (frame) frame.src = `${pdfUrl}#toolbar=0&navpanes=0`;

            if (listView) listView.classList.add('hidden');
            if (viewerView) viewerView.classList.remove('hidden');
            if (backBtn) backBtn.classList.remove('hidden');
        }

        function closeCommitteeCertHubModal() {
            const modal = document.getElementById('committeeCertHubModal');
            const frame = document.getElementById('committeeCertHubFrame');
            if (frame) frame.src = '';
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
                setSiteHeaderVisible(true);
            }
        }

        function closeCommitteeCertHubOnBackdrop(event) {
            if (event.target.id === 'committeeCertHubModal') {
                closeCommitteeCertHubModal();
            }
        }

        function openThesisModal() {
            const modal = document.getElementById('thesisModal');
            if (!modal) return;

            setSiteHeaderVisible(false);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeThesisModal() {
            const modal = document.getElementById('thesisModal');
            if (!modal) return;

            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
            setSiteHeaderVisible(true);
        }

        function closeThesisOnBackdrop(event) {
            if (event.target.id === 'thesisModal') {
                closeThesisModal();
            }
        }

        function openCertificate() {
            const modal = document.getElementById('certificateModal');
            setSiteHeaderVisible(false);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeCertificate() {
            const modal = document.getElementById('certificateModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
            setSiteHeaderVisible(true);
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeCvReviewModal();
                closePertaminaSkModal();
                closeCommitteeCertHubModal();
                closeThesisModal();
                closeCertificate();
            }

            if (isPertaminaSkOpen && (event.ctrlKey || event.metaKey) && ['s', 'p', 'u'].includes(event.key.toLowerCase())) {
                event.preventDefault();
            }
        });

        document.getElementById('certificateModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeCertificate();
            }
        });

        AOS.init({
            once: true,
            offset: 50,
            duration: 1000,
            easing: 'ease-out-cubic',
        });

        new Typed('#typed-text', {
            strings: ['SYSTEM ANALYSIS', 'BACKEND DEVELOPER', 'PROBLEM SOLVER'],
            typeSpeed: 60,
            backSpeed: 40,
            loop: true,
            backDelay: 2500
        });

        document.getElementById('year').textContent = new Date().getFullYear();

        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            } else {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            });
        });

        const canvas = document.getElementById('space-canvas');
        const ctx = canvas.getContext('2d');

        let width, height;
        let stars = [];
        let meteors = [];

        function initStars() {
            stars = [];
            const starCount = Math.min(Math.floor((width * height) / 6000), 250);
            for (let i = 0; i < starCount; i++) {
                stars.push({
                    x: Math.random() * width,
                    y: Math.random() * height,
                    radius: Math.random() * 1.5,
                    alpha: Math.random(),
                    dAlpha: (Math.random() * 0.02) + 0.005
                });
            }
        }

        function resizeCanvas() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            initStars();
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Meteor {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * width + width * 0.2;
                this.y = Math.random() * -height * 0.5;
                this.len = Math.random() * 80 + 60;
                this.speed = Math.random() * 12 + 8;
                this.angle = Math.PI / 4;
                this.opacity = Math.random() * 0.7 + 0.3;
            }
            update() {
                this.x -= this.speed * Math.cos(this.angle);
                this.y += this.speed * Math.sin(this.angle);

                if (this.x < -100 || this.y > height + 100) {
                    this.reset();
                    this.y = Math.random() * -200;
                    this.x = Math.random() * width * 1.2;
                }
            }
            draw() {
                ctx.save();
                ctx.strokeStyle = `rgba(0, 240, 255, ${this.opacity})`;
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(this.x + this.len * Math.cos(this.angle), this.y - this.len * Math.sin(this.angle));
                ctx.stroke();
                ctx.restore();
            }
        }

        for (let i = 0; i < 4; i++) {
            meteors.push(new Meteor());
        }

        function animateSpace() {
            ctx.clearRect(0, 0, width, height);

            stars.forEach(star => {
                star.alpha += star.dAlpha;
                if (star.alpha <= 0 || star.alpha >= 1) {
                    star.dAlpha = -star.dAlpha;
                }
                ctx.fillStyle = `rgba(255, 255, 255, ${star.alpha})`;
                ctx.beginPath();
                ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                ctx.fill();
            });

            meteors.forEach(meteor => {
                meteor.update();
                meteor.draw();
            });

            requestAnimationFrame(animateSpace);
        }

        animateSpace();
    </script>
</body>
</html>