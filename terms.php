<!DOCTYPE html>

<html lang="en" class="no-js" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" type="image/png" href="/img/favicon_32px.jpg" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/img/favicon_16px.jpg" sizes="16x16"/>
    <title>Process|Utilities Excel Add-in for Engineers</title>

    <meta property="og:title" content="Process | Utility"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://processutility.com"/>
    <meta property="og:image" content="/img/process-logo.png"/>
  
    <meta name="function description" content="Process Utility"/>
    <meta name="author" content="Process Utilities" />
    <meta name="description" content="Process Utilities Microsoft Excel Engineering Addon Plugin">
    <meta name="keywords" content="Microsoft Excel, addin, plugin, unit 
    conversions, process engineering, flows, temperatures, pressure, gases, liquids, steam, molecules, atomic">

    <!--[if lt IE 9]>
    <script src="/javascripts/libs/html5shiv.min.js"></script>
    <script src="/javascripts/libs/css3-mediaqueries.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/slide.css" />
    <link rel="stylesheet" href="/css/process.css" type="text/css"/>
    
    
    <script src="js/jquery.1.11.1.min.js"></script>
    <script src="js/bootstrap.3.3.4.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://use.fonticons.com/9943254c.js"></script> 
    
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe  title="google tag manager" src="//www.googletagmanager.com/ns.html?id=GTM-TM7GCW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TM7GCW');</script>
<!-- End Google Tag Manager -->

<!-- Facebook like adn share button js sdk -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook like share button script -->


<!-- Main content container div -->
<main>
<div class="container-fluid">
<!-- Nav -->
<?php
  include('partials/_nav.php')
?>
<!--  Searchbar -->
  <br><br><br>
  <div id="search-bar">
          <form id="search" action="#" method="post">
              <div id="label"><label for="search-terms" id="search-label">search</label></div>
              <div id="input"><input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms..."></div>
          </form>
          <script src="js/classie.js"></script>
          <script src="js/search.js"></script> 
  </div>

<!-- Header section -->
<header class="process">
   <div class="row">    
      <h1 class="less-row-space">PROCESS | UTILITIES</h1>
   </div>
   <div class="row">
      <h2 class="less-row-space">[ Engineer in Excel ]</h2>
   </div>
</header>    
<br>
    <article>
    <div class="container">
    <div class="row">
        <h1 class="left">Legal Stuff: Term and Conditions of Website Use</h1>
    </div>
    <hr>
    <div class="row">
        <p>All images, content and other forms of media served from this website, also referred to as the "site", 
        are copyrighted.  Unauthorized reproduction of media is restricted.  Please contact info@processutilities.com 
        for reproduction and/or licensing information.</p>
        <br>
        <p>Digital social sharing of website images or content via twitter, linkedin or facebook is permitted 
        but must contain publicly readable and functioning hyperlinks to the original content found on this site 
        and whenever practicable include publicly readable text with the content reading 
        "Copyright: Burk Engineering LLC" or "Credits: Burk Engineering LLC"</p>
        <br>
        <p>The content of this site is intended for mature audiences.  Children under 13 are not permitted.</p>
        <br>
        <p>Updated: April 28, 2015</p>
        <br>
    </div>
    </article>

<?php require('partials/_footer.php')
?>
<!-- close main div container -->  
  </div>
</main>

</body>
</html>