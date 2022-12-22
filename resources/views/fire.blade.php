@extends('layout')
@section('ogTitle', __('title.fire.ogTitle'))
@section('ogDescription', __('title.fire.ogDescription'))
@section('ogVideo')
@endsection
@section('title', __('title.fire.title'))
@section('lang', __('lang.current'))
@section('fire','active')

@section('content')
<main class="page">
<div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">@lang('fire.title')</h1>
         </div>
         <div class="about-text__text about-text-service">
          @lang('fire.description')
         </div>
         <div class="our-usefulness">
            <div class="whom">
            @lang('fire.usful.title')
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('fire.usful.private')
                  </div>
                  <div data-event-name="Частные_лица (ген уборка)" data-page="Генеральная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
               @lang('fire.usful.private_text')
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                  @lang('fire.usful.comercial')
                  </div>
                  <div data-event-name="Рестораны (ген уборка)" data-page="Генеральная уборка" data-first-click="true"
                     class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
               @lang('fire.usful.comercial_text')
               </div>
            </div>
         </div>
      </div>

      <div class="stages-block stages-block-color">
        <div class="container">
           <div class="stages-block-tittle">@lang('fire.stages')</div>
           <div class="stages-row">
              <div class="stages-item">
                 <div class="stages-item-row">
                    <div class="stages-item-title">
                       <h2>@lang('fire.1')</h2>
                    </div>
                    <div class="stages-item-img">
                       <img src="{{ asset('img/stages/fire/fire-1.jpg') }}"
                          alt="Уборка вертикальных поверхностей (столы, полки и т.д.). Клининг - Генеральная уборка домов, квартир, офисов"
                          title="Уборка домов, квартир, офисов и любых других помещений">
                    </div>
                    <div class="stages-item-description">
                       <p>@lang('fire.1_text')</p>
                    </div>
                 </div>
              </div>
              <div class="stages-item">
                 <div class="stages-item-row">
                    <div class="stages-item-title">
                       <h2>@lang('fire.2')</h2>
                    </div>
                    <div class="stages-item-img">
                       <img src="{{ asset('img/stages/fire/fire-2.jpg') }}"
                          alt="Уборка ванной комнаты и кухни. Клининг - Генеральная уборка домов, квартир, офисов"
                          title="Уборка домов, квартир, офисов и любых других помещений">
                    </div>
                    <div class="stages-item-description">
                       <p>@lang('fire.2_text')</p>
                    </div>
                 </div>
              </div>
              <div class="stages-item">
                 <div class="stages-item-row">
                    <div class="stages-item-title">
                       <h2>@lang('fire.3')</h2>
                    </div>
                    <div class="stages-item-img correct-img">
                       <img src="{{ asset('img/stages/fire/fire-3.jpg') }}"
                          alt="Мойка окон и стеклянных поверхностей. Клининг - Генеральная уборка домов, квартир, офисов"
                          title="Уборка домов, квартир, офисов и любых других помещений">
                    </div>
                    <div class="stages-item-description">
                       <p>@lang('fire.3_text')</p>
                    </div>
                 </div>
              </div>
              <div class="stages-item">
                 <div class="stages-item-row">
                    <div class="stages-item-title">
                       <h2>@lang('fire.4')</h2>
                    </div>
                    <div class="stages-item-img">
                       <img src="{{ asset('img/stages/fire/fire-4.jpg') }}"
                          alt="Уборка кухни. Клининг - Генеральная уборка домов, квартир, офисов"
                          title="Уборка домов, квартир, офисов и любых других помещений">
                    </div>
                    <div class="stages-item-description">
                       <p>@lang('fire.4_text')</p>
                    </div>
                 </div>
              </div>
              <div class="stages-item">
                 <div class="stages-item-row">
                    <div class="stages-item-title">
                       <h2>@lang('fire.5')</h2>
                    </div>
                    <div class="stages-item-img">
                       <img src="{{ asset('img/stages/fire/fire-5.jpg') }}"
                          alt="Чистим и моем полы. Клининг - Генеральная уборка домов, квартир, офисов"
                          title="Уборка домов, квартир, офисов и любых других помещений">
                    </div>
                    <div class="stages-item-description">
                       <p>@lang('fire.5_text')</p>
                    </div>
                 </div>
              </div>

              <div class="stages-item">
                <div class="stages-item-row">
                   <div class="stages-item-title">
                      <h2>@lang('fire.6')</h2>
                   </div>
                   <div class="stages-item-img">
                      <img src="{{ asset('img/stages/fire/fire-6.jpg') }}"
                         alt="Уборка вертикальных поверхностей (столы, полки и т.д.). Клининг - Генеральная уборка домов, квартир, офисов"
                         title="Уборка домов, квартир, офисов и любых других помещений">
                   </div>
                   <div class="stages-item-description">
                      <p>@lang('fire.6_text')</p>
                   </div>
                </div>
             </div>
             <div class="stages-item">
                <div class="stages-item-row">
                   <div class="stages-item-title">
                      <h2>@lang('fire.7')</h2>
                   </div>
                   <div class="stages-item-img">
                      <img src="{{ asset('img/stages/fire/fire-7.jpg') }}"
                         alt="Уборка ванной комнаты и кухни. Клининг - Генеральная уборка домов, квартир, офисов"
                         title="Уборка домов, квартир, офисов и любых других помещений">
                   </div>
                   <div class="stages-item-description">
                      <p>@lang('fire.7_text')</p>
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
            <img src="{{ asset('img/work_examplеs/fire/1_after.jpg') }}" class="clip after"></img>
            <img src="{{ asset('img/work_examplеs/fire/1_before.jpg') }}" class="clip before"></img>
         </div>
         <div class="work-examples-item">
            <img src="{{ asset('img/work_examplеs/fire/2_after.jpg') }}" class="clip after"></img>
            <img src="{{ asset('img/work_examplеs/fire/2_before.jpg') }}" class="clip before"></img>
         </div>
          <div class="work-examples-item">
             <img src="{{ asset('img/work_examplеs/fire/3_after.jpg') }}" class="clip after"></img>
             <img src="{{ asset('img/work_examplеs/fire/3_before.jpg') }}" class="clip before"></img>
          </div>
          <div class="work-examples-item">
             <img src="{{ asset('img/work_examplеs/fire/4_before.jpg') }}" class="clip after"></img>
             <img src="{{ asset('img/work_examplеs/fire/4_after.jpg') }}" class="clip before"></img>
          </div>
          <div class="work-examples-item">
             <img src="{{ asset('img/work_examplеs/fire/5_before.jpg') }}" class="clip after"></img>
             <img src="{{ asset('img/work_examplеs/fire/5_after.jpg') }}" class="clip before"></img>
          </div>
          <div class="work-examples-item">
             <img src="{{ asset('img/work_examplеs/fire/6_before.jpg') }}" class="clip after"></img>
             <img src="{{ asset('img/work_examplеs/fire/6_after.jpg') }}" class="clip before"></img>
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