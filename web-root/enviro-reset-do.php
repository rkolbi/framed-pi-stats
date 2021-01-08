<?PHP

if (($_POST['resete']) == 'reset') {
   echo "Shutting down system.";
   shell_exec("cp enviro.csvbkup enviro.csv");
   header('Location: rpi.php');
} else {
   header('Location: rpi.php');
}



?>
