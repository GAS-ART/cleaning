@extends('layout')
@section('ogTitle','ГЕНЕРАЛЬНАЯ УБОКА :: ПРОСТО ЧИСТО')
@section('ogDescription','Профессиональная уборка домов, офисов, ресторанов в Днепре. Новейшее оборудование и органическая химия')
@section('ogVideo')
<meta property = "og:video" content = "https://www.xn--c1ajagfnb.dp.ua/img/gif/old/7.mp4" />
<meta property = "og:video:secure_url" content = "https://www.xn--c1ajagfnb.dp.ua/img/gif/old/7.mp4" />
<meta property = "og:video:type" content = "video/mp4" />
<meta property = "og:video:width" content = "360" />
<meta property = "og:video:height" content = "200" />
@endsection
@section('title','ПРОСТО ЧИСТО - Генеральная уборка в Днепре')
@section('springCleaning','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">Генеральная уборка</h1>
         </div>
         <div class="stages-block">
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Уборка вертикальных поверхностей</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-1.jpg') }}" alt="Уборка вертикальных поверхностей (столы, полки и т.д.). Клининг - Генеральная уборка домов, квартир, офисов" title="Уборка домов, квартир, офисов и любых других помещений"> 
                     </div>
                     <div class="stages-item-description">
                        <p>В шкафу вынимаем все содержимое и снимаем полки, протираем  все полки и ящики, паутинки под потолком, если они есть. Протираем  подоконники и батареи, осветительные приборы и мебель. Так же рамы картин и фотографий. Мелкие предметы  обрабатываем  по одному.  Полируем  деревянные части мебели специальным средствам. Так же не забываем о чистоте комнатных растений: тщательно протрите от пыли крупнолистные, а цветы с мелкими листочками отправьте под душ. Соберем весь мусор в доме (пустые баночки в ванной, порванные носки, поломанные и просто устаревшие вещи).</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Мойка ванной комнаты, кухни</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-2.jpg') }}" alt="Уборка ванной комнаты и кухни. Клининг - Генеральная уборка домов, квартир, офисов" title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>Ванная комната всегда начинается со стен. Стены очищаем от всех видом загрязнений. Для этого мы используем химию и парогенератор по необходимости. Следующим этапом мы протираем все стеклянные поверхности ( зеркала, дверцы в душевую, светильники и т.д.).  Потом чистим краники, ванную, унитаз, умывальники (чистим до блеска). Последним этапом уборки, протираем все баночки, духи от пыли, полочки.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Мойка окон и стеклянных поверхностей</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-3.jpg') }}" alt="Мойка окон и стеклянных поверхностей. Клининг - Генеральная уборка домов, квартир, офисов" title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>Особое внимание уделяем  зеркалам, окнам, люстрам, светильникам. Для этого мы используем специальные салфетки, сгоны и моющие средства, скребки.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Кухня</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-4.jpg') }}" alt="Уборка кухни. Клининг - Генеральная уборка домов, квартир, офисов" title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>Уборку начинаем с верху в низ. Вначале протираем все шкафчики и полочки от пятен, жиров и других загрязнений. Вытяжка, печка, холодильник, микроволновка, обговариваем отдельно, так как требуется много времени и химии. Обращаем внимание на стоки в раковине и стенки возле плиты, эти места требуют внимания.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Полы</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/spring_clining/spring_clining-5.jpg') }}" alt="Чистим и моем полы. Клининг - Генеральная уборка домов, квартир, офисов" title="Уборка домов, квартир, офисов и любых других помещений">
                     </div>
                     <div class="stages-item-description">
                        <p>Напольные покрытия обрабатываем в зависимости от материала  пола. Работы делим на пару этапов. Первый удаляем пятна. Вторым  обеспыливаем, в основном используем пылесос (ковровые покрытия обрабатываем отдельно). Третьим влажная уборка  с использованием химии. Четвертым по необходимости сухая протирка.</p>
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
               <img src="{{ asset('img/work_examplеs/spring_clining/4_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/4_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/5_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/5_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/spring_clining/6_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/spring_clining/6_before.jpg') }}" class="clip before"></img>
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