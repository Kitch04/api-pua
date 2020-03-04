<?php

switch($_GET['p']) {
  default:
    include("table.php");
    break;
    
  case 'add':
    include("form_create.php");
    break;
}
?>
