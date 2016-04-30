//**********************************
//**********************************
//**********************************   Custom js
//**********************************
//**********************************

Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
    var link = el.querySelector('a');
    if (!link) {
        return;
    }
    var target = link.getAttribute('href');
    if (!target) {
        return;
    }
    el.addEventListener('click', function() {
        location.href = target;
    });
});

// Auto fill visitor-url "http://"
$("#visitor-url").focus(function() {
    this.placeholder = "http://";
});
$("#visitor-url").blur(function() {
    this.placeholder = "";
});

// Auto delete input content & placeholder
$(".search-input").blur(function() {
    this.value = "";
    this.placeholder="";
});

// Append the date to index-top-block-date
var myDate = new Date();
$('.index-top-block-date').append(myDate);

// Auto hidden share/tags popup block
$('#article-fuctions-share-button, #article-functions-viewtags-button').click(function() {
    $('.is-visible').removeClass('is-visible');
});

// Add 'fab' class to the PageNav <a>
$('.fabs .prev, .fabs .next, .fabs .prev-content').addClass('fab');

//**********************************
//**********************************
//**********************************   Floating Action Button js
//**********************************
//**********************************

//Fab click
$('#prime').click(function() {
  toggleFab();
});

//Toggle chat and links
function toggleFab() {
  $('.prime').toggleClass('is-active');
  $('.fab').toggleClass('is-visible');
}

//Rotate prime-i-add
$('#prime').click(function(){
    var addbutton = $('.prime-i-add');
    if (addbutton.hasClass('prime-is-x')) {
        addbutton.addClass('prime-is-add');
        addbutton.removeClass('prime-is-x');
    } else {
        addbutton.addClass('prime-is-x');
        addbutton.removeClass('prime-is-add');
    }
});

// Ripple effect
var target, ink, d, x, y;
$(".fab").click(function(e) {
  target = $(this);
  //create .ink element if it doesn't exist
  if (target.find(".ink").length == 0)
    target.prepend("<span class='ink'></span>");

  ink = target.find(".ink");
  //incase of quick double clicks stop the previous animation
  ink.removeClass("animate");

  //set size of .ink
  if (!ink.height() && !ink.width()) {
    //use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
    d = Math.max(target.outerWidth(), target.outerHeight());
    ink.css({
      height: d,
      width: d
    });
  }

  //get click coordinates
  //logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
  x = e.pageX - target.offset().left - ink.width() / 2;
  y = e.pageY - target.offset().top - ink.height() / 2;

  //set the position and add class .animate
  ink.css({
    top: y + 'px',
    left: x + 'px'
  }).addClass("animate");
});


//**********************************
//**********************************
//**********************************   Sidebar js
//**********************************
//**********************************

$(document).ready(function() {
    var overlay = $('.sidebar-overlay');

    $('.sidebar-toggle').on('click', function() {
        var sidebar = $('#sidebar');
        sidebar.toggleClass('open');
        if (sidebar.hasClass('sidebar-fixed-left') && sidebar.hasClass('open')) {
            overlay.addClass('active');
            $('.MD-burger-layer').remove('MD-burger-line');
            $('.MD-burger-layer').add('MD-burger-arrow');
        } else {
            overlay.removeClass('active');
            $('.MD-burger-layer').removeClass('MD-burger-arrow');
            $('.MD-burger-layer').addClass('MD-burger-line');
        }
    });

    overlay.on('click', function() {
        $(this).removeClass('active');
        $('#sidebar').removeClass('open');
        $('.MD-burger-layer').removeClass('MD-burger-arrow');
        $('.MD-burger-layer').addClass('MD-burger-line');
    });

});

// Sidebar constructor
$(document).ready(function() {

    var sidebar = $('#sidebar');
    var sidebarHeader = $('#sidebar .sidebar-header');
    var sidebarImg = sidebarHeader.css('background-image');
    var toggleButtons = $('.sidebar-toggle');

    // Hide toggle buttons on default position
    toggleButtons.css('display', 'initial');
    $('body').css('display', 'initial');


    // Sidebar position
    $('#sidebar-position').change(function() {
        var value = $(this).val();
        sidebar.removeClass('sidebar-fixed-left').addClass(value).addClass('open');
        if (value == 'sidebar-fixed-left') {
            $('.sidebar-overlay').addClass('active');
        }
    });
});

//Add JQuery animation to bootstrap dropdown elements.
(function($) {
    var dropdown = $('.dropdown');

    // Add slidedown animation to dropdown
    dropdown.on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideup animation to dropdown
    dropdown.on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
})(jQuery);


(function(removeClass) {

    jQuery.fn.removeClass = function(value) {
        if (value && typeof value.test === "function") {
            for (var i = 0, l = this.length; i < l; i++) {
                var elem = this[i];
                if (elem.nodeType === 1 && elem.className) {
                    var classNames = elem.className.split(/\s+/);

                    for (var n = classNames.length; n--;) {
                        if (value.test(classNames[n])) {
                            classNames.splice(n, 1);
                        }
                    }
                    elem.className = jQuery.trim(classNames.join(" "));
                }
            }
        } else {
            removeClass.call(this, value);
        }
        return this;
    }

})(jQuery.fn.removeClass);


//**********************************
//**********************************
//**********************************   Burder js
//**********************************
//**********************************

(function() {

    'use strict';

    document.querySelector('.MD-burger-icon').addEventListener(
        'click',
        function() {
            var child;

            child = this.childNodes[1].classList;

            if (child.contains('MD-burger-arrow')) {
                child.remove('MD-burger-arrow');
                child.add('MD-burger-line');
            } else {
                child.remove('MD-burger-line');
                child.add('MD-burger-arrow');
            }

        });

})();
