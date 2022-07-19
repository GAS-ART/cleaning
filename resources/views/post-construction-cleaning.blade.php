@extends('layout')
@section('ogTitle', __('title.build.ogTitle'))
@section('ogDescription', __('title.build.ogDescription'))
@section('ogVideo')
<meta property="og:video" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/8.mp4" />
<meta property="og:video:secure_url" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/8.mp4" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video:width" content="360" />
<meta property="og:video:height" content="200" />
@endsection
@section('title', __('title.build.title'))
@section('postConstructionCleaning','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">@lang('build.title')</h1>
         </div>
         <div class="about-text__text about-text-service">
         @lang('build.description')
         </div>
         <div class="our-usefulness">
            <div class="whom">
            @lang('build.usful.title')
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('build.usful.private')
                  </div>
                  <div data-event-name="Частные_лица (послестрой)" data-page="Послестроительная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
               @lang('build.usful.private_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('build.usful.industrial')
                  </div>
                  <div data-event-name="Недвижимость (послестрой)" data-page="Послестроительная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('build.usful.industrial_text')
               </div>
            </div>
         </div>
      </div>

      <div class="stages-block stages-block-color">
         <div class="container">
            <div class="stages-block-tittle">@lang('build.stages')</div>
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('build.1')</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-1.jpg') }}"
                           alt="Соберем весь мусор после строительства. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('build.1_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('build.2')</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-2.jpg') }}"
                           alt="Отмоем окна и зеркала. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('build.2_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('build.3')</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-3.jpg') }}"
                           alt="Моем ванную и туалет. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('build.3_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('build.4')</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-4.jpg') }}"
                           alt="Убираем пыль, влажная уборка. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('build.4_text')</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>@lang('build.5')</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-5.jpg') }}"
                           alt="Моем полы. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>@lang('build.5_text')</p>
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
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/2_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/2_before.jpg') }}"
                  class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/5_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/5_before.jpg') }}"
                  class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/4_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/4_before.jpg') }}"
                  class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/3_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/3_before.jpg') }}"
                  class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/6_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/6_before.jpg') }}"
                  class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/1_after.jpg') }}"
                  class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/1_before.jpg') }}"
                  class="clip before"></img>
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