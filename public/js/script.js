window.onload=function(){var e=document.querySelectorAll(".call-oder-button"),t=document.getElementById("popup"),s=document.getElementById("body"),o=document.querySelector(".close-popup"),n=document.querySelector(".confirm__button"),r=document.querySelector(".popup__text"),c=document.querySelector(".popup__title"),l=document.querySelector(".popup__confirm"),a=document.getElementById("send-form"),d=document.querySelectorAll(".servise__item-gif"),u=document.querySelector(".button-after"),m=document.querySelector(".button-before"),v=document.querySelector(".button-none");function p(){return window.setInterval((function(){e[0].classList.contains("animate")?(e[0].classList.remove("animate"),e[0].classList.add("active")):(e[0].classList.remove("active"),e[0].classList.add("animate"))}),1500)}e[0].classList.add("animate");var f=p();for(e[0].addEventListener("mouseover",(function(){clearInterval(f)})),e[0].addEventListener("mouseout",(function(){t.classList.contains("open")||(f=p())})),u&&(u.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)e[i].classList.add("active"),t[i].classList.remove("active")})),m.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)t[i].classList.add("active"),e[i].classList.remove("active")})),v.addEventListener("click",(function(){var e=document.querySelectorAll(".slick-active .after"),t=document.querySelectorAll(".slick-active .before");for(i=0;i<e.length&&t.length;i++)t[i].classList.remove("active"),e[i].classList.remove("active")}))),i=0;i<e.length;i++)e[i].addEventListener("click",(function(e){t.classList.add("open"),s.classList.add("lock"),t.addEventListener("click",(function(e){e.target.closest(".popup__content")||L()})),e.preventDefault()}));function L(){t.classList.remove("open"),s.classList.remove("lock"),r.classList.remove("disabled"),l.classList.remove("active"),c.classList.remove("disabled"),$(".name-error").html(""),$(".phone-error").html(""),clearInterval(f),f=p()}for(o.addEventListener("click",(function(e){L(),e.preventDefault()})),n.addEventListener("click",(function(e){L()})),$(".burger").click((function(){$(".burger, .header-menu").toggleClass("active"),$("body").toggleClass("lock")})),i=0;i<d.length;i++)d[i].addEventListener("click",(function(){for(this.classList.toggle("spin"),k=0;k<d.length;k++)d[k]!==this&&d[k].classList.remove("spin")}));$(".slider-clients").slick({slidesToShow:3,slidesToScroll:1,dots:!0,adaptiveHeight:!0,responsive:[{breakpoint:1025,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:770,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:560,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(".slider-work-examples").slick({slidesToShow:2,slidesToScroll:1,dots:!0,adaptiveHeight:!0,infinite:!0,responsive:[{breakpoint:700,settings:{slidesToShow:1}}]});var h=document.querySelectorAll(".slick-arrow"),S=document.querySelectorAll(".work-examples-item img");for(i=0;i<h.length;i++)h[i].addEventListener("click",(function(){for(i=0;i<S.length;i++)S[i].classList.remove("active")}));$("#send-form").submit((function(e){e.preventDefault(),$.ajax({type:"POST",url:"https://www.xn--c1ajagfnb.dp.ua/send",data:new FormData(this),contentType:!1,cache:!1,processData:!1,success:function(){r.classList.add("disabled"),c.classList.add("disabled"),l.classList.add("active"),a.reset()},error:function(e){e.responseJSON.errors.name?$(".name-error").html(e.responseJSON.errors.name[0]):$(".name-error").html(""),e.responseJSON.errors.phone?$(".phone-error").html(e.responseJSON.errors.phone[0]):$(".phone-error").html("")}})}))};