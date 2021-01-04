<?php

if (($_POST['shutdown']) == 'shutdown') {
   echo "Shutting down system.";
   shell_exec("sudo shutdown -h now");
} else {
  header('Location: rpi.php');
}

?>
