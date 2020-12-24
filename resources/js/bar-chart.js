
  'use strict';
  
$(document).ready(function() {
  function skillSet() {
    $('.bar-info').each(function() {
      let total = $(this).data("total");
      $(this).css("width", total + "%");
    });
    $('.percent').each(function() {
      let $this = $(this);
      $({
        Counter: 10
      }).animate({
        Counter: $this.text()
      }, {
        duration: 3000,
        easing: 'swing',
        step: function() {
          $this.text(Math.ceil(this.Counter) + "%");
        }
      });
    });
  };
  setTimeout(skillSet, 1000);
});
