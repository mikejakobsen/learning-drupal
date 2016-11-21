(function($) {
  $(window).resize(function(){
    if(!$(".mobileselect").length) {
      createMobileMenu();
    } else if ($(window).width()>=480) {
      $('#navigation ul').show();
      $('.mobileselect').hide();
    } else {
      $('#navigation ul').hide();
      $('.mobileselect').show();
    }
  });
  function createMobileMenu(){
    $('#navigation ul').mobileSelect({
      autoHide: true, // Hide the ul automatically
      defaultOption: "Navigation", // The default select option
      deviceWidth: 480, // The select will be added for screensizes smaller than this
      appendTo: '', // Used to place the drop-down in some location other than where the primary nav exists
      className: 'mobileselect', // The class name applied to the select element
      useWindowWidth: true // Use the width of the window instead of the width of the screen
    });
  }
  Drupal.behaviors.mobileMenu = {
    attach: function (context) {
      createMobileMenu();
    }
  };
  $.support.placeholder = (function(){
    var i = document.createElement('input');
    return 'placeholder' in i;
  })();

  // Hide labels by default if placeholders are supported
  if($.support.placeholder) {
    $('.form.contact-form .form-item label').each(function(){
      $(this).addClass('js-hide-label');
    });

    // Code for adding/removing classes here
    $('.form.contact-form .form-item input').find('input, textarea').on('keyup blur focus', function(e){

      // Cache our selectors
      var $this = $(this),
        $parent = $this.parent().find("label");

      if (e.type === 'keyup') {
        if( $this.val() === '' ) {
          $parent.addClass('js-hide-label');
        } else {
          $parent.removeClass('js-hide-label');
        }
      }
      else if (e.type === 'blur') {
        if( $this.val() === '' ) {
          $parent.addClass('js-hide-label');
        }
        else {
          $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
        }
      }
      else if (e.type === 'focus') {
        if( $this.val() !== '' ) {
          $parent.removeClass('js-unhighlight-label');
        }
      }
    });
  }
})(jQuery);
