@extends('layout')
@section('ogTitle', __('title.dry.ogTitle'))
@section('ogDescription', __('title.dry.ogDescription'))
@section('ogVideo')
<meta property="og:video" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/6_1.mp4" />
<meta property="og:video:secure_url" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/6_1.mp4" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video:width" content="360" />
<meta property="og:video:height" content="200" />
@endsection
@section('title', __('title.dry.title'))
@section('lang', __('lang.current'))
@section('dryCleaning','active')


@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">@lang('dry.title')</h1>
         </div>
         <div class="about-text__text about-text-service">
         @lang('dry.description')
         </div>
         <div class="our-usefulness">
            <div class="whom">
            @lang('dry.usful.title')
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('dry.usful.private')
                  </div>
                  <div data-event-name="Частные_лица" data-page="Химчистка" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
               @lang('dry.usful.private_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('dry.usful.restorant')
                  </div>
                  <div data-event-name="Рестораны" data-page="Химчистка" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('dry.usful.restorant_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('dry.usful.hotel')
                  </div>
                  <div data-event-name="Отели" data-page="Химчистка" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('dry.usful.hotel_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('dry.usful.office')
                  </div>
                  <div data-event-name="Офисы" data-page="Химчистка" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('dry.usful.office_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('dry.usful.malls')
                  </div>
                  <div data-event-name="Торговые_комплексы" data-page="Химчистка" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('dry.usful.malls_text')
               </div>
            </div>
         </div>
      </div>
      <div class="stages-block stages-block-color">
         <div class="container">
            <div class="stages-block-tittle">@lang('dry.stages')</div>
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('dry.1')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining-1.jpg') }}"
                           alt="Химчистка мебели итальянской эко химией. Клининг - Химчистка любой мягкой мебели"
                           title="Химчистка диванов, кресел, ковров и любой мягкой мебели">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('dry.1_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('dry.2')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining-2.jpg') }}"
                           alt="Удаление любых видов грязи и пятен с мягкой мебели. Клининг - Химчистка любой мягкой мебели"
                           title="Химчистка диванов, кресел, ковров и любой мягкой мебели">>
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('dry.2_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('dry.3')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining-3.jpg') }}"
                           alt="Химчистка мебели - удаление самых сложных пятен. Клининг - Химчистка любой мягкой мебели"
                           title="Химчистка диванов, кресел, ковров и любой мягкой мебели">>
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('dry.3_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('dry.4')</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining-4.jpg') }}"
                           alt="Химчистка мебели - чистим от грязные диваны и кресла. Клининг - Химчистка любой мягкой мебели"
                           title="Химчистка диванов, кресел, ковров и любой мягкой мебели">>
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('dry.4_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('dry.5')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining-5.jpg') }}"
                           alt="Сушим мебель после химчистки. Клининг - Химчистка любой мягкой мебели"
                           title="Химчистка диванов, кресел, ковров и любой мягкой мебели">>
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('dry.5_text')</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="call-order">
            <div class="button-call-order">
               <a href="#" class="call-oder-button">@lang('call.contacts')</a>
            </div>

         </div>
      </div>
   </div>
   <div class="work-examples">
      <div class="container">
         <div class="work-examples-title">
            <h2 class="block-title">@lang('slider.works')</h2>
         </div>
         <div class="slider-work-examples">
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/1_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/1_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/2_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/2_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/3_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/3_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/4_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/4_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/5_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/5_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/dry_cleaning/6_before.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/6_after.jpg') }}" class="clip before"></img>
            </div>
         </div>
         <div class="work-examples-buttom">
            <div class="work-examples-buttom-row">
               <div class="button-after">
                  @lang('slider.after')
               </div>

               <div class="button-none">X</div>

               <div class="button-before">ДО</div>
            </div>
         </div>
      </div>
   </div>

</main>
@endsection