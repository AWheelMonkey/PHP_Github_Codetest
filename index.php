<?php
require_once('config.php');

  if($_GET['p'])
  {
    require_once('pages/'.$_GET['p'].'.php');
  }
  else
  {
    require_once('pages/home.php');
  }
 
require_once('includes/footer.php');
?>
