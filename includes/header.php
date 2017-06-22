<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- fix for viewport issues with responsive design:
    https://www.payetteforward.com/my-responsive-website-isnt-working-the-fix-viewport/
 -->
  <meta name="viewport" content="width=device-width">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Jquery(ui) & bootstrap js CDN's -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script async src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Google Font's (Lato fon't family)-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script async src="js/index.js"></script>

<title>Phoenix Motorcycle couriers</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div type="image" class="navbar-brand brand" id="brand" alt="Phoenix Motorcycle couriers"></div>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <!-- id's used to set the active class for the header (highlights active page in the css)-->
          <li id="homeNav"><a href="index.php">Home</a></li>
          <li id="orderNav"><a href="index.php?p=order">Order</a></li>
          <li id="accountNav"><a href="index.php?p=account">Account</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
<?php if($_SESSION['loggedin']){ ?>
        		<li><a href="index.php?p=logout">Logout</a></li>
        	<?php }else{ ?>
        		<li id="loginNav"><a href="index.php?p=login">Login</a></li>
            <li id="registerNav"><a href="index.php?p=register">Register</a></li><?php } ?></ul>
      </div>
    </div>
  </nav>