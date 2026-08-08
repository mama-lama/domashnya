<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary SEO Meta Tags -->
  <title>{{ $settings['site_title'] ?? 'Кафе «Домашняя кухня» и ночлег на трассе М-4 Дон (465 км, д. Князево) — вкусные обеды и комнаты под съём' }}</title>
  <meta name="description" content="{{ $settings['site_description'] ?? 'Уютное придорожное кафе «Домашняя кухня» на 465 км трассы М-4 Дон (д. Князево). Домашние обеды (борщ, солянка, выпечка), сад с фонтаном, комнаты под съём для ночлега и удобная парковка.' }}" />
  <meta name="keywords" content="кафе на трассе м4 дон, придорожное кафе м4, мотель м4 дон князево, где поесть на трассе м4, домашняя кухня трасса м4, ночлег м4 дон князево, комнаты под съем м4 дон, 465 км м4 дон кафе, столовая у дороги, кафе с садом и фонтаном" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- Open Graph / Facebook / Telegram -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Кафе «Домашняя кухня» и ночлег на трассе М-4 Дон (465 км)" />
  <meta property="og:description" content="Уютное кафе у дороги: сытные домашние обеды, свежая выпечка, зеленый сад с фонтаном и комнаты под съём для ночлега автопутешественников." />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:site_name" content="Домашняя кухня — Кафе и мотель на М-4 Дон" />
  <meta property="og:image" content="{{ asset('images/hero.png') }}" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="Придорожное кафе и мотель Домашняя кухня на трассе М-4 Дон" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Кафе «Домашняя кухня» и ночлег на трассе М-4 Дон (465 км)" />
  <meta name="twitter:description" content="Вкусные домашние обеды, ночлег в уютных комнатах и тихий отдых у дороги М-4 Дон." />
  <meta name="twitter:image" content="{{ asset('images/hero.png') }}" />

  <!-- Geo Meta Tags for Yandex Maps & Local SEO -->
  <meta name="geo.region" content="RU-VOR" />
  <meta name="geo.placename" content="д. Князево, ул. Сенновские Выселки, 12" />
  <meta name="geo.position" content="52.3400;39.0800" />
  <meta name="ICBM" content="52.3400, 39.0800" />

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />

  <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}" />
  <meta name="yandex-verification" content="b8bd60e37c3c4eca" />
  <meta name="google-site-verification" content="Ru9BG4bHA3ezcDdihkyDW-DsJbdYOiVVCiQcJ9GAThs" />
  <!-- Schema.org Structured Data (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@graph": [
      {
        "@@type": ["CafeOrCoffeeShop", "Motel"],
        "@@id": "{{ url('/') }}#organization",
        "name": "Домашняя кухня",
        "alternateName": "Кафе и мотель у дороги на 465 км трассы М-4 Дон",
        "description": "Уютное придорожное кафе с домашней кухней, садом с фонтаном, верандой и комнатами под съём для отдыха автопутешественников.",
        "url": "{{ url('/') }}",
        "telephone": "{{ $settings['phone_raw'] ?? '+79991234567' }}",
        "priceRange": "₽₽",
        "servesCuisine": ["Русская", "Домашняя"],
        "image": "{{ asset('images/hero.png') }}",
        "address": {
          "@@type": "PostalAddress",
          "streetAddress": "{{ $settings['address'] ?? 'ул. Сенновские Выселки, 12, д. Князево' }}",
          "addressLocality": "д. Князево",
          "addressRegion": "Воронежская область",
          "addressCountry": "RU"
        },
        "geo": {
          "@@type": "GeoCoordinates",
          "latitude": 52.3400,
          "longitude": 39.0800
        },
        "openingHoursSpecification": [
          {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:00",
            "closes": "22:00"
          }
        ],
        "hasMenu": "{{ route('menu') }}"
      },
      {
        "@@type": "BreadcrumbList",
        "@@id": "{{ url('/') }}#breadcrumb",
        "itemListElement": [
          {
            "@@type": "ListItem",
            "position": 1,
            "name": "Главная",
            "item": "{{ url('/') }}"
          }
        ]
      },
      {
        "@@type": "FAQPage",
        "@@id": "{{ url('/') }}#faq",
        "mainEntity": [
          {
            "@@type": "Question",
            "name": "Где находится кафе «Домашняя кухня» на трассе М-4 «Дон»?",
            "acceptedAnswer": {
              "@@type": "Answer",
              "text": "Кафе расположено на 465-м километре трассы М-4 «Дон» по адресу: Воронежская область, деревня Князево, ул. Сенновские Выселки, д. 12."
            }
          },
          {
            "@@type": "Question",
            "name": "Есть ли в кафе комнаты для ночлега и отдыха у дороги?",
            "acceptedAnswer": {
              "@@type": "Answer",
              "text": "Да, у нас есть комфортные и тихие комнаты под съём, где автопутешественники могут выспаться и отдохнуть в дороге."
            }
          },
          {
            "@@type": "Question",
            "name": "Какой режим работы у кафе «Домашняя кухня»?",
            "acceptedAnswer": {
              "@@type": "Answer",
              "text": "Кафе работает ежедневно с 08:00 до 22:00. Горячие обеды, супы и выпечка всегда подаются свежими."
            }
          },
          {
            "@@type": "Question",
            "name": "Есть ли парковка и условия для отдыха с детьми?",
            "acceptedAnswer": {
              "@@type": "Answer",
              "text": "Да, на территории обустроена удобная парковка, а также зеленый сад с фонтаном и летняя веранда для отдыха всей семьей."
            }
          }
        ]
      }
    ]
  }
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
      (function(m,e,t,r,i,k,a){
          m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
          m[i].l=1*new Date();
          for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
          k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
      })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=111424038', 'ym');

      ym(111424038, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/111424038" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body>
  <header class="header">
    <div class="container header__inner">
      <a href="#home" class="brand" aria-label="Домашняя кухня у дороги">
        <span class="brand__icon">
          <img src="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" alt="Домашняя кухня у дороги" />
        </span>
      </a>

      <button class="burger" id="burger" aria-label="Открыть меню" aria-expanded="false" aria-controls="navMenu">
        <span></span>
      </button>

      <nav class="nav" id="navMenu">
        <ul class="nav__list">
          <li><a class="nav__link" href="#home">Главная</a></li>
          <li><a class="nav__link" href="{{ route('menu') }}">Меню</a></li>
          <li><a class="nav__link" href="#reviews">Отзывы</a></li>
          <li><a class="nav__link" href="#contacts">Карта</a></li>
        </ul>
        <a class="btn btn--primary header__call" href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">
          <span class="icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.4 19.4 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.1 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.6a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6.2 6.2l1.4-1.3a2 2 0 0 1 2.1-.5c.8.3 1.7.6 2.6.7A2 2 0 0 1 22 16.9Z"/>
            </svg>
          </span>
          Позвонить
        </a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container">
        <div class="hero__wrap">
          <div class="hero__image">
            <img src="{{ asset('images/hero.png') }}?v={{ filemtime(public_path('images/hero.png')) }}" alt="Домашняя кухня — уютное кафе у дороги" loading="eager" />
          </div>
          <div class="hero__content">
            <h1>{{ $settings['hero_title'] ?? 'Домашняя кухня, ночлег и спокойный отдых на трассе М-4 «Дон»' }}</h1>
            <p>
              {{ $settings['hero_description'] ?? 'Уютное придорожное кафе с тёплой домашней атмосферой, зелёным садом, фонтаном, верандой, комнатами под съём и возможностью провести семейное торжество. Заезжайте отдохнуть, вкусно поесть и перевести дух в дороге.' }}
            </p>
            <div class="hero__actions">
              <a class="btn btn--primary" href="{{ route('menu') }}">
                <span class="icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 6h13"/>
                    <path d="M8 12h13"/>
                    <path d="M8 18h13"/>
                    <path d="M3 6h.01"/>
                    <path d="M3 12h.01"/>
                    <path d="M3 18h.01"/>
                  </svg>
                </span>
                Посмотреть меню
              </a>
              <a class="btn btn--light" href="https://yandex.ru/maps/?text={{ urlencode($settings['address'] ?? 'ул. Сенновские Выселки, 12, д. Князево') }}" target="_blank" rel="noopener noreferrer">
                <span class="icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 2 11 13"/>
                    <path d="M22 2 15 22l-4-9-9-4 20-7Z"/>
                  </svg>
                </span>
                Построить маршрут
              </a>
            </div>
          </div>

          <div class="hero__advantages">
            <article class="feature-card">
              <div class="feature-card__icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                  <path d="M7 2v20"/>
                  <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                </svg>
              </div>
              <h3>Домашняя кухня</h3>
              <p>Супы, горячие блюда, выпечка и напитки с привычным тёплым вкусом.</p>
            </article>
            <article class="feature-card">
              <div class="feature-card__icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="6" cy="19" r="3"/>
                  <path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"/>
                  <circle cx="18" cy="5" r="3"/>
                </svg>
              </div>
              <h3>Удобно по пути</h3>
              <p>Кафе удобно расположено рядом с дорогой М4, чтобы сделать комфортную остановку.</p>
            </article>
            <article class="feature-card">
              <div class="feature-card__icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M10 10v.2A3 3 0 0 1 8.9 16H5a3 3 0 0 1-1-5.8V10a3 3 0 0 1 6 0Z"/>
                  <path d="M7 16v6"/>
                  <path d="M13 19v3"/>
                  <path d="M12 19h8.3a1 1 0 0 0 .7-1.7L18 14h.3a1 1 0 0 0 .7-1.7L16 9h.2a1 1 0 0 0 .8-1.7L13 3l-1.4 1.5"/>
                </svg>
              </div>
              <h3>Сад с фонтаном</h3>
              <p>Зелёная территория, цветы, спокойные уголки для отдыха и веранда на свежем воздухе.</p>
            </article>
            <article class="feature-card">
              <div class="feature-card__icon" aria-hidden="true">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="9"/>
                  <path d="M12 7v6l4 2"/>
                </svg>
              </div>
              <h3>Круглосуточный уют</h3>
              <p>Тёплая атмосфера и место, где можно сделать паузу в любое время суток.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="menu">
      <div class="container">
        <div class="eyebrow">Популярное</div>
        <h2 class="section-title">Популярные домашние блюда нашего кафе на М-4</h2>
        <p class="section-subtitle">
          Здесь собраны самые популярные позиции из нашего меню. Чтобы увидеть полное меню с фильтрами по категориям, нажмите кнопку ниже.
        </p>

        <div class="menu-grid">
          @foreach($menuItems as $item)
          <article class="dish-card" data-category="{{ implode(' ', $item->categorySlugs()) }}">
            <div class="dish-card__image">
              @if($item->tag)
              <span class="tag tag--badge">{{ $item->tag }}</span>
              @endif
              <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" />
            </div>
            <div class="dish-card__body">
              <div class="dish-card__top">
                <h3 class="dish-card__title">{{ $item->name }}</h3>
                <span class="dish-card__price">{{ $item->display_price ?? ($item->price . ' ₽') }}</span>
              </div>
              <p class="dish-card__desc">{{ $item->description }}</p>
              @if($item->ingredients)
                <p class="dish-card__ingredients" style="font-size: 13px; color: var(--muted); margin-top: 6px; line-height: 1.4;">
                  <strong>Состав:</strong> {{ $item->ingredients }}
                </p>
              @endif
              @if(!empty($item->has_multiple_portions))
                <div class="dish-card__portions" style="margin-top: auto; padding-top: 8px; border-top: 1px dashed var(--border);">
                  <div style="font-weight: 700; font-size: 13px; color: var(--text); margin-bottom: 4px;">Порции и цены:</div>
                  @foreach($item->portions as $portion)
                    <div style="display: flex; justify-content: space-between; font-size: 13px; color: var(--muted); margin-bottom: 2px;">
                      <span>{{ $portion['weight'] }}</span>
                      <strong style="color: var(--text);">{{ $portion['price'] }} ₽</strong>
                    </div>
                  @endforeach
                </div>
              @else
                <div class="dish-card__meta" style="margin-top: auto; padding-top: 8px; border-top: 1px dashed var(--border); text-align: right;">
                  <span style="font-weight: 600; font-size: 13px; color: var(--text);">Порция: {{ $item->display_weight ?? $item->weight }}</span>
                </div>
              @endif
            </div>
          </article>
          @endforeach
        </div>

        <div style="margin-top: 48px; text-align: center;">
          <a class="btn btn--primary" href="{{ route('menu') }}">
            <span class="icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 6h13"/>
                <path d="M8 12h13"/>
                <path d="M8 18h13"/>
                <path d="M3 6h.01"/>
                <path d="M3 12h.01"/>
                <path d="M3 18h.01"/>
              </svg>
            </span>
            Посмотреть всё меню
          </a>
        </div>
      </div>
    </section>

    <section class="section" id="garden">
      <div class="container">
        <div class="eyebrow">Сад и веранда</div>
        <h2 class="section-title">Зелёный сад с фонтаном и веранда для отдыха у дороги</h2>
        <p class="section-subtitle">
          У кафе есть зелёный сад, фонтан, цветущая территория и уютная веранда. Здесь приятно посидеть с семьёй, спокойно пообедать на свежем воздухе или выпить чай после долгой дороги.
        </p>

        <div class="garden-slider" id="gardenSlider">
          <div class="garden-slider__track" id="gardenTrack">
            @forelse($sadImages as $image)
            <div class="garden-slider__slide">
              <img src="{{ $image }}" alt="Фото сада и территории {{ $loop->iteration }}" loading="lazy" />
            </div>
            @empty
            <div class="garden-slider__slide">
              <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?auto=format&fit=crop&w=1000&q=80" alt="Сад и территория кафе" loading="lazy" />
            </div>
            @endforelse
          </div>
          @if($sadImages->count() > 1)
          <button class="garden-slider__btn garden-slider__btn--prev" id="gardenPrev" type="button" aria-label="Предыдущее фото">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 18-6-6 6-6"/>
            </svg>
          </button>
          <button class="garden-slider__btn garden-slider__btn--next" id="gardenNext" type="button" aria-label="Следующее фото">
            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"/>
            </svg>
          </button>
          <div class="garden-slider__dots" id="gardenDots"></div>
          @endif
        </div>
      </div>
    </section>

    <section class="section" id="rooms-events">
      <div class="container">
        <div class="eyebrow">Комнаты и торжества</div>
        <h2 class="section-title">Комнаты под съём, ночлег и банкеты у дороги М-4 Дон</h2>
        <p class="section-subtitle">
          У нас можно не только пообедать по пути, но и остановиться на отдых, а также провести тёплое семейное событие в уютной атмосфере.
        </p>

        <div class="info-layout">
          <article class="info-card">
            <div class="info-image">
              <div class="rooms-slider" id="roomsSlider">
                <div class="rooms-slider__track" id="roomsTrack">
                  @forelse($roomImages as $roomImage)
                  <div class="rooms-slider__slide">
                    <img src="{{ $roomImage }}" alt="Комната под съём, фото {{ $loop->iteration }}" loading="lazy" />
                  </div>
                  @empty
                  <div class="rooms-slider__slide">
                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1200&q=80" alt="Комнаты под съём" loading="lazy" />
                  </div>
                  @endforelse
                </div>
                @if($roomImages->count() > 1)
                <button class="rooms-slider__btn rooms-slider__btn--prev" id="roomsPrev" type="button" aria-label="Предыдущее фото">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"/>
                  </svg>
                </button>
                <button class="rooms-slider__btn rooms-slider__btn--next" id="roomsNext" type="button" aria-label="Следующее фото">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                  </svg>
                </button>
                <div class="rooms-slider__dots" id="roomsDots"></div>
                @endif
              </div>
            </div>
            <div class="info-body">
              <h3>Комнаты под съём</h3>
              <p>
                Комфортные комнаты под съём подойдут тем, кто хочет отдохнуть после долгой дороги, переночевать в спокойной обстановке и продолжить путь без спешки.
              </p>
              <div class="badge-list">
                <span class="badge">Тихая обстановка</span>
                <span class="badge">Удобно в дороге</span>
                <span class="badge">Семейный формат</span>
              </div>
              <div class="action-row">
                <a class="btn btn--primary" href="#contacts">Узнать подробнее</a>
                <a class="btn btn--outline" href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">Позвонить</a>
              </div>
            </div>
          </article>

          <article class="info-card">
            <div class="info-image">
              <div class="rooms-slider" id="hallSlider">
                <div class="rooms-slider__track" id="hallTrack">
                  @forelse($hallImages as $hallImage)
                  <div class="rooms-slider__slide">
                    <img src="{{ $hallImage }}" alt="Обеденный зал, фото {{ $loop->iteration }}" loading="lazy" />
                  </div>
                  @empty
                  <div class="rooms-slider__slide">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=1200&q=80" alt="Обеденный зал" loading="lazy" />
                  </div>
                  @endforelse
                </div>
                @if($hallImages->count() > 1)
                <button class="rooms-slider__btn rooms-slider__btn--prev" id="hallPrev" type="button" aria-label="Предыдущее фото">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"/>
                  </svg>
                </button>
                <button class="rooms-slider__btn rooms-slider__btn--next" id="hallNext" type="button" aria-label="Следующее фото">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"/>
                  </svg>
                </button>
                <div class="rooms-slider__dots" id="hallDots"></div>
                @endif
              </div>
            </div>
            <div class="info-body">
              <h3>Уютный обеденный зал</h3>
              <p>
                Светлый и уютный обеденный зал с домашней атмосферой — идеальное место, чтобы пообедать в красивой обстановке или провести небольшое семейное мероприятие.
              </p>
              <div class="badge-list">
                <span class="badge">Красивый зал</span>
                <span class="badge">Уютная атмосфера</span>
                <span class="badge">Семейные праздники</span>
              </div>
              <div class="action-row">
                <a class="btn btn--primary" href="#contacts">Узнать подробнее</a>
                <a class="btn btn--outline" href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">Позвонить</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="reviews">
      <div class="container">
        <div class="eyebrow">Отзывы гостей</div>
        <h2 class="section-title">Тёплые впечатления от остановки у нас</h2>
        <p class="section-subtitle">
          Гости ценят домашние блюда, чистоту и возможность отдохнуть в красивом месте по пути.
        </p>

        <div class="reviews">
          <div class="reviews__viewport" id="reviewsViewport">
            <div class="reviews__track" id="reviewsTrack">
              @foreach($reviews->chunk(3) as $chunk)
              <div class="reviews__slide">
                @foreach($chunk as $review)
                <article class="review-card">
                  <div class="review-card__meta">
                    <div class="review-card__avatar" aria-hidden="true">{{ mb_substr($review->name, 0, 1) }}</div>
                    <div>
                      <p class="review-card__name">{{ $review->name }}</p>
                      <p class="review-card__city">{{ $review->city }}</p>
                    </div>
                  </div>
                  <p class="review-card__text">{{ $review->text }}</p>
                </article>
                @endforeach
              </div>
              @endforeach
            </div>
          </div>

          <div class="reviews__controls">
            <button class="slider-btn" id="prevReview" aria-label="Предыдущие отзывы">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"/>
              </svg>
            </button>
            <div class="slider-dots" id="reviewDots"></div>
            <button class="slider-btn" id="nextReview" aria-label="Следующие отзывы">
              <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="contacts">
      <div class="container">
        <div class="eyebrow">Карта и контакты</div>
        <h2 class="section-title">Контакты и схема проезда на 465 км трассы М-4 «Дон» (д. Князево)</h2>
        <div class="contacts-grid">
          <article class="contact-card">
            <h3>Контакты</h3>
            <p>Всегда рады гостям, которые хотят вкусно поесть, отдохнуть в дороге или организовать уютную встречу.</p>

            <div class="contact-list">
              <div class="contact-item">
                <div class="contact-item__icon" aria-hidden="true">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3" fill="currentColor"/>
                  </svg>
                </div>
                <div>
                  <strong>Адрес</strong>
                  <span>{{ $settings['address'] ?? 'ул. Сенновские Выселки, 12, д. Князево' }}</span>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon" aria-hidden="true">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.4 19.4 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.1 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.6a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6.2 6.2l1.4-1.3a2 2 0 0 1 2.1-.5c.8.3 1.7.6 2.6.7A2 2 0 0 1 22 16.9Z"/>
                  </svg>
                </div>
                <div>
                  <strong>Телефон</strong>
                  <a href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">{{ $settings['phone'] ?? '+7 (999) 123-45-67' }}</a>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-item__icon" aria-hidden="true">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 7v6l4 2"/>
                  </svg>
                </div>
                <div>
                  <strong>Часы работы</strong>
                  <span>{{ $settings['working_hours'] ?? 'Ежедневно с 08:00 до 22:00' }}</span>
                </div>
              </div>
            </div>

            <div class="action-row">
              <a class="btn btn--primary" href="https://yandex.ru/maps/?text={{ urlencode($settings['address'] ?? 'ул. Сенновские Выселки, 12, д. Князево') }}" target="_blank" rel="noopener noreferrer">Построить маршрут</a>
              <a class="btn btn--outline" href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">Позвонить</a>
            </div>
          </article>

          <div class="map-card">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3e89212e1d0b848ee9291d1059ad29d61af941cd0cf620ddeee2814689874ce8&amp;source=constructor" width="671" height="569" frameborder="0"></iframe>
            <div class="map-card__footer">
              <a class="btn btn--primary" href="https://yandex.ru/maps/org/domashnyaya_kukhnya/160800142944/" target="_blank" rel="noopener noreferrer">Построить маршрут</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="faq" style="background: var(--bg-surface, #fff); border-top: 1px solid var(--border, #eee);">
      <div class="container">
        <div class="eyebrow">Полезная информация</div>
        <h2 class="section-title">Часто задаваемые вопросы (FAQ)</h2>
        <p class="section-subtitle">Ответы на популярные вопросы автопутешественников о кафе и ночлеге на 465 км М-4 Дон</p>

        <div style="max-width: 840px; margin: 36px auto 0; display: flex; flex-direction: column; gap: 16px;">
          <details style="background: var(--bg, #f9f9f9); border: 1px solid var(--border, #e5e5e5); border-radius: 12px; padding: 18px 24px; cursor: pointer;">
            <summary style="font-weight: 700; font-size: 17px; color: var(--text, #222);">Где находится кафе «Домашняя кухня» на трассе М-4 «Дон»?</summary>
            <p style="margin-top: 12px; color: var(--muted, #666); line-height: 1.6;">
              Кафе расположено на 465-м километре трассы М-4 «Дон» по адресу: Воронежская область, деревня Князево, ул. Сенновские Выселки, 12 (удобный съезд с трассы, направление на юг).
            </p>
          </details>

          <details style="background: var(--bg, #f9f9f9); border: 1px solid var(--border, #e5e5e5); border-radius: 12px; padding: 18px 24px; cursor: pointer;">
            <summary style="font-weight: 700; font-size: 17px; color: var(--text, #222);">Есть ли в кафе комнаты для ночлега и отдыха у дороги?</summary>
            <p style="margin-top: 12px; color: var(--muted, #666); line-height: 1.6;">
              Да! У нас обустроены уютные и тихие комнаты под съём для автопутешественников, где можно хорошо выспаться, принять душ и восстановить силы перед продолжением пути.
            </p>
          </details>

          <details style="background: var(--bg, #f9f9f9); border: 1px solid var(--border, #e5e5e5); border-radius: 12px; padding: 18px 24px; cursor: pointer;">
            <summary style="font-weight: 700; font-size: 17px; color: var(--text, #222);">Какой режим работы у кафе «Домашняя кухня»?</summary>
            <p style="margin-top: 12px; color: var(--muted, #666); line-height: 1.6;">
              Кафе работает ежедневно с 08:00 до 22:00. Горячие супы (борщ, солянка), основные блюда, свежая домашняя выпечка и горячие напитки всегда подаются свежими.
            </p>
          </details>

          <details style="background: var(--bg, #f9f9f9); border: 1px solid var(--border, #e5e5e5); border-radius: 12px; padding: 18px 24px; cursor: pointer;">
            <summary style="font-weight: 700; font-size: 17px; color: var(--text, #222);">Есть ли удобная парковка и условия для отдыха с детьми?</summary>
            <p style="margin-top: 12px; color: var(--muted, #666); line-height: 1.6;">
              Да, для наших гостей предусмотрена вместительная и безопасная парковка. На территории кафе есть зеленый сад с журчащим фонтаном, цветник и летняя веранда.
            </p>
          </details>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer__inner">
      <div>
        <h2 class="footer__brand">Домашняя кухня</h2>
        <p class="footer__text">Уютное придорожное кафе с домашней атмосферой, садом и тёплым отдыхом у дороги.</p>
      </div>
      <div class="footer__meta">
        <span>{{ $settings['address'] ?? 'ул. Сенновские Выселки, 12, д. Князево' }}</span>
        <a href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}">{{ $settings['phone'] ?? '+7 (999) 123-45-67' }}</a>
        <span>© 2026 Домашняя кухня</span>
      </div>
    </div>
  </footer>

  <div class="lightbox" id="roomsLightbox" aria-hidden="true" role="dialog" aria-label="Фотографии комнат">
    <button class="lightbox__close" id="lightboxClose" type="button" aria-label="Закрыть">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 6 6 18"/>
        <path d="m6 6 12 12"/>
      </svg>
    </button>
    <button class="lightbox__btn lightbox__btn--prev" id="lightboxPrev" type="button" aria-label="Предыдущее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m15 18-6-6 6-6"/>
      </svg>
    </button>
    <div class="lightbox__stage">
      <img class="lightbox__image" id="lightboxImage" src="" alt="Комната под съём" />
      <div class="lightbox__counter" id="lightboxCounter"></div>
    </div>
    <button class="lightbox__btn lightbox__btn--next" id="lightboxNext" type="button" aria-label="Следующее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"/>
      </svg>
    </button>
  </div>

  <div class="lightbox" id="gardenLightbox" aria-hidden="true" role="dialog" aria-label="Фотографии сада">
    <button class="lightbox__close" id="gardenLightboxClose" type="button" aria-label="Закрыть">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 6 6 18"/>
        <path d="m6 6 12 12"/>
      </svg>
    </button>
    <button class="lightbox__btn lightbox__btn--prev" id="gardenLightboxPrev" type="button" aria-label="Предыдущее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m15 18-6-6 6-6"/>
      </svg>
    </button>
    <div class="lightbox__stage">
      <img class="lightbox__image" id="gardenLightboxImage" src="" alt="Сад и территория кафе" />
      <div class="lightbox__counter" id="gardenLightboxCounter"></div>
    </div>
    <button class="lightbox__btn lightbox__btn--next" id="gardenLightboxNext" type="button" aria-label="Следующее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"/>
      </svg>
    </button>
  </div>

  <div class="lightbox" id="hallLightbox" aria-hidden="true" role="dialog" aria-label="Фотографии обеденного зала">
    <button class="lightbox__close" id="hallLightboxClose" type="button" aria-label="Закрыть">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 6 6 18"/>
        <path d="m6 6 12 12"/>
      </svg>
    </button>
    <button class="lightbox__btn lightbox__btn--prev" id="hallLightboxPrev" type="button" aria-label="Предыдущее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m15 18-6-6 6-6"/>
      </svg>
    </button>
    <div class="lightbox__stage">
      <img class="lightbox__image" id="hallLightboxImage" src="" alt="Обеденный зал" />
      <div class="lightbox__counter" id="hallLightboxCounter"></div>
    </div>
    <button class="lightbox__btn lightbox__btn--next" id="hallLightboxNext" type="button" aria-label="Следующее фото">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"/>
      </svg>
    </button>
  </div>

  <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
</body>
</html>
