<?php 
    // $koalaURL = `https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species=860`;
    // $data = file_get_contents($koalaURL);
    // $data = json_decode($data, true);
    // echo '<pre>' . print_r($data, true) . '</pre>';


    $api_url = 'https://www.data.qld.gov.au/api/3/action/datastore_search?resource_id=9eaeeceb-e8e3-49a1-928a-4df76b059c2d&limit=1000';
    $data = file_get_contents($api_url);
    $data = json_decode($data, true);
    echo '<pre>' . print_r($data, true) . '</pre>';
?>