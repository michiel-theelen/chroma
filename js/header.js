var $ = jQuery.noConflict();
$(document).ready(function(){

  $(".hamburger").click(function () {
        $(this).toggleClass("active");
        body.toggleClass("disableScroll")
  });

  var count = $('.blog-post').length
  $("#filter-count").text(count);


  $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      $('#menu-item-1864').toggleClass('current-page-item',
       //add 'ok' class when div position match or exceeds else remove the 'ok' class.
        scroll >= $('#vorm').offset().top
      );
  });
  //trigger the scroll
  $(window).scroll();//ensure if you're in current position when page is refreshed

});
// Add our event listeners
document.getElementById('live-search').addEventListener('input', someFunction, false);
