$(document).ready(function(){
    
// wow 
 new WOW({
     mobile: false, 
 }).init();
    
 $(".fables-mega-menu li a").click(function (){
    $(".fables-mega-menu li > div").toggleClass("show-sub");
 });
    
// 3 items carousel carousel-items-3
 $(".carousel-items-3").owlCarousel({  
     margin:20,
     loop:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:1 
        },
        600:{
            items:2 
        },
        768:{
            items:3 
        }
         
    }
 });   
    
// 3 items carousel carousel-items-3
 $(".carousel-items-4").owlCarousel({  
     margin:20,
     loop:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:1 
        },
        600:{
            items:2 
        },
        768:{
            items:3 
        },
        1000:{
            items:4 
        }
    }
 });   
    

    // START TOGGLE SEARCH
    $(".open-search").click(function (e){
        e.preventDefault();
        $(".search-section").fadeIn('fast');
        $(".search-input").focus();
        $('body').css({"overflow":"hidden"});
    });
    
    $(".close-search").click(function (e){
        e.preventDefault();
        $(".search-section").fadeOut('fast');
        $('body').css({"overflow":"visible"});
    });
    
    $(document).keyup(function(e) {
    if (e.which == 27) {
        $(".search-section").fadeOut('fast');
        $('body').css({"overflow":"visible"});
    }
    
});
$(".carousel-items-4").owlCarousel({  
    margin:20,
    loop:true,
    navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
    responsive:{
       0:{
           items:1 
       },
       600:{
           items:2 
       },
       768:{
           items:3 
       },
       1000:{
           items:4 
       }
   }
});   
   

   // START TOGGLE SEARCH
   $(".open-login").click(function (e){
       e.preventDefault();
       $(".login-section").fadeIn('fast');
       $(".login-input").focus();
       $('body').css({"overflow":"hidden"});
   });
   
   $(".close-login").click(function (e){
       e.preventDefault();
       $(".login-section").fadeOut('fast');
       $('body').css({"overflow":"visible"});
   });
   
   $(document).keyup(function(e) {
   if (e.which == 27) {
       $(".search-login").fadeOut('fast');
       $('body').css({"overflow":"visible"});
   }
   
});
// 3 items carousel carousel-items-6
 $(".carousel-items-6").owlCarousel({  
     margin:20,
     loop:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:2 
        },
        600:{
            items:3 
        },
        1000:{
            items:6 
        }
    }
 }); 
    
 
    
// teaser slider
 $(".blog-teaser,.default-carousel").owlCarousel({
     loop:true,  
     autoplay:true,
     dots:true,
     nav:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     items:1
 });
    
// Blog Slider
    
 $(".nav-slider").owlCarousel({
     nav:true,
     loop:true,
     autoplay:true,
     margin:20, 
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     dots:true,
     responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
 });
    
 $("#blog-slider").owlCarousel({
     loop:true,
     margin:20,
     nav:false,
     navText:['<span class="fables-iconarrow-left"></span>' , '<span class="fables-iconarrow-next"></span>'],
     autoplay:true,
     dots:true,
     responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
 });
    
 var $input = $("#input-val");   
 $input.val(1);
    $(".calc-btn").click(function(){
        if($(this).hasClass("plus")) {
             $input.val(parseInt($input.val())+1);
        }else  if ($input.val()>=2) {
            $input.val(parseInt($input.val())-1);
        }
    });
    
$(".fables-view-btn").click(function() {
     $(this).addClass('active').siblings().removeClass('active');
    
     if($(this).hasClass("fables-list-btn")){
          $(".fables-product-block").removeClass("col-md-6 col-lg-4").addClass("list");
          $(".fables-product-img").removeClass("col-12").addClass("col-4"); 
          $(".fables-product-block .card-body").removeClass("col-12").addClass("col-8"); 
      }
    else{
          $(".fables-product-block").addClass("col-md-6 col-lg-4").removeClass("list");
          $(".fables-product-img").removeClass("col-4").addClass("col-12"); 
          $(".fables-product-block .card-body").removeClass("col-8").addClass("col-12");
    }
});
    
    
$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('<div class="row"><div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter">%D <br> <span>Days</span></div>  <div class="col-6 col-lg-3 comming-soon-counter"> %H <br> <span>Hours</span> </div> <div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter">  %M <br> <span>Minutes</span></div> <div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter"> %S <br> <span>Seconds</span></div></div>'));
  });
});
    
  
    
// sync carousel

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage =3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    autoplay: true,
    center: true,
    dots: true,
    loop: true,
    responsiveRefreshRate : 200,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false, 
    nav: false,
    mouseDrag:true,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    // e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
   
    

    
$('#fables-testimonial-carousel').owlCarousel({
        loop:true,
        dots:true,
        margin:20,
        autoplay:true,
        items:1,
        navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>']
        
        });
    
 $('#fables-partner-carousel').owlCarousel({
        loop:true,
        dots:false,
        autoplay:true,
        margin:20,
        nav:true,     
        navText:['<i class="fa fa-chevron-left fables-main-text-color fables-main-border-color fables-partner-nav-icon" aria-hidden="true"></i>' , '<i class="fa fa-chevron-right fables-main-text-color fables-main-border-color fables-partner-nav-icon" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            768:{
                items:3
            },
            1000:{
                items:4
            },
            1440:{
                items:6
            }
            }
        });
    
 


// multi event gallery timeLine
 
$('.timeline').timelify({

  // animation types
  animLeft: "bounceInLeft",
  animRight: "bounceInRight",
  animCenter: "bounceInUp",

  // animation speed
  animSpeed: 1500,

  // trigger position in pixels
  offset: 150
  
});


    

});

function JaMap() {
 var mapCanvas = document.getElementById("map");

data = mapCanvas.dataset;
var Zom = data.zom;
 var myCenter = new google.maps.LatLng(data.lat,data.lng);
 var mapOptions = {
 center: myCenter,
 zoom: 14,
 };
 var map = new google.maps.Map(mapCanvas,mapOptions);
 var marker = new google.maps.Marker({
   position: myCenter,
   icon: data.icon
 });
 marker.setMap(map);
}


$(function ($) {
    
       animatecounters();
   });
   function animatecounters() {
       $('.timer').each(count);
       function count(options) {
           var $this = $(this);
           options = $.extend({}, options || {}, $this.data('countToOptions') || {});
           $this.countTo(options);
       }
   } 
   $(document).ready(function() {             
    $('#loginModal').modal('show');
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    });
    (function($) {

        var $formLogin = $('#login-form');
        var $formRegister = $('#register-form');
        var $divForms = $('#div-forms');
        var $modalAnimateTime = 300;
        var $msgAnimateTime = 150;
        var $msgShowTime = 2000;
    
        // $("form").submit(function () {
        //     switch(this.id) {
        //         case "login-form":
        //             var $lg_username=$('#login_username').val();
        //             var $lg_password=$('#login_password').val();
        //             if ($lg_username == "ERROR") {
        //                 msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
        //             } else {
        //                 msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
        //             }
        //             return false;
        //             break; 
        //         case "register-form":
        //             var $rg_username=$('#register_username').val();
        //             var $rg_email=$('#register_email').val();
        //             var $rg_password=$('#register_password').val();
        //             if ($rg_username == "ERROR") {
        //                 msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
        //             } else {
        //                 msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
        //             }
        //             return false;
        //             break;
        //         default:
        //             return false;
        //     }
        //     return false;
        // });
        
        $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
        $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); }); 
        function modalAnimate ($oldForm, $newForm) {
            var $oldH = $oldForm.height();
            var $newH = $newForm.height();
            $divForms.css("height",$oldH);
            $oldForm.fadeToggle($modalAnimateTime, function(){
                $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                    $newForm.fadeToggle($modalAnimateTime);
                });
            });
        }
        
        function msgFade ($msgId, $msgText) {
            $msgId.fadeOut($msgAnimateTime, function() {
                $(this).text($msgText).fadeIn($msgAnimateTime);
            });
        } 
    })(jQuery); // End of use strict
    let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Get the chat elements
var chatBtn = document.getElementById("openChatBtn");
var chatBox = document.getElementById("chat-box");
var closeChatBtn = document.getElementById("closeChatBtn");
var sendMessageBtn = document.getElementById("sendMessageBtn");
var messageInput = document.getElementById("messageInput");

// Toggle the chat box when the chat button is clicked
chatBtn.onclick = function () {
    chatBox.style.display = "block";
};

// Close the chat box when the close button is clicked
closeChatBtn.onclick = function () {
    chatBox.style.display = "none";
};

// Send a message (you can customize this function)
sendMessageBtn.onclick = function () {
    var message = messageInput.value.trim();

    if (message !== "") {
        // Here, you can implement your chat functionality, e.g., append the message to the chat content
        var chatContent = document.querySelector(".chat-content");
        chatContent.innerHTML += `<div class="message">${message}</div>`;
        messageInput.value = "";
    }
};

// Get the modal and buttons
var modal = document.getElementById("modal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");

// Open the modal when the "Book Appointment" button is clicked
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the close button is clicked
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Close the modal when the user clicks anywhere outside of it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}