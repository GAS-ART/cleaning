@extends('layout')
@section('title','ПРОСТО ЧИСТО - Послестроительная уборка в Днепре')
@section('postConstructionCleaning','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">Послестроительная уборка</h1>
         </div>
         <div class="stages-block">
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Сбор мусора</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/1.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Сбор и вывоз с объекта всего строительного мусора. Под этим подразумевается сбор в специальные мешки и контейнеры всего крупного и мелкого строительного мусора, который обязательно удаляется перед тем, как специалисты приступают к более тщательным процедурам</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Мойка окон и стеклянных изделий</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/2.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>После ремонта на стеклах и зеркалах обычно остается большое количество защитных пленок, строительный скотч и прочие не самые приятные напоминания о прошедшем пыльном ремонте. Их необходимо тщательно и аккуратно удалить</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Санузил</h2>
                     </div>
                     <div class="stages-item-img ">
                        <img src="{{ asset('img/stages/post_construction_cleaning/3.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Приведение в порядок всех санузлов. Данный комплекс процедур выполняется с обязательной последующей образом и отдельно от всех видов работ. Убираем всю грязь со стен (капли краски, затирка, пыль и т.д.), окон, умывальников, туалетов, полов.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Удаление пыли</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/post_construction_cleaning/4.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Очень важный этап клининговых процедур, причем после строительства обычными влажными тряпками здесь уже не обойтись. Специалисты обязательно используют профессиональное оборудование. В некоторых случаях возможно комбинировать сухую и влажную уборку пыли</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Полы</h2>
                     </div>
                     <div class="stages-item-img img-center-picture">
                        <img src="{{ asset('img/stages/post_construction_cleaning/5.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Собираем всю пыль, влажная уборка.  Удаление всех образовавшихся стойких загрязнений в плитки, швах и других напольных поверхностей. После ремонта их особенно много: капли лака, цементный раствор, замазка, а также различная строительная пена. При этом для каждого типа загрязнения имеется своя особая технология удаления, что обязательно учитывают специалисты.</p>
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
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/2_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/2_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/5_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/5_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/4_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/4_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/3_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/3_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/6_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/6_before.jpg') }}" class="clip before"></img>
            </div>
            <div class="work-examples-item">
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/1_after.jpg') }}" class="clip after"></img>
               <img src="{{ asset('img/work_examplеs/post_construction_cleaning/1_before.jpg') }}" class="clip before"></img>
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