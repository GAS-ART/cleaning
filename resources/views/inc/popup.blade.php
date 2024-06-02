@section('popup')
<div id="popup" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup">X</a>
         <div class="popup__title">
            <h4>@lang('popup.call_back')</h4>
         </div>
         <div class="popup__text">
            <form class="popup__form" id="send-form" name="popupForm" method="post" action="{{route('send')}}"
               autocomplete="on">
               @csrf
               <div class="contacts-form__item data popup-data">
                  <input class="data__text-field" type="text" name="name" placeholder="@lang('popup.name')">
                  <p class="error-popup name-error"></p>
               </div>
               <div class="contacts__phone popup-phone">
                  <input class="phone" type="text" name="phone" placeholder="@lang('popup.phone')">
                  <p class="error-popup phone-error"></p>
               </div>
               <div class="popup__button">
                  <div class="button">
                     <input class="submit _conversion" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">
                  </div>
               </div>
            </form>
         </div>
         <div class="popup__confirm confirm">
            <div class="popup__title">
               <h4><span>@lang('popup.success')</h4>
            </div>
            <div class="confirm__button">
               <div class="button">
                  <input id="confirmButtom" class="submit close-popup" type="button" value="ОК">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="popup-contacts" class="popup">
   <div class="popup__body">
      <div class="popup__content popup__content-contacts">
         <a href="#" class="popup__close close-popup close-popup-contacts">X</a>
         <div class="popup__title popup__title-contacts">
            <h4>@lang('popup.contacts')</h4>
         </div>
         <div class="popup__text popup__text-contacts">
            <div class="popup__contacts-mesendgers">
               <div class="contacts-viber">
                  <a href="viber://chat?number=%2B380504877774" class="_conversion"><img src="{{ asset('img/icons/viber.svg') }}"
                        alt=""></a>
                  <a href="viber://chat?number=%2B380504877774 class="_conversion">@lang('popup.write')</a>
               </div>
               <div class="contacts-telegram">
                  <a href="tg://resolve?domain=Alexklining" class="_conversion"><img src="{{ asset('img/icons/telegram.png') }}" alt=""></a>
                  <a href="tg://resolve?domain=Alexklining" class="_conversion">@lang('popup.write')</a>
               </div>
            </div>
            <div class="popup__contacts-phone">
               <div class="contacts-phone">
                  <a href="tel:0504877774" class="_conversion">(050)487-77-74</a>
               </div>
            </div>
            <div class="contacts-email">
               <a href="mailto:inegra7249725@gmail.com" class="_conversion">inegra7249725@gmail.com</a>
            </div>
         </div>
      </div>
   </div>
</div>