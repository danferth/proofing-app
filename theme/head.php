<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="dns-prefetch" href="//ajax.googleapis.com">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $this->currentPage['title']; ?></title>
        <meta name="description" content="<?php echo $this->currentPage['description']; ?>">
        <?php
        if(isset($mobileView) && $mobileView == true){
            echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
        }else{
            echo "<!-- mobile option not selected -->";
        }
        ?>
        <!-- ***********FAVICON AND APPLE TOUCH ICON SETTINGS****************** -->
        <link rel="icon" type="image/png" href="/assets/images/favicons/256x160image.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" href="/assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" href="/assets/images/favicons/favicon.png" />
        <!--[if IE]><link rel="shortcut icon" href="assets/images/favicons/favicon.ico"><![endif]-->
        <!-- or, set /favicon.ico for IE10 win -->
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="/assets/images/favicons/tileicon.png">
        <!-- *************END favicon and apple touch icon settings************ -->

        <!-- IE9 pinned site
        <meta name="application-name" content="Sample Title">
        <meta name="msapplication-tooltip" content="A description of what this site does.">
        <meta name="msapplication-starturl" content="http://www.example.com/index.html?pinned=true">
        <meta name="msapplication-navbutton-color" content="#ff0000">
         END IE9 pinned site -->
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
        <link type="text/plain" rel="author" href="/humans.txt">
        <link rel="stylesheet" href="/assets/css/build/global.css">
        <?php
        if(isset($this->currentPage['pageCSS']) && $this->currentPage['pageCSS'] != ""){
            echo "<link rel=\"stylesheet\" href=\"/assets/css/build/".$this->currentPage['pageCSS'].".css\">";
        }
        ?>

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="/assets/js/lib/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
    <?php include 'nav.php'; ?>