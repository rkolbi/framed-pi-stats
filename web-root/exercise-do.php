<?php

if (($_POST['exercise']) == 'exercise') {

   shell_exec("echo 'G28 G0 Z200 G0 Z1 G0 Z200 G0 Z1 G0 Z200 G0 Z1 G0 Z200 G0 Z1 G0 Z200' > /dev/serial0");
   flush();

} 

  header('Location: rpi.php');


?>
