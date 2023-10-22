    </main>

    <?php include("inc/aside.php"); ?>

    <footer class="footer footer--bg-two">
      <div class="footer__inner">
        <a href="<?php echo $location_link ?>" target="_blank" rel="noopener noreferrer"><address><?php echo $practice_name ?>, <?php echo $location_address ?></address></a>
        <ul>
          <li><a href="<?php echo $privacy_policy ?>" title="Read our privacy policy" target="_blank" rel="noopener">Privacy Policy</a></li>
          <li>Updated: <?php echo date("F Y");?></li>
          <li>Marketing by <a href="https://dental-design.marketing/">Dental Design</a></li>
          <?php if ( $cookie_tag || $cookie_pixel ) { ?> 
          <li><a href="javascript:void(0);" id="resetCookieConsent" class="cookie-dialog__reset" tabindex="0" type="button" title="Reset and open cookie preferences">Reset cookie preference</a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="footer__contact<?php if ($current_page) { ?> footer__contact--<?php echo $current_page ?><?php } ?>">
        <ul>
          <li>
            <button type="button" data-dialog="dialogContact">
              <span class="icon icon--calendar"><svg role="img"><use xlink:href="#calendar" href="#calendar"></use></svg></span>Book Today
            </button>
          </li>
          <li>
            <a href="tel:<?php echo $phone_link ?>">
              <span class="icon icon--phone"><svg role="img"><use xlink:href="#phone" href="#phone"></use></svg></span>Call Now
            </a>
          </li>
        </ul>
      </div>
    </footer>

    <?php include("inc/icons.php"); ?>

    <script async defer type="text/javascript">

      <?php 
      
      use MatthiasMullie\Minify;

      $map = 'if (document.getElementById("map")){

        function initeMap() {

          const style = [
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e9e9e9"
                },
                {
                  "lightness": 17
                }
              ]
            },
            {
              "featureType": "landscape",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                },
                {
                  "lightness": 20
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 17
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 29
                },
                {
                  "weight": 0.2
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 18
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 16
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                },
                {
                  "lightness": 21
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dedede"
                },
                {
                  "lightness": 21
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "visibility": "on"
                },
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 16
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "saturation": 36
                },
                {
                  "color": "#333333"
                },
                {
                  "lightness": 40
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f2f2f2"
                },
                {
                  "lightness": 19
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#fefefe"
                },
                {
                  "lightness": 20
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry.stroke",
              "stylers": [
                {
                  "color": "#fefefe"
                },
                {
                  "lightness": 17
                },
                {
                  "weight": 1.2
                }
              ]
            }
          ]

          const center = new google.maps.LatLng(' . $center_longitude . ',' . $center_latitude . ');
          const location = new google.maps.LatLng(' . $location_longitude . ',' . $location_latitude . ');

          const options = {
            zoom: 16,
            center: center,
            styles: style,
            zoomControl: false,
            disableDoubleClickZoom: false,
            mapTypeControl: false,
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
            opened: true,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };

          const container = document.getElementById("map");

          const map = new google.maps.Map(container, options);

          const icon = {
            url: "./img/marker.png",
            scaledSize: new google.maps.Size(' . $marker_width . ',' . $marker_height . ')
          };

          const marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: icon
          });

        }

      }';

      $minifier = new Minify\JS($map);
      
      if ($dengro_hook) {
          
        $jquery = './js/jquery-3.6.1.min.js';
        $minifier->add($jquery);

        $validate = './js/jquery.validate.min.js';
        $minifier->add($validate);

        $dengro = './js/dengro.js';
        $minifier->add($dengro);

      } else {

        $validate = './js/validate.js';
        $minifier->add($validate);

      }

      $select2 = './js/nice-select2.js';
      $minifier->add($select2);

      $script = './js/script.js';
      $minifier->add($script);       
      
      echo $minifier->minify();
      
      ?>

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2Yj0cZfmd380OOF1JZQfSZEAxt_NbAtI&callback=initeMap" type="text/javascript" async defer></script>

  </body>

</html>