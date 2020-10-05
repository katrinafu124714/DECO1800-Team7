<?php 
    // include("header.php");
    $koalaURL = 'https://apps.des.qld.gov.au//species//?op=getspeciesinformation&taxonid=860';
    $data = file_get_contents($koalaURL);
    $data = json_decode($data, true);
    echo $data;
    echo '<pre>' . print_r($data, true) . '</pre>';
?>