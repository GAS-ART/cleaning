@section('popup')
<div id="popup" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup">X</a>
         <div class="popup__title">
            <h4>ФОРМА ЗАКАЗА ОБРАТНОГО ЗВОНКА</h4>
         </div>
         <div class="popup__text">
            <form class="popup__form" id="send-form" name="popupForm" method="post" action="{{route('send')}}"
               autocomplete="on">
               @csrf
               <div class="contacts-form__item data popup-data">
                  <input class="data__text-field" type="text" name="name" placeholder="Как к Вам обращаться?">
                  <p class="error-popup name-error"></p>
               </div>
               <div class="contacts__phone popup-phone">
                  <input class="phone" type="text" name="phone" placeholder="Введите номер телефона">
                  <p class="error-popup phone-error"></p>
               </div>
               <div class="popup__button">
                  <div class="button">
                     <input class="submit" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">
                  </div>
               </div>
            </form>
         </div>
         <div class="popup__confirm confirm">
            <div class="popup__title">
               <h4><span>ЗВОНОК ЗАКАЗАН</span><br><br>Мы перезвони Вам в течении 10 минут</h4>
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
            <h4>КОНТАКТЫ</h4>
         </div>
         <div class="popup__text popup__text-contacts">
            <div class="popup__contacts-mesendgers">
               <div class="contacts-viber">
                  <a href="viber://chat?number=%2B380636642636"><img src="{{ asset('img/icons/viber.svg') }}"
                        alt=""></a>
                  <a href="viber://chat?number=%2B380636642636">Написать</a>
               </div>
               <div class="contacts-telegram">
                  <a href="tg://resolve?domain=Alexklining"><img src="{{ asset('img/icons/telegram.png') }}" alt=""></a>
                  <a href="tg://resolve?domain=Alexklining">Написать</a>
               </div>
            </div>
            <div class="popup__contacts-phone">
               <div class="contacts-phone">
                  <a href="tel:0981183119">(098)118-31-19</a>
               </div>
               <div class="contacts-phone">
                  <a href="tel:0636642636">(063)664-26-36</a>
               </div>
            </div>
            <div class="contacts-email">
               <a href="mailto:dnepr.jc@gmail.com">dnepr.jc@gmail.com</a>
            </div>
         </div>
      </div>
   </div>
</div>