@extends('layout')
@section('ogTitle','УБОРКА ПОСЛЕСТРОЯ :: ПРОСТО ЧИСТО')
@section('ogDescription','Профессиональная послестроительная уборка в Днепре.')
@section('ogVideo')
<meta property="og:video" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/8.mp4" />
<meta property="og:video:secure_url" content="https://www.xn--c1ajagfnb.dp.ua/img/gif/old/8.mp4" />
<meta property="og:video:type" content="video/mp4" />
<meta property="og:video:width" content="360" />
<meta property="og:video:height" content="200" />
@endsection
@section('title','ПРОСТО ЧИСТО - Послестроительная уборка в Днепре')
@section('postConstructionCleaning','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">Послестроительная уборка</h1>
         </div>
         <div class="about-text__text about-text-service">
            Компания <span class="about-text-span">«Клининг.UA»</span> – работаем в удобное время для вас. Наш опыт,
            оборудование позволяет сделать работу быстро и качественно. Работаем 7 дней в неделю 24 часа в сутки.
         </div>
         <div class="our-usefulness">
            <div class="whom">
               Для кого можем быть полезны:
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                     Частные лица:
                  </div>
                  <div data-event-name="Частные_лица (послестрой)" data-page="Послестроительная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">

                  </div>
               </div>
               <div class="our-usefulness-text">
                  После возведения и выполнения первоочередных внутренних работ, здания требуется черновая уборка. По
                  завершению всех отделочных монтажных работ, требуется окончательная<span
                     class="dots-read-more">...</span>
                  <span class="show-text">послестроительная уборка, чтоб вы смоги перевозить вещи и не беспокоится что в
                     шкафах, в каких-то местах есть пыль, краска или пятна на окнах. Мы рады быть Вам полезны.
                     <br><br>
                     Так же, мы можем вам предложить другие виды работ, химчистка мебели, ковролина, полов. Можем
                     рассчитать еженедельные, ежемесячные, ежеквартальные уборку вашего дома или квартиры. За более
                     детально информации прошу обращаться нашим менеджерам.
                  </span>
               </div>
            </div>
            <div class="our-usefulnes-item">
               <div class="our-usefulness-tittle">
                  <div class="our-usefulness-tittle-text">
                     Коммерческая недвижимость:
                  </div>
                  <div data-event-name="Недвижимость (послестрой)" data-page="Послестроительная уборка"
                     data-first-click="true" class="our-usefulness-tittle-btn">
                  </div>
               </div>

               <div class="our-usefulness-text">
                  Выполняем уборку как во время строительства так и после отделочных работы, перед открытием или запуска
                  завода, цеха, склад ресторана, офисное помещение. Работаем с<span class="dots-read-more">...</span>
                  <span class="show-text">ген подрядными организациями.
                     <br><br>
                     Так же, мы можем вам предложить другие виды работ, химчистка мебели, ковролина, полов. Можем
                     рассчитать еженедельные, ежемесячные, ежеквартальные уборку для, производственного цеха, склад,
                     офисное помещение, ресторан. За более детально информации прошу обращаться нашим менеджерам.
                  </span>
               </div>
            </div>
         </div>
      </div>

      <div class="stages-block stages-block-color">
         <div class="container">
            <div class="stages-block-tittle">ЭТАПЫ РАБОТ:</div>
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Сбор мусора</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-1.jpg') }}"
                           alt="Соберем весь мусор после строительства. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>Сбор и вывоз с объекта всего строительного мусора. Под этим подразумевается сбор в
                           специальные мешки и контейнеры всего крупного и мелкого строительного мусора, который
                           обязательно удаляется перед тем, как специалисты приступают к более тщательным процедурам</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Мойка окон и стеклянных изделий</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-2.jpg') }}"
                           alt="Отмоем окна и зеркала. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>После ремонта на стеклах и зеркалах обычно остается большое количество защитных пленок,
                           строительный скотч и прочие не самые приятные напоминания о прошедшем пыльном ремонте. Их
                           необходимо тщательно и аккуратно удалить</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Санузил</h2>
                     </div>
                     <div class="stages-item-img correct-img">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-3.jpg') }}"
                           alt="Моем ванную и туалет. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>Приведение в порядок всех санузлов. Данный комплекс процедур выполняется с обязательной
                           последующей образом и отдельно от всех видов работ. Убираем всю грязь со стен (капли краски,
                           затирка, пыль и т.д.), окон, умывальников, туалетов, полов.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Удаление пыли</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-4.jpg') }}"
                           alt="Убираем пыль, влажная уборка. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>Очень важный этап клининговых процедур, причем после строительства обычными влажными тряпками
                           здесь уже не обойтись. Специалисты обязательно используют профессиональное оборудование. В
                           некоторых случаях возможно комбинировать сухую и влажную уборку пыли</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Полы</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/post_construction_cleaning-5.jpg') }}"
                           alt="Моем полы. Клининг - Уборка после стройки"
                           title="Уборка квартиры, дома, офиса после строительства">
                     </div>
                     <div class="stages-item-description">
                        <p>Собираем всю пыль, влажная уборка. Удаление всех образовавшихся стойких загрязнений в плитки,
                           швах и других напольных поверхностей. После ремонта их особенно много: капли лака, цементный
                           раствор, замазка, а также различная строительная пена. При этом для каждого типа загрязнения
                           имеется своя особая технология удаления, что обязательно учитывают специалисты.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
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