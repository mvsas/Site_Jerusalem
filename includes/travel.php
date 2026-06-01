<?php
/**
 * Seção Como Chegar
 * Contém informações sobre transporte, aeroportos e dicas de viagem
 */
?>

    <!-- Seção Como Chegar -->
    <section id="how-to-get" class="bg-slate-900 px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-7xl">
        <div class="mb-12">
          <h2 class="text-3xl font-semibold text-white sm:text-4xl font-display">Como Chegar e Informações Práticas</h2>
          <p class="mt-4 text-lg leading-8 text-slate-300">Tudo que você precisa saber para planejar sua viagem até Jerusalém</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
          <!-- Card 1: Aeroportos -->
          <article class="rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 p-8 shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-brandgreen/20">
              <i class="fas fa-plane text-2xl text-brandgreen"></i>
            </div>
            <h3 class="mb-4 text-xl font-semibold text-white">✈️ Aeroportos</h3>
            <p class="mb-6 leading-7 text-slate-300">O Aeroporto Internacional Ben Gurion é o principal ponto de entrada. Fica a 50km de Jerusalém e possui ótimas conexões. A maioria das companhias aéreas internacionais opera nele.</p>
            <div class="space-y-3 border-t border-white/10 pt-6">
              <div>
                <h4 class="font-semibold text-white">Ben Gurion Airport</h4>
                <p class="text-sm text-slate-400">Principal aeroporto • 50km ao norte</p>
              </div>
              <div class="flex items-center gap-2 text-sm text-slate-400">
                <i class="fas fa-clock text-brandgreen"></i>
                Trajeto: ~1h em ônibus ou táxi
              </div>
              <div class="flex items-center gap-2 text-sm text-slate-400">
                <i class="fas fa-dollar text-brandgreen"></i>
                Preço: 15-80 ₪
              </div>
            </div>
          </article>

          <!-- Card 2: Transporte Local -->
          <article class="rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 p-8 shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-brandgreen/20">
              <i class="fas fa-bus text-2xl text-brandgreen"></i>
            </div>
            <h3 class="mb-4 text-xl font-semibold text-white">🚌 Transporte Local</h3>
            <p class="mb-6 leading-7 text-slate-300">Ônibus, táxis e compartilhamentos dominam Jerusalém. A Cidade Velha é principalmente pedestrianizada, mas é fácil se locomover pela cidade usando ônibus públicos ou táxis. Muitas ruas são íngremes, então sapatos confortáveis são essenciais.</p>
            <div class="space-y-3 border-t border-white/10 pt-6">
              <div className="flex items-center gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen"></i> Ônibus: 6-7 ₪ por trajeto
              </div>
              <div className="flex items-center gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen"></i> Táxi: Preço por km
              </div>
              <div className="flex items-center gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen"></i> Uber/Waze: Disponível
              </div>
            </div>
          </article>

          <!-- Card 3: Dicas de Viagem -->
          <article class="rounded-2xl border border-white/10 bg-gradient-to-b from-slate-800 to-slate-900/80 p-8 shadow-xl shadow-black/20 transition-all hover:shadow-2xl hover:shadow-brandgreen/20">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-brandgreen/20">
              <i class="fas fa-lightbulb text-2xl text-brandgreen"></i>
            </div>
            <h3 class="mb-4 text-xl font-semibold text-white">💡 Dicas de Viagem</h3>
            <p class="mb-6 leading-7 text-slate-300">Respeite os costumes locais nas áreas religiosas. Evite viajar no sábado (Shabat) para observância religiosa. Leve bastante água, especialmente no verão. Compre um cartão Rav Kav para descontos em ônibus.</p>
            <div class="space-y-3 border-t border-white/10 pt-6">
              <div className="flex items-start gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen mt-1"></i> Roupas modestas em áreas religiosas
              </div>
              <div className="flex items-start gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen mt-1"></i> Evite Shabat para atividades seculares
              </div>
              <div className="flex items-start gap-2 text-sm text-slate-400">
                <i class="fas fa-check text-brandgreen mt-1"></i> Leve protetor solar e hidratação
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
