//@prepros-prepend mixitup.min.js
//@prepros-prepend mixitup-pagination.js
//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend owl.carousel.min.js
//@prepros-prepend readmore.js
//@prepros-prepend scrollreveal.js

jQuery(document).ready(function($) {

 /* ADD CLASS ON SCROLL*/

 $(window).scroll(function() {
  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
    $("body").addClass("scrolled");
  } else {
    $("body").removeClass("scrolled");
  }
});

// ========== Controller for lightbox elements

// $('.parent').magnificPopup({
//   delegate: 'a.lightbox-gallery',
//   type: 'image',
//   gallery: {
//     enabled: true
//   }
// });


/* TABBED CONTENT */

$(document).ready(function () {
  if ($('.tabbed-section').length) {
    $(".tabbed-section__head--tab:nth-child(1)").addClass("active");
    $(".tabbed-section__body--item:nth-child(1)").addClass("visible");
  }
});

$(".tabbed-section__head--tab").click(function (e) {
  var selectedTab = $(this).attr("data-tab");
  $(".tabbed-section__head--tab.active").removeClass('active');
  $(this).addClass('active');
  $(".tabbed-section__body--item.visible").removeClass('visible');
  $(".tabbed-section__body--item." + selectedTab).addClass('visible');
});

// ============ Carousels
 
$(".testimonial-carousel").owlCarousel({
  loop:true,
  margin:48,
  center:true,
  nav:true,
  navText: ["<i class='fa-solid fa-chevron-left fa-2x'></i>","<i class='fa-solid fa-chevron-right fa-2x'></i>"],
  dots:false,
  items:1,
  autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        nav:false,
        dots:true,
      },
      550: {
        nav:false,
        dots:true,
      },
      900: {
        nav:true,
        dots:false,
      },
    }
});

$(".fadeOut").owlCarousel({
  loop:true,
  margin:48,
  center:true,
  nav:false,
  dots:false,
  items:1,
  animateOut: 'fadeOut',
  autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
});

// $(".large-advert").owlCarousel({
//   loop:true,
//   margin:48,
//   center:true,
//   nav:false,
//   dots:false,
//   video:true,
//   items:1,
//   autoplay:true,
//     autoplayTimeout:6000,
//     autoplayHoverPause:true,
// });


new Readmore('article', {
  speed: 150,
  collapsedHeight: 190,
});



// SIDEBAR MOBILEMENU

$(document).ready(function() {

  function toggleSidebar() {
    $(".navbutton").toggleClass("active");
    $("main").toggleClass("move-to-left");
    $(".sidebar-item").toggleClass("active");
  }

  $(".navbutton").on("click tap", function() {
    toggleSidebar();
  });

  // $(document).keyup(function(e) {
  //   if (e.keyCode === 27) {
  //     toggleSidebar();
  //   }
  // });

});






// ACCORDIAN SINGLE ITEM ONLY

$(document).ready(function() {
  $('.block__title').click(function(event) {
    $(this).toggleClass('active').next().slideToggle(300);
      if($('.block__title').hasClass('one')){
          $('.block__title').not($(this)).removeClass('active');
          $('.block__text').not($(this).next()).slideUp(300);
      }
      
  });

});

// $(document).ready(function(){
//   $('.block__title').click(function() {
//       $(this).next().toggle('slow');
//       return false;
//   }).next().hide();
// });





const sections = document.querySelectorAll('.onview');

// Using Intersection Observer ↓

const observerConfig = {
  root: null,
  rootMargin: '600px 0px 0px',
  threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
}, observerConfig);

sections.forEach(section => {
  observer.observe(section);
});

var containerEl = document.querySelector('.filter-grid');
var mixer;

if (containerEl) {
    mixer = mixitup(containerEl, {
         
    });
}


$(".pop-link").click(function(){
  var id = $(this).attr('id');
  $('.' + id)[0].play();
});



$(".popup__close").click(function(){
  var id = $(this).attr('id');
  $('.' + id)[0].pause();
});

var slideLeft = {
  distance: '40px',
  origin: 'left',
  opacity: 0.0,

duration: 1000,
delay:250,
mobile:false,
};
var slideRight = {
  distance: '40px',
  origin: 'right',
  opacity: 0.0,

duration: 1000,
mobile:false,
};
var slideDown = {
  distance: '40px',
  origin: 'top',
  opacity: 0.0,

duration: 1000,
mobile:false,
};
var slideUp = {
  distance: '40px',
  origin: 'bottom',
  opacity: 0.0,

duration: 1000,
mobile:false,
};
var tileDown = {
distance: '40px',
origin: 'top',
opacity: 0.0,
duration: 1000,
mobile:false,
interval:40,
};

ScrollReveal().reveal('.fmleft', slideLeft);
ScrollReveal().reveal('.fmtop', slideDown);
ScrollReveal().reveal('.fmbottom', slideUp);
ScrollReveal().reveal('.fmright', slideRight);
ScrollReveal().reveal('.tile', tileDown);


var vid = document.getElementById("advertvideo");
function playVid() {vid.play();}
function pauseVid() {vid.pause();}

ScrollReveal().reveal('video', {
  beforeReveal: playVid ,
  beforeReset: pauseVid,
  reset: true,
  mobile:false,
});


// $(document).ready(function() {

//   var Mwidth = 960; // mobile devices
//   if ($(window).width() > Mwidth) {
//       var headerHeight = $('.top-navbar').height();
//       $(window).on('scroll', {
//               TopPrev: 0
//           },
//           function() {
//               var TopCurrent = $(window).scrollTop();
//               //check if user is scroll up
//               if (TopCurrent < this.TopPrev) {
//                   //if scroll up
//                   if (TopCurrent > 0 && $('.top-navbar').hasClass('fixed-menu')) {
//                       $('.top-navbar').addClass('visible-scroll-up');
//                   } else {
//                       $('.top-navbar').removeClass('visible-scroll-up fixed-menu');
//                   }
//               } else {
//                   //if scroll down
//                   $('.top-navbar').removeClass('visible-scroll-up');
//                   if (TopCurrent > headerHeight && !$('.top-navbar').hasClass('fixed-menu')) $('.top-navbar').addClass('fixed-menu');
//               }
//               this.TopPrev = TopCurrent;
//           });
//   }
// });


/*** Timeline Carousel ***/
$('.timeline').owlCarousel({
  loop: false,
  pagination: true,
  paginationNumbers: false,
  nav:true,
  dots:false,
  margin:10,
  responsive:{
    0:{
      items:1,
      nav:false,
    },
    550: {
      items:2,
      nav:false,
    },
    900:{
      items:3
    },
    1000:{
      items:5
    }
  }
});

function matchTimelineHeight() {
  /* Add in the height placeholders for the images first */
  var imageHeights = [];
  $('.timeline-container .owl-carousel .owl-item img').each(function() {
    imageHeights.push($(this).height());
  });
  var tallest = Math.max.apply(null, imageHeights);
  $('.timeline-container .owl-carousel .owl-item .timeline-image').css("min-height", tallest);

  /* Now match heights with the placeholders added */
  var slideHeights = [];
  $('.timeline-container .owl-carousel .owl-item').each(function() {
    slideHeights.push($(this).height());
  });
  var tallest = Math.max.apply(null, slideHeights);
  $('.timeline-container .owl-carousel .owl-item').height(tallest);
  $('.timeline-container .owl-carousel .timeline-slide').css("min-height", tallest);
}
matchTimelineHeight();

/*** Newsfeed ***/
$('.desktop-owl').owlCarousel({
  loop: true,
  pagination: true,
  paginationNumbers: false,
  responsive:{
    0:{
      items:1,
      nav:false,
      dots:true,
    }
  }
});


(function(document, history, location) {
  var HISTORY_SUPPORT = !!(history && history.pushState);

  var anchorScrolls = {
    ANCHOR_REGEX: /^#[^ ]+$/,
    OFFSET_HEIGHT_PX: 70,

    /**
     * Establish events, and fix initial scroll position if a hash is provided.
     */
    init: function() {
      this.scrollToCurrent();
      $(window).on('hashchange', $.proxy(this, 'scrollToCurrent'));
      $('body').on('click', 'a', $.proxy(this, 'delegateAnchors'));
    },

    /**
     * Return the offset amount to deduct from the normal scroll position.
     * Modify as appropriate to allow for dynamic calculations
     */
    getFixedOffset: function() {
      return this.OFFSET_HEIGHT_PX;
    },

    /**
     * If the provided href is an anchor which resolves to an element on the
     * page, scroll to it.
     * @param  {String} href
     * @return {Boolean} - Was the href an anchor.
     */
    scrollIfAnchor: function(href, pushToHistory) {
      var match, anchorOffset;

      if(!this.ANCHOR_REGEX.test(href)) {
        return false;
      }

      match = document.getElementById(href.slice(1));

      if(match) {
        anchorOffset = $(match).offset().top - this.getFixedOffset();
        $('html, body').animate({ scrollTop: anchorOffset});

        // Add the state to history as-per normal anchor links
        if(HISTORY_SUPPORT && pushToHistory) {
          history.pushState({}, document.title, location.pathname + href);
        }
      }

      return !!match;
    },
    
    /**
     * Attempt to scroll to the current location's hash.
     */
    scrollToCurrent: function(e) { 
      if(this.scrollIfAnchor(window.location.hash) && e) {
      	e.preventDefault();
      }
    },

    /**
     * If the click event's target was an anchor, fix the scroll position.
     */
    delegateAnchors: function(e) {
      var elem = e.target;

      if(this.scrollIfAnchor(elem.getAttribute('href'), true)) {
        e.preventDefault();
      }
    }
  };

	$(document).ready($.proxy(anchorScrolls, 'init'));
})(window.document, window.history, window.location);




}); //Don't remove ---- end of jQuery wrapper




// var mixer = mixitup('.filter-grid');