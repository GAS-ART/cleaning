@extends('layout')
@section('ogTitle', __('title.main.ogTitle'))
@section('ogDescription', __('title.main.ogDescription'))
@section('title', __('title.main.title'))
@section('lang', __('lang.current'))
@section('main','active')

@section('content')
<main class="page">
   <div class="main-screen">

      <div class="about">
         <div class="about-text">

            <div class="about-text__row">
               <div class="about-text__foto">

               </div>
               <div class="container">
                  <div class="about-text__text">

                    @lang('home.company')
                  </div>
                  <div class="types-jobs">
                     <div class="types-jobs__title"> @lang('home.works_types.title') </div>
                     <ul class="types-jobs__list">
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.1')</span>
                        </li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.2')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.3')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.4')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.5')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.6')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.7')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.8')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.9')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.10')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.11')</span></li>
                        <li class="types-jobs__item _icon-hand"><span>@lang('home.works_types.12')</span>
                        </li>
                     </ul>
                     <div class="types-jobs__text">@lang('home.questions')</div>
                  </div>
               </div>
            </div>

         </div>
         <div class="call-order">
            <div class="button-call-order">
               <a href="#" class="call-oder-button">@lang('call.contacts')</a>
            </div>

         </div>
      </div>

   </div>
   <div class="service">
      <div class="container">
         <div class="service-title">
            <h2 class="block-title">@lang('home.services')</h2>
         </div>
         <div class="servise__row">
            <div class="servise__block">
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>@lang('home.windows.title')</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay playsinline muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/old/5.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/old/5.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>@lang('home.windows.text')</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                     <a href="{{ route('washing-windows.lang', ['locale' => __('lang.current')]) }}" class="details-button">@lang('home.more')</a>
                  </div>
               </div>
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>@lang('home.general.title')</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay playsinline muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/old/7.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/old/7.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>@lang('home.general.text')</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                     <a href="{{ route('spring-cleaning.lang', ['locale' => __('lang.current')]) }}" class="details-button">@lang('home.more')</a>
                  </div>
               </div>
            </div>

            <div class="servise__block">
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>@lang('home.dry.title')</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay playsinline muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/old/6_1.mp4') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/old/6_1.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>@lang('home.dry.text')</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                     <a href="{{ route('dry-cleaning.lang', ['locale' => __('lang.current')]) }}" class="details-button">@lang('home.more')</a>
                  </div>
               </div>
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>@lang('home.build.title')</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay playsinline muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/old/8.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/old/8.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>@lang('home.build.text')</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                     <a href="{{ route('post-construction-cleaning.lang', ['locale' => __('lang.current')]) }}" class="details-button">@lang('home.more')</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="clients">
      <div class="container">
         <div class="clients-title">
            <h2 class="block-title">@lang('home.clients')</h2>
         </div>
         <div class="slider-clients">
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/10.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/11.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/12.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/1.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/2.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/3.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/4.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/5.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/6.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/7.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/8.jpg') }}" alt="">
            </div>
            <div class="slider-clients-item">
               <img src="{{ asset('img/clients/9.jpg') }}" alt="">
            </div>
         </div>
      </div>
   </div>
</main>
@endsection