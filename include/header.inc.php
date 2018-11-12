<?php

	session_start();

	//Pulls data information and configuration used throughout the application
	require_once 'config.inc.php';

	//Pulls data elements used throughout the entire websites
	require_once 'content.data.php';

	//Pulls functions used throughout the entire websites
	require_once 'functions.inc.php';

	if($_SERVER['SERVER_PORT'] == '80' && $_SERVER['HTTP_HOST'] !== 'localhost') {
		header('Location: https://'.$_SERVER['HTTP_HOST']);
	}

?>
<!doctype html>

     <?php
          //this is begining of the html the browser will process
     ?>
     <html>
          <?php
               //information used by the browser
          ?>
          <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1">

               <?php
                    /*
                         displayed anywhere the title is used
                         for the browser, search engines, etc.
                    */
               ?>
               <title><?php echo SITENAME; ?></title>
               <?php
                    /*
                         used to display information about the
                         page by search engines and other sites
                         looking at our page.
                    */
               ?>
               <meta name="description" content="inside out is a class project we use to learn html." />

               <!-- Bootstrap -->
               <link href="assets/css/bootstrap.css" rel="stylesheet">

               <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
               <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
               <!--[if lt IE 9]>
                      <script src="assets/js/html5shiv.min.js"></script>
                      <script src="assets/js/respond.min.js"></script>
                    <![endif]-->

               <!-- styles used globaly for animations in our website -->
               <link rel="stylesheet" href="assets/css/animate.min.css">

               <link rel="stylesheet" type="text/css" href="assets/css/style.css">

               <script>
                    var siteName = '<?php echo SITENAME; ?>';
               </script>

          </head>
          <?php
               //contnet displayed in the browser window
          ?>
          <body>
          <div id="wrapper">
               <header>
                    <div class="container clearfix">
                         <h1 id="logo"><a href="index.php">
                              <a href="index.php"><?php echo SITENAME; ?></a>
                         </h1>
                         <nav id="primary_nav_wrap">
                              <?php echo menuBuilder($content['pages']); ?>
                         </nav>
                    </div>
               </header>
               <div id="main">
                    <div id="content">
