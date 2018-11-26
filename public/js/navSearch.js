$("#my-form").submit(function() {
let latitude = document.getElementById("latitude").value;
if (latitude) {
     console.log(latitude);
  } else {

let term = $("#address").val();
let geocoder = new google.maps.Geocoder();

    if (geocoder) {
        geocoder.geocode({
            "address": term
        }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {

                let latitude = results[0].geometry.location.lat();
                let longitude = results[0].geometry.location.lng();

                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;

            } else {
                console.log("Geocoding failed: " + status);
                return false;
            }
        });
    }
     return false;
    }
});


function geo() {

autocomplete = new google.maps.places.Autocomplete(
    (document.getElementById('address')), {
      types: ['geocode']
    });
  autocomplete.addListener('place_changed', addlatlong);
}

function addlatlong() {

var place = autocomplete.getPlace();

if (place.geometry) {

var latitude = place.geometry.location.lat();
var longitude = place.geometry.location.lng();

document.getElementById("latitude").value = latitude;
document.getElementById("longitude").value = longitude;

document.forms["my-form"].submit();

} else {


let term = $("#address").val();
let geocoder = new google.maps.Geocoder();

    if (geocoder) {
        geocoder.geocode({
            "address": term
        }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {

                let latitude = results[0].geometry.location.lat();
                let longitude = results[0].geometry.location.lng();

                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;

                document.forms["my-form"].submit();

            } else {
                console.log("Geocoding failed: " + status);
                return false;
            }
        });
    }
    





}
}





