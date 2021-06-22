@extends('layout')
@section('title','ПРОСТО ЧИСТО - Клининговая компания в Днепре')
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
                        Компания <span>«ПРОСТО ЧИСТО»</span> – это команда профессионалов, над созданием которой мы
                        упорно
                        трудились
                        долгое
                        время!
                        Каждые полгода все наши сотрудники проходят тренинги,
                        позволяющие повысить квалификацию и уровень знаний в связи с введением в работу новых
                        чистящих
                        средств
                        и
                        высокопрофильной техники.
                        Вместе мы делаем большую работу, чтобы от первого Вашего звонка в компанию до завершения
                        работ
                        мастером
                        Вы
                        были
                        довольны нашим сервисом и качеством оказанных услуг!
                     </div>
                  </div>
               </div>

            </div>
            <div class="call-order">
               <div class="button-call-order">
                  <a href="#" class="call-oder-button">заказать звонок</a>
               </div>

            </div>
         </div>
      
   </div>
   <div class="service">
      <div class="container">
         <div class="service-title">
            <h2 class="block-title">наши услуги</h2>
         </div>
         <div class="servise__row">
            <div class="servise__block">
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>мойка окон</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay playsinline muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/3.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/3.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>Мойка окон не ограничиваться только стеклом, это рамы резинки подоконники и многое другое. Жми подробнее и изучи все этапы </p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                     <a href="{{ route('washing-windows') }}" class="details-button">подробнее</a>
                  </div>
               </div>
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>генеральная уборка</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/2.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/2.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>Много времени заберет повседневная уборка и тратить жизнь на вытирание пыли или мойку полов нет смысла. Жми подробнее и заказывай услугу для себя</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                  <a href="{{ route('spring-cleaning') }}" class="details-button">подробнее</a>
                  </div>
               </div>
            </div>

            <div class="servise__block">
            <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>химчистка</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/4.mp4') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/4.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>Когда диван кровать или любимое кресло теряет цвет или всё в пятнах от кофе или животных комфорт в доме теряется. Мы знаем, как сделать Вашу мебель как новой жмите подробнее.</p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                  <a href="{{ route('dry-cleaning') }}" class="details-button">подробнее</a>
                  </div>
               </div>
               <div class="servise__item">
                  <div class="servise__item-title">
                     <h3>послестроительная уборка</h3>
                  </div>
                  <div class="servise__item-gif">
                     <div class="servise__item-video">
                        <video autoplay muted loop preload="auto" class="gif">
                           <source type="video/webm" src="{{ asset('img/gif/1.webm') }}">
                           <source type="video/mp4" src="{{ asset('img/gif/1.mp4') }}">
                        </video>
                     </div>
                     <div class="servise__item-gif-text">
                        <p>Окончание ремонта всегда праздник, а как приятно заехать в новое жильё и сразу жить, а не месяц убирать следы краски и цемента. Жми подробнее и изучи все этапы </p>
                     </div>
                  </div>
                  <div class="servise__item-details">
                  <a href="{{ route('post-construction-cleaning') }}" class="details-button">подробнее</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="clients">
      <div class="container">
         <div class="clients-title">
            <h2 class="block-title">Наши клиенты</h2>
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