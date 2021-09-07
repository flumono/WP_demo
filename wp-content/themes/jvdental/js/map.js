// Определяем переменную map
var map;

// Функция initMap которая отрисует карту на странице
function initMap() {

  // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
  map = new google.maps.Map(document.getElementById('map'), {
    // При создании объекта карты необходимо указать его свойства
    // center - определяем точку на которой карта будет центрироваться 
    center: {lat: 50.43466311839109, lng: 30.53126195596705},
    // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
    zoom: 18,
    styles: [
    {
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": -100
            },
            {
                "gamma": 0.54
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#4d4946"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "gamma": 0.48
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "gamma": 7.18
            }
        ]
    }
]
    // Добавляем свои стили для отображения карты
  //сюда вставить стили
  });

  // Создаем маркер на карте
  var marker = new google.maps.Marker({

    // Определяем позицию маркера
      position: {lat: 50.43466311839109, lng: 30.53126195596705},

      // Указываем на какой карте он должен появится. (На странице ведь может быть больше одной карты)
      map: map,

      // Пишем название маркера - появится если навести на него курсор и немного подождать
      title: 'JVDENTAL Стоматологическая клиника',

      // Укажем свою иконку для маркера
      icon: 'https://jvdental.com.ua/wp-content/themes/jvdental/img/map_icon.png'
  });

  // Создаем наполнение для информационного окна
  var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<div id="firstHeading" class="firstHeading">JVDENTAL</div>'+
        '<div id="bodyContent">'+
        '<p>Стоматологическая клиника</p>'+
        '</p>'+
        '</div>'+
        '</div>';

  // Создаем информационное окно
  var infowindow = new google.maps.InfoWindow({
     content: contentString,
     maxWidth: 400
  });

  // Создаем прослушивание, по клику на маркер - открыть инфо-окно infowindow
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}