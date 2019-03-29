"use strict";



// Variables
// ===================

var $html = $('html'),
    $document = $(document),
    $window = $(window),
    i = 0;



// Scripts initialize
// ===================

document.write('<script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyAYjhWq7DvCwCiRKotPu9_IXQxupSQbhuo" type="text/javascript"></script>');

$(window).on('load', function () {

  // =======
  // Preloader
  // =======
  var $preloader = $('#page-preloader');
  $preloader.delay(100).fadeOut('slow');

  // =======
  // Google Map
  // =======
  var map = $(".map");
  if(map.length){
    var mapWrapper = $('#google-map'),
        latlng = new google.maps.LatLng(mapWrapper.data("x-coord"), mapWrapper.data("y-coord")),
        styles = [
            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "gamma": 0.5
                    }
                ]
            }
        ],
        myOptions = {
          scrollwheel: false,
          zoom: 16,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: true,
          styles: styles
        },
        map = new google.maps.Map(mapWrapper[0], myOptions),
        marker = new google.maps.Marker({
          position: {lat: mapWrapper.data("x-coord"), lng: mapWrapper.data("y-coord")},
          draggable: false,
          animation: false,
          map: map,
          icon: 'img/marker.png'
        }),
        infowindow = new google.maps.InfoWindow({
          content: mapWrapper.data("text")
        });

    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }
});


$document.ready(function () {

  function detectElement(dom) {
    return $window.height() + $window.scrollTop() >= dom.offset().top && $window.scrollTop() <= dom.outerHeight() + dom.offset().top;
  }

  // ==========
  // Contact Form
  // ==========
  var contactForm = $(".contact-form");
  if(contactForm.length){
    var contactFormInput = contactForm.find(".form-control.required");
    var contactResault = contactForm.find(".form-resault");

    contactFormInput.on("blur", function(){
      if(!$.trim($(this).val())){
        $(this).parent().addClass("input-error");
      }
    });

    contactFormInput.on("focus", function(){
      $(this).parent().removeClass("input-error");
    });

    contactForm.on("submit", function() { 
      var form_data1 = $(this).serialize();
      if(!contactFormInput.parent().hasClass("input-error") && contactFormInput.val()){
        $.ajax({
          type: "POST", 
          url: "php/contact.php", 
          data: form_data1,
          success: function() {
            contactResault.addClass("correct");
            contactResault.html("Your data has been sent!");
            setTimeout(function(){
              contactResault.removeClass("incorrect").removeClass("correct");
            }, 4500);
          }
        });
      } else{ 
        if(contactFormInput.val() == ""){
          var contactFormInputEmpty = contactFormInput.filter(function(){ 
            return $(this).val() == ""; 
          });
          contactFormInputEmpty.parent().addClass("input-error");
        }
        contactResault.addClass("incorrect");
        contactResault.html("You must fill in all required fields");
        setTimeout(function(){
          contactResault.removeClass("incorrect").removeClass("correct");
        }, 4500);
      }
      return false;
    }); 
  }

  // ==========
  // Responsive Nav
  // ==========
  var responsiveNav = new Navigation({
    init: true,
    stuck: true,
  });

  // =======
  // Countdown
  // =======
  var countDown = $('.countdown');
  if (countDown.length) {
    countDown.each(function(){
      var item = $(this),
          date = new Date(),
          settings = [],
          time = item[0].getAttribute('data-time'),
          type = item[0].getAttribute('data-type'),
          format = item[0].getAttribute('data-format');
      date.setTime(Date.parse(time)).toLocaleString();
      settings[type] = date;
      settings['format'] = format;
      item.countdown(settings);
    });
  }

  // =======
  // jQuery Count To
  // =======
  var counter = $('.counter');
  if (counter.length) {
    var counterToInit = counter.not(".init");
    $document.on("scroll", function () {
      counterToInit.each(function(){
        var item = $(this);

        if ((!item.hasClass("init")) && (detectElement(item))) {
          item.countTo({
            refreshInterval: 20,
            speed: item.attr("data-speed") || 1000
          });
          item.addClass('init');
        }
      });
      $document.trigger("resize");
    });
    $document.trigger("scroll");
  }

  // =======
  // UIToTop
  // =======
  $().UItoTop();
 
  // =======
  // Owl carousel
  // =======
  var owlMain = $('.owl-main');
  if (owlMain.length) {
    owlMain.owlCarousel({
      mouseDrag: false,
      nav: false,
      loop: true,
      autoplay: true,
      dots: true,
      items: 1,
      responsiveClass:true,
      responsive:{
        992: { dots: false, nav: true, },
      }
    });
  }
  var owl1 = $('.owl-1');
  if (owl1.length) {
    owl1.owlCarousel({
      mouseDrag: false,
      nav: false,
      loop: false,
      autoplay: true,
      dots: true,
      items: 2,
      responsiveClass:true,
      responsive:{
        0:{ items: 1, },
        992:{ items: 2, },
      }
    });
  }

  // =======
  // WOW
  // =======
  if ($html.hasClass('desktop')) { new WOW().init(); }

});

