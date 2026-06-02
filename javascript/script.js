// Sistema de Filtros
        /*
          Entrada principal do JavaScript.
          Esta função espera que o DOM esteja totalmente carregado
          antes de inicializar os comportamentos de navegação e filtros.
        */
        // Debug: confirm script was loaded
        console.log('script.js loaded');

        document.addEventListener('DOMContentLoaded', function () {
          console.log('DOMContentLoaded - initializing site scripts');
          initMobileNav();
          initFilterTabs();
          initSmoothScroll();
          initHeaderOnScroll();
          initSearchToggle();
        });

        /*
          Inicializa o menu mobile.
          O botão hamburger alterna a visibilidade do menu quando a tela estiver pequena.
        */
        function initMobileNav() {
          const toggleBtn = document.getElementById('navToggle');
          const nav = document.getElementById('mainNav');

          if (!toggleBtn || !nav) return;

          toggleBtn.addEventListener('click', function () {
            nav.classList.toggle('hidden');
            toggleBtn.classList.toggle('active');
          });

          nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
              if (window.innerWidth < 768) {
                nav.classList.add('hidden');
                toggleBtn.classList.remove('active');
              }
            });
          });
        }

        /*
          Inicializa os botões de filtro.
          Cada botão alterna a exibição dos cards com base no atributo data-category.
        */
        function initFilterTabs() {
          const filterBtns = document.querySelectorAll('.filter-btn');
          const cards = document.querySelectorAll('[data-category]');
          if (!filterBtns.length || !cards.length) return;

          filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
              filterBtns.forEach(function (b) {
                b.classList.remove('active');
                b.classList.remove('bg-brandgreensoft/15', 'text-brandgreen', 'border-brandgreen/30');
                b.classList.add('bg-white/5', 'text-slate-200', 'border-white/10');
              });
              this.classList.add('active');
              this.classList.remove('bg-white/5', 'text-slate-200', 'border-white/10');
              this.classList.add('bg-brandgreensoft/15', 'text-brandgreen', 'border-brandgreen/30');

              const selected = this.getAttribute('data-filter');
              cards.forEach(function (card) {
                const category = card.getAttribute('data-category');
                const visible = selected === 'all' || category === selected;
                card.classList.toggle('hidden', !visible);
              });
            });
          });
        }

        /*
          Implementa rolagem suave para links de âncora.
          Isso faz com que os cliques em <a href="#..."> movam a página suavemente.
        */
        function initSmoothScroll() {
          document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (event) {
              const targetId = this.getAttribute('href');
              if (!targetId || targetId === '#') return;

              const target = document.querySelector(targetId);
              if (!target) return;
              event.preventDefault();

              const header = document.getElementById('main-header');
              const offset = header ? header.offsetHeight + 10 : 10;
              const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
              window.scrollTo({ top, behavior: 'smooth' });
            });
          });
        }

            /*
              Adiciona classe 'scrolled' ao header quando a página é rolada.
              Mantemos o handler simples e leve (passive:true).
            */
            function initHeaderOnScroll() {
              const header = document.getElementById('main-header');
              if (!header) return;

              const onScroll = function () {
                const scrolled = window.scrollY > 60;
                header.classList.toggle('scrolled', scrolled);
              };

              window.addEventListener('scroll', onScroll, { passive: true });
              // executa imediatamente para aplicar estado correto ao carregar
              onScroll();
            }

            /*
              Toggle simples para o campo de busca em desktop.
              Em telas >= md, o input abre/fecha com animação via CSS.
            */
            function initSearchToggle() {
              const searchToggle = document.getElementById('searchToggle');
              const siteSearch = document.getElementById('site-search');
              if (!searchToggle || !siteSearch) return;

              const input = siteSearch.querySelector('input');

              searchToggle.addEventListener('click', function () {
                siteSearch.classList.toggle('open');
                if (siteSearch.classList.contains('open')) {
                  input.focus();
                } else {
                  input.blur();
                }
              });

              // Fechar ao pressionar Escape
              input.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                  siteSearch.classList.remove('open');
                  input.blur();
                }
              });
            }