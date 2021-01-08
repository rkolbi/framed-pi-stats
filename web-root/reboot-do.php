<?php

if (($_POST['reboot']) == 'reboot') {
   echo "Rebooting the system.";
   shell_exec("sudo reboot");
} else {
  header('Location: rpi.php');
}

?>
