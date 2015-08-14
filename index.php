<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(mail("info@agent168th.com",
    "contact from sevenseas.agent168th.com" ,
"Name: {$_POST['name']}
========================
Email: {$_POST['email']}
========================
Message: {$_POST['message']}
========================
Telephone: {$_POST['tel']}
========================"
    )){
    header("Refresh: 3");
    echo "send mail success.";
  }
  else {
    header("Refresh: 3");
    echo "Can't send mail.";
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SevenSeas</title>

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <script src="js/jssor.js"></script>
    <script src="js/jssor.slider.js"></script>
    
  </head>
  <body>
      <?php 
        include 'top.php';
      ?>
      <?php 
        $_page = @$_GET['page']? $_GET['page'] : 'home';
        include $_page.".php";
      ?>
      <?php 
        include 'foot.php';
      ?>
  </body>
</html>