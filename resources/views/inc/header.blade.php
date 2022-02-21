@section('header')
<div class="container">
         <header class="header">
            <div class="header-row">
               <nav class="header-menu">
                  <div class="menu-body">
                     <ul class="menu-list ">
                        <li> <a href="{{ route('index') }}" class="blob-btn @yield('main')">главная</a></li>
                        <li>
                           <a href="{{ route('dry-cleaning') }}" class="blob-btn @yield('dryCleaning')">
                              Химчистка <br> Мебели
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
                                    <feColorMatrix in="blur" mode="matrix"
                                       values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                    </feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                 </filter>
                              </defs>
                           </svg>

                        </li>
                        <li>

                           <a href="{{ route('washing-windows') }}" class="blob-btn @yield('washingWindows')">
                              мойка <br> окон
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
                                    <feColorMatrix in="blur" mode="matrix"
                                       values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                    </feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                 </filter>
                              </defs>
                           </svg>

                        </li>
                     </ul>
                     <ul class="menu-list ">
                        <li>

                           <a href="{{ route('spring-cleaning') }}" class="blob-btn @yield('springCleaning')">
                              Генеральная<br> уборка
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
                                    <feColorMatrix in="blur" mode="matrix"
                                       values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                                    </feColorMatrix>
                                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                                 </filter>
                              </defs>
                           </svg>

                        </li>
                        <li>

                           <a href="{{ route('post-construction-cleaning') }}" class="blob-btn @yield('postConstructionCleaning')">
                              Послестроительная<br> уборка
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
                                    <feColorMatrix in="blur" mode="matrix"
                                       values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
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
                  <a href="{{ route('index') }}"><img src="{{ asset('img/icons/logo2.png') }}" alt="logo"></a>
               </div>
               <div class="burger">
                  <span></span>
               </div>
            </div>
         </header>
      </div>