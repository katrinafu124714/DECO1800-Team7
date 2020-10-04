
async function fetchWildNetData(species) {
    let url =`https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species=${species}`;
    const response = await fetch(url)
    const data = await response.json();
    
    console.log(data.Species[0])
      var koala = document.getElementById("koala");
      koala.innerHTML = "TaxonID: " + data.Species[0].TaxonID + " " 
      + data.Species[0].ScientificName + " " 
      + data.Species[0].ConservationStatus.NCAStatus + " "
      + data.Species[0].AcceptedCommonName + " "
      + data.Species[0].ClassCommonName
    
    return data
}
//   var koala = document.getElementById("kola");
//   koala.innerHTML = fetchWildNetData(koala)

  fetchWildNetData("koala");