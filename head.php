<?php

  session_start();
  $base_url='http://ana-horvat-poetry.net';

?>

<!DOCTYPE html>
<html lang="hr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php print $base_url; ?>/logo.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php print $title; ?> | Ana Horvat Poetry</title>

    <!-- Bootstrap -->
    <link href="<?php print $base_url; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php print $base_url; ?>/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="<?php print $base_url; ?>/lib/font-awesome/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Raleway:300,400" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body style="padding-top:71px;">

    <nav class="navbar navbar-default nav-colored navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <a style="padding-top:0;" class="navbar-brand" href="<?php print $base_url; ?>">
            <img class="hidden-xs" width="100" src="<?php print $base_url; ?>/logo.png">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true" style="padding-right:15px;"></i>IZBORNIK</a>
              <ul class="dropdown-menu">
                <li><a href="<?php print $base_url; ?>/zbirke-poezije/">ZBIRKE POEZIJE</a></li>
                <li><a href="<?php print $base_url; ?>/prozna-djela/">PROZNA DJELA</a></li>
                <li><a href="<?php print $base_url; ?>/recenzije-i-kritike/">RECENZIJE I KRITIKE</a></li>
                <li><a href="<?php print $base_url; ?>/antologije-poezije/">ANTOLOGIJE POEZIJE</a></li>
                <li><a href="<?php print $base_url; ?>/prijevodi-poezije/">PRIJEVODI POEZIJE</a></li>
                <li><a href="<?php print $base_url; ?>/pjesnicki-recitali/">PJESNIČKI RECITALI</a></li>
                <li><a href="<?php print $base_url; ?>/predstavljanje-knjiga/">PREDSTAVLJANJE KNJIGA</a></li>
                <li><a href="http://www.pjesnici-ane-horvat.net/">POEZIJA NA INTERNETU</a></li>
                <li><a href="http://drugaprilika.hr/">ZAŠTITA ŽIVOTINJA</a></li>
                <li><a href="<?php print $base_url; ?>/pjesnici-ani-horvat/">PJESNICI ANI HORVAT</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
