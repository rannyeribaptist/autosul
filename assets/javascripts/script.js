$(document).ready(function() {
  // Transition effect for navbar
  $(window).scroll(function() {
    // checks if window is scrolled more than 100px, adds/removes solid class
    if($(this).scrollTop() > 100) {
      $('.navbar').addClass('navbar--colored');
    } else {
      $('.navbar').removeClass('navbar--colored');
    }
  });
});

$('.toggle-navbar').click(function() {
  if ($('.navbar__content').hasClass('navbar__content--active')) {
    $('.navbar__content').removeClass('navbar__content--active');

    if($(window).scrollTop() < 100) {
      $('.navbar').removeClass('navbar--colored');
    }
  } else {
    $('.navbar__content').addClass('navbar__content--active');
    $('.navbar').addClass('navbar--colored');
  }
});
