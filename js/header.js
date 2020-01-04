var $ = jQuery.noConflict();
$(document).ready(function(){

  $(".hamburger").click(function () {
        $(".category-container .category-filter").removeClass("active");
        $(this).addClass("active");
        someFunction();
        e.preventDefault(); /*ignores actual link*/
    });

  var count = $('.blog-post').length
  $("#filter-count").text(count);




});
// Add our event listeners
document.getElementById('live-search').addEventListener('input', someFunction, false);
