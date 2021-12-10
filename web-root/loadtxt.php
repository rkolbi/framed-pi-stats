<?php
        $file = "latest.php";
        $f = fopen($file, "r");
        while ( $line = fgets($f, 1000) ) {
            print $line;
        }
//
//$cURLConnection = curl_init();
//curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost:5000/api/print_status');
//curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
//
//$Status = curl_exec($cURLConnection);
//curl_close($cURLConnection);
//$data = json_decode($Status, true);
//
//$key = 'state';
//echo " / Status: ".$data['state']." @ ".$data['progress']."%";

    ?>
