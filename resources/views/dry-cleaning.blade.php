@extends('layout')
@section('ogTitle','ХИМЧИСТКА МЕБЕЛИ :: ПРОСТО ЧИСТО')
@section('ogDescription','Профессиональная химчистка мебели в Днепре. Новейшее оборудование и органическая химия')
@section('ogVideo')
<meta property = "og:video" content = "https://www.xn--c1ajagfnb.dp.ua/img/gif/old/6_1.mp4" />
<meta property = "og:video:secure_url" content = "https://www.xn--c1ajagfnb.dp.ua/img/gif/old/6_1.mp4" />
<meta property = "og:video:type" content = "video/mp4" />
<meta property = "og:video:width" content = "360" />
<meta property = "og:video:height" content = "200" />
@endsection
@section('title','ПРОСТО ЧИСТО - химчистка мебели в Днепре')
@section('dryCleaning','active')


@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">химчистка мебели</h1>
         </div>
         <div class="stages-block">
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Нанесение специальной химии</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining_1.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Очень Важно покрыть равномерно всю поверхность социальной антиаллергенной органической химией. Необходимо выждать время для разрушения основы грязи 10-15 минут</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Разрушение грязи</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/2.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>С помощью специального устройства очищается поверхность мебели для получения равномерной цветовой гаммы и потери контуров пятен</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Проработка пятен сложных мест</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining_4.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>После прохождения орбитальной машиной, возможно, останутся пятна от краски или клея, вина, кофе. С помощью подбора активной химии и повторной проработки, убираются остальные пятна</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Собираем грязь</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining_3.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Грязь и остатки химии необходимо собрать, а в ручную это сделать невозможно. С помощью специального моющего пылесоса собирается, все остатки пыли грязи. Этот процесс восстанавливает первичный цвет ткани и даёт свежесть мебели</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Сушка мебели</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/dry_clining/dry_clining_5.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Очень Важно сократить время высыхания мебели и это можно сделать с помощью специального нагнетателя воздуха который позволит сократить цикл высыхания до 4 часов</p>
                     </div>
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
   <div class="work-examples">
      <div class="container">
         <div class="work-examples-title">
            <h2 class="block-title">выполненные работы</h2>
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
               <img src="{{ asset('img/work_examplеs/dry_cleaning/6_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/dry_cleaning/6_before.jpg') }}" class="clip before"></img>
            </div>
         </div>
         <div class="work-examples-buttom">
            <div class="work-examples-buttom-row">
               <div class="button-after">
                  ПОСЛЕ
               </div>

               <div class="button-none">X</div>

               <div class="button-before">ДО</div>
            </div>
         </div>
      </div>
   </div>

</main>
@endsection