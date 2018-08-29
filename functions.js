
function msm(){
	alert('Bienvenido al curso JavaScript de aprenderaprogramar.com');
}

function grafica() {
  google.charts.load('current', {'packages':['line']});
  google.charts.setOnLoadCallback(drawChart);

}

function temp(miarray) {
	//alert("INICIO");
  var n = eval(miarray);
  //document.write(n.length);
  var e1 = [];
  e1[0] = "Temperatura: " + n[0].toString();
  e1[1] = n[1];
  e1[2] = n[2];
  var e2 = [];
  e2[0] = "Temperatura: " + n[3].toString();
  e2[1] = n[4];
  e2[2] = n[5];  
  var e3 = [];
  e3[0] = "Temperatura: " + n[6].toString();
  e3[1] = n[7];
  e3[2] = n[8];
  var e4 = [];
  e4[0] = "Temperatura: " + n[9].toString();
  e4[1] = n[10];
  e4[2] = n[11];
  var e5 = [];
  e5[0] = "Temperatura: " + n[12].toString();
  e5[1] = n[13];
  e5[2] = n[14];
  var e6 = [];
  e6[0] = "Temperatura: " + n[15].toString();
  e6[1] = n[16];
  e6[2] = n[17];
  var marcadores =
      [
        e1,e2,e3,e4,e5,e6
      ];
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 10 ,
        center: new google.maps.LatLng(14.634915 , -90.506882),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    //google.maps.event.addDomListener(window, 'load', initialize);
//    alert('a');
}

function UV(miarray) {
  //alert("INICIO");
  var n = eval(miarray);
  //document.write(n.length);
  var e1 = [];
  e1[0] = "Radiacion UV:: " + n[0].toString();
  e1[1] = n[1];
  e1[2] = n[2];
  var e2 = [];
  e2[0] = "Radiacion UV:: " + n[3].toString();
  e2[1] = n[4];
  e2[2] = n[5];  
  var e3 = [];
  e3[0] = "Radiacion UV:: " + n[6].toString();
  e3[1] = n[7];
  e3[2] = n[8];
  var e4 = [];
  e4[0] = "Radiacion UV:: " + n[9].toString();
  e4[1] = n[10];
  e4[2] = n[11];
  var e5 = [];
  e5[0] = "Radiacion UV:: " + n[12].toString();
  e5[1] = n[13];
  e5[2] = n[14];
  var e6 = [];
  e6[0] = "Radiacion UV:: " + n[15].toString();
  e6[1] = n[16];
  e6[2] = n[17];
  var marcadores =
      [
        e1,e2,e3,e4,e5,e6
      ];
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 10 ,
        center: new google.maps.LatLng(14.634915 , -90.506882),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    //google.maps.event.addDomListener(window, 'load', initialize);
//    alert('a');
}

function presion(miarray) {
  //alert("INICIO");
  var n = eval(miarray);
  //document.write(n.length);
  var e1 = [];
  e1[0] = "Presion:: " + n[0].toString();
  e1[1] = n[1];
  e1[2] = n[2];
  var e2 = [];
  e2[0] = "Presion:: " + n[3].toString();
  e2[1] = n[4];
  e2[2] = n[5];  
  var e3 = [];
  e3[0] = "Presion:: " + n[6].toString();
  e3[1] = n[7];
  e3[2] = n[8];
  var e4 = [];
  e4[0] = "Presion:: " + n[9].toString();
  e4[1] = n[10];
  e4[2] = n[11];
  var e5 = [];
  e5[0] = "Presion:: " + n[12].toString();
  e5[1] = n[13];
  e5[2] = n[14];
  var e6 = [];
  e6[0] = "Presion:: " + n[15].toString();
  e6[1] = n[16];
  e6[2] = n[17];
  var marcadores =
      [
        e1,e2,e3,e4,e5,e6
      ];
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 10 ,
        center: new google.maps.LatLng(14.634915 , -90.506882),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    //google.maps.event.addDomListener(window, 'load', initialize);
//    alert('a');
}

function humedad(miarray) {
  //alert("INICIO");
  var n = eval(miarray);
  //document.write(n.length);
  var e1 = [];
  e1[0] = "Humedad:: " + n[0].toString();
  e1[1] = n[1];
  e1[2] = n[2];
  var e2 = [];
  e2[0] = "Humedad:: " + n[3].toString();
  e2[1] = n[4];
  e2[2] = n[5];  
  var e3 = [];
  e3[0] = "Humedad:: " + n[6].toString();
  e3[1] = n[7];
  e3[2] = n[8];
  var e4 = [];
  e4[0] = "Humedad:: " + n[9].toString();
  e4[1] = n[10];
  e4[2] = n[11];
  var e5 = [];
  e5[0] = "Humedad:: " + n[12].toString();
  e5[1] = n[13];
  e5[2] = n[14];
  var e6 = [];
  e6[0] = "Humedad:: " + n[15].toString();
  e6[1] = n[16];
  e6[2] = n[17];
  var marcadores =
      [
        e1,e2,e3,e4,e5,e6
      ];
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 10 ,
        center: new google.maps.LatLng(14.634915 , -90.506882),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    //google.maps.event.addDomListener(window, 'load', initialize);
//    alert('a');
}