<?php
   shell_exec("echo 'M33' > /dev/serial0");
   flush();
   header('Location: rpi.php');
?>
