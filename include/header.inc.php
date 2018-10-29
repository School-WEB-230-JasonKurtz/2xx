<?php
	//Pulls data elements used throughout the entire websites
	require_once 'content.data.php';

	//Pulls functions used throughout the entire websites
	require_once 'functions.inc.php';

    /*
        The following will be passed along to JavaScript by establishing variables in PHP and passing them into the HTML via Global JavaScript variables the same names used for PHP
    */
    $siteName = 'inside out | 2xx';
?>
<!doctype html>
<?php
    //This is the begining of the html the browser will process
?>
<html>
    <?php
        //information used by the browser
    ?>
    <head>
       <meta charset="utf-8">
       <?php
                /*
                    displayed anywhere the title is use for the browser, search engine, etc.

                */
        ?>
       <title><?php echo $siteName; ?></title>
       <?php
                /*
                    used to display information about the page by search engine and other sites looking at our page
                */
        ?>
        <meta name="description" content="Inside out is a class project we use to learn html" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script>
            var siteName = '<?php echo $siteName; ?>';
        </script>
    </head>
    <?php
        /*
            content displayed in the browser window
        */
    ?>
    <body>
        <header>
            <h1><a href="index.php"><?php echo $siteName; ?></a></h1>
            <h2>continuously falling forward into the light...</h2>
            <nav>
			  <?php
			  	echo menuBuilder($content['pages']);
			  ?>
		  </nav>
        </header>
