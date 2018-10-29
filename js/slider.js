/*
  Author : Sebastien Koss
  Copyright © 2016 All rights reserved. 
*/

var effects = ["bounceInDown", "fadeIn", "zoomIn", "zoomInUp", "zoomInLeft", "zoomInRight", "zoomInDown", "fadeInLeft", "fadeInRight", "flipInX", "flipInY", "lightSpeedIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight", "slideInLeft", "slideInRight", "rubberBand"];

$.each(effects, function(i, v) {
    $("#singleEffect").append("<option>" + v + "</option>");
});

$("select#singleEffect").on('change', function (e) {
    $("#random").attr('checked', false);
    var optionSelected = $("option:selected", this);
    var valueSelected = optionSelected.html();
})

function nextSlide() {
    if ($(".random").is(':checked')) {
        var effect = effects[Math.floor(Math.random() * effects.length)];
        if (effect == $(".effect").html(effect)) {
          var effect = effects[Math.floor(Math.random() * effects.length)];
        }
    } else {
        var effect = $("select#singleEffect option:selected").text();
    }
  
    $.each(effects, function(i, v) {
        $(".slide").removeClass(v)
    });
  
    var nextSlide = $('ul#slider li.slide.show');
    var classNames = effect + " animated show";
    nextSlide.removeClass(classNames);
  
    if (nextSlide.next().length) {
        nextSlide.next().addClass(classNames)
    } else {
        $('ul#slider li.slide:first').addClass(classNames)
    }
     
    $.each($("#singleEffect option"), function() {
        if (effect == $(this).html()) {
          $(this).attr('selected','selected');
        } else {
          $(this).removeAttr("selected");
        }
    });    
    $(".effect").html(effect);
  
    FPSMeter.run();
    if (!window.FPSMeter) {
        $(".frames").html("Your browser doesn't seem to be compatible with this test.")
    } else {
        document.addEventListener("fps", function(evt) {
            $(".frames").html(evt.fps + " fps")
        }, false)
    }
}

setInterval(nextSlide, '3500');

$(".buttonOC").click(function(){
  if ($(this).is(".open")) {
    $(this).animate({
      left: "-=350"
    }, 500, function() {
      $(".controls").animate({
        left: "-=250"
      }, 500);
      $(this).html("<h2>Settings <span>&raquo;</span></h2>").removeClass("open").animate({
        left: "+=350",
        top: "-=108"
      }, 500);
    });
  } else {
    $(this).animate({
      left: "-=100"
    }, 500, function() {
      $(".controls").animate({
        left: "+=250"
      }, 500);
      $(this).html("&laquo; Close").addClass("open").animate({
        left: "+=100",
        top: "+=108"
      }, 500);
    });
  }
});