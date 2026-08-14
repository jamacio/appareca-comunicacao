(function () {
  // Mobile menu
  var menuToggle = document.getElementById('menuToggle');
  var mobileMenu = document.getElementById('mobileMenu');
  var backdrop = document.getElementById('navBackdrop');

  function closeMenu() {
    document.body.classList.remove('menu-open');
    if (mobileMenu) {
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden', 'true');
    }
    if (backdrop) {
      backdrop.classList.remove('show');
      backdrop.setAttribute('aria-hidden', 'true');
    }
    if (menuToggle) {
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Abrir menu');
    }
  }

  function openMenu() {
    document.body.classList.add('menu-open');
    if (mobileMenu) {
      mobileMenu.classList.add('open');
      mobileMenu.setAttribute('aria-hidden', 'false');
    }
    if (backdrop) {
      backdrop.classList.add('show');
      backdrop.setAttribute('aria-hidden', 'false');
    }
    if (menuToggle) {
      menuToggle.setAttribute('aria-expanded', 'true');
      menuToggle.setAttribute('aria-label', 'Fechar menu');
    }
  }

  function toggleMenu() {
    if (document.body.classList.contains('menu-open')) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  if (menuToggle) menuToggle.addEventListener('click', toggleMenu);
  if (backdrop) backdrop.addEventListener('click', closeMenu);
  if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(function (l) {
      l.addEventListener('click', closeMenu);
    });
    var closeBtn = mobileMenu.querySelector('[data-menu-close]');
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });
  window.addEventListener('resize', function () {
    if (window.innerWidth > 900) closeMenu();
  });

  // Navbar shadow on scroll
  var navbar = document.getElementById('navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  // Reveal observer
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) e.target.classList.add('visible');
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(function (el) {
    observer.observe(el);
  });

  // Smooth scroll for in-page anchors
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Counter animation for stats
  var counted = false;
  var statsObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting && !counted) {
        counted = true;
        document.querySelectorAll('.stat-num').forEach(function (el) {
          var text = el.textContent;
          var num = parseInt(text.replace(/[^0-9]/g, ''), 10);
          if (text.indexOf('%') !== -1) {
            var i = 0;
            var interval = setInterval(function () {
              el.textContent = i + '%';
              i++;
              if (i > num) { el.textContent = text; clearInterval(interval); }
            }, 20);
          } else if (text.indexOf('\u00d7') !== -1) {
            var i = 0;
            var interval = setInterval(function () {
              el.textContent = i + '\u00d7';
              i++;
              if (i > num) { el.textContent = text; clearInterval(interval); }
            }, 30);
          } else {
            var i = 0;
            var interval = setInterval(function () {
              el.textContent = '+' + i;
              i += 2;
              if (i > num) { el.textContent = text; clearInterval(interval); }
            }, 10);
          }
        });
      }
    });
  }, { threshold: 0.5 });
  var statsBar = document.querySelector('.stats-bar');
  if (statsBar) statsObserver.observe(statsBar);
})();
