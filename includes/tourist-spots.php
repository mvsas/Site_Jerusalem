<?php
/**
 * Seção de Pontos Turísticos
 * Contém filtros e cards dos principais pontos de interesse
 */
?>

    <!-- Seção Atrações Turísticas -->
    <section id="tourist-spot" class="bg-slate-900 px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="mb-12">
          <h2 class="text-3xl font-semibold text-white sm:text-4xl font-display">Atrações Turísticas</h2>
          <p class="mt-4 text-lg leading-8 text-slate-300">Principais pontos de interesse para explorar em Jerusalém</p>
        </div>

        <!-- Filtros -->
        <div class="mb-12 flex flex-wrap gap-3">
          <button class="filter-btn active rounded-full border-2 border-brandgreen bg-brandgreen px-4 py-2 text-white transition-all hover:shadow-lg hover:shadow-brandgreen/50" data-filter="all">
            <i class="fas fa-star me-2"></i> Tudo
          </button>
          <button class="filter-btn rounded-full border-2 border-brandgreen/30 px-4 py-2 text-slate-300 transition-all hover:border-brandgreen hover:text-white" data-filter="religious">
            <i class="fas fa-cross me-2"></i> Religiosos
          </button>
          <button class="filter-btn rounded-full border-2 border-brandgreen/30 px-4 py-2 text-slate-300 transition-all hover:border-brandgreen hover:text-white" data-filter="historical">
            <i class="fas fa-landmark me-2"></i> Históricos
          </button>
          <button class="filter-btn rounded-full border-2 border-brandgreen/30 px-4 py-2 text-slate-300 transition-all hover:border-brandgreen hover:text-white" data-filter="cultural">
            <i class="fas fa-palette me-2"></i> Culturais
          </button>
          <button class="filter-btn rounded-full border-2 border-brandgreen/30 px-4 py-2 text-slate-300 transition-all hover:border-brandgreen hover:text-white" data-filter="nature">
            <i class="fas fa-leaf me-2"></i> Natureza
          </button>
        </div>

        <!-- Grid de Cards -->
        <div id="cardsGrid" class="grid gap-6 lg:grid-cols-3">
          <!-- Card 1: Muro das Lamentações -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="religious">
            <img src="./img/lamentacoes/lamentacoes.jpg" alt="Muro das Lamentações" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Muro das Lamentações</h3>
                <span class="rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-200">Religioso</span>
              </div>
              <p class="mb-4 text-slate-300">O local mais sagrado do Judaísmo, remanescente do Segundo Templo de Jerusalém. Um destino imprescindível para compreender a fé e história dos judeus.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 24h</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> Gratuita</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Cidade Velha</li>
              </ul>
            </div>
          </article>

          <!-- Card 2: Cúpula da Rocha -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="religious">
            <img src="./img/Igreja do santo sepruco/IMG_7881.JPG" alt="Cúpula da Rocha" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Cúpula da Rocha</h3>
                <span class="rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-200">Religioso</span>
              </div>
              <p class="mb-4 text-slate-300">Santuário islâmico com uma das cúpulas mais belas do mundo. Localizado no Monte do Templo, é de grande importância religiosa para muçulmanos.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 7:30 - 11:00 / 13:30 - 14:30</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> 15 ₪</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Monte do Templo</li>
              </ul>
            </div>
          </article>

          <!-- Card 3: Igreja do Santo Sepulcro -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="religious">
            <img src="./img/Igreja do santo sepruco/IMG_7891.JPG" alt="Igreja do Santo Sepulcro" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Igreja do Santo Sepulcro</h3>
                <span class="rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-200">Religioso</span>
              </div>
              <p class="mb-4 text-slate-300">Local sagrado onde Jesus foi crucificado e enterrado segundo a tradição cristã. Uma das igrejas mais importantes da Cristandade.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 5:00 - 21:00</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> Gratuita</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Cidade Velha</li>
              </ul>
            </div>
          </article>

          <!-- Card 4: Monte das Oliveiras -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="religious">
            <img src="./img/Igreja do santo sepruco/IMG_7934.JPG" alt="Monte das Oliveiras" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Monte das Oliveiras</h3>
                <span class="rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-200">Religioso</span>
              </div>
              <p class="mb-4 text-slate-300">Montanha sagrada de 827m com vista panorâmica de Jerusalém. Local de grande importância religiosa com igrejas e cemitérios históricos.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 24h (Igrejas: 7:00-17:00)</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> Gratuita</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Leste de Jerusalém</li>
              </ul>
            </div>
          </article>

          <!-- Card 5: Mercado de Mahane Yehuda -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="cultural">
            <img src="./img/Igreja do santo sepruco/IMG_7947.JPG" alt="Mercado Mahane Yehuda" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Mercado de Mahane Yehuda</h3>
                <span class="rounded-full bg-purple-500/20 px-3 py-1 text-sm font-medium text-purple-200">Cultural</span>
              </div>
              <p class="mb-4 text-slate-300">Mercado tradicional vibrante com frutas, vegetais, especiarias e artesanatos. Perfeito para vivenciar a cultura local e provar iguarias israelenses.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 8:00 - 18:00 (Sexta até 15:00)</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> Gratuita</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Centro de Jerusalém</li>
              </ul>
            </div>
          </article>

          <!-- Card 6: Jardim Botânico de Jerusalém -->
          <article class="group rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 overflow-hidden shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20" data-category="nature">
            <img src="./img/Igreja do santo sepruco/IMG_7962.JPG" alt="Jardim Botânico" class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
            <div class="p-6">
              <div class="mb-3 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">Jardim Botânico</h3>
                <span class="rounded-full bg-green-500/20 px-3 py-1 text-sm font-medium text-green-200">Natureza</span>
              </div>
              <p class="mb-4 text-slate-300">Espaço verde com mais de 4 hectares, abrigando plantas de diferentes regiões. Local tranquilo para caminhar e aproveitar a natureza.</p>
              <ul class="space-y-2 text-sm text-slate-400">
                <li><i class="fas fa-clock me-2 text-brandgreen"></i> <strong>Horário:</strong> 9:00 - 17:00</li>
                <li><i class="fas fa-ticket me-2 text-brandgreen"></i> <strong>Entrada:</strong> 25 ₪</li>
                <li><i class="fas fa-map-marker me-2 text-brandgreen"></i> <strong>Local:</strong> Oeste de Jerusalém</li>
              </ul>
            </div>
          </article>
        </div>
      </div>
    </section>
