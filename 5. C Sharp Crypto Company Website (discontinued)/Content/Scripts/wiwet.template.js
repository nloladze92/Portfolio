/*

WIWET.com - ASP.NET Templates

Build-R Template

*/
$(document).ready(function(){
  var screenWidth = $(window).width();
  var screenHeight = $(window).height();
  var topBar = $(".top-bar").height();
  var navBar = $(".navbar").height();
  var footer = $("footer").height();
  $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 700);
    return false;
  });

  $("header").height(screenHeight-5);
  $(".provider-quality,.product-quality").height($(".services-top img").height());
  $(".client-services,.support247").height($(".services-bottom img").height());

  $(".down-trigger").click(function() {
    $('html, body').animate({
        scrollTop: $("header + div,header + section").offset().top
    }, 800);
  });

  //animations start
$(".titleAnimation").addClass("animated shake");
if (screenWidth > 767) {
var waypoints = $('body').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect,.fadeUpEffect1,.fadeUpEffect2,.fadeUpEffect3,.fadeUpEffect4,.fadeRightEffect,.fadeLeftEffect,.fadeRightEffect1,.fadeLeftEffect1").addClass("hiddenFromView");
  }
});

var waypoints = $('.fadeUpEffect').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect").addClass("animated fadeInUp");
  },offset: '80%'
});
var waypoints = $('.fadeUpEffect1').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect1").addClass("animated fadeInUp");
  },offset: '80%'
});
var waypoints = $('.fadeUpEffect2').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect2").addClass("animated fadeInUp");
  },offset: '80%'
});
var waypoints = $('.fadeUpEffect3').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect3").addClass("animated fadeInUp");
  },offset: '80%'
});
var waypoints = $('.fadeUpEffect4').waypoint({
  handler: function(direction) {
    $(".fadeUpEffect4").addClass("animated fadeInUp");
  },offset: '80%'
});

var waypoints = $('.fadeLeftRight').waypoint({
  handler: function(direction) {
    $(".fadeLeftEffect").addClass("animated fadeInLeftBig");
    $(".fadeRightEffect").addClass("animated fadeInRightBig");
  },offset: '60%'
});

var waypoints = $('.fadeLeftRight1').waypoint({
  handler: function(direction) {
    $(".fadeLeftEffect1").addClass("animated fadeInLeftBig");
    $(".fadeRightEffect1").addClass("animated fadeInRightBig");
  },offset: '60%'
});

var waypoints = $('.achievements').waypoint({
  handler: function(direction) {
    $('.count-happy').countTo({from: 0, to: 1k, speed: 2000, refreshInterval: 100});
    $('.count-projects').countTo({from: 0, to: 12, speed: 2000, refreshInterval: 100});
    $('.count-shares').countTo({from: 0, to: 10 Billion, speed: 2000, refreshInterval: 100});
  },offset: '60%'
});

var waypoints = $('.animateBars').waypoint({
  handler: function(direction) {
    var bar = $('.progress-bar');
    $(function(){
      $(bar).each(function(){
        bar_width = $(this).attr('aria-valuenow');
        $(this).width(bar_width + '%');
      });
    });
  },offset: '80%'
});
}

  //animations end

   var oneSpace = "&nbsp;";
   var blankSpace = "Scrolling&nbsp;Textarea";
   for (var i = 1; i < 5000; i++) {
     blankSpace += oneSpace;
   };
   $("#scrolling-textarea").html(blankSpace);
});//end document ready

$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
});

// Select the navigation menu base on URL.
$(function () {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);
    if (path == '') {
        path = "/";
    }
    $(".wiwet-navigation li a").each(function () {
        if ($(this).attr('href') == path) {
            $(this).parent().addClass("active");
        }
    });
});