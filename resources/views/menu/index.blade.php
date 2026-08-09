<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary SEO Meta Tags -->
  <title>Меню придорожного кафе «Домашняя кухня» — Цены, блюда и выпечка на М-4 Дон (465 км)</title>
  <meta name="description" content="Полное меню придорожного кафе «Домашняя кухня» на 465 км трассы М-4 Дон (д. Князево). Горячие супы (борщ, солянка), вторые блюда, выпечка, чай и кофе. Доступные цены!" />
  <meta name="keywords" content="меню придорожного кафе м4, цены меню домашняя кухня князево, борщ солянка трасса м4, выпечка у дороги м4 дон, пообедать на м4 дон меню" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <link rel="canonical" href="{{ route('menu') }}" />

  <!-- Open Graph -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="restaurant.menu" />
  <meta property="og:title" content="Меню кафе «Домашняя кухня» на трассе М-4 Дон" />
  <meta property="og:description" content="Посмотрите наше меню: свежие домашние обеды, выпечка и горячие напитки на 465 км М-4 Дон." />
  <meta property="og:url" content="{{ route('menu') }}" />
  <meta property="og:site_name" content="Домашняя кухня" />
  <meta property="og:image" content="{{ asset('images/hero.png') }}" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Меню придорожного кафе «Домашняя кухня» на М-4 Дон" />
  <meta name="twitter:description" content="Цены и онлайн-меню домашних блюд на трассе М-4 Дон." />
  <meta name="twitter:image" content="{{ asset('images/hero.png') }}" />

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />

  <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}" />

  <!-- Schema.org Microdata (Menu, MenuItem, BreadcrumbList) -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@graph": [
      {
        "@@type": "Menu",
        "@@id": "{{ route('menu') }}#menu",
        "name": "Меню придорожного кафе «Домашняя кухня»",
        "description": "Полное меню горячих блюд, домашних супов, выпечки и напитков кафе на 465 км трассы М-4 Дон.",
        "url": "{{ route('menu') }}",
        "hasMenuSection": [
          @foreach($categories as $category)
          {
            "@@type": "MenuSection",
            "name": "{{ $category->name }}",
            "hasMenuItem": [
              @php
                $categoryItems = $menuItems->filter(fn($item) => in_array($category->slug, $item->categorySlugs(), true));
              @endphp
              @foreach($categoryItems as $item)
              {
                "@@type": "MenuItem",
                "name": "{{ $item->name }}",
                "description": "{{ $item->description }}",
                "image": "{{ $item->image_url }}",
                "offers": {
                  "@@type": "Offer",
                  "price": "{{ $item->price }}",
                  "priceCurrency": "RUB"
                }
              }@if(!$loop->last),@endif
              @endforeach
            ]
          }@if(!$loop->last),@endif
          @endforeach
        ]
      },
      {
        "@@type": "BreadcrumbList",
        "@@id": "{{ route('menu') }}#breadcrumb",
        "itemListElement": [
          {
            "@@type": "ListItem",
            "position": 1,
            "name": "Главная",
            "item": "{{ url('/') }}"
          },
          {
            "@@type": "ListItem",
            "position": 2,
            "name": "Меню кафе",
            "item": "{{ route('menu') }}"
          }
        ]
      }
    ]
  }
  </script>
</head>
<body>
  <header class="header">
    <div class="container header__inner">
      <a href="{{ route('landing') }}" class="brand" aria-label="Домашняя кухня у дороги">
        <span class="brand__icon">
          <img src="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" alt="Домашняя кухня у дороги" />
        </span>
      </a>

      <button class="burger" id="burger" aria-label="Открыть меню" aria-expanded="false" aria-controls="navMenu">
        <span></span>
      </button>

      <nav class="nav" id="navMenu">
        <ul class="nav__list">
          <li><a class="nav__link" href="{{ route('landing') }}">Главная</a></li>
          <li><a class="nav__link" href="{{ route('menu') }}">Меню</a></li>
          <li><a class="nav__link" href="{{ route('landing') }}#reviews">Отзывы</a></li>
          <li><a class="nav__link" href="{{ route('landing') }}#contacts">Карта</a></li>
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
    <section class="section" id="menu" style="padding-top: 48px;">
      <div class="container">
        <div class="eyebrow">Меню кафе</div>
        <h1 class="section-title">Меню придорожного кафе «Домашняя кухня» на М-4 Дон</h1>
        <p class="section-subtitle">
          Полное меню кафе. Выберите категорию, чтобы быстро найти нужное.
        </p>

        <div class="menu-tabs" id="menuTabs" data-active-category="{{ $activeCategory }}">
          <button class="menu-tab {{ $activeCategory === 'all' ? 'is-active' : '' }}" type="button" data-filter="all">Все блюда</button>
          @foreach($categories as $category)
          <button class="menu-tab {{ $activeCategory === $category->slug ? 'is-active' : '' }}" type="button" data-filter="{{ $category->slug }}">{{ $category->name }}</button>
          @endforeach
        </div>

        <div class="menu-grid" id="menuGrid">
          @forelse($menuItems as $item)
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
          @empty
          <p style="grid-column: 1 / -1; color: var(--muted);">В меню пока нет блюд.</p>
          @endforelse
        </div>

        <div style="margin-top: 48px; text-align: center;">
          <a class="btn btn--primary" href="{{ route('landing') }}">
            <span class="icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 12h18"/>
                <path d="M7 8l-4 4 4 4"/>
                <path d="M17 16l4-4-4-4"/>
              </svg>
            </span>
            На главную
          </a>
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
        <a href="tel:{{ $settings['phone_raw'] ?? '+79991234567' }}"><span style="white-space: pre-line;">{{ $settings['phone'] ?? '+7 (999) 123-45-67' }}</span></a>
        <span>© 2026 Домашняя кухня</span>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/main.js') }}?v={{ filemtime(public_path('js/main.js')) }}"></script>
</body>
</html>
