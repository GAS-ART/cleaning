/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
window.onload = function () {
  var callOderButton = document.querySelectorAll('.call-oder-button');
  var popUp = document.getElementById('popup');
  var bodyLock = document.getElementById("body");
  var popupCloseIcon = document.querySelector('.close-popup');
  var popupButton = document.querySelector('.confirm__button');
  var popupText = document.querySelector('.popup__text');
  var popupTitle = document.querySelector('.popup__title');
  var popupConfirm = document.querySelector('.popup__confirm');
  var sendForm = document.getElementById('send-form');
  var flipCards = document.querySelectorAll('.servise__item-gif'); //   const detailsButton = document.querySelectorAll('.details-button');

  var buttonAfter = document.querySelector('.button-after');
  var buttonBefore = document.querySelector('.button-before');
  var buttonNone = document.querySelector('.button-none');
  var readMoreBtn = document.querySelectorAll('.our-usefulness-tittle-btn');
  readMoreBtn.forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.target.classList.toggle('active');
      var isFirstClick = item.dataset.firstClick;
      e.target.closest('.our-usefulness-tittle').nextElementSibling.firstElementChild.classList.toggle('inactive');
      var showText = e.target.closest('.our-usefulness-tittle').nextElementSibling.lastElementChild;
      $(showText).slideToggle(100);

      if (isFirstClick == "true") {
        var eventName = item.dataset.eventName;
        var currentPage = item.dataset.page;
        gtag('event', eventName, {
          'Категория': currentPage
        });
        item.dataset.firstClick = false;
      }
    });
  }); // Выезд контактов справой стороны

  /*  const messengersContacts = document.querySelector('.messengers-contacts');
    const contacts = document.querySelectorAll('.contacts');
    contacts.forEach((item) => {
       item.addEventListener('click', function () {
          messengersContacts.classList.toggle('active');
       });
    });
    document.addEventListener('click', (e) => {
     if (!e.target.closest('.messengers')) {
        messengersContacts.classList.remove('active');
     }
  })*/

  callOderButton[0].classList.add('animate');

  function animation() {
    return window.setInterval(function () {
      if (callOderButton[0].classList.contains('animate')) {
        callOderButton[0].classList.remove('animate');
        callOderButton[0].classList.add('active');
      } else {
        callOderButton[0].classList.remove('active');
        callOderButton[0].classList.add('animate');
      }
    }, 1500);
  }

  var animate = animation();
  callOderButton[0].addEventListener('mouseover', function () {
    clearInterval(animate);
  });
  callOderButton[0].addEventListener('mouseout', function () {
    if (!popUp.classList.contains("open")) {
      animate = animation();
    }
  });

  if (buttonAfter) {
    buttonAfter.addEventListener('click', function () {
      var after = document.querySelectorAll('.slick-active .after');
      var before = document.querySelectorAll('.slick-active .before');

      for (i = 0; i < after.length && before.length; i++) {
        after[i].classList.add('active');
        before[i].classList.remove('active');
      }
    });
    buttonBefore.addEventListener('click', function () {
      var after = document.querySelectorAll('.slick-active .after');
      var before = document.querySelectorAll('.slick-active .before');

      for (i = 0; i < after.length && before.length; i++) {
        before[i].classList.add('active');
        after[i].classList.remove('active');
      }
    });
    buttonNone.addEventListener('click', function () {
      var after = document.querySelectorAll('.slick-active .after');
      var before = document.querySelectorAll('.slick-active .before');

      for (i = 0; i < after.length && before.length; i++) {
        before[i].classList.remove('active');
        after[i].classList.remove('active');
      }
    });
  }
  /*POPUP*/


  for (i = 0; i < callOderButton.length; i++) {
    var button = callOderButton[i];
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

  /*POPUP-CONTACTS*/


  var popupContats = document.getElementById('popup-contacts');
  var popupContatsCloseIcon = document.querySelector('.close-popup-contacts');
  var popupContatsBtn = document.querySelector('.messenger-icon');
  popupContatsBtn.addEventListener('click', function (e) {
    popupContats.classList.add('open');
    bodyLock.classList.add("lock");
    popupContats.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-contacts')) {
        popupContatsClose();
      }
    });
    e.preventDefault();
  });
  popupContatsCloseIcon.addEventListener("click", function (e) {
    popupContatsClose();
    e.preventDefault();
  });

  function popupContatsClose() {
    popupContats.classList.remove('open');
    bodyLock.classList.remove("lock");
  }
  /*POPUP-CONTACTS*/

  /*BURGER*/


  $('.burger').click(function () {
    $('.burger, .header-menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
  /*BURGER*/

  /*ANIMATION SERVICE CARD FOR MOBILE HOVER*/

  for (i = 0; i < flipCards.length
  /*&& detailsButton.length*/
  ; i++) {
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
    responsive: [{
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 770,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 560,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
  $('.slider-work-examples').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    adaptiveHeight: true,
    infinite: true,
    //centerMode: true,
    responsive: [{
      breakpoint: 700,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  var slickArrow = document.querySelectorAll('.slick-arrow');
  var slickSlideImg = document.querySelectorAll('.work-examples-item img');

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
      url: 'https://клининг.dp.ua/send',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function success() {
        popupText.classList.add('disabled');
        popupTitle.classList.add('disabled');
        popupConfirm.classList.add('active');
        sendForm.reset();
        gtag('event', 'conversion', {
          'send_to': 'AW-957048846/ti3ACLCwzNACEI7QrcgD'
        }); // Google event snippet for Website lead conversion page
      },
      error: function error(err) {
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
};
/******/ })()
;