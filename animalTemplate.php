<?php

    function getSpecieInfo($specie) {
        //API call
        $specieURL = 'https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species='.$specie;
        $data = file_get_contents($specieURL);
        $data = json_decode($data, true);
        
    
        $ScientificName = $data['Species']['0']['ScientificName'];
        $ConservationStatus = $data['Species']['0']['ConservationStatus']['NCAStatus'];

        $api_key = '18578751-c87aa0c0f6e901144b7f7926c';
        $specie_image_url = 'https://pixabay.com/api/?key=' . $api_key  ."&q=". urlencode($specie);
        $img = file_get_contents($specie_image_url);
        $img = json_decode($img, true);
        $img = $img['hits'][0]['webformatURL'];
      
        echo "
        <h1>$ConservationStatus</h1>
        <h1>$ScientificName</h1>
        <img src=$img>
        ";
    }

    getSpecieInfo("koala");
    
    getSpecieInfo("whale");


?>

<?php getSpecieInfo("wombat")?>