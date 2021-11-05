<?php
include '../include/ssh2.php';

function shoot_cmd($srvname,$login,$pass,$cmd){
  $ssh_connection = new ssh2($srvname);
  $ssh_connection->authPassword($login,$pass);
  return $ssh_connection->cmdExec($srvname, $cmd);
}


// main
$result = "";
$arr_server = explode(";", $_POST['server']);
$arr_cmd = explode("&&", $_POST['command']);

foreach ($arr_server as &$server) {
  foreach ($arr_cmd as &$cmd) {
    $result .= "<div class='alert alert-dark' role='alert'>Executed command: <b>". $cmd . "</b> on " . $server . "</div>";
    $result .= shoot_cmd($server,$_POST['login'],$_POST['password'],$cmd);
  }
}
print $result;
?>
