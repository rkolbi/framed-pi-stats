<?PHP

if (($_POST['resete']) == 'reset') {
   shell_exec("cp enviro.csvbkup enviro.csv");
   header('Location: rpi.php');
} else {
   header('Location: rpi.php');
}



?>
