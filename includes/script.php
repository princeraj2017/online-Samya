
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<script src="js/owl.carousel.js"></script>

        <script>
            $(document).ready(function($) {
              $("#owl-example").owlCarousel();
            });
            $("body").data("page", "frontpage");


              $(window).bind('scroll', function(event) {
                  var headerheight = $('nav').height();
                       if ($(window).scrollTop() > 100) {
                           $('body').addClass('stickynav');
                       }
                       else {
                           $('body').removeClass('stickynav');
                       }
                 });
            $(document).on('click', '.mobile-tauko ', function () {
              $('nav').toggleClass('mobile-menu').removeClass('show-form');
              });

             $(document).on('click', '.search-button a ', function () {
              $('nav').removeClass('mobile-menu').toggleClass('show-form');

              });
              
              
        </script>