<?php

if (($_POST['reboot']) == 'reboot') {
   echo "Rebooting Mars2P, please wait.";
   shell_exec("echo 'M6040 I0' > /dev/serial0");
   flush();
   sleep(6);
   header('Location: rpi.php');
} else {
  header('Location: rpi.php');
}

?>
