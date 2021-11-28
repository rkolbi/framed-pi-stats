<?php
        $file = "latest.php";
        $f = fopen($file, "r");
        while ( $line = fgets($f, 1000) ) {
            print $line;
        }
    ?>
