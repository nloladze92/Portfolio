$(document).ready(function() {
  // Resize element to keep aspect ratio 1:1
  $('.globe').css("width", $('.globe').height());
  $(window).resize(function() {
    $('.globe').css("width", $('.globe').height());
  });
});