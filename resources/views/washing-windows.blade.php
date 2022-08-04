@extends('layout')
@section('ogTitle', __('title.window.ogTitle'))
@section('ogDescription', __('title.window.ogDescription'))
@section('ogVideo')
<meta property="og:video" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/5.mp4" />
<meta property="og:video:secure_url" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/5.mp4" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video:width" content="360" />
<meta property="og:video:height" content="200" />
@endsection
@section('title', __('title.window.title'))
@section('lang', __('lang.current'))
@section('washingWindows','active')

@section('content')
<main class="page">

   <div class="stages">

      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">@lang('window.title')</h1>
         </div>
         <div class="about-text__text about-text-service">
         @lang('window.description')
         </div>
         <div class="our-usefulness">
            <div class="whom">
            @lang('window.usful.title')
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('window.usful.private')
                  </div>
                  <div data-event-name="Частные_лица" data-page="Окна" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
               @lang('window.usful.private_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('window.usful.real-estate')
                  </div>
                  <div data-event-name="Недвижимость" data-page="Окна" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('window.usful.real-estate_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('window.usful.build')
                  </div>
                  <div data-event-name="Послестрой" data-page="Окна" data-first-click="true"
                     class="our-usefulness-tittle-btn">

                  </div>
               </div>

               <div class="our-usefulness-text">
                  @lang('window.usful.build_text')
                  </span>
               </div>
            </div>
         </div>
      </div>

      <div class="stages-block stages-block-color">
         <div class="container">
            <div class="stages-block-tittle">@lang('window.stages')</div>
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('window.1')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/washing_windows-1.jpg') }}"
                           alt="Мойка рамы и фурнитуры окна. Клининг - Мойка окон" title="Мойка окон">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('window.1_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('window.2')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/washing_windows-2.jpg') }}"
                           alt="Нанесения химии на стекло. Клининг - Мойка окон" title="Мойка окон">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('window.2_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('window.3')</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/washing_windows/washing_windows-3.jpg') }}"
                           alt="Моем стекла окон. Клининг - Мойка окон" title="Мойка окон">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('window.3_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('window.4')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/washing_windows-4.jpg') }}"
                           alt="Точеное выведений загрязнений окон и стекл. Клининг - Мойка окон" title="Мойка окон">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('window.4_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('window.5')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/washing_windows-5.jpg') }}"
                           alt="Моем подоконник. Клининг - Мойка окон" title="Мойка окон">>
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('window.5_text')</p>
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
               <img src="{{ asset('img/work_examplеs/washing_windows/1_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/1_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/washing_windows/2_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/2_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/washing_windows/3_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/3_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/washing_windows/4_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/4_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/washing_windows/5_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/5_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/washing_windows/6_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/washing_windows/6_before.jpg') }}" class="clip before"></img>
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