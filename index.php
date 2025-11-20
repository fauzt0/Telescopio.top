<!doctype html>
<html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Astronomy &amp; Dev Tools Hub</title>  
  <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
  <link rel="stylesheet" href="style.css"></link>
 </head>

 <body>
  <div class="container mx-auto"><!-- Header -->
   <header class="header">
    <div class="logo">
     <svg class="logo-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="18" fill="currentColor" /> <ellipse cx="50" cy="50" rx="32" ry="8" fill="none" stroke="currentColor" stroke-width="3" opacity="0.6" /> <ellipse cx="50" cy="50" rx="32" ry="8" fill="none" stroke="currentColor" stroke-width="3" opacity="0.9" /> <ellipse cx="50" cy="50" rx="28" ry="7" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.5" /> <ellipse cx="50" cy="50" rx="36" ry="9" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.4" /> <ellipse cx="50" cy="48" rx="16" ry="3" fill="currentColor" opacity="0.3" /> <ellipse cx="50" cy="52" rx="15" ry="2.5" fill="currentColor" opacity="0.2" />
     </svg><span class="logo-text" id="site-title">AstroDevHub</span>
    </div><button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu"> <span></span> <span></span> <span></span> </button>
    <nav class="nav" id="nav-menu"><a href="#astronomy" class="nav-link">Astronomía</a> <a href="#science" class="nav-link">Ciencia</a> <a href="#tech" class="nav-link">Tecnología</a> <a href="#tools" class="nav-link">Herramientas</a>
    </nav>
   </header><!-- Hero Section -->
   <section class="hero">
    <div class="stars-background" id="stars-container"></div>
    <div class="hero-content">
     <h1 class="hero-title" id="hero-title">Explora el Universo y Desarrolla con Poder</h1>
     <div class="telescope-container" style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;"><!-- Laptop SVG -->
      <svg class="laptop-svg" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg" style="margin-top: 20px;"><path d="M5 70 L10 65 L110 65 L115 70 Z" fill="white" opacity="0.3" /> <rect x="5" y="70" width="110" height="4" rx="1" fill="white" opacity="0.9" /> <rect x="20" y="20" width="80" height="45" rx="2" fill="white" opacity="0.95" /> <rect x="23" y="23" width="74" height="39" rx="1" fill="#1a1f3a" opacity="0.95" /> <rect x="26" y="26" width="68" height="33" fill="#0a0e27" /> <rect x="30" y="30" width="25" height="2" rx="1" fill="#6366f1" opacity="0.8" /> <rect x="30" y="35" width="35" height="2" rx="1" fill="#8b5cf6" opacity="0.7" /> <rect x="30" y="40" width="20" height="2" rx="1" fill="#6366f1" opacity="0.8" /> <rect x="30" y="45" width="40" height="2" rx="1" fill="#10b981" opacity="0.7" /> <rect x="30" y="50" width="30" height="2" rx="1" fill="#8b5cf6" opacity="0.7" /> <circle cx="75" cy="35" r="1.5" fill="#10b981" opacity="0.8" /> <circle cx="80" cy="35" r="1.5" fill="#10b981" opacity="0.8" /> <rect x="75" y="40" width="15" height="2" rx="1" fill="#f59e0b" opacity="0.7" /> <rect x="75" y="45" width="10" height="2" rx="1" fill="#6366f1" opacity="0.7" /> <circle cx="60" cy="25" r="1.5" fill="#374151" opacity="0.8" /> <rect x="23" y="62" width="74" height="3" rx="1" fill="white" opacity="0.9" /> <rect x="15" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="21" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="27" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="33" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="89" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="95" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="101" y="67" width="4" height="2" rx="0.5" fill="#9ca3af" opacity="0.6" /> <rect x="50" y="67" width="20" height="2" rx="0.5" fill="#6b7280" opacity="0.5" /> <ellipse cx="60" cy="74" rx="50" ry="4" fill="#000000" opacity="0.15" /> <rect x="28" y="28" width="30" height="15" rx="2" fill="white" opacity="0.05" />
      </svg>
      <svg class="telescope-svg" viewbox="0 0 220 140" xmlns="http://www.w3.org/2000/svg"><ellipse cx="110" cy="130" rx="45" ry="5" fill="white" opacity="0.15" /> <path d="M110 100 L75 128 L72 130 L78 131 L110 103 Z" fill="white" opacity="0.85" /> <path d="M110 100 L145 128 L148 130 L142 131 L110 103 Z" fill="white" opacity="0.85" /> <path d="M110 100 L110 130 L107 133 L113 133 L110 103 Z" fill="white" opacity="0.9" /> <circle cx="75" cy="129" r="4" fill="#d1d5db" opacity="0.9" /> <circle cx="145" cy="129" r="4" fill="#d1d5db" opacity="0.9" /> <circle cx="110" cy="132" r="4" fill="#d1d5db" opacity="0.9" /> <ellipse cx="110" cy="100" rx="15" ry="8" fill="white" opacity="0.9" /> <rect x="105" y="92" width="10" height="8" fill="#e5e7eb" opacity="0.95" /> <circle cx="110" cy="100" r="10" fill="white" opacity="0.95" /> <circle cx="110" cy="100" r="6" fill="#374151" opacity="0.8" /> <circle cx="110" cy="100" r="3" fill="#1f2937" opacity="0.9" /> <rect x="106" y="85" width="8" height="18" rx="2" fill="white" opacity="0.9" /> <defs>
        <lineargradient id="tubeGradient" x1="0%" y1="0%" x2="0%" y2="100%">
         <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
         <stop offset="50%" style="stop-color:#f3f4f6;stop-opacity:1" />
         <stop offset="100%" style="stop-color:#e5e7eb;stop-opacity:1" />
        </lineargradient>
       </defs> <rect x="30" y="53" width="120" height="24" rx="12" fill="url(#tubeGradient)" transform="rotate(-25 90 65)" /> <rect x="30" y="65" width="120" height="6" rx="3" fill="#000000" opacity="0.1" transform="rotate(-25 90 68)" /> <rect x="35" y="55" width="4" height="20" rx="2" fill="#9ca3af" opacity="0.5" transform="rotate(-25 37 65)" /> <rect x="60" y="48" width="4" height="20" rx="2" fill="#9ca3af" opacity="0.5" transform="rotate(-25 62 58)" /> <rect x="85" y="41" width="4" height="20" rx="2" fill="#9ca3af" opacity="0.5" transform="rotate(-25 87 51)" /> <rect x="110" y="34" width="4" height="20" rx="2" fill="#9ca3af" opacity="0.5" transform="rotate(-25 112 44)" /> <rect x="135" y="27" width="4" height="20" rx="2" fill="#9ca3af" opacity="0.5" transform="rotate(-25 137 37)" /> <ellipse cx="160" cy="25" rx="13" ry="15" fill="#1f2937" opacity="0.95" transform="rotate(-25 160 25)" /> <ellipse cx="160" cy="25" rx="11" ry="13" fill="#111827" opacity="1" transform="rotate(-25 160 25)" /> <ellipse cx="160" cy="25" rx="9" ry="11" fill="#0a0e27" opacity="1" transform="rotate(-25 160 25)" /> <line x1="155" y1="20" x2="165" y2="30" stroke="#d1d5db" stroke-width="0.8" opacity="0.7" /> <line x1="165" y1="20" x2="155" y2="30" stroke="#d1d5db" stroke-width="0.8" opacity="0.7" /> <ellipse cx="160" cy="25" rx="3" ry="3.5" fill="#e5e7eb" opacity="0.8" transform="rotate(-25 160 25)" /> <circle cx="160" cy="25" r="2" fill="white" opacity="0.6" /> <rect x="75" y="72" width="22" height="10" rx="5" fill="white" opacity="0.95" transform="rotate(-25 86 77)" /> <rect x="77" y="74" width="16" height="6" rx="3" fill="#e5e7eb" opacity="0.9" transform="rotate(-25 85 77)" /> <circle cx="73" cy="79" r="4" fill="#374151" opacity="0.85" /> <circle cx="73" cy="79" r="2.5" fill="#1f2937" opacity="0.9" /> <circle cx="70" cy="82" r="3" fill="#9ca3af" opacity="0.8" /> <rect x="110" y="35" width="35" height="6" rx="3" fill="white" opacity="0.9" transform="rotate(-25 127.5 38)" /> <ellipse cx="143" cy="28" rx="3.5" ry="4" fill="#60a5fa" opacity="0.5" transform="rotate(-25 143 28)" class="telescope-lens-glow" /> <circle cx="113" cy="42" r="2.5" fill="#374151" opacity="0.8" /> <circle cx="120" cy="39" r="3.5" fill="none" stroke="white" stroke-width="1.5" opacity="0.7" /> <circle cx="136" cy="32" r="3.5" fill="none" stroke="white" stroke-width="1.5" opacity="0.7" /> <rect x="102" y="95" width="6" height="25" rx="1" fill="#d1d5db" opacity="0.85" /> <rect x="100" y="118" width="10" height="8" rx="2" fill="#6b7280" opacity="0.9" /> <ellipse cx="50" cy="60" rx="15" ry="3" fill="white" opacity="0.15" transform="rotate(-25 50 60)" /> <ellipse cx="90" cy="48" rx="20" ry="3" fill="white" opacity="0.12" transform="rotate(-25 90 48)" /> <circle cx="25" cy="30" r="1.5" fill="white" opacity="0.6">
        <animate attributename="opacity" values="0.4;0.7;0.4" dur="3s" repeatcount="indefinite" />
       </circle> <circle cx="190" cy="20" r="1.8" fill="white" opacity="0.7">
        <animate attributename="opacity" values="0.5;0.8;0.5" dur="4s" repeatcount="indefinite" />
       </circle> <circle cx="200" cy="60" r="1.3" fill="white" opacity="0.5">
        <animate attributename="opacity" values="0.3;0.6;0.3" dur="3.5s" repeatcount="indefinite" />
       </circle> <circle cx="15" cy="70" r="1" fill="white" opacity="0.5">
        <animate attributename="opacity" values="0.3;0.6;0.3" dur="4.5s" repeatcount="indefinite" />
       </circle> <circle cx="205" cy="45" r="1.2" fill="white" opacity="0.6">
        <animate attributename="opacity" values="0.4;0.7;0.4" dur="3.8s" repeatcount="indefinite" />
       </circle>
      </svg>
     </div>
     <p class="hero-subtitle" id="hero-subtitle">Tu portal definitivo para descubrimientos astronómicos, avances científicos y herramientas esenciales para desarrolladores</p><button class="cta-button" id="cta-button">Comenzar Exploración</button>
    </div>
   </section><!-- Features -->
   <section class="features">
    <div class="feature-card" id="astronomy-card">
     <svg class="feature-icon astronomy-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="20" fill="currentColor" /> <path d="M50 10 L55 30 L50 25 L45 30 Z" fill="currentColor" /> <path d="M90 50 L70 55 L75 50 L70 45 Z" fill="currentColor" /> <path d="M50 90 L45 70 L50 75 L55 70 Z" fill="currentColor" /> <path d="M10 50 L30 45 L25 50 L30 55 Z" fill="currentColor" /> <circle cx="25" cy="25" r="3" fill="currentColor" /> <circle cx="75" cy="25" r="2" fill="currentColor" /> <circle cx="75" cy="75" r="3" fill="currentColor" /> <circle cx="25" cy="75" r="2" fill="currentColor" />
     </svg>
     <h3 class="feature-title astronomy-title" id="astronomy-title">Astronomía</h3>
     <p class="feature-description" id="astronomy-desc">Descubre los misterios del cosmos, desde planetas cercanos hasta galaxias lejanas</p>
    </div>
    <div class="feature-card" id="science-card">
     <svg class="feature-icon science-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M30 20 L30 50 L20 70 L80 70 L70 50 L70 20 Z" fill="none" stroke="currentColor" stroke-width="3" /> <circle cx="50" cy="45" r="8" fill="currentColor" /> <circle cx="35" cy="55" r="4" fill="currentColor" opacity="0.6" /> <circle cx="60" cy="52" r="5" fill="currentColor" opacity="0.7" /> <line x1="30" y1="20" x2="70" y2="20" stroke="currentColor" stroke-width="3" /> <rect x="15" y="70" width="70" height="5" fill="currentColor" />
     </svg>
     <h3 class="feature-title science-title" id="science-title">Ciencia</h3>
     <p class="feature-description" id="science-desc">Explora avances científicos y experimentos que están cambiando nuestro mundo</p>
    </div>
    <div class="feature-card" id="tech-card">
     <svg class="feature-icon tech-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="30" width="60" height="45" rx="3" fill="none" stroke="currentColor" stroke-width="3" /> <rect x="30" y="40" width="15" height="15" fill="currentColor" /> <rect x="55" y="40" width="15" height="15" fill="currentColor" /> <rect x="30" y="60" width="40" height="3" fill="currentColor" /> <circle cx="50" cy="20" r="8" fill="currentColor" /> <line x1="50" y1="28" x2="50" y2="30" stroke="currentColor" stroke-width="2" />
     </svg>
     <h3 class="feature-title tech-title" id="tech-title">Tecnología</h3>
     <p class="feature-description" id="tech-desc">Mantente al día con las últimas innovaciones tecnológicas y tendencias digitales</p>
    </div>
    <div class="feature-card" id="tools-card">
     <svg class="feature-icon tools-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M30 30 L30 70 L70 70 L70 30 Z" fill="none" stroke="currentColor" stroke-width="3" /> <line x1="40" y1="30" x2="40" y2="70" stroke="currentColor" stroke-width="2" /> <line x1="50" y1="30" x2="50" y2="70" stroke="currentColor" stroke-width="2" /> <line x1="60" y1="30" x2="60" y2="70" stroke="currentColor" stroke-width="2" /> <circle cx="35" cy="45" r="3" fill="currentColor" /> <circle cx="55" cy="55" r="3" fill="currentColor" /> <path d="M20 20 L25 15 L30 20" fill="none" stroke="currentColor" stroke-width="2" />
     </svg>
     <h3 class="feature-title tools-title" id="tools-title">Herramientas Dev</h3>
     <p class="feature-description" id="tools-desc">Accede a utilidades esenciales: generador de contraseñas, conversor de unidades y más</p>
    </div>
   </section><!-- Blog Section -->
   <section class="blog-section">
    <div class="blog-header">
     <h2 class="hero-title" style="font-size: 2.5rem; margin-bottom: 1rem;" id="blog-section-title">Últimas Entradas del Blog</h2>
     <p class="hero-subtitle" style="margin-bottom: 0;" id="blog-section-subtitle">Descubre artículos sobre astronomía, ciencia y tecnología</p>
    </div>
    <div class="blog-grid">
     <article class="blog-card">
      <div class="blog-image">
       <svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;"><rect width="200" height="200" fill="#0a0e27" /> <defs>
         <radialgradient id="galaxyCore" cx="50%" cy="50%">
          <stop offset="0%" style="stop-color:#fbbf24;stop-opacity:1" />
          <stop offset="30%" style="stop-color:#f59e0b;stop-opacity:0.8" />
          <stop offset="60%" style="stop-color:#8b5cf6;stop-opacity:0.4" />
          <stop offset="100%" style="stop-color:#0a0e27;stop-opacity:0" />
         </radialgradient>
        </defs> <circle cx="100" cy="100" r="15" fill="url(#galaxyCore)" /> <circle cx="100" cy="100" r="8" fill="#fef3c7" opacity="0.9" /> <path d="M 100 100 Q 120 80 140 70 Q 160 65 170 75" fill="none" stroke="#8b5cf6" stroke-width="8" opacity="0.4" /> <path d="M 100 100 Q 80 120 60 130 Q 40 135 30 125" fill="none" stroke="#6366f1" stroke-width="8" opacity="0.4" /> <path d="M 100 100 Q 90 70 70 50 Q 55 35 40 40" fill="none" stroke="#a78bfa" stroke-width="7" opacity="0.35" /> <path d="M 100 100 Q 110 130 130 150 Q 145 165 160 160" fill="none" stroke="#7c3aed" stroke-width="7" opacity="0.35" /> <circle cx="160" cy="40" r="2" fill="#ffffff" opacity="0.9">
         <animate attributename="opacity" values="0.5;1;0.5" dur="2s" repeatcount="indefinite" />
        </circle> <circle cx="40" cy="60" r="1.5" fill="#ffffff" opacity="0.8">
         <animate attributename="opacity" values="0.4;0.9;0.4" dur="3s" repeatcount="indefinite" />
        </circle> <circle cx="170" cy="140" r="2" fill="#ffffff" opacity="0.9">
         <animate attributename="opacity" values="0.6;1;0.6" dur="2.5s" repeatcount="indefinite" />
        </circle> <circle cx="30" cy="170" r="1.8" fill="#ffffff" opacity="0.85">
         <animate attributename="opacity" values="0.5;0.95;0.5" dur="3.5s" repeatcount="indefinite" />
        </circle> <circle cx="50" cy="30" r="1" fill="#ffffff" opacity="0.5" /> <circle cx="150" cy="25" r="1" fill="#ffffff" opacity="0.6" /> <circle cx="180" cy="80" r="0.8" fill="#ffffff" opacity="0.4" /> <circle cx="20" cy="100" r="1" fill="#ffffff" opacity="0.5" /> <circle cx="190" cy="170" r="0.8" fill="#ffffff" opacity="0.5" /> <circle cx="60" cy="180" r="1" fill="#ffffff" opacity="0.6" /> <circle cx="120" cy="20" r="0.8" fill="#ffffff" opacity="0.4" /> <circle cx="140" cy="180" r="1" fill="#ffffff" opacity="0.5" /> <circle cx="110" cy="85" r="1.2" fill="#c084fc" opacity="0.6" /> <circle cx="130" cy="95" r="0.8" fill="#a78bfa" opacity="0.5" /> <circle cx="85" cy="110" r="1" fill="#8b5cf6" opacity="0.6" /> <circle cx="70" cy="90" r="0.8" fill="#7c3aed" opacity="0.5" />
       </svg>
      </div>
      <div class="blog-content"><span class="blog-category" id="blog1-category">Astronomía</span>
       <h3 class="blog-title" id="blog1-title">Descubrimiento de Exoplanetas Habitables</h3>
       <p class="blog-excerpt" id="blog1-excerpt">Nuevos telescopios espaciales han identificado planetas con condiciones similares a la Tierra en sistemas solares cercanos.</p>
       <div class="blog-meta"><span>📅 15 Dic 2024</span> <span>⏱️ 5 min lectura</span>
       </div>
      </div>
     </article>
     <article class="blog-card">
      <div class="blog-image">
       <svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;"><defs>
         <lineargradient id="quantumBg" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.2" />
          <stop offset="100%" style="stop-color:#059669;stop-opacity:0.4" />
         </lineargradient>
         <radialgradient id="qubitGlow" cx="50%" cy="50%">
          <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
          <stop offset="50%" style="stop-color:#34d399;stop-opacity:0.6" />
          <stop offset="100%" style="stop-color:#10b981;stop-opacity:0" />
         </radialgradient>
        </defs> <rect width="200" height="200" fill="#0a1f1a" /> <circle cx="100" cy="100" r="35" fill="url(#qubitGlow)" opacity="0.3" /> <circle cx="100" cy="100" r="25" fill="none" stroke="#10b981" stroke-width="2" opacity="0.8" /> <circle cx="100" cy="100" r="20" fill="#10b981" opacity="0.6">
         <animate attributename="r" values="18;22;18" dur="3s" repeatcount="indefinite" />
         <animate attributename="opacity" values="0.4;0.7;0.4" dur="3s" repeatcount="indefinite" />
        </circle> <ellipse cx="100" cy="100" rx="50" ry="20" fill="none" stroke="#34d399" stroke-width="2" opacity="0.6" transform="rotate(0 100 100)" /> <ellipse cx="100" cy="100" rx="50" ry="20" fill="none" stroke="#34d399" stroke-width="2" opacity="0.6" transform="rotate(60 100 100)" /> <ellipse cx="100" cy="100" rx="50" ry="20" fill="none" stroke="#34d399" stroke-width="2" opacity="0.6" transform="rotate(120 100 100)" /> <circle cx="150" cy="100" r="4" fill="#6ee7b7">
         <animatetransform attributename="transform" type="rotate" from="0 100 100" to="360 100 100" dur="4s" repeatcount="indefinite" />
        </circle> <circle cx="125" cy="83" r="3.5" fill="#34d399">
         <animatetransform attributename="transform" type="rotate" from="60 100 100" to="420 100 100" dur="5s" repeatcount="indefinite" />
        </circle> <circle cx="125" cy="117" r="3.5" fill="#10b981">
         <animatetransform attributename="transform" type="rotate" from="120 100 100" to="480 100 100" dur="6s" repeatcount="indefinite" />
        </circle> <line x1="100" y1="100" x2="160" y2="60" stroke="#10b981" stroke-width="1" opacity="0.4" stroke-dasharray="3,3">
         <animate attributename="opacity" values="0.2;0.6;0.2" dur="2s" repeatcount="indefinite" />
        </line> <line x1="100" y1="100" x2="40" y2="60" stroke="#10b981" stroke-width="1" opacity="0.4" stroke-dasharray="3,3">
         <animate attributename="opacity" values="0.3;0.7;0.3" dur="2.5s" repeatcount="indefinite" />
        </line> <line x1="100" y1="100" x2="160" y2="140" stroke="#34d399" stroke-width="1" opacity="0.4" stroke-dasharray="3,3">
         <animate attributename="opacity" values="0.2;0.6;0.2" dur="3s" repeatcount="indefinite" />
        </line> <line x1="100" y1="100" x2="40" y2="140" stroke="#34d399" stroke-width="1" opacity="0.4" stroke-dasharray="3,3">
         <animate attributename="opacity" values="0.4;0.7;0.4" dur="2.2s" repeatcount="indefinite" />
        </line> <circle cx="160" cy="60" r="6" fill="#10b981" opacity="0.7">
         <animate attributename="opacity" values="0.5;0.9;0.5" dur="2s" repeatcount="indefinite" />
        </circle> <circle cx="40" cy="60" r="6" fill="#34d399" opacity="0.7">
         <animate attributename="opacity" values="0.4;0.8;0.4" dur="2.5s" repeatcount="indefinite" />
        </circle> <circle cx="160" cy="140" r="6" fill="#6ee7b7" opacity="0.7">
         <animate attributename="opacity" values="0.6;1;0.6" dur="3s" repeatcount="indefinite" />
        </circle> <circle cx="40" cy="140" r="6" fill="#059669" opacity="0.7">
         <animate attributename="opacity" values="0.5;0.9;0.5" dur="2.2s" repeatcount="indefinite" />
        </circle> <circle cx="100" cy="100" r="60" fill="none" stroke="#10b981" stroke-width="1" opacity="0.3">
         <animate attributename="r" values="60;70;60" dur="4s" repeatcount="indefinite" />
         <animate attributename="opacity" values="0.3;0;0.3" dur="4s" repeatcount="indefinite" />
        </circle> <circle cx="100" cy="100" r="70" fill="none" stroke="#34d399" stroke-width="1" opacity="0.2">
         <animate attributename="r" values="70;80;70" dur="5s" repeatcount="indefinite" />
         <animate attributename="opacity" values="0.2;0;0.2" dur="5s" repeatcount="indefinite" />
        </circle> <text x="30" y="30" font-size="10" fill="#10b981" opacity="0.5" font-family="monospace">
         01
        </text> <text x="160" y="35" font-size="10" fill="#34d399" opacity="0.5" font-family="monospace">
         10
        </text> <text x="170" y="170" font-size="10" fill="#10b981" opacity="0.5" font-family="monospace">
         11
        </text> <text x="25" y="175" font-size="10" fill="#6ee7b7" opacity="0.5" font-family="monospace">
         00
        </text>
       </svg>
      </div>
      <div class="blog-content"><span class="blog-category" id="blog2-category">Ciencia</span>
       <h3 class="blog-title" id="blog2-title">Avances en Computación Cuántica</h3>
       <p class="blog-excerpt" id="blog2-excerpt">Los últimos desarrollos en qubits están revolucionando la forma en que procesamos información compleja.</p>
       <div class="blog-meta"><span>📅 12 Dic 2024</span> <span>⏱️ 7 min lectura</span>
       </div>
      </div>
     </article>
     <article class="blog-card">
      <div class="blog-image">
       <svg viewbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;"><defs>
         <lineargradient id="aiBg" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:0.3" />
          <stop offset="100%" style="stop-color:#6366f1;stop-opacity:0.4" />
         </lineargradient>
         <radialgradient id="brainGlow" cx="50%" cy="50%">
          <stop offset="0%" style="stop-color:#a78bfa;stop-opacity:0.8" />
          <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:0" />
         </radialgradient>
        </defs> <rect width="200" height="200" fill="#1a0f2e" /> <ellipse cx="100" cy="85" rx="45" ry="50" fill="url(#brainGlow)" opacity="0.2" /> <path d="M 100 35 Q 70 35 60 50 Q 55 65 55 85 Q 55 105 60 120 Q 70 135 100 135" fill="none" stroke="#8b5cf6" stroke-width="3" opacity="0.8" /> <path d="M 100 35 Q 130 35 140 50 Q 145 65 145 85 Q 145 105 140 120 Q 130 135 100 135" fill="none" stroke="#a78bfa" stroke-width="3" opacity="0.8" /> <path d="M 65 55 Q 75 60 70 70" fill="none" stroke="#8b5cf6" stroke-width="2" opacity="0.7" /> <path d="M 63 75 Q 73 80 68 90" fill="none" stroke="#8b5cf6" stroke-width="2" opacity="0.7" /> <path d="M 65 95 Q 75 100 70 110" fill="none" stroke="#8b5cf6" stroke-width="2" opacity="0.7" /> <path d="M 68 115 Q 78 120 75 125" fill="none" stroke="#8b5cf6" stroke-width="2" opacity="0.7" /> <path d="M 135 55 Q 125 60 130 70" fill="none" stroke="#a78bfa" stroke-width="2" opacity="0.7" /> <path d="M 137 75 Q 127 80 132 90" fill="none" stroke="#a78bfa" stroke-width="2" opacity="0.7" /> <path d="M 135 95 Q 125 100 130 110" fill="none" stroke="#a78bfa" stroke-width="2" opacity="0.7" /> <path d="M 132 115 Q 122 120 125 125" fill="none" stroke="#a78bfa" stroke-width="2" opacity="0.7" /> <line x1="100" y1="50" x2="100" y2="120" stroke="#c084fc" stroke-width="2" opacity="0.5" /> <circle cx="100" cy="85" r="8" fill="#c084fc" opacity="0.6">
         <animate attributename="r" values="7;10;7" dur="2s" repeatcount="indefinite" />
         <animate attributename="opacity" values="0.4;0.7;0.4" dur="2s" repeatcount="indefinite" />
        </circle> <circle cx="75" cy="65" r="4" fill="#a78bfa" opacity="0.8">
         <animate attributename="opacity" values="0.5;1;0.5" dur="1.5s" repeatcount="indefinite" />
        </circle> <circle cx="125" cy="65" r="4" fill="#a78bfa" opacity="0.8">
         <animate attributename="opacity" values="0.6;1;0.6" dur="1.8s" repeatcount="indefinite" />
        </circle> <circle cx="70" cy="100" r="4" fill="#8b5cf6" opacity="0.8">
         <animate attributename="opacity" values="0.4;0.9;0.4" dur="2s" repeatcount="indefinite" />
        </circle> <circle cx="130" cy="100" r="4" fill="#8b5cf6" opacity="0.8">
         <animate attributename="opacity" values="0.5;1;0.5" dur="2.2s" repeatcount="indefinite" />
        </circle> <line x1="75" y1="65" x2="100" y2="85" stroke="#c084fc" stroke-width="1.5" opacity="0.4" stroke-dasharray="2,2">
         <animate attributename="opacity" values="0.2;0.6;0.2" dur="1.5s" repeatcount="indefinite" />
        </line> <line x1="125" y1="65" x2="100" y2="85" stroke="#c084fc" stroke-width="1.5" opacity="0.4" stroke-dasharray="2,2">
         <animate attributename="opacity" values="0.3;0.7;0.3" dur="1.8s" repeatcount="indefinite" />
        </line> <line x1="70" y1="100" x2="100" y2="85" stroke="#a78bfa" stroke-width="1.5" opacity="0.4" stroke-dasharray="2,2">
         <animate attributename="opacity" values="0.2;0.6;0.2" dur="2s" repeatcount="indefinite" />
        </line> <line x1="130" y1="100" x2="100" y2="85" stroke="#a78bfa" stroke-width="1.5" opacity="0.4" stroke-dasharray="2,2">
         <animate attributename="opacity" values="0.3;0.7;0.3" dur="2.2s" repeatcount="indefinite" />
        </line> <rect x="30" y="150" width="35" height="35" rx="3" fill="#8b5cf6" opacity="0.3" /> <text x="35" y="165" font-size="8" fill="#a78bfa" opacity="0.8" font-family="monospace">
         &lt;/&gt;
        </text> <text x="35" y="175" font-size="7" fill="#c084fc" opacity="0.7" font-family="monospace">
         code
        </text> <rect x="75" y="150" width="35" height="35" rx="3" fill="#6366f1" opacity="0.3" /> <text x="80" y="165" font-size="10" fill="#818cf8" opacity="0.8" font-family="monospace">
         📊
        </text> <text x="80" y="178" font-size="7" fill="#a5b4fc" opacity="0.7" font-family="monospace">
         data
        </text> <rect x="135" y="150" width="35" height="35" rx="3" fill="#8b5cf6" opacity="0.3" /> <text x="142" y="168" font-size="14" fill="#c084fc" opacity="0.9">
         AI
        </text> <text x="140" y="180" font-size="6" fill="#a78bfa" opacity="0.7" font-family="monospace">
         output
        </text> <path d="M 47 150 L 47 140 L 80 125" fill="none" stroke="#8b5cf6" stroke-width="2" opacity="0.5">
         <animate attributename="opacity" values="0.3;0.7;0.3" dur="2s" repeatcount="indefinite" />
        </path> <path d="M 92 150 L 92 140 L 110 125" fill="none" stroke="#6366f1" stroke-width="2" opacity="0.5">
         <animate attributename="opacity" values="0.4;0.8;0.4" dur="2.3s" repeatcount="indefinite" />
        </path> <path d="M 120 125 L 138 140 L 152 150" fill="none" stroke="#c084fc" stroke-width="2" opacity="0.5">
         <animate attributename="opacity" values="0.3;0.7;0.3" dur="2.5s" repeatcount="indefinite" />
        </path> <circle cx="50" cy="40" r="1.5" fill="#a78bfa" opacity="0.6">
         <animate attributename="cy" values="40;30;40" dur="3s" repeatcount="indefinite" />
        </circle> <circle cx="150" cy="45" r="1.5" fill="#8b5cf6" opacity="0.6">
         <animate attributename="cy" values="45;35;45" dur="3.5s" repeatcount="indefinite" />
        </circle> <circle cx="180" cy="90" r="1.5" fill="#c084fc" opacity="0.6">
         <animate attributename="cx" values="180;170;180" dur="4s" repeatcount="indefinite" />
        </circle>
       </svg>
      </div>
      <div class="blog-content"><span class="blog-category" id="blog3-category">Tecnología</span>
       <h3 class="blog-title" id="blog3-title">Inteligencia Artificial en el Desarrollo</h3>
       <p class="blog-excerpt" id="blog3-excerpt">Cómo las herramientas de IA están transformando el flujo de trabajo de los desarrolladores modernos.</p>
       <div class="blog-meta"><span>📅 10 Dic 2024</span> <span>⏱️ 6 min lectura</span>
       </div>
      </div>
     </article>
    </div>
   </section><!-- Tools Preview -->
   <section class="tools-preview">
    <h2 class="hero-title" style="font-size: 2.5rem; margin-bottom: 1rem;">Herramientas Disponibles</h2>
    <p class="hero-subtitle" style="margin-bottom: 2rem;">Utilidades prácticas para tu día a día como desarrollador</p>
    <div class="tools-grid">
     <div class="tool-item">
      <div class="tool-emoji">
       🔐
      </div>
      <div class="tool-name">
       Generador de Contraseñas
      </div>
     </div>
     <div class="tool-item">
      <svg class="tool-emoji" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="width: 2.5rem; height: 2.5rem; margin-bottom: 0.75rem;"><rect x="10" y="35" width="80" height="8" rx="2" fill="currentColor" opacity="0.9" /> <rect x="15" y="30" width="2" height="8" fill="currentColor" /> <rect x="30" y="30" width="2" height="8" fill="currentColor" /> <rect x="45" y="30" width="2" height="8" fill="currentColor" /> <rect x="60" y="30" width="2" height="8" fill="currentColor" /> <rect x="75" y="30" width="2" height="8" fill="currentColor" /> <rect x="22" y="32" width="1" height="5" fill="currentColor" opacity="0.7" /> <rect x="37" y="32" width="1" height="5" fill="currentColor" opacity="0.7" /> <rect x="52" y="32" width="1" height="5" fill="currentColor" opacity="0.7" /> <rect x="67" y="32" width="1" height="5" fill="currentColor" opacity="0.7" /> <rect x="82" y="32" width="1" height="5" fill="currentColor" opacity="0.7" /> <rect x="35" y="10" width="8" height="80" rx="2" fill="currentColor" opacity="0.9" /> <rect x="30" y="15" width="8" height="2" fill="currentColor" /> <rect x="30" y="30" width="8" height="2" fill="currentColor" /> <rect x="30" y="45" width="8" height="2" fill="currentColor" /> <rect x="30" y="60" width="8" height="2" fill="currentColor" /> <rect x="30" y="75" width="8" height="2" fill="currentColor" /> <rect x="32" y="22" width="5" height="1" fill="currentColor" opacity="0.7" /> <rect x="32" y="37" width="5" height="1" fill="currentColor" opacity="0.7" /> <rect x="32" y="52" width="5" height="1" fill="currentColor" opacity="0.7" /> <rect x="32" y="67" width="5" height="1" fill="currentColor" opacity="0.7" /> <rect x="32" y="82" width="5" height="1" fill="currentColor" opacity="0.7" /> <path d="M 55 50 L 70 50 L 65 45" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" /> <path d="M 70 58 L 55 58 L 60 63" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" /> <text x="18" y="51" font-size="8" fill="currentColor" font-weight="bold">
        cm
       </text> <text x="70" y="73" font-size="8" fill="currentColor" font-weight="bold">
        in
       </text>
      </svg>
      <div class="tool-name">
       Conversor de Unidades
      </div>
     </div>
     <div class="tool-item">
      <svg class="tool-emoji" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="width: 2.5rem; height: 2.5rem; margin-bottom: 0.75rem;"><path d="M 70 30 Q 90 30 90 50 Q 90 70 70 70 L 40 70 Q 20 70 20 50 Q 20 30 40 30 Q 50 20 60 20 Q 70 20 70 30 Z" fill="currentColor" opacity="0.9" /> <ellipse cx="73" cy="60" rx="8" ry="10" fill="#0a0e27" /> <ellipse cx="73" cy="60" rx="6" ry="8" fill="currentColor" opacity="0.3" /> <circle cx="35" cy="40" r="6" fill="#ef4444" opacity="0.85" /> <circle cx="50" cy="35" r="6" fill="#3b82f6" opacity="0.85" /> <circle cx="60" cy="45" r="6" fill="#eab308" opacity="0.85" /> <circle cx="45" cy="52" r="6" fill="#10b981" opacity="0.85" /> <circle cx="33" cy="58" r="5" fill="#8b5cf6" opacity="0.85" /> <circle cx="37" cy="38" r="2" fill="#ffffff" opacity="0.6" /> <circle cx="52" cy="33" r="2" fill="#ffffff" opacity="0.6" /> <circle cx="62" cy="43" r="2" fill="#ffffff" opacity="0.6" /> <circle cx="47" cy="50" r="2" fill="#ffffff" opacity="0.6" /> <circle cx="35" cy="56" r="1.5" fill="#ffffff" opacity="0.6" /> <rect x="75" y="15" width="4" height="20" rx="1" fill="#8b4513" opacity="0.8" /> <path d="M 73 35 L 77 35 L 77 40 L 75 42 L 73 40 Z" fill="#374151" opacity="0.9" /> <path d="M 74 42 L 76 42 L 76 48 L 75 50 L 74 48 Z" fill="#6b7280" opacity="0.8" />
      </svg>
      <div class="tool-name">
       Selector de Colores
      </div>
     </div>
     <div class="tool-item">
      <div class="tool-emoji">
       ⏱️
      </div>
      <div class="tool-name">
       Timestamp Converter
      </div>
     </div>
     <div class="tool-item">
      <div class="tool-emoji">
       🔤
      </div>
      <div class="tool-name">
       Codificador Base64
      </div>
     </div>
     <div class="tool-item">
      <div class="tool-emoji">
       📊
      </div>
      <div class="tool-name">
       Generador JSON
      </div>
     </div>
    </div>
   </section><!-- Footer -->
   <footer class="footer">
    <div class="footer-content">
     <div class="footer-section">
      <div class="logo" style="margin-bottom: 1rem;">
       <svg class="logo-icon" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="18" fill="currentColor" /> <ellipse cx="50" cy="50" rx="32" ry="8" fill="none" stroke="currentColor" stroke-width="3" opacity="0.6" /> <ellipse cx="50" cy="50" rx="32" ry="8" fill="none" stroke="currentColor" stroke-width="3" opacity="0.9" /> <ellipse cx="50" cy="50" rx="28" ry="7" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.5" /> <ellipse cx="50" cy="50" rx="36" ry="9" fill="none" stroke="currentColor" stroke-width="1.5" opacity="0.4" /> <ellipse cx="50" cy="48" rx="16" ry="3" fill="currentColor" opacity="0.3" /> <ellipse cx="50" cy="52" rx="15" ry="2.5" fill="currentColor" opacity="0.2" />
       </svg>
      </div>
      <p class="footer-description" id="footer-description">Explorando el universo y potenciando desarrolladores con herramientas innovadoras.</p>
      <div class="social-links"><a href="#" class="social-link" target="_blank" rel="noopener noreferrer">🐦</a> <a href="#" class="social-link" target="_blank" rel="noopener noreferrer">📘</a> <a href="#" class="social-link" target="_blank" rel="noopener noreferrer">📷</a> <a href="#" class="social-link" target="_blank" rel="noopener noreferrer">💼</a>
      </div>
     </div>
     <div class="footer-section">
      <h4 id="footer-explore-title">Explorar</h4>
      <div class="footer-links"><a href="#astronomy" class="footer-link">Astronomía</a> <a href="#science" class="footer-link">Ciencia</a> <a href="#tech" class="footer-link">Tecnología</a> <a href="#blog" class="footer-link">Blog</a>
      </div>
     </div>
     <div class="footer-section">
      <h4 id="footer-tools-title">Herramientas</h4>
      <div class="footer-links"><a href="#" class="footer-link">Generador de Contraseñas</a> <a href="#" class="footer-link">Conversor de Unidades</a> <a href="#" class="footer-link">Selector de Colores</a> <a href="#" class="footer-link">Ver Todas</a>
      </div>
     </div>
     <div class="footer-section">
      <h4 id="footer-about-title">Acerca de</h4>
      <div class="footer-links"><a href="#" class="footer-link">Sobre Nosotros</a> <a href="#" class="footer-link">Contacto</a> <a href="#" class="footer-link">Política de Privacidad</a> <a href="#" class="footer-link">Términos de Uso</a>
      </div>
     </div>
    </div>
    <div class="footer-bottom">
     <p id="footer-copyright">© 2025 Telescopio.Top. Todos los derechos reservados.</p>
    </div>
   </footer>
  </div>
  <script>
    const defaultConfig = {
      background_color: '#0a0e27',
      surface_color: '#1a1f3a',
      text_color: '#e0e6ff',
      primary_action_color: '#6366f1',
      secondary_action_color: '#8b5cf6',
      font_family: 'Segoe UI',
      font_size: 16,
      site_title: 'Telescopio.Top',
      site_tagline: 'Astronomía, Ciencia y Tecnología',
      hero_title: 'Explora el Universo y Desarrolla con Poder',
      blog_section_title: 'Últimas Entradas del Blog',
      blog_section_subtitle: 'Descubre artículos sobre astronomía, ciencia y tecnología',
      blog1_category: 'Astronomía',
      blog1_title: 'Descubrimiento de Exoplanetas Habitables',
      blog1_excerpt: 'Nuevos telescopios espaciales han identificado planetas con condiciones similares a la Tierra en sistemas solares cercanos.',
      blog2_category: 'Ciencia',
      blog2_title: 'Avances en Computación Cuántica',
      blog2_excerpt: 'Los últimos desarrollos en qubits están revolucionando la forma en que procesamos información compleja.',
      blog3_category: 'Tecnología',
      blog3_title: 'Inteligencia Artificial en el Desarrollo',
      blog3_excerpt: 'Cómo las herramientas de IA están transformando el flujo de trabajo de los desarrolladores modernos.',
      hero_subtitle: 'Tu portal definitivo para descubrimientos astronómicos, avances científicos y herramientas esenciales para desarrolladores',
      cta_button: 'Comenzar Exploración',
      astronomy_title: 'Astronomía',
      astronomy_desc: 'Descubre los misterios del cosmos, desde planetas cercanos hasta galaxias lejanas',
      science_title: 'Ciencia',
      science_desc: 'Explora avances científicos y experimentos que están cambiando nuestro mundo',
      tech_title: 'Tecnología',
      tech_desc: 'Mantente al día con las últimas innovaciones tecnológicas y tendencias digitales',
      tools_title: 'Herramientas Dev',
      tools_desc: 'Accede a utilidades esenciales: generador de contraseñas, conversor de unidades y más',
      footer_description: 'Explorando el universo y potenciando desarrolladores con herramientas innovadoras.',
      footer_explore_title: 'Explorar',
      footer_tools_title: 'Herramientas',
      footer_about_title: 'Acerca de',
      footer_copyright: '© 2025 Telescopio.Top. Todos los derechos reservados.'
    };

    function createStars() {
      const container = document.getElementById('stars-container');
      const starCount = 250;
      
      // Crear galaxia espiral de fondo
      const galaxy = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      galaxy.setAttribute('width', '600');
      galaxy.setAttribute('height', '600');
      galaxy.style.position = 'absolute';
      galaxy.style.top = '-100px';
      galaxy.style.right = '-150px';
      galaxy.style.opacity = '0.15';
      galaxy.style.pointerEvents = 'none';
      galaxy.style.transform = 'rotate(-25deg)';
      
      const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
      const radialGrad = document.createElementNS('http://www.w3.org/2000/svg', 'radialGradient');
      radialGrad.setAttribute('id', 'galaxyGlow');
      radialGrad.innerHTML = `
        <stop offset="0%" style="stop-color:#a78bfa;stop-opacity:0.8" />
        <stop offset="30%" style="stop-color:#8b5cf6;stop-opacity:0.5" />
        <stop offset="70%" style="stop-color:#6366f1;stop-opacity:0.2" />
        <stop offset="100%" style="stop-color:#0a0e27;stop-opacity:0" />
      `;
      defs.appendChild(radialGrad);
      galaxy.appendChild(defs);
      
      const core = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
      core.setAttribute('cx', '300');
      core.setAttribute('cy', '300');
      core.setAttribute('r', '120');
      core.setAttribute('fill', 'url(#galaxyGlow)');
      galaxy.appendChild(core);
      
      const spiral1 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      spiral1.setAttribute('d', 'M 300 300 Q 380 250 450 220 Q 500 210 530 230');
      spiral1.setAttribute('fill', 'none');
      spiral1.setAttribute('stroke', '#8b5cf6');
      spiral1.setAttribute('stroke-width', '20');
      spiral1.setAttribute('opacity', '0.3');
      galaxy.appendChild(spiral1);
      
      const spiral2 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      spiral2.setAttribute('d', 'M 300 300 Q 220 350 150 380 Q 100 390 70 370');
      spiral2.setAttribute('fill', 'none');
      spiral2.setAttribute('stroke', '#6366f1');
      spiral2.setAttribute('stroke-width', '20');
      spiral2.setAttribute('opacity', '0.3');
      galaxy.appendChild(spiral2);
      
      const spiral3 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      spiral3.setAttribute('d', 'M 300 300 Q 250 220 200 160 Q 170 120 150 100');
      spiral3.setAttribute('fill', 'none');
      spiral3.setAttribute('stroke', '#a78bfa');
      spiral3.setAttribute('stroke-width', '18');
      spiral3.setAttribute('opacity', '0.25');
      galaxy.appendChild(spiral3);
      
      const spiral4 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      spiral4.setAttribute('d', 'M 300 300 Q 350 380 400 440 Q 430 480 450 500');
      spiral4.setAttribute('fill', 'none');
      spiral4.setAttribute('stroke', '#7c3aed');
      spiral4.setAttribute('stroke-width', '18');
      spiral4.setAttribute('opacity', '0.25');
      galaxy.appendChild(spiral4);
      
      container.appendChild(galaxy);
      
      // Crear nebulosa
      const nebula = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      nebula.setAttribute('width', '500');
      nebula.setAttribute('height', '400');
      nebula.style.position = 'absolute';
      nebula.style.bottom = '50px';
      nebula.style.left = '-100px';
      nebula.style.opacity = '0.12';
      nebula.style.pointerEvents = 'none';
      
      const nebulaDefs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
      const nebulaGrad = document.createElementNS('http://www.w3.org/2000/svg', 'radialGradient');
      nebulaGrad.setAttribute('id', 'nebulaGlow');
      nebulaGrad.innerHTML = `
        <stop offset="0%" style="stop-color:#ec4899;stop-opacity:0.6" />
        <stop offset="40%" style="stop-color:#8b5cf6;stop-opacity:0.4" />
        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:0" />
      `;
      nebulaDefs.appendChild(nebulaGrad);
      nebula.appendChild(nebulaDefs);
      
      const cloud1 = document.createElementNS('http://www.w3.org/2000/svg', 'ellipse');
      cloud1.setAttribute('cx', '200');
      cloud1.setAttribute('cy', '200');
      cloud1.setAttribute('rx', '150');
      cloud1.setAttribute('ry', '100');
      cloud1.setAttribute('fill', 'url(#nebulaGlow)');
      cloud1.setAttribute('transform', 'rotate(-30 200 200)');
      nebula.appendChild(cloud1);
      
      const cloud2 = document.createElementNS('http://www.w3.org/2000/svg', 'ellipse');
      cloud2.setAttribute('cx', '280');
      cloud2.setAttribute('cy', '180');
      cloud2.setAttribute('rx', '120');
      cloud2.setAttribute('ry', '90');
      cloud2.setAttribute('fill', '#a78bfa');
      cloud2.setAttribute('opacity', '0.3');
      cloud2.setAttribute('transform', 'rotate(20 280 180)');
      nebula.appendChild(cloud2);
      
      const cloud3 = document.createElementNS('http://www.w3.org/2000/svg', 'ellipse');
      cloud3.setAttribute('cx', '150');
      cloud3.setAttribute('cy', '240');
      cloud3.setAttribute('rx', '100');
      cloud3.setAttribute('ry', '70');
      cloud3.setAttribute('fill', '#ec4899');
      cloud3.setAttribute('opacity', '0.25');
      cloud3.setAttribute('transform', 'rotate(-15 150 240)');
      nebula.appendChild(cloud3);
      
      container.appendChild(nebula);
      
      // Crear estrellas
      for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        const size = Math.random() * 3 + 0.8;
        star.style.width = size + 'px';
        star.style.height = size + 'px';
        star.style.left = Math.random() * 100 + '%';
        star.style.top = Math.random() * 100 + '%';
        star.style.animationDelay = Math.random() * 4 + 's';
        star.style.animationDuration = (Math.random() * 3 + 2) + 's';
        star.style.backgroundColor = defaultConfig.text_color;
        
        if (Math.random() > 0.8) {
          star.style.boxShadow = `0 0 ${size * 1.5}px ${defaultConfig.text_color}`;
        }
        
        container.appendChild(star);
      }
    }

    async function onConfigChange(config) {
      const backgroundColor = config.background_color || defaultConfig.background_color;
      const surfaceColor = config.surface_color || defaultConfig.surface_color;
      const textColor = config.text_color || defaultConfig.text_color;
      const primaryActionColor = config.primary_action_color || defaultConfig.primary_action_color;
      const secondaryActionColor = config.secondary_action_color || defaultConfig.secondary_action_color;
      const fontFamily = config.font_family || defaultConfig.font_family;
      const fontSize = config.font_size || defaultConfig.font_size;

      document.body.style.backgroundColor = backgroundColor;
      document.body.style.color = textColor;
      
      document.querySelector('.header').style.backgroundColor = backgroundColor;
      document.querySelector('.logo-text').style.color = textColor;
      document.querySelector('.logo-icon').style.color = '#ffffff';
      
      const menuToggle = document.getElementById('menu-toggle');
      if (menuToggle) {
        menuToggle.style.color = textColor;
      }

      const navMenu = document.getElementById('nav-menu');
      if (navMenu) {
        navMenu.style.backgroundColor = surfaceColor;
      }
      
      document.querySelectorAll('.nav-link').forEach(link => {
        link.style.color = textColor;
        link.addEventListener('mouseenter', function() {
          this.style.backgroundColor = backgroundColor;
        });
        link.addEventListener('mouseleave', function() {
          this.style.backgroundColor = 'transparent';
        });
      });

      document.querySelector('.hero').style.backgroundColor = backgroundColor;
      document.querySelector('.hero-title').style.color = textColor;
      document.querySelector('.hero-subtitle').style.color = textColor;
      
      const ctaButton = document.querySelector('.cta-button');
      ctaButton.style.backgroundColor = primaryActionColor;
      ctaButton.style.color = '#ffffff';

      document.querySelectorAll('.star').forEach(star => {
        star.style.backgroundColor = textColor;
      });

      const featureCards = document.querySelectorAll('.feature-card');
      featureCards.forEach(card => {
        card.style.backgroundColor = surfaceColor;
        card.style.borderColor = surfaceColor;
        
        const icon = card.querySelector('.feature-icon');
        const title = card.querySelector('.feature-title');
        
        card.addEventListener('mouseenter', function() {
          this.style.borderColor = primaryActionColor;
          if (card.id === 'astronomy-card') {
            if (icon) icon.style.color = '#3b82f6';
            if (title) title.style.color = '#3b82f6';
          } else if (card.id === 'science-card') {
            if (icon) icon.style.color = '#10b981';
            if (title) title.style.color = '#10b981';
          } else if (card.id === 'tech-card') {
            if (icon) icon.style.color = '#8b5cf6';
            if (title) title.style.color = '#8b5cf6';
          } else if (card.id === 'tools-card') {
            if (icon) icon.style.color = '#f59e0b';
            if (title) title.style.color = '#f59e0b';
          }
        });
        card.addEventListener('mouseleave', function() {
          this.style.borderColor = surfaceColor;
          if (icon) icon.style.color = primaryActionColor;
          if (title) title.style.color = '#ffffff';
        });
      });

      document.querySelector('.astronomy-icon').style.color = primaryActionColor;
      document.querySelector('.science-icon').style.color = primaryActionColor;
      document.querySelector('.tech-icon').style.color = primaryActionColor;
      document.querySelector('.tools-icon').style.color = primaryActionColor;
      
      document.querySelector('.astronomy-title').style.color = '#ffffff';
      document.querySelector('.science-title').style.color = '#ffffff';
      document.querySelector('.tech-title').style.color = '#ffffff';
      document.querySelector('.tools-title').style.color = '#ffffff';

      document.querySelectorAll('.feature-description').forEach(desc => {
        desc.style.color = textColor;
      });

      document.querySelector('.blog-section').style.backgroundColor = backgroundColor;
      
      document.querySelectorAll('.blog-card').forEach(card => {
        card.style.backgroundColor = surfaceColor;
        card.style.borderColor = surfaceColor;
        card.addEventListener('mouseenter', function() {
          this.style.borderColor = primaryActionColor;
        });
        card.addEventListener('mouseleave', function() {
          this.style.borderColor = surfaceColor;
        });
      });

      document.querySelectorAll('.blog-image').forEach(img => {
        img.style.backgroundColor = backgroundColor;
      });

      document.querySelectorAll('.blog-category').forEach(cat => {
        cat.style.backgroundColor = primaryActionColor;
        cat.style.color = '#ffffff';
      });

      document.querySelectorAll('.blog-title').forEach(title => {
        title.style.color = textColor;
      });

      document.querySelectorAll('.blog-excerpt').forEach(excerpt => {
        excerpt.style.color = textColor;
      });

      document.querySelectorAll('.blog-meta').forEach(meta => {
        meta.style.color = textColor;
      });

      document.querySelector('.tools-preview').style.backgroundColor = backgroundColor;
      
      document.querySelectorAll('.tool-item').forEach(item => {
        item.style.backgroundColor = surfaceColor;
        item.style.borderColor = surfaceColor;
        item.addEventListener('mouseenter', function() {
          this.style.borderColor = secondaryActionColor;
          this.style.backgroundColor = surfaceColor;
        });
        item.addEventListener('mouseleave', function() {
          this.style.borderColor = surfaceColor;
        });
      });

      document.querySelectorAll('.tool-name').forEach(name => {
        name.style.color = textColor;
      });
      
      document.querySelectorAll('.tool-item svg').forEach(svg => {
        svg.style.color = textColor;
      });

      document.querySelector('.footer').style.backgroundColor = backgroundColor;
      document.querySelector('.footer').style.color = textColor;
      
      document.querySelectorAll('.footer-section h4').forEach(title => {
        title.style.color = textColor;
      });

      document.querySelectorAll('.footer-link').forEach(link => {
        link.style.color = textColor;
      });

      document.querySelector('.footer-description').style.color = textColor;

      document.querySelectorAll('.social-link').forEach(link => {
        link.style.backgroundColor = surfaceColor;
        link.addEventListener('mouseenter', function() {
          this.style.backgroundColor = primaryActionColor;
        });
        link.addEventListener('mouseleave', function() {
          this.style.backgroundColor = surfaceColor;
        });
      });

      document.querySelector('.footer-bottom').style.color = textColor;

      const baseFontStack = 'Segoe UI, Tahoma, Geneva, Verdana, sans-serif';
      document.body.style.fontFamily = `${fontFamily}, ${baseFontStack}`;

      document.querySelector('.logo-text').style.fontSize = `${fontSize * 1.5}px`;
      document.querySelectorAll('.nav-link').forEach(link => {
        link.style.fontSize = `${fontSize * 0.95}px`;
      });
      document.querySelector('.hero-title').style.fontSize = `${fontSize * 3.5}px`;
      document.querySelector('.hero-subtitle').style.fontSize = `${fontSize * 1.25}px`;
      document.querySelector('.cta-button').style.fontSize = `${fontSize * 1.1}px`;
      document.querySelectorAll('.feature-title').forEach(title => {
        title.style.fontSize = `${fontSize * 1.5}px`;
      });
      document.querySelectorAll('.feature-description').forEach(desc => {
        desc.style.fontSize = `${fontSize}px`;
      });
      document.querySelectorAll('.tool-name').forEach(name => {
        name.style.fontSize = `${fontSize}px`;
      });
      document.querySelectorAll('.blog-title').forEach(title => {
        title.style.fontSize = `${fontSize * 1.5}px`;
      });
      document.querySelectorAll('.blog-excerpt').forEach(excerpt => {
        excerpt.style.fontSize = `${fontSize * 0.95}px`;
      });
      document.querySelectorAll('.blog-category').forEach(cat => {
        cat.style.fontSize = `${fontSize * 0.85}px`;
      });
      document.querySelectorAll('.blog-meta').forEach(meta => {
        meta.style.fontSize = `${fontSize * 0.85}px`;
      });
      document.querySelectorAll('.footer-section h4').forEach(title => {
        title.style.fontSize = `${fontSize * 1.2}px`;
      });
      document.querySelectorAll('.footer-link').forEach(link => {
        link.style.fontSize = `${fontSize * 0.95}px`;
      });
      document.querySelector('.footer-description').style.fontSize = `${fontSize * 0.95}px`;
      document.querySelector('.footer-bottom').style.fontSize = `${fontSize * 0.9}px`;

      document.getElementById('site-title').textContent = config.site_title || defaultConfig.site_title;
      document.getElementById('hero-title').textContent = config.hero_title || defaultConfig.hero_title;
      document.getElementById('hero-subtitle').textContent = config.hero_subtitle || defaultConfig.hero_subtitle;
      document.getElementById('cta-button').textContent = config.cta_button || defaultConfig.cta_button;
      document.getElementById('astronomy-title').textContent = config.astronomy_title || defaultConfig.astronomy_title;
      document.getElementById('astronomy-desc').textContent = config.astronomy_desc || defaultConfig.astronomy_desc;
      document.getElementById('science-title').textContent = config.science_title || defaultConfig.science_title;
      document.getElementById('science-desc').textContent = config.science_desc || defaultConfig.science_desc;
      document.getElementById('tech-title').textContent = config.tech_title || defaultConfig.tech_title;
      document.getElementById('tech-desc').textContent = config.tech_desc || defaultConfig.tech_desc;
      document.getElementById('tools-title').textContent = config.tools_title || defaultConfig.tools_title;
      document.getElementById('tools-desc').textContent = config.tools_desc || defaultConfig.tools_desc;
      document.getElementById('blog-section-title').textContent = config.blog_section_title || defaultConfig.blog_section_title;
      document.getElementById('blog-section-subtitle').textContent = config.blog_section_subtitle || defaultConfig.blog_section_subtitle;
      document.getElementById('blog1-category').textContent = config.blog1_category || defaultConfig.blog1_category;
      document.getElementById('blog1-title').textContent = config.blog1_title || defaultConfig.blog1_title;
      document.getElementById('blog1-excerpt').textContent = config.blog1_excerpt || defaultConfig.blog1_excerpt;
      document.getElementById('blog2-category').textContent = config.blog2_category || defaultConfig.blog2_category;
      document.getElementById('blog2-title').textContent = config.blog2_title || defaultConfig.blog2_title;
      document.getElementById('blog2-excerpt').textContent = config.blog2_excerpt || defaultConfig.blog2_excerpt;
      document.getElementById('blog3-category').textContent = config.blog3_category || defaultConfig.blog3_category;
      document.getElementById('blog3-title').textContent = config.blog3_title || defaultConfig.blog3_title;
      document.getElementById('blog3-excerpt').textContent = config.blog3_excerpt || defaultConfig.blog3_excerpt;
      document.getElementById('footer-description').textContent = config.footer_description || defaultConfig.footer_description;
      document.getElementById('footer-explore-title').textContent = config.footer_explore_title || defaultConfig.footer_explore_title;
      document.getElementById('footer-tools-title').textContent = config.footer_tools_title || defaultConfig.footer_tools_title;
      document.getElementById('footer-about-title').textContent = config.footer_about_title || defaultConfig.footer_about_title;
      document.getElementById('footer-copyright').textContent = config.footer_copyright || defaultConfig.footer_copyright;
    }

    if (window.elementSdk) {
      window.elementSdk.init({
        defaultConfig: defaultConfig,
        onConfigChange: onConfigChange,
        mapToCapabilities: (config) => ({
          recolorables: [
            {
              get: () => config.background_color || defaultConfig.background_color,
              set: (value) => {
                config.background_color = value;
                window.elementSdk.setConfig({ background_color: value });
              }
            },
            {
              get: () => config.surface_color || defaultConfig.surface_color,
              set: (value) => {
                config.surface_color = value;
                window.elementSdk.setConfig({ surface_color: value });
              }
            },
            {
              get: () => config.text_color || defaultConfig.text_color,
              set: (value) => {
                config.text_color = value;
                window.elementSdk.setConfig({ text_color: value });
              }
            },
            {
              get: () => config.primary_action_color || defaultConfig.primary_action_color,
              set: (value) => {
                config.primary_action_color = value;
                window.elementSdk.setConfig({ primary_action_color: value });
              }
            },
            {
              get: () => config.secondary_action_color || defaultConfig.secondary_action_color,
              set: (value) => {
                config.secondary_action_color = value;
                window.elementSdk.setConfig({ secondary_action_color: value });
              }
            }
          ],
          borderables: [],
          fontEditable: {
            get: () => config.font_family || defaultConfig.font_family,
            set: (value) => {
              config.font_family = value;
              window.elementSdk.setConfig({ font_family: value });
            }
          },
          fontSizeable: {
            get: () => config.font_size || defaultConfig.font_size,
            set: (value) => {
              config.font_size = value;
              window.elementSdk.setConfig({ font_size: value });
            }
          }
        }),
        mapToEditPanelValues: (config) => new Map([
          ['site_title', config.site_title || defaultConfig.site_title],
          ['site_tagline', config.site_tagline || defaultConfig.site_tagline],
          ['hero_title', config.hero_title || defaultConfig.hero_title],
          ['hero_subtitle', config.hero_subtitle || defaultConfig.hero_subtitle],
          ['cta_button', config.cta_button || defaultConfig.cta_button],
          ['astronomy_title', config.astronomy_title || defaultConfig.astronomy_title],
          ['astronomy_desc', config.astronomy_desc || defaultConfig.astronomy_desc],
          ['science_title', config.science_title || defaultConfig.science_title],
          ['science_desc', config.science_desc || defaultConfig.science_desc],
          ['tech_title', config.tech_title || defaultConfig.tech_title],
          ['tech_desc', config.tech_desc || defaultConfig.tech_desc],
          ['tools_title', config.tools_title || defaultConfig.tools_title],
          ['tools_desc', config.tools_desc || defaultConfig.tools_desc],
          ['blog_section_title', config.blog_section_title || defaultConfig.blog_section_title],
          ['blog_section_subtitle', config.blog_section_subtitle || defaultConfig.blog_section_subtitle],
          ['blog1_category', config.blog1_category || defaultConfig.blog1_category],
          ['blog1_title', config.blog1_title || defaultConfig.blog1_title],
          ['blog1_excerpt', config.blog1_excerpt || defaultConfig.blog1_excerpt],
          ['blog2_category', config.blog2_category || defaultConfig.blog2_category],
          ['blog2_title', config.blog2_title || defaultConfig.blog2_title],
          ['blog2_excerpt', config.blog2_excerpt || defaultConfig.blog2_excerpt],
          ['blog3_category', config.blog3_category || defaultConfig.blog3_category],
          ['blog3_title', config.blog3_title || defaultConfig.blog3_title],
          ['blog3_excerpt', config.blog3_excerpt || defaultConfig.blog3_excerpt],
          ['footer_description', config.footer_description || defaultConfig.footer_description],
          ['footer_explore_title', config.footer_explore_title || defaultConfig.footer_explore_title],
          ['footer_tools_title', config.footer_tools_title || defaultConfig.footer_tools_title],
          ['footer_about_title', config.footer_about_title || defaultConfig.footer_about_title],
          ['footer_copyright', config.footer_copyright || defaultConfig.footer_copyright]
        ])
      });
    }

    createStars();
    onConfigChange(defaultConfig);

    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');

    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navMenu.classList.toggle('active');
    });

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
      });
    });

    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        menuToggle.classList.remove('active');
        navMenu.classList.remove('active');
      }
    });
  </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9a13654715cd4e2f',t:'MTc2MzU5Mzk4MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>