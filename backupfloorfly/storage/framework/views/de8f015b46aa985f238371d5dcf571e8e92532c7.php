<script type="text/javascript">
  
  var data = { "count": 1,
      "property": [
        <?php $__currentLoopData = \App\Properties::where('status','1')->orderBy('id','desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          {
          "pId": 'map/'+<?php echo e($property->id); ?>,
          "featured_property": <?php echo e($property->featured_property); ?>,
          "property_purpose": "<?php echo e($property->property_purpose); ?>",
          "longitude": <?php echo e($property->map_longitude); ?>,
          "latitude": <?php echo e($property->map_latitude); ?>,
          "pType": "<?php echo e(strtolower(getPropertyTypeName($property->property_type)->types)); ?>",
          "title": "<?php echo e(Str::limit($property->property_name,35)); ?>",
          "price": "<?php echo e(getcong('currency_sign').' '.$property->price); ?>",
          "pImage": "<?php echo e($property->featured_image.'-s.jpg'); ?>",
          "location": "<?php echo e(Str::limit($property->address,40)); ?>",
          "description": "<?php echo Str::limit($property->description,100); ?>", 
          "bedroom": <?php echo e($property->bedrooms); ?>, 
          "bathroom": <?php echo e($property->bathrooms); ?>

        },
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        ]}

  function initialize() {
  var bodyClass = jQuery('body').hasClass('property-listing-page map'),
    assetPath = (bodyClass == true ?  "../" : ''),
    myLatLng   = new google.maps.LatLng(<?php echo e(getcong('map_latitude')); ?>, <?php echo e(getcong('map_longitude')); ?>);
  var mapOptions = {
    zoom:               5,
    center:             myLatLng,
    // This is where you would paste any style found on Snazzy Maps.
    // styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}],
    styles:             [{
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers":     [{"color": "#444444"}, {"visibility": "simplified"}]
    }, {
      "featureType": "administrative.country",
      "elementType": "geometry.stroke",
      "stylers":     [{"visibility": "on"}, {"hue": "#ff0000"}, {"lightness": "59"}, {"gamma": "1"}]
    }, {
      "featureType": "administrative.country",
      "elementType": "labels.text",
      "stylers":     [{"visibility": "off"}, {"color": "#767676"}]
    }, {
      "featureType": "administrative.locality",
      "elementType": "labels.text",
      "stylers":     [{"visibility": "simplified"}, {"color": "#767676"}, {"lightness": "-23"}]
    }, {
      "featureType": "landscape",
      "elementType": "all",
      "stylers":     [{"color": "#f2f2f2"}, {"visibility": "on"}]
    }, {
      "featureType": "poi",
      "elementType": "all",
      "stylers":     [{"visibility": "off"}]
    }, {
      "featureType": "road",
      "elementType": "all",
      "stylers":     [{"saturation": -100}, {"lightness": 45}, {"visibility": "on"}]
    }, {
      "featureType": "road.highway",
      "elementType": "all",
      "stylers":     [{"visibility": "simplified"}, {"lightness": "100"}]
    }, {
      "featureType": "road.highway",
      "elementType": "labels",
      "stylers":     [{"visibility": "off"}]
    }, {
      "featureType": "road.arterial",
      "elementType": "labels.icon",
      "stylers":     [{"visibility": "off"}]
    }, {
      "featureType": "transit",
      "elementType": "all",
      "stylers":     [{"visibility": "off"}]
    }, {
      "featureType": "water",
      "elementType": "all",
      "stylers":     [{"color": "#fff"}, {"visibility": "on"}, {"lightness": "49"}]
    }, {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers":     [{"color": "#6a9ecb"}, {"lightness": "49"}]
    }],
    // Extra options
    scrollwheel:        false,
    mapTypeControl:     false,
    panControl:         false,
    zoomControlOptions: {
      style:    google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.LEFT_BOTTOM
    }
  }
  var map        = new google.maps.Map(document.getElementById('map'), mapOptions);

  var i;
  var markers = [];

  for (var i = 0; i < data.property.length; i++) {
    var dataProperty = data.property[i];
    var latLng       = new google.maps.LatLng(dataProperty.latitude, dataProperty.longitude);
    var propertyType = dataProperty.pType;
    var propertyId   = dataProperty.pId;

    var boxText = document.createElement("div");

    var infoboxOptions = {
      content:                boxText,
      disableAutoPan:         false,
      pixelOffset:            new google.maps.Size(-250, -10),
      zIndex:                 null,
      alignBottom:            true,
      maxWidth:               200,
      boxClass:               "infobox-main-container",
      enableEventPropagation: true,
      closeBoxURL:            assetPath + "site_assets/img/close.png",
      infoBoxClearance:       new google.maps.Size(1, 1)
    };

    var marker = new RichMarker({
      position: latLng,
      map:      map,
      flat:     true,
      content:  '<div class="logo ' + propertyType + '" id="p_id_' + propertyId + '"></div>'
    });
    markers.push(marker);

    //check sale or rent
    var purpose_class;

      if(dataProperty.property_purpose=="<?php echo e(trans('words.purpose_sale')); ?>")
      {
        purpose_class="sale";
      }
      else
      {
        purpose_class="rent";
      }

    if(dataProperty.featured_property)
    { 
      boxText.innerHTML  =
        '<div id="infobox-container">' +
        '<div class="propertybox-featured">' +
        '<div class="inner-container clearfix">' +
        '<a href="' + dataProperty.pId + '" class="img-container col-md-6">' +
        '<span class="tag-label hot-offer">Featured</span>'+
        '<img src="' + assetPath + 'upload/properties/' + dataProperty.pImage + '" alt="' + dataProperty.title + '">' +
        '<span class="price-box">' + dataProperty.price + '</span>' +
        '<div class="property-status-'+purpose_class+'"><span>'+ dataProperty.property_purpose +'</span></div>' +
        '</a>' +
        '<div class="col-md-6 main-info">' +
        '<a href="' + dataProperty.pId + '" class="title">' + dataProperty.title + '</a>' +
        '<div class="location">' + dataProperty.location + '</div>' +
        '<div class="desc">' + dataProperty.description + '</div>' +
        '<div class="bottom-sec clearfix">' +
        '<div class="extra-info">' +
        '<div class="bedroom"><div class="value">' + dataProperty.bedroom + '</div>bedroom</div>' +
        '<div class="bathroom"><div class="value">' + dataProperty.bathroom + '</div>bathroom</div>' +
        '</div>' +
        '<a href="' + dataProperty.pId + '" class="btn more-link">More Info</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
    }
    else
    {
      boxText.innerHTML  =
        '<div id="infobox-container">' +
        '<div class="propertybox-featured">' +
        '<div class="inner-container clearfix">' +
        '<a href="' + dataProperty.pId + '" class="img-container col-md-6">' +
        '<img src="' + assetPath + 'upload/properties/' + dataProperty.pImage + '" alt="' + dataProperty.title + '">' +
        '<span class="price-box">' + dataProperty.price + '</span>' +
        '<div class="property-status-'+purpose_class+'"><span>'+ dataProperty.property_purpose +'</span></div>' +
        '</a>' +
        '<div class="col-md-6 main-info">' +
        '<a href="' + dataProperty.pId + '" class="title">' + dataProperty.title + '</a>' +
        '<div class="location">' + dataProperty.location + '</div>' +
        '<div class="desc">' + dataProperty.description + '</div>' +
        '<div class="bottom-sec clearfix">' +
        '<div class="extra-info">' +
        '<div class="bedroom"><div class="value">' + dataProperty.bedroom + '</div>bedroom</div>' +
        '<div class="bathroom"><div class="value">' + dataProperty.bathroom + '</div>bathroom</div>' +
        '</div>' +
        '<a href="' + dataProperty.pId + '" class="btn more-link">More Info</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
    }
    markers[i].infobox = new InfoBox(infoboxOptions);

    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        var h;
        for (h = 0; h < markers.length; h++) {
          markers[h].infobox.close();
        }
        markers[i].infobox.open(map, this);
      }
    })(marker, i));

  }
  var clusterStyles = [
    {
      url:    assetPath + 'site_assets/img/pattern.png',
      height: 30,
      width:  30
    }
  ];
  var markerCluster = new MarkerClusterer(map, markers, {styles: clusterStyles, maxZoom: 15});

  if (jQuery('#location-search-box').length > 0) {
    var input        = document.getElementById('location-search-box');
    var autocomplete = new google.maps.places.Autocomplete(input);
  }
  google.maps.event.addDomListener(window, 'load', initialize);

}
</script><?php /**PATH C:\xampp\htdocs\floorfly\resources\views/_particles/footer_map.blade.php ENDPATH**/ ?>