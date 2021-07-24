<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="/js/lightgallery.js"></script>
<script src="/js/jquery.mousewheel.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/hammer.js"></script>
<script src="/js/scripts.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
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
  
  function getId(url) {
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        var match = url.match(regExp);

        if (match && match[2].length == 11) {
            return `https://youtube.com/embed/${match[2]}`;
        } else {
            return 'error';
        }
    }

    function convertFigureToIframe() {
        let medias = document.querySelectorAll('figure.media');
        for (let i = 0 ; i < medias.length; i++) {
            const url = medias[0].children[0].attributes[0].value
            let newUrl = getId(url);

            if (newUrl == 'error') {
                newUrl = medias[0].children[0].attributes[0].value
            }

            const iFrame = document.createElement('iframe')
            iFrame.width = "100%"
            iFrame.height = "600"
            iFrame.src = newUrl

            medias[i].replaceWith(iFrame)
        }
    }
    convertFigureToIframe()
  </script>
