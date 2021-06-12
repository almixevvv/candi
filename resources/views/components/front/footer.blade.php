<script src="/js/jquery.min.js"></script>
<script
  src="/js/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script src="/js/lightgallery.js"></script>
<script src="/js/jquery.mousewheel.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/hammer.js"></script>
<script src="/js/scripts.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    //Directory Filter
    $('#openFilter').click(function() {
        // $('.filter-page').addClass('filter-page-active');
        $('.filter-page').css('top', '0');
        $('.filter-button').css('bottom', '0');
    }); 

    $('#closeFilter').click(function() {
        $('.filter-page').css('top', '-50em');
        $('.filter-button').css('bottom', '-50em');
    });

    //Blog Slider
  var slider = document.getElementById('slider'),
      sliderTrigger = document.querySelector('.section-scrollable .section-featured');

  if (sliderTrigger) {
      var flkty = new Flickity(slider, {
          wrapAround: true,
          contain: true,
          adaptiveHeight: true,
          accessibility: false,
          prevNextButtons: false,
          pageDots: false,
          selectedAttraction: .025,
          friction: .3,
          dragThreshold: 5
      });

      /* Next button */
      var nextButton = document.getElementById('next');
      nextButton.addEventListener('click', function() {
          flkty.next();
      });

      /* Add class to "loop" when is slider */
      var loop = document.getElementById('loop');
      if (flkty.cells.length > 0) {
          loop.classList.remove('no-featured');
          loop.classList.add('is-featured');
      }

      /* iOS 12 & 13 fix */
      var tapArea, startX;
      tapArea = document.querySelectorAll('.section-scrollable');
      startX = 0;
      for (var item of tapArea) {
          item.ontouchstart = function(e) {
              startX = e.touches[0].clientX;
          };
          item.ontouchmove = function(e) {
              if (Math.abs(e.touches[0].clientX - startX) > 5 && e.cancelable) {
                  e.preventDefault();
              }
          };
      }
  }
  </script>