<?php

if (($_POST['mix']) == 'mix') {
   shell_exec("echo 'G28 F600 G0 Z5 F70 G0 Z0.5 F600 G0 Z25 F70 G0 Z10 F70 G0 Z1.0 F600 G0 Z10 F70 G0 Z0.5 F600 G0 Z5 F70 G0 Z1.0 F600 G0 Z15 F70 G0 Z0.5 F600 G0 Z25 F70 G0 Z10 F70 G0 Z1.0 F600 G0 Z5 F70 G0 Z0.1 F600 G0 Z15 F70 G0 Z1.0 F600 G0 Z10 F70 G0 Z1.0 F600 G0 Z5 F70 G0 Z0.5 F600 G0 Z25 F70 G0 Z10 F70 G0 Z0.5 F600 G0 Z10 F70 G0 Z1.0 F600 G0 Z5 F70' > /dev/serial0");
   flush();
} 

  header('Location: rpi.php');


?>
