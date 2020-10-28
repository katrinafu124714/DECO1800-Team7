var isLoading = true;
var data = {
	q: "Koala",
	pageSize: 100,
};

function handleInput(){
	var input = document.getElementById("search").value;
	var container = document.getElementById("map");
	var content = container.innerHTML;
	container.innerHTML = content;
	
	console.log('refreshed');
	inputAnimal = input;
	data = {
		q: inputAnimal,
		pageSize: 100,
	}
	loadMap();
	console.log(map);
}


function getYear(year) {
	if(year) {
		return year.match(/[\d]{4}/); 
	}
}

function iterateRecords(results) {
	// Line 32-45 are from workshop 6
	var myMap = L.map("map").setView([-21, 148], 4);

	L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidXFpZHJ1Z28iLCJhIjoiY2tlcDdmbDV2MDc2ZjJ4bnk5bTgwcmkwbSJ9.aiKl3J-I-lVcj0iTllZlpg", {

	attribution: 'Map data © href="https://www.openstreetmap.org/">OpenStreetMap contributors, href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA, Imagery © href="https://www.mapbox.com/">Mapbox',

	maxZoom: 18,

	id: 'mapbox/streets-v11',

	tileSize: 512,

	zoomOffset: -1,
	}).addTo(myMap);
	var a = 0
		$.each(results.occurrences, function(recordID, recordValue) {
		a = a+1
		var recordLatitude = recordValue["decimalLatitude"];
		var recordLongitude = recordValue["decimalLongitude"];
		if(recordLatitude && recordLongitude && recordValue["vernacularName"]) {
			var lat = recordLatitude;
			var long = recordLongitude;
			var marker = L.marker([lat, long]).addTo(myMap);
			popupText = "Name: " + recordValue["vernacularName"];
			marker.bindPopup(popupText).openPopup();
		}
	});
}

function loadMap(){
	// The following codes are from workshop 6
	$(document).ready(function() {
		$.ajax({
			url: "https://biocache.ala.org.au/ws/occurrences/search",
			data: data,
			cache: true,
			success: function(results) {
				iterateRecords(results);
			}
		});
	});
}
// loadMap();



