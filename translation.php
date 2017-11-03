<?php
    // Join array elements in a string
    $result = implode(" ", $array);
    // Encode the string to be usable in URL
    $result = urlencode($result);

    // Initiate cURL
    $curl = curl_init();

    // Recup. the select with the traduction needed
    $trad = $_POST['tradselect'];
    $source = substr($trad,0,2);
    $target = substr($trad, 2,4);
    // Assign the URL (which translates) to a variable
    $url = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDIlDbLBBkW8gEkBrNJD-1pYiOIMjeQbwY&q=$result&target=$target&source=$source";
    // cURL to open the URL
    curl_setopt($curl, CURLOPT_URL, $url);
    // Return in a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // Avoid the SSL check by Google to be sure it works (Network problems with the security ETML)
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    // Execute the cURL
    $final = curl_exec($curl);
    // Decode the Json that Google gives
    $json = json_decode($final, true);
    $translated = $json['data']['translations'][0]['translatedText'];
    // Close cURL
    curl_close($curl);




    /*
    else if($trad == "ANFR") {
        $url = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDIlDbLBBkW8gEkBrNJD-1pYiOIMjeQbwY&q=$result&target=fr&source=en";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $final = curl_exec($curl);
        $json = json_decode($final, true);
        $translated = $json['data']['translations'][0]['translatedText'];
        curl_close($curl);
    }
    else if($trad == "FRDE") {
        $url = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDIlDbLBBkW8gEkBrNJD-1pYiOIMjeQbwY&q=$result&target=de&source=fr";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $final = curl_exec($curl);
        $json = json_decode($final, true);
        $translated = $json['data']['translations'][0]['translatedText'];
        curl_close($curl);
    }
    else if($trad == "FRIT") {
        $url = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyDIlDbLBBkW8gEkBrNJD-1pYiOIMjeQbwY&q=$result&target=it&source=fr";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $final = curl_exec($curl);
        $json = json_decode($final, true);
        $translated = $json['data']['translations'][0]['translatedText'];
        curl_close($curl);
    }*/


?>









