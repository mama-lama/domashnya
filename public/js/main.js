(function () {
  const burger = document.getElementById('burger');
  const nav = document.getElementById('navMenu');
  const navLinks = nav.querySelectorAll('a');

  function closeMenu() {
    nav.classList.remove('is-open');
    burger.classList.remove('is-active');
    burger.setAttribute('aria-expanded', 'false');
  }

  function openMenu() {
    nav.classList.add('is-open');
    burger.classList.add('is-active');
    burger.setAttribute('aria-expanded', 'true');
  }

  burger.addEventListener('click', function () {
    const isOpen = nav.classList.contains('is-open');
    isOpen ? closeMenu() : openMenu();
  });

  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 860) {
        closeMenu();
      }
    });
  });

  document.addEventListener('click', function (event) {
    if (window.innerWidth > 860) return;
    if (!nav.contains(event.target) && !burger.contains(event.target)) {
      closeMenu();
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 860) {
      nav.classList.remove('is-open');
      burger.classList.remove('is-active');
      burger.setAttribute('aria-expanded', 'false');
    }
  });

  const track = document.getElementById('reviewsTrack');
  if (track) {
    const slides = Array.from(track.children);
    const prevBtn = document.getElementById('prevReview');
    const nextBtn = document.getElementById('nextReview');
    const dotsWrap = document.getElementById('reviewDots');
    let currentIndex = 0;

    function renderDots() {
      dotsWrap.innerHTML = '';
      slides.forEach(function (_, index) {
        const dot = document.createElement('button');
        dot.className = 'slider-dot' + (index === currentIndex ? ' is-active' : '');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Перейти к отзыву ' + (index + 1));
        dot.addEventListener('click', function () {
          goToSlide(index);
        });
        dotsWrap.appendChild(dot);
      });
    }

    function goToSlide(index) {
      currentIndex = (index + slides.length) % slides.length;
      track.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
      renderDots();
    }

    prevBtn.addEventListener('click', function () {
      goToSlide(currentIndex - 1);
    });

    nextBtn.addEventListener('click', function () {
      goToSlide(currentIndex + 1);
    });

    let autoPlay = setInterval(function () {
      goToSlide(currentIndex + 1);
    }, 6000);

    function resetAutoplay() {
      clearInterval(autoPlay);
      autoPlay = setInterval(function () {
        goToSlide(currentIndex + 1);
      }, 6000);
    }

    [prevBtn, nextBtn, dotsWrap].forEach(function (element) {
      element.addEventListener('click', resetAutoplay);
    });

    goToSlide(0);
  }

  const menuTabs = document.getElementById('menuTabs');
  const menuButtons = menuTabs ? Array.from(menuTabs.querySelectorAll('.menu-tab')) : [];
  const menuCards = Array.from(document.querySelectorAll('#menu .dish-card[data-category]'));

  function getInitialCategory() {
    if (!menuTabs || menuButtons.length === 0) {
      return 'all';
    }
    const params = new URLSearchParams(window.location.search);
    const fromUrl = params.get('category');
    if (fromUrl && menuButtons.some(function (button) { return button.dataset.filter === fromUrl; })) {
      return fromUrl;
    }
    const fromData = menuTabs.dataset.activeCategory;
    if (fromData && menuButtons.some(function (button) { return button.dataset.filter === fromData; })) {
      return fromData;
    }
    return 'all';
  }

  function filterMenu(category) {
    menuCards.forEach(function (card) {
      const cardCategories = (card.dataset.category || '').split(/\s+/);
      const shouldShow = category === 'all' || cardCategories.indexOf(category) !== -1;
      card.classList.toggle('is-hidden', !shouldShow);
    });

    menuButtons.forEach(function (button) {
      button.classList.toggle('is-active', button.dataset.filter === category);
    });

    const url = new URL(window.location.href);
    if (category === 'all') {
      url.searchParams.delete('category');
    } else {
      url.searchParams.set('category', category);
    }
    window.history.replaceState({}, '', url.toString());
  }

  if (menuTabs) {
    menuTabs.addEventListener('click', function (event) {
      const button = event.target.closest('.menu-tab');
      if (!button) return;
      filterMenu(button.dataset.filter);
    });
  }

  filterMenu(getInitialCategory());

  // Rooms slider + fullscreen lightbox carousel
  const roomsSlider = document.getElementById('roomsSlider');
  if (roomsSlider) {
    const roomsTrack = document.getElementById('roomsTrack');
    const roomSlides = Array.from(roomsTrack.children);
    const roomImages = roomSlides.map(function (slide) {
      const img = slide.querySelector('img');
      return img ? img.getAttribute('src') : '';
    });
    const roomsPrev = document.getElementById('roomsPrev');
    const roomsNext = document.getElementById('roomsNext');
    const roomsDots = document.getElementById('roomsDots');
    let roomIndex = 0;

    function renderRoomDots() {
      if (!roomsDots) return;
      roomsDots.innerHTML = '';
      roomSlides.forEach(function (_, index) {
        const dot = document.createElement('button');
        dot.className = 'slider-dot' + (index === roomIndex ? ' is-active' : '');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Фото комнаты ' + (index + 1));
        dot.addEventListener('click', function (event) {
          event.stopPropagation();
          goToRoom(index);
          resetRoomsAutoplay();
        });
        roomsDots.appendChild(dot);
      });
    }

    function goToRoom(index) {
      roomIndex = (index + roomSlides.length) % roomSlides.length;
      roomsTrack.style.transform = 'translateX(' + (-roomIndex * 100) + '%)';
      renderRoomDots();
    }

    let roomsAutoPlay = setInterval(function () {
      goToRoom(roomIndex + 1);
    }, 4000);

    function resetRoomsAutoplay() {
      clearInterval(roomsAutoPlay);
      roomsAutoPlay = setInterval(function () {
        goToRoom(roomIndex + 1);
      }, 4000);
    }

    if (roomsPrev) {
      roomsPrev.addEventListener('click', function (event) {
        event.stopPropagation();
        goToRoom(roomIndex - 1);
        resetRoomsAutoplay();
      });
    }

    if (roomsNext) {
      roomsNext.addEventListener('click', function (event) {
        event.stopPropagation();
        goToRoom(roomIndex + 1);
        resetRoomsAutoplay();
      });
    }

    goToRoom(0);

    // Lightbox
    const lightbox = document.getElementById('roomsLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    let lightboxIndex = 0;

    function renderLightbox() {
      lightboxImage.src = roomImages[lightboxIndex];
      lightboxImage.alt = 'Комната под съём, фото ' + (lightboxIndex + 1);
      lightboxCounter.textContent = (lightboxIndex + 1) + ' / ' + roomImages.length;
    }

    function openLightbox(index) {
      lightboxIndex = (index + roomImages.length) % roomImages.length;
      renderLightbox();
      lightbox.classList.add('is-open');
      lightbox.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      lightbox.classList.remove('is-open');
      lightbox.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    roomsSlider.addEventListener('click', function (event) {
      if (event.target.closest('.rooms-slider__btn')) return;
      openLightbox(roomIndex);
    });

    lightboxClose.addEventListener('click', closeLightbox);

    lightboxPrev.addEventListener('click', function () {
      lightboxIndex = (lightboxIndex - 1 + roomImages.length) % roomImages.length;
      renderLightbox();
    });

    lightboxNext.addEventListener('click', function () {
      lightboxIndex = (lightboxIndex + 1) % roomImages.length;
      renderLightbox();
    });

    lightbox.addEventListener('click', function (event) {
      if (event.target === lightbox || event.target.classList.contains('lightbox__stage')) {
        closeLightbox();
      }
    });

    document.addEventListener('keydown', function (event) {
      if (!lightbox.classList.contains('is-open')) return;
      if (event.key === 'Escape') closeLightbox();
      if (event.key === 'ArrowLeft') lightboxPrev.click();
      if (event.key === 'ArrowRight') lightboxNext.click();
    });
  }

  // Garden slider + fullscreen lightbox carousel
  const gardenSlider = document.getElementById('gardenSlider');
  if (gardenSlider) {
    const gardenTrack = document.getElementById('gardenTrack');
    const gardenSlides = Array.from(gardenTrack.children);
    const gardenImages = gardenSlides.map(function (slide) {
      const img = slide.querySelector('img');
      return img ? img.getAttribute('src') : '';
    });
    const gardenPrev = document.getElementById('gardenPrev');
    const gardenNext = document.getElementById('gardenNext');
    const gardenDots = document.getElementById('gardenDots');
    let gardenIndex = 0;

    function renderGardenDots() {
      if (!gardenDots) return;
      gardenDots.innerHTML = '';
      gardenSlides.forEach(function (_, index) {
        const dot = document.createElement('button');
        dot.className = 'slider-dot' + (index === gardenIndex ? ' is-active' : '');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Фото сада ' + (index + 1));
        dot.addEventListener('click', function (event) {
          event.stopPropagation();
          goToGarden(index);
          resetGardenAutoplay();
        });
        gardenDots.appendChild(dot);
      });
    }

    function goToGarden(index) {
      gardenIndex = (index + gardenSlides.length) % gardenSlides.length;
      gardenTrack.style.transform = 'translateX(' + (-gardenIndex * 100) + '%)';
      renderGardenDots();
    }

    let gardenAutoPlay = setInterval(function () {
      goToGarden(gardenIndex + 1);
    }, 4000);

    function resetGardenAutoplay() {
      clearInterval(gardenAutoPlay);
      gardenAutoPlay = setInterval(function () {
        goToGarden(gardenIndex + 1);
      }, 4000);
    }

    if (gardenPrev) {
      gardenPrev.addEventListener('click', function (event) {
        event.stopPropagation();
        goToGarden(gardenIndex - 1);
        resetGardenAutoplay();
      });
    }

    if (gardenNext) {
      gardenNext.addEventListener('click', function (event) {
        event.stopPropagation();
        goToGarden(gardenIndex + 1);
        resetGardenAutoplay();
      });
    }

    goToGarden(0);

    const gardenLightbox = document.getElementById('gardenLightbox');
    const gardenLightboxImage = document.getElementById('gardenLightboxImage');
    const gardenLightboxCounter = document.getElementById('gardenLightboxCounter');
    const gardenLightboxClose = document.getElementById('gardenLightboxClose');
    const gardenLightboxPrev = document.getElementById('gardenLightboxPrev');
    const gardenLightboxNext = document.getElementById('gardenLightboxNext');
    let gardenLightboxIndex = 0;

    function renderGardenLightbox() {
      gardenLightboxImage.src = gardenImages[gardenLightboxIndex];
      gardenLightboxImage.alt = 'Сад и территория кафе, фото ' + (gardenLightboxIndex + 1);
      gardenLightboxCounter.textContent = (gardenLightboxIndex + 1) + ' / ' + gardenImages.length;
    }

    function openGardenLightbox(index) {
      gardenLightboxIndex = (index + gardenImages.length) % gardenImages.length;
      renderGardenLightbox();
      gardenLightbox.classList.add('is-open');
      gardenLightbox.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeGardenLightbox() {
      gardenLightbox.classList.remove('is-open');
      gardenLightbox.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    gardenSlider.addEventListener('click', function (event) {
      if (event.target.closest('.garden-slider__btn')) return;
      openGardenLightbox(gardenIndex);
    });

    gardenLightboxClose.addEventListener('click', closeGardenLightbox);

    gardenLightboxPrev.addEventListener('click', function () {
      gardenLightboxIndex = (gardenLightboxIndex - 1 + gardenImages.length) % gardenImages.length;
      renderGardenLightbox();
    });

    gardenLightboxNext.addEventListener('click', function () {
      gardenLightboxIndex = (gardenLightboxIndex + 1) % gardenImages.length;
      renderGardenLightbox();
    });

    gardenLightbox.addEventListener('click', function (event) {
      if (event.target === gardenLightbox || event.target.classList.contains('lightbox__stage')) {
        closeGardenLightbox();
      }
    });

    document.addEventListener('keydown', function (event) {
      if (!gardenLightbox.classList.contains('is-open')) return;
      if (event.key === 'Escape') closeGardenLightbox();
      if (event.key === 'ArrowLeft') gardenLightboxPrev.click();
      if (event.key === 'ArrowRight') gardenLightboxNext.click();
    });
  }

  // Hall slider + fullscreen lightbox carousel
  const hallSlider = document.getElementById('hallSlider');
  if (hallSlider) {
    const hallTrack = document.getElementById('hallTrack');
    const hallSlides = Array.from(hallTrack.children);
    const hallImages = hallSlides.map(function (slide) {
      const img = slide.querySelector('img');
      return img ? img.getAttribute('src') : '';
    });
    const hallPrev = document.getElementById('hallPrev');
    const hallNext = document.getElementById('hallNext');
    const hallDots = document.getElementById('hallDots');
    let hallIndex = 0;

    function renderHallDots() {
      if (!hallDots) return;
      hallDots.innerHTML = '';
      hallSlides.forEach(function (_, index) {
        const dot = document.createElement('button');
        dot.className = 'slider-dot' + (index === hallIndex ? ' is-active' : '');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Фото зала ' + (index + 1));
        dot.addEventListener('click', function (event) {
          event.stopPropagation();
          goToHall(index);
          resetHallAutoplay();
        });
        hallDots.appendChild(dot);
      });
    }

    function goToHall(index) {
      hallIndex = (index + hallSlides.length) % hallSlides.length;
      hallTrack.style.transform = 'translateX(' + (-hallIndex * 100) + '%)';
      renderHallDots();
    }

    let hallAutoPlay = setInterval(function () {
      goToHall(hallIndex + 1);
    }, 4000);

    function resetHallAutoplay() {
      clearInterval(hallAutoPlay);
      hallAutoPlay = setInterval(function () {
        goToHall(hallIndex + 1);
      }, 4000);
    }

    if (hallPrev) {
      hallPrev.addEventListener('click', function (event) {
        event.stopPropagation();
        goToHall(hallIndex - 1);
        resetHallAutoplay();
      });
    }

    if (hallNext) {
      hallNext.addEventListener('click', function (event) {
        event.stopPropagation();
        goToHall(hallIndex + 1);
        resetHallAutoplay();
      });
    }

    goToHall(0);

    const hallLightbox = document.getElementById('hallLightbox');
    const hallLightboxImage = document.getElementById('hallLightboxImage');
    const hallLightboxCounter = document.getElementById('hallLightboxCounter');
    const hallLightboxClose = document.getElementById('hallLightboxClose');
    const hallLightboxPrev = document.getElementById('hallLightboxPrev');
    const hallLightboxNext = document.getElementById('hallLightboxNext');
    let hallLightboxIndex = 0;

    function renderHallLightbox() {
      hallLightboxImage.src = hallImages[hallLightboxIndex];
      hallLightboxImage.alt = 'Обеденный зал, фото ' + (hallLightboxIndex + 1);
      hallLightboxCounter.textContent = (hallLightboxIndex + 1) + ' / ' + hallImages.length;
    }

    function openHallLightbox(index) {
      hallLightboxIndex = (index + hallImages.length) % hallImages.length;
      renderHallLightbox();
      hallLightbox.classList.add('is-open');
      hallLightbox.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }

    function closeHallLightbox() {
      hallLightbox.classList.remove('is-open');
      hallLightbox.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    hallSlider.addEventListener('click', function (event) {
      if (event.target.closest('.rooms-slider__btn')) return;
      openHallLightbox(hallIndex);
    });

    hallLightboxClose.addEventListener('click', closeHallLightbox);

    hallLightboxPrev.addEventListener('click', function () {
      hallLightboxIndex = (hallLightboxIndex - 1 + hallImages.length) % hallImages.length;
      renderHallLightbox();
    });

    hallLightboxNext.addEventListener('click', function () {
      hallLightboxIndex = (hallLightboxIndex + 1) % hallImages.length;
      renderHallLightbox();
    });

    hallLightbox.addEventListener('click', function (event) {
      if (event.target === hallLightbox || event.target.classList.contains('lightbox__stage')) {
        closeHallLightbox();
      }
    });

    document.addEventListener('keydown', function (event) {
      if (!hallLightbox.classList.contains('is-open')) return;
      if (event.key === 'Escape') closeHallLightbox();
      if (event.key === 'ArrowLeft') hallLightboxPrev.click();
      if (event.key === 'ArrowRight') hallLightboxNext.click();
    });
  }
})();
