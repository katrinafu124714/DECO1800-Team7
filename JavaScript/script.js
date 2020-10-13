function getYear(year) {
	if(year) {
		return year.match(/[\d]{4}/); 
	}
}

function iterateRecords(results) {

	console.log(results);


	var myMap = L.map("map").setView([-21, 148], 4);
	L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidXFpZHJ1Z28iLCJhIjoiY2tlcDdmbDV2MDc2ZjJ4bnk5bTgwcmkwbSJ9.aiKl3J-I-lVcj0iTllZlpg", {

	attribution: 'Map data © href="https://www.openstreetmap.org/">OpenStreetMap contributors, href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA, Imagery © href="https://www.mapbox.com/">Mapbox',

	maxZoom: 18,

	id: 'mapbox/streets-v11',

	tileSize: 512,

	zoomOffset: -1,

	accessToken: 'your.mapbox.access.token'

	}).addTo(myMap);
	var a = 0
		$.each(results.occurrences, function(recordID, recordValue) {
		a = a+1
		var recordLatitude = recordValue["decimalLatitude"];
		console.log(recordLatitude);
		console.log(recordValue["vernacularName"]);
		var recordLongitude = recordValue["decimalLongitude"];
		console.log(a)
		if(recordLatitude && recordLongitude && recordValue["vernacularName"]) {
			console.log(recordLatitude);
			var lat = recordLatitude;
			var long = recordLongitude;
			// year = toString(recordValue['year'])
			// console.log(recordValue['year'])
			// Position the marker and add to map
			var marker = L.marker([lat, long]).addTo(myMap);
			popupText = "" + recordValue["vernacularName"];
			marker.bindPopup(popupText).openPopup();
		}
	});

}

$(document).ready(function() {

	var data = {
		q: "Macropus+rufus",
		pageSize: 100,
		// limit: 100
	}

	$.ajax({
		url: "https://biocache.ala.org.au/ws/occurrences/search",
		data: data,
		//dataType: "jsonp",
		cache: true,
		success: function(results) {
			iterateRecords(results);
		}
	});

});