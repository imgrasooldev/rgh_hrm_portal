$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });

    $('.discrepancybtn').click(function() {
        $('.discrepancyPopup').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.signUp').click(function() {
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.closebtn,.overlay').click(function() {
        $('.discrepancyPopup').fadeOut();
        $('.overlay').fadeOut();
    });

    $('.switch').on('click', function() {
        $('.button').toggleClass('switch_on');

        if ($('.button').hasClass('switch_on')) {
            // add code here is switch on
        }
    });
});

// Tabbing JS
$('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
  // $(".tab-slider").slick("setPosition");
});

// $('')function(){
    // $('.userprofiletabs li [data-targetit]').addClass('current');
    // $('.userprofiletabs li [data-targetit]').siblings().removeClass('current');
// };

// $('.userprofiletabs li [data-targetit]'){
//     $(this).addClass('current');
//     $(this).siblings().removeClass('current');
// });

function appendText() {
  var txt1 = '<div class="addfieldspace"><div class="row"><div class="col-md-6"><div class="profield"><label>Previous Company Name</label><input type="text" placeholder="Company Name"></div></div><div class="col-md-6"><div class="profield"><label>Service Duration</label><input type="text" placeholder="Years"></div></div><div class="col-md-6"><div class="profield"><label>Department</label><input type="text" placeholder="Department Name"></div></div><div class="col-md-6"><div class="profield"><label>Designation</label><input type="text" placeholder="Your Designation"></div></div><div><div>';
    $(".formwrap .row").append(txt1);
}

$('.cb-value').click(function() {
var mainParent = $(this).parent('.toggle-btn');
if ($(mainParent).find('input.cb-value').is(':checked')) {
    $(mainParent).addClass('active');
    console.log('on');
} else {
    $("#BlockUIConfirm").show();
    console.log('off');
    $(mainParent).removeClass('active');
}

// function ConfirmForm() {
//     $("#BlockUIConfirm").show();
// }

// function Submit() {
//     alert("Form would be submitted.");
//     $('#BlockUIConfirm').hide();
// }

})

// Fancy Media
$('.fancybox-media').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
        media: {}
    }
});

// Slider For
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true
});


// Accordion
$('.myaccordi>li').click(function() {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});
//  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_accordion


// Sticky Navigation
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});


// Normal Slider
$('.index-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});
            

// Navigation Menu 
$(window).on('load', function() {
var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
$('.sidenav li a').each(function() {
    var hrefVal = $(this).attr('href');
    if (hrefVal == currentUrl) {
        $(this).removeClass('active');
        $(this).closest('li').addClass('active')
        $('.sidenav li.first').removeClass('active');
    }
});
});

/* RESPONSIVE JS */
if ($(window).width() < 825) {
}