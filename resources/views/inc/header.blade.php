
@section('header')
<div class="container">
   <header class="header">
      <div class="header-row">
         <nav class="header-menu">
            <div class="menu-body">
               <ul class="menu-list ">
                  <li> <a href="#" class="blob-btn @yield('main')">главная</a></li>
                  <li>
                     <a href="{{ route('dry-cleaning.lang', ['locale' => __('lang.current')]) }}"
                        class="blob-btn @yield('dryCleaning')">
                        @lang('header.dry')
                        <span class="blob-btn__inner">
                           <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                           </span>
                        </span>
                     </a>

                     <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                           <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                              </feGaussianBlur>
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                 result="goo">
                              </feColorMatrix>
                              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                           </filter>
                        </defs>
                     </svg>

                  </li>
                  <li>

                     <a href="{{ route('washing-windows.lang', ['locale' => __('lang.current')]) }}"
                        class="blob-btn @yield('washingWindows')">
                        @lang('header.window')
                        <span class="blob-btn__inner">
                           <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                           </span>
                        </span>
                     </a>

                     <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                           <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                              </feGaussianBlur>
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                 result="goo">
                              </feColorMatrix>
                              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                           </filter>
                        </defs>
                     </svg>

                  </li>
               </ul>
               <ul class="menu-list ">
                  <li>

                     <a href="{{ route('spring-cleaning.lang', ['locale' => __('lang.current')]) }}"
                        class="blob-btn @yield('springCleaning')">
                        @lang('header.general')
                        <span class="blob-btn__inner">
                           <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                           </span>
                        </span>
                     </a>

                     <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                           <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                              </feGaussianBlur>
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                 result="goo">
                              </feColorMatrix>
                              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                           </filter>
                        </defs>
                     </svg>

                  </li>
                  <li>

                     <a href="{{ route('post-construction-cleaning.lang', ['locale' => __('lang.current')]) }}"
                        class="blob-btn @yield('postConstructionCleaning')">
                        @lang('header.biuld')
                        <span class="blob-btn__inner">
                           <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                           </span>
                        </span>
                     </a>

                     <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                           <filter id="goo">
                              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10">
                              </feGaussianBlur>
                              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7"
                                 result="goo">
                              </feColorMatrix>
                              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                           </filter>
                        </defs>
                     </svg>
                  </li>
               </ul>
            </div>
         </nav>
         <div class="header-logo">
            @if(App::isLocale('ua'))
            <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}"><img
                  src="{{ asset('img/icons/logo_ua.png') }}" alt="logo"></a>
            @elseif(App::isLocale('ru'))
            <a href="{{ route('index.lang', ['locale' => __('lang.current')]) }}"><img
                  src="{{ asset('img/icons/logo_ru.png') }}" alt="logo"></a>
            @endif
         </div>
         <div class="burger">
            <span></span>
         </div>
         <div class="header-languages @yield('lang')">
            <div class="header-languages-ua"><a href="{{ route('locale', __('lang.ua')) }}">UA</a></div>
            <div class="header-languages-ru"><a href="{{ route('locale', __('lang.ru')) }}">RU</a></div>
         </div>
      </div>
   </header>
</div>