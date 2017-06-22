<?php
if(isset($_POST['name']) || isset($_POST['description'])){
  $git = new gitHandler();


  /*if this worked we could move to create tabs to do each task specified in githandler*/
//  $message = $git->getAllRepos();


    /*sample user input*/
    	/* @array:  terms[
    			@ name=> string
    			@ description => string
    	]*/
  if($_POST['name'] !== "" && $_POST['description'] !== "")
  {
  $array = array("name"=>$_POST['name'],"description"=>$_POST['description']);

  //$message = $git->createRepo($array);
  echo print_r($array,true);
  }
  else {
    echo "please enter a value for name and description";
  }
}
?>

<form name="search" action="index.php?p=home" method="POST">
		<?php
    /*error class: nicer looking errors ^_^*/
    if(isset($error)){
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        '.$error.'
        </div>';
        }
  		?>
		<input type="text" name="name"/>
    <input type="text" name="description"/>
    <input type="submit" value="submit"/>
</form>
