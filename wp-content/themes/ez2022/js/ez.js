(function($) {
  $(function(){

    if ($('.video').length) {
      visible = (el) => {
        let rect = el.getBoundingClientRect();
        return (rect.bottom >= 0 && rect.right >= 0 && rect.top <= (window.innerHeight || document.documentElement.clientHeight) && rect.left <= (window.innerWidth || document.documentElement.clientWidth));
      }

      check = () => {
        $('.video').each(function() {
          if (visible(this) &&  $(this.parentElement).find('iframe').length === 0) {
            // If the video image is visible and does not already have an iframe insert it.
            var classList = $(this).attr("class");
            var classArr = classList.split(/\s+/);
            var img = this;
            $.each(classArr, function(_, value){
              if (value.startsWith('vimeo-')) {
                // If there is a vimeo class insert the video.
                $(img).hide();
                var div = document.createElement('div');
                $(div).addClass('ratio ratio-16x9');
                var iframe = document.createElement('iframe');
                iframe.src = 'https://player.vimeo.com/video/' + value.replace('vimeo-', '');
                div.appendChild(iframe);
                img.parentElement.appendChild(div);
              }
            });
          }
        })
      }

      check(); 

      $(window).scroll(function() {
        check(); 
      });
    }

    if ($('.page-70').length) {
      // If contact us page setup the buttons.
      
      // Contact page question submit focus on first form field.
      $('.page-70 .submit').click(function (e) {
        e.preventDefault();
        $('.wpforms-first input').focus();
      })

      // Chat button open facebook dialog.
      $('.page-70 .chat').click(function (e) {
        e.preventDefault();
        FB.CustomerChat.showDialog();
      })

      // Facebook takes some time to load, so show loading when clicked.
      setTimeout(function chat() {
        // Poll and check for FB to be available. There's small chance the FB load
        // event happens before this and the button will stay stuck on Loading...
        if (typeof FB !== 'undefined') {
          FB.Event.subscribe('customerchat.load', function() {
            $('.page-70 .chat a').text('Chat');
          });
        } else {
          setTimeout(chat, 300)
        }
      }, 300)
    }

  })
})(jQuery);
