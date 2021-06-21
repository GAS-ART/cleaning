@extends('layout')
@section('title','ПРОСТО ЧИСТО - Мойка окон в Днепре')
@section('washingWindows','active')

@section('content')
<main class="page">

   <div class="stages">
      <div class="container">
         <div class="stages-title">
            <h1 class="block-title">Мойка окон</h1>
         </div>
         <div class="stages-block">
            <div class="stages-row">
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Мойка рамы и фурнитуры </h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/1.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Важно удалить из рам пыль, крошки, листья деревьев и т. д. Это увеличит срок эксплуатации окон. Вычищаем все  углы с помощью моющих средств и оборудованием.  Протираем рамы на сухо. Тщательно промываем резиновые уплотнители, прижимающие стекло к раме, очищаем всю металлическую оконную фурнитуру и дренажные элементы. Особенно важно содержать в чистоте дренажи: если они забьются, окно будет запотевать или покрываться льдом в холодное время года.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Нанесения химии на стекло</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/2.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Промываем водой и избавляемся от пыли.  На стекло наносим специальную химию, которая очищает от насекомых и других видов загрязнений. Ожидаем, так как химия должна войти в реакцию с загрязнениями. По уровню загрязнения наносим химию поворотно.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Отмываем стекла</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/3.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Сгоняем всю грязь со стекла с помощью сгона.  Возможно могут остаться разводы, их убираем специальной салфеткой. После натираем стекло до блеска стеклянную поверхность.</p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Точеное выведений загрязнений</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/4.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Возможно могут остаться точки, их природа бывает разная (краска, шпаклевка, насекомые, клей, наклейки). Такие загрязнения удаляем специальной химией и скребком для стекол, парогенератором.  Натираем поверхность до блеска. </p>
                     </div>
                  </div>
               </div>
               <div class="stages-item">
                  <div class="stages-item-row">
                     <div class="stages-item-title">
                        <h2>Моем подоконник</h2>
                     </div>
                     <div class="stages-item-img">
                        <img src="{{ asset('img/stages/washing_windows/5.jpg') }}" alt="">
                     </div>
                     <div class="stages-item-description">
                        <p>Заключительным в мойке окон это  мойка подоконника. Важно уделить должное внимание так как подоконник является за частью интерьера. Используем химию и при необходимости парогенератор, так как в основном подоконник является пористым.</p>
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