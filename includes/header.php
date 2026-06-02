<?php
/**
 * Header do Site
 * Contém: DOCTYPE, head, estilos Tailwind/Fonts e navegação principal
 */
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fontes usadas no site: Playfair Display e Cormorant Garamond -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
  <!-- Ícones Font Awesome para pequenos ícones nos cards e botões -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-RtqZ0Uv2ylTPxk/jbFh/5JplGQ4FqHyKF/TI4LU+ZLJot7QzWZ861d1PjG6DJJXNSPqzXZ2Xqho3e+Y/DM1Bww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="img/logo_jerusalem.png">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            display: ['"Playfair Display"', 'serif'],
            serif: ['"Cormorant Garamond"', 'serif'],
          },
          colors: {
            sand: '#f1e8d8',
            brandgreen: '#3c7d5f',
            brandgreensoft: '#76b99c',
            brandgreenlight: '#d8f1e8',
          }
        }
      }
    }
  </script>
  <!-- Tailwind via CDN para utilitários de estilo rápidos -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Jerusalém</title>
  <style>
    /* Header transition and green palette tweaks */
    #main-header{ transition: background-color .25s ease, box-shadow .25s ease, padding .18s ease; }
    #main-header .logo img{ transition: transform .25s ease, height .25s ease; }
    #main-header .brand-title{ transition: transform .2s ease, color .2s ease; }
    /* State when user scrolls down */
    #main-header.scrolled{ background: rgba(28, 67, 50, 0.94); backdrop-filter: blur(6px); box-shadow: 0 8px 30px rgba(0,0,0,0.35); border-bottom-color: rgba(255,255,255,0.04); }
    #main-header.scrolled .logo img{ transform: scale(.85); }
    #main-header.scrolled .brand-title{ transform: translateY(-1px) scale(.96); color: #e6f6ef; }
    #site-search input{ transition: width .22s ease, opacity .22s ease; }
    @media (min-width:768px){
      #site-search input{ width: 0; opacity: 0; }
      #site-search.open input{ width: 220px; opacity: 1; }
    }
  </style>
</head>

  <!-- Página principal do site: fundo escuro com tipografia clara -->
  <body class="text-slate-100 antialiased bg-cover bg-center bg-no-repeat w-full" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../img/lamentacoes/muro1.jpg');">
    
  <header id="main-header" class="sticky top-0 z-50 border-b border-white/20 bg-green-950 backdrop-blur ">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 md:px-6">
      <a href="#" class="flex items-center gap-3 logo">
        <img src="img/logo_jerusalem.png" alt="Jerusalém logo" class="h-12 w-12 rounded-2xl border border-brandgreen/20 object-cover shadow-lg shadow-black/20" />
        <div>
          <p class="text-sm uppercase tracking-[0.35em] text-brandgreensoft/90">Jerusalém</p>
          <span class="text-xl font-semibold text-slate-100 brand-title">Cidade Milenar</span>
        </div>
      </a>
     
      <!-- Botão hamburger para abrir o menu apenas em telas pequenas -->
      <button id="navToggle" aria-label="Abrir menu" class="flex flex-col gap-1.5 h-10 w-10 items-center justify-center rounded-lg border border-brandgreen/30 bg-brandgreen/10 text-slate-200 transition hover:bg-brandgreen/20 md:hidden">
        <span class="block h-0.5 w-5 rounded-full bg-slate-100 transition-all"></span>
        <span class="block h-0.5 w-5 rounded-full bg-slate-100 transition-all"></span>
        <span class="block h-0.5 w-5 rounded-full bg-slate-100 transition-all"></span>
      </button>
      <!-- Menu de navegação principal -->
      <nav id="mainNav" class="hidden absolute top-full left-0 right-0 z-40 flex-col gap-1 bg-green-950 backdrop-blur-md border-b border-brandgreen/20 md:static md:flex md:flex-row md:items-center md:border-0 md:bg-transparent md:p-0 md:backdrop-blur-none md:gap-0 md:relative md:w-auto ">
        <a href="#on-city" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Sobre a Cidade</a>
        <a href="#tourist-spot" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Pontos Turísticos</a> 
        <a href="#culture" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Culturas e Eventos</a>
        <a href="#gastronomy" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Gastronomia</a>
        <a href="#lodging" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Hospedagem</a>
        <a href="#how-to-get" class="block px-6 py-3 text-sm font-medium text-slate-100 hover:text-brandgreen hover:bg-brandgreen/10 transition md:px-4 md:py-2 md:rounded-lg md:hover:bg-slate-800/50">Como Chegar</a>
      </nav>
    </div>
  </header>

  <!-- Conteúdo principal da página -->
  <main>
