$(function () {
  $('.content').hide();
  $('a.read').click(function () {
      $(this).parent('.excerpt').hide();
      $(this).closest('.tenant').find('.content').slideDown('fast');
      return false; 
  });
  $('a.read-less').click(function () {
      $(this).parent('.content').slideUp('fast');
      $(this).closest('.tenant').find('.excerpt').show();
      return false;
  });
});