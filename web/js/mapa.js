 
     
      function colosio() {
        var myLatlng = new google.maps.LatLng(21.113316, -86.838372);
        var myLatlng1 = new google.maps.LatLng(21.112046, -86.838554);
        var myLatlng2 = new google.maps.LatLng(21.111746, -86.838608);
        var mapOptions = {
          center: myLatlng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
        
       var marker = new google.maps.Marker({
      position: myLatlng1,
      map: map,
      title: 'Espectaculares',
      icon: 'http://espectacularescancun.com/web/image/pin.png' 
  });
       var marker = new google.maps.Marker({
      position: myLatlng2,
      map: map,
      title: 'Espectaculares',
      icon: 'http://espectacularescancun.com/web/image/pin.png' 
  });
      };
    
    function huayacan() {
        var myLatlng = new google.maps.LatLng(21.118077, -86.846017);
        var myLatlng1 = new google.maps.LatLng(21.118788, -86.845813);
        var myLatlng2 = new google.maps.LatLng(21.117797, -86.846672);
        var myLatlng3 = new google.maps.LatLng(21.117195, -86.847112);
        var mapOptions = {
          center: myLatlng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas2"),
            mapOptions);
        
       var marker = new google.maps.Marker({
      position: myLatlng1,
      map: map,
      title: 'Espectaculares',
      icon: 'web/image/pin.png' 
  });
       var marker = new google.maps.Marker({
      position: myLatlng2,
      map: map,
      title: 'Espectaculares',
      icon: 'web/image/pin.png' 
  });
       var marker = new google.maps.Marker({
      position: myLatlng3,
      map: map,
      title: 'Espectaculares',
      icon: 'web/image/pin.png' 
  });
      };
      
      google.maps.event.addDomListener(window, 'load', colosio);
      google.maps.event.addDomListener(window, 'load', huayacan);