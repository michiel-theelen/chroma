var $ = jQuery.noConflict();
$(document).ready(function(){

  $(".hamburger").click(function () {
        $(this).toggleClass("active");
  });

  var count = $('.blog-post').length
  $("#filter-count").text(count);




});
// Add our event listeners
document.getElementById('live-search').addEventListener('input', someFunction, false);
