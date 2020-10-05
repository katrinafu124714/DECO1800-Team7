
// var os = require('os')
// console.log(JSON.stringify(os.EOL))
// var br=document.createElement('br');

// async function fetchWildNetData(species) {
//     let url =`https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species=${species}`;
//     const response = await fetch(url)
//     const data = await response.json();

//     const content = "TaxonID: " + data.Species[0].TaxonID + "\n"
//     + data.Species[0].ScientificName + "\n" 
//     + data.Species[0].ConservationStatus.NCAStatus + "\n"
//     + data.Species[0].AcceptedCommonName + " is "
//     + data.Species[0].ClassCommonName
    
//     console.log(data.Species[0])
//       var specie = document.getElementById(species)
//       const info = document.createElement("div");
//       const text = document.createTextNode(content)
//       info.appendChild(text)
    

//       console.log(content)

//       specie.innerText = "TaxonID: " + data.Species[0].TaxonID + "\n"
//       + data.Species[0].ScientificName + "\n" 
//       + data.Species[0].ConservationStatus.NCAStatus + "\n"
//       + data.Species[0].AcceptedCommonName + " is "
//       + data.Species[0].ClassCommonName
      
//     // return data
// }
//       var koala = document.getElementById("koala");


// fetchWildNetData("koala");

// fetchWildNetData("wombat")

// fetchWildNetData("wallaby")


var API_KEY = '18578751-c87aa0c0f6e901144b7f7926c';
var URL = "https://pixabay.com/api/?key="+API_KEY+"&q="+encodeURIComponent('koala');
console.log(URL)
// $.getJSON(URL, function(data){
// if (parseInt(data.totalHits) > 0)
//     $.each(data.hits, function(i, hit){ console.log(hit.pageURL); });
// else
//     console.log('No hits');
// });