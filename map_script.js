
var location = [x, y]; /*get input from select on this */
function getCoord(locationIndex) {
    switch(locationIndex) {
        case "1":
            location = [44.48, -73.21];
            break;
        case "2":
            location = [44.80, -68.77];
            break;
        case "3":
            location = [44.80, -68.77];
            break;
        case "4":
            location = [42.34, -71.21];
            break;
        case "5":
            location = [41.49, -71.31];
            break;
    }
}

var amt = $("#amount").val();

$("#createButton").click(function() {
    alert("Generate sample donation button called");
    //GENERATE SAMPLEs TO WHATEVER BACKEND WE'RE USING
})

/*
Takes coordinates as input and returns a JSON from Google's geocoding API
(USING MY API KEY HARDCODED IN
 */
function getLocationFromCoord(coordX, coordY) {
    var xhr = new XMLHttpRequest();

    var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=";

    var myKey = "AIzaSyAUmzQ1cjY6rIYx_Nd2B7ZC8zWFOnN54Rw";

    url += (coordX + "," + coordY + "&key=" + myKey);

    xhr.open('GET', url, true);
    xhr.send();

    xhr.onreadystatechange =  processRequest;

    function processRequest(e) {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            alert(response.results[0].address_components[5].long_name);
        }
    }
}