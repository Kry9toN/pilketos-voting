<!-- JS -->
<script src="https://kry9ton.tech/js/jquery.js"></script>
<script src="https://kry9ton.tech/js/popper.js"></script>
<script src="https://kry9ton.tech/js/bootstrap.js"></script>
<script src="https://kry9ton.tech/js/wow.js"></script>
<script src="https://kry9ton.tech/js/jquery.easing.js"></script>

<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      //$('#nav').addClass('fixed-top');
    } else {
      $('.back-to-top').fadeOut('slow');
      //$('#nav').removeClass('fixed-top');
    }
  });

  if ($(this).scrollTop() > 100) {
    $('.back-to-top').fadeIn('slow');
    //$('#nav').addClass('fixed-top');
  }

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });
</script>
