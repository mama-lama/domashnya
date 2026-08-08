<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Политика в отношении обработки персональных данных и использования cookie — {{ $settings['site_title'] ?? 'Домашняя кухня' }}</title>
  <meta name="description" content="Политика в отношении обработки технических данных, использования файлов cookie и сторонних сервисов (Яндекс.Метрика, Яндекс.Карты) на сайте придорожного комплекса «Домашняя кухня»." />
  <meta name="robots" content="noindex, follow" />
  <link rel="canonical" href="{{ route('privacy') }}" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}" />
</head>
<body>
  <header class="header">
    <div class="container header__inner">
      <a href="{{ route('landing') }}" class="brand" aria-label="Домашняя кухня у дороги">
        <span class="brand__icon">
          <img src="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" alt="Домашняя кухня" />
        </span>
      </a>
      <nav class="nav">
        <ul class="nav__list">
          <li><a class="nav__link" href="{{ route('landing') }}">Главная</a></li>
          <li><a class="nav__link" href="{{ route('menu') }}">Меню</a></li>
          <li><a class="nav__link" href="{{ route('landing') }}#contacts">Контакты</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main style="padding: 60px 0; background: var(--bg, #f9f9f9);">
    <div class="container" style="max-width: 920px; background: #fff; border-radius: 16px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid var(--border, #eee);">
      <h1 style="font-size: 26px; font-weight: 800; margin-bottom: 16px; color: var(--text, #222); line-height: 1.3;">Политика в отношении обработки данных пользователей и использования файлов cookie</h1>
      <p style="color: var(--muted, #666); font-size: 14px; margin-bottom: 32px; border-bottom: 1px solid var(--border, #eee); padding-bottom: 16px;">Редакция от {{ date('d.m.Y') }} г. | Сайт: {{ request()->getHost() }}</p>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">1. Оператор персональных данных</h2>
        <p>1.1. Оператором, определяющим цели и способы обработки данных пользователей, собираемых при использовании сайта <strong>{{ request()->getHost() }}</strong>, является:</p>
        <div style="background: #f8f9fa; border-left: 4px solid var(--brand, #e65100); padding: 14px 18px; margin: 12px 0; border-radius: 0 8px 8px 0; font-size: 14.5px;">
          <strong>Оператор:</strong> {{ $settings['company_name'] ?? 'Придорожный комплекс «Домашняя кухня»' }}<br />
          <strong>Адрес:</strong> {{ $settings['address'] ?? 'Воронежская обл., д. Князево, ул. Сенновские Выселки, д. 12 (465 км трассы М-4 «Дон»)' }}<br />
          <strong>Телефон:</strong> {{ $settings['phone'] ?? '+7 (999) 123-45-67' }}<br />
          @if(!empty($settings['inn']))
          <strong>ИНН:</strong> {{ $settings['inn'] }}<br />
          @endif
          @if(!empty($settings['ogrn']))
          <strong>ОГРН / ОГРНИП:</strong> {{ $settings['ogrn'] }}
          @endif
        </div>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">2. Категории и состав обрабатываемых данных</h2>
        <p>2.1. Сайт не содержит форм ввода текстовых персональных данных (имени, паролей, паспортных данных, банковских карт).</p>
        <p>2.2. При посещении и использовании сайта могут обрабатываться следующие <strong>технические данные Пользователя</strong>:</p>
        <ul style="padding-left: 20px; margin-top: 8px; margin-bottom: 12px;">
          <li>IP-адрес устройства;</li>
          <li>Идентификаторы файлов cookie (куки);</li>
          <li>Сведения об используемом браузере, операционной системе и типе устройства;</li>
          <li>Данные о географическом положении (страна, город);</li>
          <li>Сведения о посещенных страницах, времени пребывания, источниках перехода на сайт и совершаемых кликах.</li>
        </ul>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">3. Цели и правовые основания обработки данных</h2>
        <p>3.1. Обработка технических данных осуществляется в целях:</p>
        <ul style="padding-left: 20px; margin-top: 8px; margin-bottom: 12px;">
          <li>Обеспечения корректной работы, адаптивности и безопасности веб-сайта;</li>
          <li>Анализа посещаемости сайта и оптимизации удобства интерфейса для автопутешественников;</li>
          <li>Отображения интерактивной карты с местоположением кафе и проездом.</li>
        </ul>
        <p>3.2. Правовым основанием обработки является согласие Пользователя, выражаемое путем взаимодействия с баннером cookie либо настройки параметров использования аналитических сервисов.</p>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">4. Сторонние сервисы и передача данных</h2>
        <p>4.1. Для достижения указанных целей сайт взаимодействует со следующими сторонними сервисами:</p>
        <ul style="padding-left: 20px; margin-top: 8px; margin-bottom: 12px;">
          <li>
            <strong>Яндекс.Метрика (ООО «ЯНДЕКС», ИНН 7736207543):</strong> используется для сбора веб-статистики и анализа посещаемости (счётчик №111424038). Данные передаются в обезличенном/техническом виде через файлы cookie и счетчики Яндекса. 
            Политика конфиденциальности Яндекса: <a href="https://yandex.ru/legal/confidential/" target="_blank" rel="noopener">yandex.ru/legal/confidential</a>.
          </li>
          <li style="margin-top: 8px;">
            <strong>Яндекс.Карты (ООО «ЯНДЕКС»):</strong> используется для отображения встроенной интерактивной карты с проездом к кафе (iframe-виджет). Запросы направляются к серверам Яндекса при загрузке карты.
          </li>
        </ul>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">5. Категории и управление файлами Cookie</h2>
        <p>5.1. На сайте применяются следующие типы файлов cookie:</p>
        <ul style="padding-left: 20px; margin-top: 8px; margin-bottom: 12px;">
          <li><strong>Технические (необходимые):</strong> обеспечивают сохранение настроек, работу интерфейса и выбор меню. Отключение может нарушить работу элементов страницы;</li>
          <li><strong>Аналитические (Яндекс.Метрика):</strong> позволяют собирать информацию о поведении Пользователей на сайте для его улучшения.</li>
        </ul>
        <p>5.2. Пользователь может в любой момент ограничить или заблокировать сохранение cookie в настройках своего интернет-браузера (Chrome, Yandex Browser, Safari, Firefox), а также отозвать согласие через интерактивный баннер сайта.</p>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">6. Сроки обработки, хранения и порядок уничтожения</h2>
        <p>6.1. Срок хранения технических файлов cookie зависит от их типа: сессионные cookie удаляются сразу после закрытия браузера, а постоянные файлы cookie аналитики могут сохраняться до 24 месяцев (согласно регламенту сервиса Яндекс.Метрика).</p>
        <p>6.2. Серверные логи автоматически перезаписываются и уничтожаются в течение 30–90 дней.</p>
        <p>6.3. Уничтожение данных происходит автоматически путем истечения сроков хранения файлов cookie или сброса хранилища браузера Пользователем.</p>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">7. Отзывы гостей на сайте</h2>
        <p>7.1. Тексты отзывов, имена и псевдонимы гостей, опубликованные в разделе «Отзывы», размещены в ознакомительных целях на основании публично оставленных отзывов в сервисе Яндекс.Карты или направленных кафе с согласия авторов.</p>
      </section>

      <section style="margin-bottom: 28px; line-height: 1.7; color: var(--text, #333);">
        <h2 style="font-size: 19px; font-weight: 700; margin-bottom: 10px; color: var(--brand, #111);">8. Права Пользователя и порядок их реализации</h2>
        <p>8.1. Пользователь имеет право на получение информации, касающейся обработки его данных, на уточнение, блокирование или уничтожение сведений, а также на отзыв согласия.</p>
        <p>8.2. Для реализации своих прав или получения разъяснений Пользователь может направить письменное обращение Оператору по адресу: <strong>{{ $settings['address'] ?? 'Воронежская обл., д. Князево, ул. Сенновские Выселки, 12' }}</strong> или по телефону <strong>{{ $settings['phone'] ?? '+7 (999) 123-45-67' }}</strong>.</p>
      </section>

      <div style="margin-top: 36px; padding-top: 24px; border-top: 1px dashed var(--border, #ccc); text-align: center;">
        <a href="{{ route('landing') }}" class="btn btn--primary">На главную страницу</a>
      </div>
    </div>
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
        <a href="{{ route('privacy') }}" style="color: var(--muted, #888); text-decoration: underline;">Политика конфиденциальности</a>
        <span>© {{ date('Y') }} Домашняя кухня</span>
      </div>
    </div>
  </footer>
</body>
</html>
