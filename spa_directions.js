console.info('spa_directions.js loaded');

const directionsInfo = document.querySelector('#directions-info');
const directionsButton = document.querySelector('#get-directions');
directionsButton.addEventListener('click', getLocation);
let directionsService;
let directionsDisplay;

function getLocation(){

    navigator.geolocation.getCurrentPosition(function(position) {
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            initMap(pos);
    });
}

function initMap(user){
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    let store = new google.maps.LatLng(43.66011,-79.43425);
    const options = {zoom: 11, scaleControl: true, center: store};
    directionsMap = new google.maps.Map(document.querySelector('#directions-map'), options);
    directionsDisplay.setMap(directionsMap);
    calcRoute(store, user);

}

function calcRoute(start, destination){
  let request = {
    origin: start,
    destination: destination,
    travelMode: google.maps.TravelMode.DRIVING 
  };

  directionsService.route(request, function(result, status){
    if(status == 'OK'){
      directionsDisplay.setDirections(result);
    }

  })
}