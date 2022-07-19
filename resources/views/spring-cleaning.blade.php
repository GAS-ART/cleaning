@extends('layout')
@section('ogTitle', __('title.general.ogTitle'))
@section('ogDescription', __('title.general.ogDescription'))
@section('ogVideo')
<meta property="og:video" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/7.mp4" />
<meta property="og:video:secure_url" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/7.mp4" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video:width" content="360" />
<meta property="og:video:height" content="200" />
@endsection
@section('title', __('title.general.title'))
@section('springCleaning','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">@lang('general.title')</h1>
         </div>
         <div class="about-text__text about-text-service">
         @lang('general.description')
         </div>
         <div class="our-usefulness">
            <div class="whom">
            @lang('general.usful.title')
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('general.usful.private')
                  </div>
                  <div data-event-name="Частные_лица (ген уборка)" data-page="Генеральная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
               @lang('general.usful.private_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('general.usful.restorant')
                  </div>
                  <div data-event-name="Рестораны (ген уборка)" data-page="Генеральная уборка" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('general.usful.restorant_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('general.usful.office')
                  </div>
                  <div data-event-name="Офисы (ген уборка)" data-page="Генеральная уборка" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('general.usful.office_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('general.usful.hotel')
                  </div>
                  <div data-event-name="Отели (ген уборка)" data-page="Генеральная уборка" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('general.usful.hotel_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('general.usful.industrial')
                  </div>
                  <div data-event-name="Промышленные помещения (ген уборка)" data-page="Генеральная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('general.usful.industrial_text')
               </div>
            </div>
         </div>
      </div>

      <div class="stages-block stages-block-color">
         <div class="container">
            <div class="stages-block-tittle">@lang('general.stages')</div>
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('general.1')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-1.jpg') }}"
                           alt="Уборка вертикальных поверхностей (столы, полки и т.д.). Клининг - Генеральная уборка домов, квартир, офисов"
                           title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('general.1_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('general.2')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-2.jpg') }}"
                           alt="Уборка ванной комнаты и кухни. Клининг - Генеральная уборка домов, квартир, офисов"
                           title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('general.2_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('general.3')</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-3.jpg') }}"
                           alt="Мойка окон и стеклянных поверхностей. Клининг - Генеральная уборка домов, квартир, офисов"
                           title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('general.3_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('general.4')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-4.jpg') }}"
                           alt="Уборка кухни. Клининг - Генеральная уборка домов, квартир, офисов"
                           title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('general.4_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('general.5')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-5.jpg') }}"
                           alt="Чистим и моем полы. Клининг - Генеральная уборка домов, квартир, офисов"
                           title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('general.5_text')</p>
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
               <img src="{{ asset('img/work_examplеs/spring_clining/3_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/3_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/2_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/2_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/1_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/1_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/4_before.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/4_after.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/5_before.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/5_after.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/6_before.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/6_after.jpg') }}" class="clip before"></img>
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