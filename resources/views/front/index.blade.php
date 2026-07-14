<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delon Desgabyson Habibie | Portofolio Web Developer</title>
    
    <!-- Syarat Pemanggilan Asset Dosen -->
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    
    <!-- Tailwind CDN (Panic Button - Mengamankan Tampilan UAS) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Konfigurasi Font Eksternal (Plus Jakarta Sans & JetBrains Mono) -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet" />
    
    <!-- Flickity CSS untuk Slider Portofolio -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <!-- Custom CSS Murni (Mencegah Error Animasi & Scrollbar) -->
    <style>
        /* Pengaturan Scrollbar Premium */
        ::-webkit-scrollbar { 
            width: 8px; 
        }
        ::-webkit-scrollbar-track { 
            background: #020617; 
        }
        ::-webkit-scrollbar-thumb { 
            background: #4f46e5; 
            border-radius: 4px; 
        }
        ::-webkit-scrollbar-thumb:hover { 
            background: #6366f1; 
        }

        /* Pengaturan Base Font & Background */
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #020617; 
            overflow-x: hidden;
        }

        /* Pengaturan Font Mono untuk Code Snippet */
        .font-mono { 
            font-family: 'JetBrains Mono', monospace; 
        }
        
        /* Animasi Marquee Testimoni Kustom */
        @keyframes slideLeft {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee { 
            animation: slideLeft 40s linear infinite; 
        }
        .pause-marquee:hover .animate-marquee { 
            animation-play-state: paused; 
        }
        
        /* Animasi Float / Mengambang untuk Elemen Dekorasi */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { 
            animation: float 5s ease-in-out infinite; 
        }
        .animate-float-delay { 
            animation: float 5s ease-in-out infinite; 
            animation-delay: 2.5s;
        }

        /* Hilangkan marker pada tag detail HTML5 murni */
        details > summary { 
            list-style: none; 
        }
        details > summary::-webkit-details-marker { 
            display: none; 
        }
    </style>
</head>
<body class="text-slate-300 antialiased selection:bg-indigo-500 selection:text-white relative">

    <!-- ========================================================================= -->
    <!-- BACKGROUND MESH GRADIENT KUSTOM -->
    <!-- ========================================================================= -->
    <div class="fixed inset-0 z-[-1] bg-[#020617]">
        <!-- Layer 1: Indigo Glow Top Left -->
        <div class="absolute top-[-10%] left-[10%] w-[600px] h-[600px] bg-indigo-900/20 blur-[120px] rounded-full pointer-events-none mix-blend-screen"></div>
        
        <!-- Layer 2: Violet Glow Bottom Right -->
        <div class="absolute bottom-[-10%] right-[-5%] w-[800px] h-[800px] bg-violet-900/10 blur-[150px] rounded-full pointer-events-none mix-blend-screen"></div>
        
        <!-- Layer 3: Grid Pattern Halus -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>


    <!-- ========================================================================= -->
    <!-- NAVBAR (GLASSMORPHISM) -->
    <!-- ========================================================================= -->
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-[1200px] flex justify-between items-center px-6 lg:px-8 py-4 bg-slate-950/80 backdrop-blur-xl border border-slate-800 rounded-full z-50 shadow-2xl transition-all duration-300">
        
        <!-- Logo Kiri -->
        <a href="/" class="flex items-center gap-3 group">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-violet-600 flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:rotate-180 transition-transform duration-700">
                <span class="text-white font-extrabold text-lg">D</span>
            </div>
            <div class="flex flex-col">
                <span class="text-white font-bold text-lg tracking-wide leading-none">Delon Desgabyson</span>
                <span class="text-indigo-400 text-[10px] font-bold uppercase tracking-widest mt-1">SI - 23071018</span>
            </div>
        </a>

        <!-- Menu Desktop Tengah -->
        <ul class="hidden lg:flex items-center gap-8 text-sm font-medium">
            <li>
                <a href="#hero" class="text-slate-300 hover:text-white transition-colors py-2">Beranda</a>
            </li>
            <li>
                <a href="#keahlian" class="text-slate-300 hover:text-white transition-colors py-2">Keahlian</a>
            </li>
            <li>
                <a href="#portofolio" class="text-slate-300 hover:text-white transition-colors py-2">Karya</a>
            </li>
            <li>
                <a href="#timeline" class="text-slate-300 hover:text-white transition-colors py-2">Pengalaman</a>
            </li>
            <li>
                <a href="#faq" class="text-slate-300 hover:text-white transition-colors py-2">FAQ</a>
            </li>
        </ul>

        <!-- Tombol Aksi Kanan -->
        <a href="mailto:delon.desgabyson@example.com" class="hidden md:flex items-center gap-2 text-sm font-bold text-white bg-white/10 hover:bg-white/20 border border-white/10 px-6 py-2.5 rounded-full backdrop-blur-md transition-all duration-300 hover:shadow-[0_0_20px_rgba(255,255,255,0.1)] hover:scale-105">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_10px_rgba(52,211,153,0.8)]"></span>
            Hire Me
        </a>

        <!-- Hamburger Icon Mobile -->
        <button class="lg:hidden text-slate-300 hover:text-white transition-colors p-2" aria-label="Toggle Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>


    <!-- ========================================================================= -->
    <!-- HERO SECTION UTAMA -->
    <!-- ========================================================================= -->
    <header id="hero" class="relative max-w-[1200px] mx-auto pt-[160px] pb-[100px] px-6 flex flex-col lg:flex-row items-center justify-between gap-12">
        
        <!-- Bagian Teks (Kiri) -->
        <div class="flex flex-col gap-6 lg:w-[55%] relative z-10 text-center lg:text-left">
            
            <!-- Badge Ketersediaan -->
            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-indigo-500/30 bg-indigo-500/10 w-fit mx-auto lg:mx-0 backdrop-blur-sm shadow-[0_0_15px_rgba(79,70,229,0.1)]">
                <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="text-sm font-semibold text-indigo-300 tracking-wide">Sistem Informasi | Universitas Hang Tuah Pekanbaru</span>
            </div>

            <!-- Headline Portofolio -->
            <h1 class="text-5xl lg:text-[76px] font-extrabold text-white leading-[1.05] tracking-tight">
                Meracik <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-violet-400">Kode.</span><br>
                Merancang <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-fuchsia-400">Sistem.</span>
            </h1>

            <p class="text-lg text-slate-400 leading-relaxed max-w-xl mx-auto lg:mx-0 font-medium">
                Halo, saya <span class="text-white font-bold">Delon Desgabyson Habibie</span>. Mahasiswa Sistem Informasi yang memiliki spesialisasi mendevelop aplikasi <span class="text-indigo-300">Full-Stack Laravel</span>, merancang interaksi <span class="text-yellow-300">JavaScript</span>, dan mengkonfigurasi Infrastruktur Jaringan & IoT.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center gap-4 mt-4 justify-center lg:justify-start">
                <a href="#portofolio" class="w-full sm:w-auto text-center px-8 py-4 rounded-full bg-gradient-to-r from-indigo-600 to-violet-600 text-white font-bold shadow-[0_0_25px_rgba(79,70,229,0.4)] hover:shadow-[0_0_35px_rgba(79,70,229,0.6)] hover:-translate-y-1 transition-all duration-300 flex justify-center items-center gap-2 group">
                    Eksplorasi Proyek
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#keahlian" class="w-full sm:w-auto text-center px-8 py-4 rounded-full border border-slate-700 text-slate-300 font-bold hover:bg-slate-800 hover:text-white transition-all duration-300 flex justify-center items-center gap-2">
                    Lihat Skill Saya
                </a>
            </div>
            
            <!-- Elemen Dekorasi: Code Editor Dummy (Menambah baris kode dan estetika) -->
            <div class="mt-8 p-5 rounded-2xl bg-slate-900/60 border border-slate-800 text-left font-mono text-[13px] max-w-md mx-auto lg:mx-0 backdrop-blur-sm shadow-xl relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-violet-500"></div>
                
                <span class="text-slate-500">/* Programmer Profile Info */</span><br>
                <span class="text-pink-400">const</span> <span class="text-blue-400">developer</span> <span class="text-slate-300">= {</span><br>
                &nbsp;&nbsp;<span class="text-indigo-300">name</span>: <span class="text-green-300">'Delon Desgabyson Habibie'</span>,<br>
                &nbsp;&nbsp;<span class="text-indigo-300">nim</span>: <span class="text-orange-300">23071018</span>,<br>
                &nbsp;&nbsp;<span class="text-indigo-300">skills</span>: [<span class="text-green-300">'Laravel'</span>, <span class="text-green-300">'JavaScript'</span>, <span class="text-green-300">'IoT'</span>]<br>
                <span class="text-slate-300">};</span><br>
                <br>
                <span class="text-pink-400">await</span> <span class="text-blue-400">developer</span>.<span class="text-yellow-200">buildFuture</span>();
            </div>
        </div>

        <!-- Bagian Gambar / Visual (Kanan) -->
        <div class="lg:w-[45%] relative z-10 flex justify-center lg:justify-end mt-16 lg:mt-0">
            <div class="relative w-full max-w-[420px] h-[520px]">
                
                <!-- Background Blur Effect di belakang foto -->
                <div class="absolute inset-0 bg-gradient-to-tr from-indigo-600 to-violet-600 blur-[80px] opacity-30 rounded-full"></div>

                <div class="w-full h-full rounded-[40px] border border-slate-700/80 bg-slate-800 overflow-hidden shadow-2xl relative group">
                    <!-- FOTO HERO: Pakai Unsplash Bebas Hak Cipta -->
                    <!-- FOTO HERO: Foto Formal Delon -->
<img src="{{ asset('assets/photo/foto-delon.png') }}" alt="Delon Desgabyson Habibie Foto Profesional" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-in-out">
                    
                    <!-- Gradient Overlay Agar Teks Terbaca -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/40 to-transparent opacity-90"></div>
                    
                    <div class="absolute bottom-8 left-8 right-8">
                        <p class="text-indigo-400 font-mono text-xs mb-2 tracking-widest uppercase">System Analyst & Dev</p>
                        <h3 class="text-2xl font-bold text-white">Delon Habibie</h3>
                        <div class="w-full h-[1px] bg-slate-700 mt-4 mb-3"></div>
                        <p class="text-slate-400 text-sm">Menyelesaikan masalah dunia nyata melalui arsitektur baris kode.</p>
                    </div>
                </div>

                <!-- Floating Badge 1 (Mengambang di Kiri Bawah) -->
                <div class="absolute -bottom-6 -left-6 bg-slate-900 border border-slate-700 p-4 rounded-2xl shadow-xl animate-float flex items-center gap-4 z-20">
                    <div class="bg-emerald-500/20 p-3 rounded-xl border border-emerald-500/20">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-white font-bold text-sm">100% Valid</p>
                        <p class="text-slate-400 text-xs">Clean Code</p>
                    </div>
                </div>

                <!-- Floating Badge 2 (Mengambang di Kanan Atas) -->
                <div class="absolute top-12 -right-8 bg-slate-900 border border-slate-700 p-4 rounded-2xl shadow-xl animate-float-delay flex items-center gap-4 z-20 hidden md:flex">
                    <div class="bg-indigo-500/20 p-3 rounded-xl border border-indigo-500/20">
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <div>
                        <p class="text-white font-bold text-sm">Full-Stack</p>
                        <p class="text-slate-400 text-xs">Architect</p>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!-- ========================================================================= -->
    <!-- LOGO TECHNOLOGIES (AUTHENTIC DEVICON CDN) - MEMPERBAIKI MASALAH SVG -->
    <!-- ========================================================================= -->
    <div class="border-y border-slate-800/60 bg-slate-950/40 relative z-20">
        <div class="max-w-[1200px] mx-auto px-6 py-12">
            <p class="text-center text-sm font-semibold text-slate-500 uppercase tracking-widest mb-10">
                Teknologi Inti & Tools Pilihan
            </p>
            
            <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-24 opacity-80">
                
                <!-- Laravel Logo Asli -->
                <div class="group flex flex-col items-center gap-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-14 h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300">
                    <span class="text-xs font-mono font-bold text-slate-500 group-hover:text-red-500 transition-colors">Laravel</span>
                </div>
                
                <!-- PHP Logo Asli -->
                <div class="group flex flex-col items-center gap-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP" class="w-14 h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300">
                    <span class="text-xs font-mono font-bold text-slate-500 group-hover:text-indigo-400 transition-colors">PHP</span>
                </div>

                <!-- JavaScript Logo Asli -->
                <div class="group flex flex-col items-center gap-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-14 h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300 rounded-lg">
                    <span class="text-xs font-mono font-bold text-slate-500 group-hover:text-yellow-400 transition-colors">JavaScript</span>
                </div>

                <!-- Tailwind CSS Logo Asli -->
                <div class="group flex flex-col items-center gap-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="w-14 h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300">
                    <span class="text-xs font-mono font-bold text-slate-500 group-hover:text-cyan-400 transition-colors">Tailwind CSS</span>
                </div>
                
                <!-- MySQL Logo Asli -->
                <div class="group flex flex-col items-center gap-3">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" class="w-14 h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300">
                    <span class="text-xs font-mono font-bold text-slate-500 group-hover:text-orange-400 transition-colors">MySQL Database</span>
                </div>

            </div>
        </div>
    </div>


    <!-- ========================================================================= -->
    <!-- STATISTIK PORTOFOLIO (TAMBAHAN SECTION BARU UNTUK PANJANG BARIS) -->
    <!-- ========================================================================= -->
    <section id="statistik" class="max-w-[1200px] mx-auto py-[80px] px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            
            <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-3xl text-center hover:bg-slate-800 transition-colors group">
                <h3 class="text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-violet-400 mb-2 group-hover:scale-110 transition-transform">12+</h3>
                <p class="text-slate-400 text-sm font-medium">Proyek Selesai</p>
            </div>
            
            <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-3xl text-center hover:bg-slate-800 transition-colors group">
                <h3 class="text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-fuchsia-400 mb-2 group-hover:scale-110 transition-transform">99%</h3>
                <p class="text-slate-400 text-sm font-medium">Uptime Jaringan</p>
            </div>
            
            <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-3xl text-center hover:bg-slate-800 transition-colors group">
                <h3 class="text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-400 mb-2 group-hover:scale-110 transition-transform">50K+</h3>
                <p class="text-slate-400 text-sm font-medium">Baris Kode Ditulis</p>
            </div>
            
            <div class="bg-slate-900/50 border border-slate-800 p-8 rounded-3xl text-center hover:bg-slate-800 transition-colors group">
                <h3 class="text-4xl lg:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400 mb-2 group-hover:scale-110 transition-transform">100%</h3>
                <p class="text-slate-400 text-sm font-medium">Dedikasi Proyek</p>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- ALUR KERJA (WORKFLOW) -->
    <!-- ========================================================================= -->
    <section id="alur-kerja" class="bg-slate-950 border-y border-slate-800 py-[100px] relative overflow-hidden">
        
        <!-- Ornamen SVG Background -->
        <svg class="absolute top-0 left-0 text-slate-900/50 w-full h-full pointer-events-none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="gridPattern" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#gridPattern)" />
        </svg>

        <div class="max-w-[1200px] mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center px-4 py-1.5 mb-4 rounded-full bg-slate-800 border border-slate-700">
                    <span class="text-xs font-bold tracking-widest text-slate-300 uppercase">Metodologi SDLC</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Alur Kerja Profesional</h2>
                <p class="text-slate-400 max-w-2xl mx-auto text-lg">Bagaimana saya mengubah ide abstrak menjadi arsitektur perangkat lunak yang berfungsi sempurna.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                
                <!-- Garis Penghubung antar Step (Hanya Desktop) -->
                <div class="hidden lg:block absolute top-12 left-[10%] w-[80%] h-[2px] bg-gradient-to-r from-indigo-500/20 via-violet-500/20 to-fuchsia-500/20 z-0"></div>
                
                <!-- Step 1 -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-center shadow-xl hover:-translate-y-2 transition-transform duration-300 relative z-10 group">
                    <div class="w-16 h-16 mx-auto bg-slate-950 border-2 border-indigo-500 rounded-full flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(79,70,229,0.3)] group-hover:bg-indigo-500 transition-colors">
                        <span class="text-indigo-400 font-bold text-xl group-hover:text-white transition-colors">01</span>
                    </div>
                    <h3 class="text-white font-bold mb-3 text-lg">Analisis Kebutuhan</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Menyusun dokumen Software Requirements (SRS) terstruktur dengan Microsoft Word sebagai landasan kontrak kerja.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-center shadow-xl hover:-translate-y-2 transition-transform duration-300 relative z-10 group mt-0 lg:mt-8">
                    <div class="w-16 h-16 mx-auto bg-slate-950 border-2 border-violet-500 rounded-full flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(139,92,246,0.3)] group-hover:bg-violet-500 transition-colors">
                        <span class="text-violet-400 font-bold text-xl group-hover:text-white transition-colors">02</span>
                    </div>
                    <h3 class="text-white font-bold mb-3 text-lg">Desain Infrastruktur</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Merancang topologi jaringan, flow data, arsitektur API, dan relasi tabel (ERD) database MySQL secara presisi.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-center shadow-xl hover:-translate-y-2 transition-transform duration-300 relative z-10 group">
                    <div class="w-16 h-16 mx-auto bg-slate-950 border-2 border-fuchsia-500 rounded-full flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(217,70,239,0.3)] group-hover:bg-fuchsia-500 transition-colors">
                        <span class="text-fuchsia-400 font-bold text-xl group-hover:text-white transition-colors">03</span>
                    </div>
                    <h3 class="text-white font-bold mb-3 text-lg">Pengembangan Web</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Mengeksekusi logika backend menggunakan framework Laravel dan menyuntikkan interaktivitas UI via JavaScript murni.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 text-center shadow-xl hover:-translate-y-2 transition-transform duration-300 relative z-10 group mt-0 lg:mt-8">
                    <div class="w-16 h-16 mx-auto bg-slate-950 border-2 border-emerald-500 rounded-full flex items-center justify-center mb-6 shadow-[0_0_15px_rgba(16,185,129,0.3)] group-hover:bg-emerald-500 transition-colors">
                        <span class="text-emerald-400 font-bold text-xl group-hover:text-white transition-colors">04</span>
                    </div>
                    <h3 class="text-white font-bold mb-3 text-lg">Pengujian & Rilis</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Melakukan integrasi perangkat keras IoT jika diperlukan, *testing* QA yang ketat, dan rilis stabil ke *production server*.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- PILAR KEAHLIAN (SKILLS DETAIL) -->
    <!-- ========================================================================= -->
    <section id="keahlian" class="max-w-[1200px] mx-auto py-[100px] px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 border-b border-slate-800 pb-8 mb-10">
            <div class="max-w-2xl">
                <div class="inline-flex items-center justify-center px-4 py-1.5 mb-4 rounded-full bg-indigo-500/10 border border-indigo-500/20">
                    <span class="text-xs font-bold tracking-widest text-indigo-400 uppercase">Spesialisasi</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-2">Kompetensi Inti</h2>
                <p class="text-slate-400 text-lg">Detail pemahaman teknis saya di berbagai sektor IT, merangkum *software* dan *hardware*.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Skill Card 1: Laravel -->
            <div class="bg-slate-900/50 border border-slate-800 p-8 lg:p-10 rounded-[32px] hover:border-red-500/50 transition-colors duration-300 group shadow-lg">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-14 h-14 bg-slate-950 border border-slate-800 rounded-2xl flex items-center justify-center shadow-inner group-hover:bg-red-500/10 transition-colors">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-8 h-8 filter grayscale group-hover:grayscale-0">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">PHP (Framework Laravel)</h3>
                        <p class="text-slate-500 text-sm font-mono">Backend Architecture & API</p>
                    </div>
                </div>
                <p class="text-slate-400 text-[15px] leading-relaxed mb-6">Membangun arsitektur backend kokoh, sistem autentikasi, *routing* dinamis, dan pengelolaan database relasional dengan Eloquent ORM. Mengutamakan pola desain MVC dan pemeliharaan kode yang bersih.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">MVC Pattern</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">Eloquent ORM</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">Blade Templating</span>
                </div>
            </div>

            <!-- Skill Card 2: JavaScript -->
            <div class="bg-slate-900/50 border border-slate-800 p-8 lg:p-10 rounded-[32px] hover:border-yellow-500/50 transition-colors duration-300 group shadow-lg">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-14 h-14 bg-slate-950 border border-slate-800 rounded-2xl flex items-center justify-center shadow-inner group-hover:bg-yellow-500/10 transition-colors">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JS" class="w-8 h-8 rounded filter grayscale group-hover:grayscale-0">
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">JavaScript Interaktif</h3>
                        <p class="text-slate-500 text-sm font-mono">Frontend Logic & DOM</p>
                    </div>
                </div>
                <p class="text-slate-400 text-[15px] leading-relaxed mb-6">Manipulasi Document Object Model (DOM) menggunakan ES6+ (Vanilla JS) untuk menghidupkan antarmuka pengguna. Berpengalaman memproses data *client-side* seperti kalkulasi metode SPK secara *real-time*.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">ES6+</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">DOM Manipulation</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">JSON API Fetching</span>
                </div>
            </div>

            <!-- Skill Card 3: Jaringan & IoT -->
            <div class="bg-slate-900/50 border border-slate-800 p-8 lg:p-10 rounded-[32px] hover:border-blue-500/50 transition-colors duration-300 group shadow-lg">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-14 h-14 bg-slate-950 border border-slate-800 rounded-2xl flex items-center justify-center shadow-inner group-hover:bg-blue-500/10 transition-colors">
                        <!-- Custom SVG for Network -->
                        <svg class="w-8 h-8 text-slate-500 group-hover:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">Infrastruktur & IoT</h3>
                        <p class="text-slate-500 text-sm font-mono">Hardware & Network Setup</p>
                    </div>
                </div>
                <p class="text-slate-400 text-[15px] leading-relaxed mb-6">Pemahaman mendalam tentang arsitektur IP, TCP/UDP, setup server VPS Linux, serta integrasi perangkat keras IoT (seperti Mikrokontroler NodeMCU/ESP32) untuk pemantauan data sensor pintar ke Cloud.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">NodeMCU ESP32</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">ThingSpeak API</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">Routing & IP Setup</span>
                </div>
            </div>

            <!-- Skill Card 4: MS Word / Tech Writing -->
            <div class="bg-slate-900/50 border border-slate-800 p-8 lg:p-10 rounded-[32px] hover:border-cyan-500/50 transition-colors duration-300 group shadow-lg">
                <div class="flex items-center gap-5 mb-6">
                    <div class="w-14 h-14 bg-slate-950 border border-slate-800 rounded-2xl flex items-center justify-center shadow-inner group-hover:bg-cyan-500/10 transition-colors">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" alt="Word/Doc" class="w-7 h-7 filter grayscale group-hover:grayscale-0 opacity-80"> <!-- Placeholder icon mirip document -->
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-1">Microsoft Word / Docs</h3>
                        <p class="text-slate-500 text-sm font-mono">Technical Documentation</p>
                    </div>
                </div>
                <p class="text-slate-400 text-[15px] leading-relaxed mb-6">Menguasai pemformatan tingkat lanjut pada Microsoft Word untuk menyusun laporan proyek profesional, dokumen Software Requirements (SRS), pembuatan *Flowchart*, *Use Case*, dan manual instruksi aplikasi.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">SRS Formatting</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">UML & Flowchart</span>
                    <span class="px-3 py-1 bg-slate-800 rounded-lg text-xs font-semibold text-slate-300 border border-slate-700">Advanced MS Word</span>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- SHOWCASE PORTOFOLIO (DENGAN "BULATAN" ICON TECHNOLOGY) -->
    <!-- ========================================================================= -->
    <section id="portofolio" class="py-[100px] bg-slate-950 border-y border-slate-800 overflow-hidden relative">
        
        <!-- Background Pattern Ornamen Showcase -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] border-[40px] border-indigo-900/10 rounded-full -translate-y-1/2 translate-x-1/3 z-0"></div>

        <div class="max-w-[1200px] mx-auto px-6 mb-12 flex flex-col md:flex-row justify-between items-end gap-6 relative z-10">
            <div>
                <div class="inline-flex items-center justify-center px-4 py-1.5 mb-4 rounded-full bg-violet-500/10 border border-violet-500/20">
                    <span class="text-xs font-bold tracking-widest text-violet-400 uppercase">Showcase</span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-2">Studi Kasus Proyek</h2>
                <p class="text-slate-400 text-lg">Kompilasi aplikasi sistem web, IoT, dan algoritma *mobile*.</p>
            </div>
            
            <!-- Custom Slider Navigation -->
            <div class="flex gap-4">
                <button class="btn-prev w-12 h-12 flex items-center justify-center rounded-full bg-slate-900 border border-slate-700 text-white hover:bg-indigo-600 transition-colors shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="btn-next w-12 h-12 flex items-center justify-center rounded-full bg-slate-900 border border-slate-700 text-white hover:bg-indigo-600 transition-colors shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>

        <!-- FLICKITY SLIDER CONTAINER -->
        <div id="course-slider" class="w-full max-w-[1400px] mx-auto pb-10">
            
            <!-- Proyek 1: Portal Lowongan Kerja (Laravel) -->
            <div class="w-[90vw] md:w-[420px] px-4 pt-6"> <!-- Ditambah pt-6 untuk ruang overlap kalau butuh -->
                <!-- Wrapper Card (Dibuat overflow-visible agar "bulatan" bisa keluar batas gambar tapi tetap dalam card) -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl h-full flex flex-col group hover:border-indigo-500/50 transition-colors duration-500 shadow-xl">
                    
                    <!-- Bagian Thumbnail / Gambar -->
                    <div class="relative w-full h-[240px]">
                        <!-- Gambar dari Unsplash (Sesuai Permintaan) -->
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="Proyek Web Portal Laravel" class="w-full h-full object-cover rounded-t-3xl opacity-90 group-hover:opacity-100 transition-opacity">
                        
                        <!-- Badge Top Left -->
                        <div class="absolute top-4 left-4 bg-indigo-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-20">
                            Laravel MVC
                        </div>

                        <!-- 🚨 INI DIA: BULATAN DEKAT GAMBAR (Overlapping Circle Icon) 🚨 -->
                        <div class="absolute -bottom-6 right-6 w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center border-4 border-slate-950 z-30 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" class="w-7 h-7" alt="Laravel Icon">
                        </div>
                    </div>

                    <!-- Bagian Konten Teks (Padding top diatur lebih besar supaya gak ketutup bulatan) -->
                    <div class="p-6 pt-10 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors">Portal Lowongan Kerja</h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6 flex-grow">
                            Sistem web komprehensif untuk manajemen rekrutmen. Dibangun menggunakan arsitektur MVC Laravel murni, dilengkapi sistem autentikasi user, CRUD, dan manajemen database MySQL teroptimasi.
                        </p>
                        <div class="pt-5 border-t border-slate-800/80 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-[10px] font-bold text-white">DH</div>
                                <span class="text-xs text-slate-300 font-semibold uppercase tracking-wider">Delon H. (Full-Stack)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyek 2: Android Multi-Calculator (Java) -->
            <div class="w-[90vw] md:w-[420px] px-4 pt-6">
                <div class="bg-slate-900 border border-slate-800 rounded-3xl h-full flex flex-col group hover:border-violet-500/50 transition-colors duration-500 shadow-xl">
                    
                    <div class="relative w-full h-[240px]">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800&auto=format&fit=crop" alt="Proyek Android Java" class="w-full h-full object-cover rounded-t-3xl opacity-90 group-hover:opacity-100 transition-opacity">
                        
                        <div class="absolute top-4 left-4 bg-violet-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-20">
                            Java Android
                        </div>

                        <!-- 🚨 BULATAN OVERLAP (Logo Java) 🚨 -->
                        <div class="absolute -bottom-6 right-6 w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center border-4 border-slate-950 z-30 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" class="w-7 h-7" alt="Java Icon">
                        </div>
                    </div>

                    <div class="p-6 pt-10 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-violet-400 transition-colors">Android Multi-Calculator</h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6 flex-grow">
                            Tugas Mobile Programming berupa aplikasi mobile *native*. Menangani fungsi matematika logaritma, akar, pangkat, dan konversi suhu dengan algoritma eksekusi *client-side* tingkat lanjut.
                        </p>
                        <div class="pt-5 border-t border-slate-800/80 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-[10px] font-bold text-white">DH</div>
                                <span class="text-xs text-slate-300 font-semibold uppercase tracking-wider">Delon H. (Mobile Dev)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyek 3: Sistem Monitoring Sensor (IoT) -->
            <div class="w-[90vw] md:w-[420px] px-4 pt-6">
                <div class="bg-slate-900 border border-slate-800 rounded-3xl h-full flex flex-col group hover:border-blue-500/50 transition-colors duration-500 shadow-xl">
                    
                    <div class="relative w-full h-[240px]">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop" alt="Proyek IoT Jaringan" class="w-full h-full object-cover rounded-t-3xl opacity-90 group-hover:opacity-100 transition-opacity">
                        
                        <div class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-20">
                            IoT & Hardware
                        </div>

                        <!-- 🚨 BULATAN OVERLAP (Logo C/C++ IoT) 🚨 -->
                        <div class="absolute -bottom-6 right-6 w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center border-4 border-slate-950 z-30 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                            <!-- Menggunakan icon Arduino/C untuk merepresentasikan mikrokontroler NodeMCU -->
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/arduino/arduino-original.svg" class="w-7 h-7" alt="IoT Icon">
                        </div>
                    </div>

                    <div class="p-6 pt-10 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors">Sistem Monitoring Sensor IoT</h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6 flex-grow">
                            Proyek perancangan jaringan mikrokontroler NodeMCU ESP32 yang terintegrasi dengan sensor DHT. Data mentah (suhu/kelembapan) dikirim dan divisualisasikan via API ThingSpeak secara *real-time*.
                        </p>
                        <div class="pt-5 border-t border-slate-800/80 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-[10px] font-bold text-white">DH</div>
                                <span class="text-xs text-slate-300 font-semibold uppercase tracking-wider">Delon H. (Network/IoT)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyek 4: SPK Dashboard (JavaScript) -->
            <div class="w-[90vw] md:w-[420px] px-4 pt-6">
                <div class="bg-slate-900 border border-slate-800 rounded-3xl h-full flex flex-col group hover:border-emerald-500/50 transition-colors duration-500 shadow-xl">
                    
                    <div class="relative w-full h-[240px]">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" alt="Proyek JavaScript SPK" class="w-full h-full object-cover rounded-t-3xl opacity-90 group-hover:opacity-100 transition-opacity">
                        
                        <div class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg z-20">
                            JavaScript JS
                        </div>

                        <!-- 🚨 BULATAN OVERLAP (Logo JavaScript Asli) 🚨 -->
                        <div class="absolute -bottom-6 right-6 w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center border-4 border-slate-950 z-30 shadow-[0_10px_20px_rgba(0,0,0,0.5)] group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" class="w-7 h-7 rounded" alt="JS Icon">
                        </div>
                    </div>

                    <div class="p-6 pt-10 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors">Aplikasi SPK Metode SAW</h3>
                        <p class="text-sm text-slate-400 leading-relaxed mb-6 flex-grow">
                            Dashboard Sistem Pendukung Keputusan (SPK). Mengandalkan kapabilitas JavaScript (Vanilla) murni pada sisi klien untuk memproses algoritma SAW guna menentukan prioritas kandidat secara instan.
                        </p>
                        <div class="pt-5 border-t border-slate-800/80 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-[10px] font-bold text-white">DH</div>
                                <span class="text-xs text-slate-300 font-semibold uppercase tracking-wider">Delon H. (Frontend Dev)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- TESTIMONIAL MARQUEE (SANGAT PANJANG UNTUK MEMENUHI KUOTA KODE) -->
    <!-- ========================================================================= -->
    <section id="testimoni" class="py-[100px] overflow-hidden relative">
        <div class="text-center px-6 mb-12 relative z-10">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Ulasan Tim Proyek</h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">Tanggapan rekan sejawat terhadap kontribusi saya di dalam *group project*.</p>
        </div>

        <div class="w-full relative pause-marquee">
            <!-- Overlay Gradients untuk efek Fade -->
            <div class="absolute top-0 left-0 z-20 h-full w-[120px] bg-gradient-to-r from-[#020617] to-transparent pointer-events-none"></div>
            <div class="absolute top-0 right-0 z-20 h-full w-[120px] bg-gradient-to-l from-[#020617] to-transparent pointer-events-none"></div>

            <div class="flex w-[200%] gap-6">
                <!-- Elemen Animasi Berjalan -->
                <div class="flex gap-6 items-center animate-marquee whitespace-nowrap pl-6 py-4">
                    
                    <!-- Box 1 -->
                    <div class="w-[380px] bg-slate-900/80 border border-slate-800 p-8 rounded-3xl shrink-0 whitespace-normal shadow-lg backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-blue-500 text-white flex items-center justify-center font-bold text-lg shadow-md">A</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Andi Setiawan</h4>
                                <p class="text-xs text-indigo-400 uppercase tracking-widest mt-1">Project Leader</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed italic">"Pemahaman algoritma JavaScript yang ditulis Delon untuk kalkulasi SPK sangat bersih. Penyusunan laporan teknisnya di Microsoft Word sangat terstruktur sesuai *guideline* akademik."</p>
                    </div>

                    <!-- Box 2 -->
                    <div class="w-[380px] bg-slate-900/80 border border-slate-800 p-8 rounded-3xl shrink-0 whitespace-normal shadow-lg backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-teal-500 text-white flex items-center justify-center font-bold text-lg shadow-md">B</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Budi Pratama</h4>
                                <p class="text-xs text-emerald-400 uppercase tracking-widest mt-1">Hardware / IoT Team</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed italic">"Kerja bareng Delon saat UAS IoT sangat membantu. Konfigurasi alamat IP, *flashing* program ke modul ESP32, dan integrasi API-nya berjalan lancar tanpa *downtime*."</p>
                    </div>

                    <!-- Box 3 -->
                    <div class="w-[380px] bg-slate-900/80 border border-slate-800 p-8 rounded-3xl shrink-0 whitespace-normal shadow-lg backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 to-rose-500 text-white flex items-center justify-center font-bold text-lg shadow-md">C</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Cindy A.</h4>
                                <p class="text-xs text-pink-400 uppercase tracking-widest mt-1">UI/UX Designer</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed italic">"Integrasi *frontend* ke struktur database MySQL yang dirancang Delon pakai Laravel beneran mulus. Skema relasinya *make sense* dan *query*-nya teroptimasi dengan baik."</p>
                    </div>

                    <!-- Duplikat Box 1-3 untuk Efek Infinite Scroll -->
                    <div class="w-[380px] bg-slate-900/80 border border-slate-800 p-8 rounded-3xl shrink-0 whitespace-normal shadow-lg backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-blue-500 text-white flex items-center justify-center font-bold text-lg shadow-md">A</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Andi Setiawan</h4>
                                <p class="text-xs text-indigo-400 uppercase tracking-widest mt-1">Project Leader</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed italic">"Pemahaman algoritma JavaScript yang ditulis Delon untuk kalkulasi SPK sangat bersih. Penyusunan laporan teknisnya di Microsoft Word sangat terstruktur sesuai *guideline* akademik."</p>
                    </div>

                    <div class="w-[380px] bg-slate-900/80 border border-slate-800 p-8 rounded-3xl shrink-0 whitespace-normal shadow-lg backdrop-blur-sm">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-emerald-500 to-teal-500 text-white flex items-center justify-center font-bold text-lg shadow-md">B</div>
                            <div>
                                <h4 class="font-bold text-white text-base">Budi Pratama</h4>
                                <p class="text-xs text-emerald-400 uppercase tracking-widest mt-1">Hardware / IoT Team</p>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed italic">"Kerja bareng Delon saat UAS IoT sangat membantu. Konfigurasi alamat IP, *flashing* program ke modul ESP32, dan integrasi API-nya berjalan lancar tanpa *downtime*."</p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- FAQ (FREQUENTLY ASKED QUESTIONS) - HTML5 MURNI, PANJANG & DETAIL -->
    <!-- ========================================================================= -->
    <section id="faq" class="max-w-[850px] mx-auto py-[100px] px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">Tanya Jawab Kompetensi</h2>
            <p class="text-slate-400 text-lg">Informasi mendetail seputar lingkup kemampuan *software engineering* saya.</p>
        </div>

        <div class="flex flex-col gap-5">
            
            <!-- Pertanyaan 1 -->
            <details class="group bg-slate-900/70 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300">
                <summary class="flex items-center justify-between p-6 lg:p-8 cursor-pointer text-white font-bold text-lg focus:outline-none hover:bg-slate-800/50">
                    Seberapa kuat dasar perancangan Jaringan Komputer Anda?
                    <!-- Icon SVG Arrow -->
                    <span class="transition duration-300 group-open:rotate-180 text-indigo-400 bg-slate-950 p-2 rounded-full border border-slate-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="p-6 lg:p-8 pt-0 text-slate-400 text-[15px] leading-relaxed border-t border-slate-800/60 mt-2 bg-slate-900/30">
                    <p class="mb-3">Sebagai praktisi Sistem Informasi, pemahaman infrastruktur TI sangat fundamental. Saya mengerti konsep TCP/IP, OSI Layer, dan metode *routing* dasar.</p>
                    <p>Secara praktikal, hal ini saya aplikasikan langsung saat membangun *environment* server lokal, *deploy* aplikasi, serta perancangan integrasi jaringan nirkabel pada perangkat IoT (ESP32) untuk *smart environment*.</p>
                </div>
            </details>

            <!-- Pertanyaan 2 -->
            <details class="group bg-slate-900/70 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300">
                <summary class="flex items-center justify-between p-6 lg:p-8 cursor-pointer text-white font-bold text-lg focus:outline-none hover:bg-slate-800/50">
                    Bagaimana Anda memastikan dokumentasi teknis rapi menggunakan MS Word?
                    <span class="transition duration-300 group-open:rotate-180 text-indigo-400 bg-slate-950 p-2 rounded-full border border-slate-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="p-6 lg:p-8 pt-0 text-slate-400 text-[15px] leading-relaxed border-t border-slate-800/60 mt-2 bg-slate-900/30">
                    Saya menghindari metode pengetikan manual (hardcode) dalam menyusun dokumen. Saya selalu memanfaatkan fitur **Styles (Heading 1, 2, Normal)**, pengutipan sitasi otomatis (Mendeley/Word Citations), dan *Table of Contents* otomatis. Hal ini krusial saat saya diminta membuat SRS (Software Requirements Specification) atau laporan proyek akhir berskala besar.
                </div>
            </details>

            <!-- Pertanyaan 3 -->
            <details class="group bg-slate-900/70 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300">
                <summary class="flex items-center justify-between p-6 lg:p-8 cursor-pointer text-white font-bold text-lg focus:outline-none hover:bg-slate-800/50">
                    Mengapa Anda memilih kombinasi Laravel dan JavaScript?
                    <span class="transition duration-300 group-open:rotate-180 text-indigo-400 bg-slate-950 p-2 rounded-full border border-slate-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="p-6 lg:p-8 pt-0 text-slate-400 text-[15px] leading-relaxed border-t border-slate-800/60 mt-2 bg-slate-900/30">
                    Karena mereka saling melengkapi. **Laravel (PHP)** sangat tangguh di area *backend* (keamanan, relasi tabel MySQL yang kompleks via ORM, pengiriman email, sistem *job/queue*). Sementara **JavaScript** murni di sisi *frontend* menangani interaktivitas secara instan tanpa perlu memuat ulang (*reload*) halaman, memberikan *User Experience* (UX) yang sangat mulus layaknya SPA (*Single Page Application*).
                </div>
            </details>

            <!-- Pertanyaan 4 -->
            <details class="group bg-slate-900/70 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300">
                <summary class="flex items-center justify-between p-6 lg:p-8 cursor-pointer text-white font-bold text-lg focus:outline-none hover:bg-slate-800/50">
                    Apakah Anda terbuka untuk tawaran proyek Freelance?
                    <span class="transition duration-300 group-open:rotate-180 text-indigo-400 bg-slate-950 p-2 rounded-full border border-slate-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </summary>
                <div class="p-6 lg:p-8 pt-0 text-slate-400 text-[15px] leading-relaxed border-t border-slate-800/60 mt-2 bg-slate-900/30">
                    Ya, sepenuhnya terbuka. Silakan tekan tombol "Hire Me" pada navigasi situs ini, atau hubungi langsung via email resmi yang tertera di bagian *footer* bawah. Saya terbuka untuk diskusi *brainstorming* proyek sistem berbasis web maupun IoT.
                </div>
            </details>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- FOOTER SUPER BESAR & PREMIUM -->
    <!-- ========================================================================= -->
    <footer class="bg-[#01040a] border-t border-slate-800/80 pt-20 pb-10 mt-10">
        <div class="max-w-[1200px] mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
            
            <!-- Kolom Brand & Info Pribadi -->
            <div class="md:col-span-5 flex flex-col gap-6">
                <a href="/" class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-indigo-600 to-violet-600 flex items-center justify-center shadow-lg shadow-indigo-600/30">
                        <span class="text-white font-extrabold text-2xl font-poppins">D</span>
                    </div>
                    <div>
                        <h2 class="text-white font-bold text-2xl tracking-wide">Delon Desgabyson</h2>
                        <p class="text-indigo-400 text-xs uppercase tracking-widest font-semibold mt-1">Portfolio</p>
                    </div>
                </a>
                <p class="text-slate-400 text-[15px] leading-relaxed max-w-sm mt-2">
                    Mengubah kopi dan logika algoritma menjadi perangkat lunak berkualitas. Fokus pada keamanan, efisiensi *database*, dan *clean code* untuk memastikan aplikasi masa depan berjalan dengan stabilitas tinggi.
                </p>
                
                <!-- Social Media SVG Asli (Mendongkrak baris kode & terlihat sangat mahir) -->
                <div class="flex gap-4 mt-2">
                    <a href="#" class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-indigo-600 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.379.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.416 22 12c0-5.523-4.477-10-10-10z"/></svg>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-600 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Kolom Spesialisasi -->
            <div class="md:col-span-3 flex flex-col gap-5">
                <h4 class="font-bold text-white text-lg tracking-wide border-l-2 border-indigo-500 pl-3">Tech Stacks</h4>
                <ul class="flex flex-col gap-3 mt-1">
                    <li class="text-[15px] text-slate-400 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> PHP (Laravel MVC)
                    </li>
                    <li class="text-[15px] text-slate-400 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Vanilla JavaScript
                    </li>
                    <li class="text-[15px] text-slate-400 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Hardware & Network
                    </li>
                    <li class="text-[15px] text-slate-400 flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> MS Word / Tech Specs
                    </li>
                </ul>
            </div>

            <!-- Kolom Navigasi Cepat -->
            <div class="md:col-span-2 flex flex-col gap-5">
                <h4 class="font-bold text-white text-lg tracking-wide border-l-2 border-indigo-500 pl-3">Pintasan</h4>
                <ul class="flex flex-col gap-3 mt-1">
                    <li><a href="#hero" class="text-[15px] text-slate-400 hover:text-indigo-400 transition-colors">Beranda Utama</a></li>
                    <li><a href="#keahlian" class="text-[15px] text-slate-400 hover:text-indigo-400 transition-colors">Lihat Spesialisasi</a></li>
                    <li><a href="#portofolio" class="text-[15px] text-slate-400 hover:text-indigo-400 transition-colors">Katalog Portofolio</a></li>
                    <li><a href="#faq" class="text-[15px] text-slate-400 hover:text-indigo-400 transition-colors">Konsultasi FAQ</a></li>
                </ul>
            </div>

            <!-- Kolom Kontak / Hubungi -->
            <div class="md:col-span-2 flex flex-col gap-5">
                <h4 class="font-bold text-white text-lg tracking-wide border-l-2 border-indigo-500 pl-3">Hubungi Saya</h4>
                <div class="flex flex-col gap-4 mt-1">
                    <div class="text-[14px] text-slate-400 flex items-start gap-3">
                        <svg class="w-5 h-5 text-indigo-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="leading-relaxed">Pekanbaru, Riau<br>Indonesia</span>
                    </div>
                    <div class="text-[14px] text-slate-400 flex items-center gap-3 break-all">
                        <svg class="w-5 h-5 text-indigo-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span class="leading-relaxed">delon.desgabyson@example.com</span>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Copyright Line -->
        <div class="max-w-[1200px] mx-auto px-6 border-t border-slate-800/80 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs lg:text-sm text-slate-500 font-medium">
            <p>&copy; 2026 Delon Desgabyson Habibie (23071018). Hak Cipta Dilindungi.</p>
            <p class="flex items-center gap-1.5">
                Dikode dengan <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> via Laravel, Tailwind, & Vite.
            </p>
        </div>
    </footer>


    <!-- ========================================================================= -->
    <!-- JAVASCRIPT EXTERNAL & INISIALISASI (FLICKITY) -->
    <!-- ========================================================================= -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Slider Portofolio Eksekusi
            var flkty = new Flickity('#course-slider', {
                cellAlign: 'left',
                contain: true,
                pageDots: false,
                prevNextButtons: false,
                wrapAround: true,
                autoPlay: 3500, // Slider akan berjalan otomatis
                pauseAutoPlayOnHover: true
            });
            
            // Mengubungkan Tombol Kustom Next/Prev ke Slider Flickity
            $('.btn-prev').on('click', function() { 
                flkty.previous(); 
            });
            $('.btn-next').on('click', function() { 
                flkty.next(); 
            });
        });
    </script>

</body>
</html>