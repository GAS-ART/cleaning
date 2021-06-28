window.onload = function () {
   const callOderButton = document.querySelectorAll('.call-oder-button');
   const popUp = document.getElementById('popup');
   const bodyLock = document.getElementById("body");
   const popupCloseIcon = document.querySelector('.close-popup');
   const popupButton = document.querySelector('.confirm__button');
   const popupText = document.querySelector('.popup__text');
   const popupTitle = document.querySelector('.popup__title');
   const popupConfirm = document.querySelector('.popup__confirm');
   const sendForm = document.getElementById('send-form');
   const flipCards = document.querySelectorAll('.servise__item-gif');
   //   const detailsButton = document.querySelectorAll('.details-button');
   const buttonAfter = document.querySelector('.button-after');
   const buttonBefore = document.querySelector('.button-before');
   const buttonNone = document.querySelector('.button-none');

   callOderButton[0].classList.add('animate');

   function animation() {
      return window.setInterval(() => {
         if (callOderButton[0].classList.contains('animate')) {
            callOderButton[0].classList.remove('animate');
            callOderButton[0].classList.add('active');
         } else {
            callOderButton[0].classList.remove('active');
            callOderButton[0].classList.add('animate');
         }

      }, 1500);

   }
   let animate = animation();

   callOderButton[0].addEventListener('mouseover', () => {
      clearInterval(animate);
   })

   callOderButton[0].addEventListener('mouseout', () => {
      if (!popUp.classList.contains("open")) {
         animate = animation();
      }
   });


   if (buttonAfter) {
      buttonAfter.addEventListener('click', function () {
         let after = document.querySelectorAll('.slick-active .after');
         let before = document.querySelectorAll('.slick-active .before');
         for (i = 0; i < after.length && before.length; i++) {
            after[i].classList.add('active');
            before[i].classList.remove('active');
         }
      });

      buttonBefore.addEventListener('click', function () {
         let after = document.querySelectorAll('.slick-active .after');
         let before = document.querySelectorAll('.slick-active .before');
         for (i = 0; i < after.length && before.length; i++) {
            before[i].classList.add('active');
            after[i].classList.remove('active');
         }
      });
      buttonNone.addEventListener('click', function () {
         let after = document.querySelectorAll('.slick-active .after');
         let before = document.querySelectorAll('.slick-active .before');
         for (i = 0; i < after.length && before.length; i++) {
            before[i].classList.remove('active');
            after[i].classList.remove('active');
         }
      });
   }

   /*POPUP*/
   for (i = 0; i < callOderButton.length; i++) {
      let button = callOderButton[i];
      button.addEventListener('click', function (e) {
         popUp.classList.add("open");
         bodyLock.classList.add("lock");
         popUp.addEventListener("click", function (e) {
            if (!e.target.closest('.popup__content')) {
               popupClose();
            }
         });
         e.preventDefault();
      });
   }

   popupCloseIcon.addEventListener("click", function (e) {
      popupClose();
      e.preventDefault();
   });

   popupButton.addEventListener("click", function (e) {
      popupClose();
   });

   function popupClose() {
      popUp.classList.remove('open');
      bodyLock.classList.remove("lock");
      popupText.classList.remove('disabled');
      popupConfirm.classList.remove('active');
      popupTitle.classList.remove('disabled');
      $(".name-error").html('');
      $(".phone-error").html('');
      clearInterval(animate);
      animate = animation();
   }
   /*POPUP*/

   /*BURGER*/
   $('.burger').click(function () {
      $('.burger, .header-menu').toggleClass('active');
      $('body').toggleClass('lock');
   });
   /*BURGER*/
   /*ANIMATION SERVICE CARD FOR MOBILE HOVER*/
   for (i = 0; i < flipCards.length /*&& detailsButton.length*/; i++) {
      flipCards[i].addEventListener('click', function () {
         this.classList.toggle('spin');
         for (k = 0; k < flipCards.length; k++) {
            if (flipCards[k] !== this) {
               flipCards[k].classList.remove('spin');
            }
         }
      });
      /*     detailsButton[i].addEventListener('click', function () {
              let currentBlock = this;
              let currentParent = currentBlock.closest('.servise__item-details')
              let flipBlock = currentParent.previousElementSibling;
              flipBlock.classList.toggle('spin');
              for (k = 0; k < flipCards.length; k++) {
                 if (flipCards[k] !== flipBlock) {
                    flipCards[k].classList.remove('spin');
                 }
              }
           });*/
   }
   /*ANIMATION SERVICE CARD FOR MOBILE HOVER*/

   /*SLICK SLIDER*/
   $('.slider-clients').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: true,
      adaptiveHeight: true,
      //centerMode: true,
      responsive: [
         {
            breakpoint: 1025,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
            }
         },
         {
            breakpoint: 770,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2
            }
         },
         {
            breakpoint: 560,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }
      ]
   });

   $('.slider-work-examples').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: true,
      adaptiveHeight: true,
      infinite: true,
      //centerMode: true,
      responsive: [
         {
            breakpoint: 700,
            settings: {
               slidesToShow: 1,
            }
         }
      ]
   });
   const slickArrow = document.querySelectorAll('.slick-arrow');
   const slickSlideImg = document.querySelectorAll('.work-examples-item img');
   for (i = 0; i < slickArrow.length; i++) {
      slickArrow[i].addEventListener('click', function () {
         for (i = 0; i < slickSlideImg.length; i++) {
            slickSlideImg[i].classList.remove('active');
         }
      });
   }
   $("#send-form").submit(function (event) {
      event.preventDefault();
      $.ajax({
         type: 'POST',
         url: 'https://www.xn--c1ajagfnb.dp.ua/send',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            popupText.classList.add('disabled');
            popupTitle.classList.add('disabled');
            popupConfirm.classList.add('active');
            sendForm.reset();
         },
         error: function (err) {
            if (err.responseJSON.errors.name) {
               $(".name-error").html(err.responseJSON.errors.name[0]);
            } else {
               $(".name-error").html('');
            }
            if (err.responseJSON.errors.phone) {
               $(".phone-error").html(err.responseJSON.errors.phone[0]);
            } else {
               $(".phone-error").html('');
            }

         }
      });
   });
}
