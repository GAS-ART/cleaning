window.onload=function(){var e=document.querySelectorAll(".call-oder-button"),t=document.getElementById("popup"),s=document.getElementById("body"),o=document.querySelector(".close-popup"),n=document.querySelector(".confirm__button"),c=document.querySelector(".popup__text"),l=document.querySelector(".popup__title"),r=document.querySelector(".popup__confirm"),a=document.getElementById("send-form"),d=document.querySelectorAll(".servise__item-gif"),u=document.querySelector(".button-after"),m=document.querySelector(".button-before"),v=document.querySelector(".button-none");function p(){return window.setInterval((function(){e[0].classList.contains("animate")?(e[0].classList.remove("animate"),e[0].classList.add("active")):(e[0].classList.remove("active"),e[0].classList.add("animate"))}),1500)}document.querySelectorAll(".our-usefulness-tittle-btn").forEach((function(e){e.addEventListener("click",(function(t){t.target.classList.toggle("active");var s=e.dataset.firstClick;t.target.closest(".our-usefulness-tittle").nextElementSibling.firstElementChild.classList.toggle("inactive");var i=t.target.closest(".our-usefulness-tittle").nextElementSibling.lastElementChild;if($(i).slideToggle(100),"true"==s){var o=e.dataset.eventName,n=e.dataset.page;gtag("event",o,{Категория:n}),e.dataset.firstClick=!1}}))})),e[0].classList.add("animate");var f=p();for(e[0].addEventListener("mouseover",(function(){clearInterval(f)})),e[0].addEventListener("mouseout",(function(){t.classList.contains("open")||(f=p())})),u&&(u.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)e[i].classList.add("active"),t[i].classList.remove("active")})),m.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)t[i].classList.add("active"),e[i].classList.remove("active")})),v.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)t[i].classList.remove("active"),e[i].classList.remove("active")}))),i=0;i<e.length;i++)e[i].addEventListener("click",(function(e){t.classList.add("open"),s.classList.add("lock"),t.addEventListener("click",(function(e){e.target.closest(".popup__content")||g()})),e.preventDefault()}));function g(){t.classList.remove("open"),s.classList.remove("lock"),c.classList.remove("disabled"),r.classList.remove("active"),l.classList.remove("disabled"),$(".name-error").html(""),$(".phone-error").html(""),clearInterval(f),f=p()}o.addEventListener("click",(function(e){g(),e.preventDefault()})),n.addEventListener("click",(function(e){g()}));var L=document.getElementById("popup-contacts"),h=document.querySelector(".close-popup-contacts");function S(){L.classList.remove("open"),s.classList.remove("lock")}for(document.querySelector(".messenger-icon").addEventListener("click",(function(e){L.classList.add("open"),s.classList.add("lock"),L.addEventListener("click",(function(e){e.target.closest(".popup__content-contacts")||S()})),e.preventDefault()})),h.addEventListener("click",(function(e){S(),e.preventDefault()})),$(".burger").click((function(){$(".burger, .header-menu").toggleClass("active"),$("body").toggleClass("lock")})),i=0;i<d.length;i++)d[i].addEventListener("click",(function(){for(this.classList.toggle("spin"),k=0;k<d.length;k++)d[k]!==this&&d[k].classList.remove("spin")}));$(".slider-clients").slick({slidesToShow:3,slidesToScroll:1,dots:!0,adaptiveHeight:!0,responsive:[{breakpoint:1025,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:770,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:560,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".slider-work-examples").slick({slidesToShow:2,slidesToScroll:1,dots:!0,adaptiveHeight:!0,infinite:!0,responsive:[{breakpoint:700,settings:{slidesToShow:1}}]});var y=document.querySelectorAll(".slick-arrow"),b=document.querySelectorAll(".work-examples-item img");for(i=0;i<y.length;i++)y[i].addEventListener("click",(function(){for(i=0;i<b.length;i++)b[i].classList.remove("active")}));$("#send-form").submit((function(e){e.preventDefault(),$.ajax({type:"POST",url:"https://клининг.dp.ua/send",data:new FormData(this),contentType:!1,cache:!1,processData:!1,success:function(){c.classList.add("disabled"),l.classList.add("disabled"),r.classList.add("active"),a.reset(),gtag("event","conversion",{send_to:"AW-957048846/ti3ACLCwzNACEI7QrcgD"})},error:function(e){e.responseJSON.errors.name?$(".name-error").html(e.responseJSON.errors.name[0]):$(".name-error").html(""),e.responseJSON.errors.phone?$(".phone-error").html(e.responseJSON.errors.phone[0]):$(".phone-error").html("")}})}))};