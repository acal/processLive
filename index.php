<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no" />
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

<!-- Facebook like adn share button js -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook like share button script -->

<?php
  include('partials/_nav.php')
?>

<!-- Main content container div -->
<main>

<!--  Searchbar ------------------------------------------------>
<div class="container-fluid">
<br><br><br>
<div id="navigation-bar" class="clearfix">
            
            <form id="search" action="#" method="post">
                <div id="label"><label for="search-terms" id="search-label">search</label></div>
                <div id="input"><input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms..."></div>
            </form>
        
          <script src="js/classie.js"></script>
          <script src="js/search.js"></script> </div>

<?php 
include('partials/_serachox.php')
?>

<!-- end container -->
</div>


<!-- Header section ------------------------------------------------------------>
<div class="container-fluid">
  <header class="process">
   <div class="row">    
      <h1 class="less-row-space">PROCESS | UTILITIES</h1>
   </div>
   <div class="row">
      <h2 class="less-row-space">[ Engineer in Excel ]</h2>
   </div>
      <div class="clearfix"></div>
  </header>    
</div>
<!-- Info graphic / pitch --------------------------------------------------->
 <article>
  <div class="container">
    
    <div class="row">
      <div class="pitchPic">
        <img src="img/PID_picture.png" class="img-responsive" alt="PID Process Utilities" 
        width="1065px" height="404px" align="middle">
      </div>
    </div>
    
  </div>
  
  <div class="container-fluid">  
    <div class="row pitch-bold">
        <p><span><h3 class="text-center less-row-space">A set of custom functions,</h3></span>
        <span><h3 class="text-center less-row-space">taking Process Engineering in Excel to a new level.</h3></span></p>
    </div>
    <br>
        <div class="row pitch-bold">
          <table align="center">
            <tr>
              <th colspan="6"></th>
            </tr>
            <tr>
              <td rowspan="4"><img src="img/left_sq_brace.png" 
              class="img-responsive brackets" width="95px" height="95px" alt="left brace"></td>
              <td colspan="4">Excel – optimized for process & chemical engineering.</td>
              <td rowspan="4"><img src="img/right_sq_brace.png" 
              class="img-responsive brackets" width="95px" height="95px" alt="right brace"></td>
            </tr>
            <tr>
              <td colspan="4">Work more efficiently. Get to the results you need faster.</td>
            </tr>
            <tr>
              <td colspan="4">Get to the results you need faster.</td>
            </tr>
            <tr>
              <td colspan="4">Produce intuitive, usable spreadsheets.</td>
            </tr>
          </table>
        </div>
    <br><br>

         <div class="row">
           <div class="col-xs-0 col-sm-3 col-lg-3"></div>
           <div class="col-xs-12 col-sm-6 col-lg-6">
             <p class="text-center">intelligent unit conversion / dimensional analysis / molecular formulas / 
             pressure drop / engineering referencespecify standard and gauge conditions / 
             custom significant figures</p>
           </div>
           <div class="col-xs-0 col-sm-3 col-lg-3"></div>
         </div>
   <div class="clearfix"></div>
</article>
<?php
  include('partials/_purchaseButton.php')
?>
<!-- the functions section------------------------------------------------>
<?php
  include('partials/_functions.php')
?>

<!--  Demo / Screenshots ----------------------------------------------------->
<div class="container_fluid">
  <article id="demo">
    <div class="row panel_demo">
      <h1 class="text-center">[ DEMO ]</h1> 
      <br>
      <div class="col-xs-0 col-sm-3 col-lg-3"></div>
      <div class="col-xs-6 col-sm-9 col-lg-9">
     <p>Coming Soon...</p>
        <figure><div class="screenshot-container">Hello...</div></figure>
      </div>
    </div>	
    <div class="row panel_demo">
      <div class="col-xs-0 col-sm-1 col-lg-1"></div>
      <div class="col-xs-6 col-sm-11 col-lg-11">
        <figure><div class="screenshot-container">How are you?</div></figure>
      </div>
    </div>
    <div class="row panel_demo">
    <?php
    include('partials/_purchaseButton.php')
    ?>
  </div>
    <div class="clearfix"></div>
  </article>
<!-- close container-fluid -->
</div>

<!-- ebooks section-------------------------------------------------------------->
<div class="container-fluid panel_darkGrey">
  <article id="ebooks">
     <div class="row section_header">
          <h1 class="text-center">[ e^BOOKS ]</h1>
        </div>
      <div class="row text-center"><i>Coming soon...</i></div>
      <br>
      <div class="row">
      <div class="col-sm-0 col-md-0 col-lg-2"></div>
      <div class="col-sm-2 col-md-2 col-lg-2">
        <h2 class="ebook_vert hidden-xs">e^BOOKS</h2>
      </div>
      <div class="col-sm-10 col-md-10 col-lg-8">
        <ul class="ebook">
          <li><img src="/img/literature-16.png" width="16px" height="16px" alt="e-book icon"> BUILDING PROCESS CALCULATORS IN EXCEL</li>
          <li><img src="/img/literature-16.png" width="16px" height="16px" alt="e-book icon"> CONFIGURING EXCEL TO OPMTIMIZE WORK FLOW</li>
          <li><img src="/img/literature-16.png" width="16px" height="16px" alt="e-book icon"> INTELLIGENT MATERIAL AND ENERGY BALANCES IN EXCEL</li>
          <li><img src="/img/literature-16.png" width="16px" height="16px" alt="e-book icon"> CHEMICAL PROCESS TECHNOECONOMIC ANALYSIS IN EXCEL</li>
        </ul>
      </div>
    </div>
    <div class="row text-center"><i>Signup below for email update for e^book release information and promotionals </i></div><br>
    <div class="clearfix"></div>
  </article>   
<!-- close container-fluid -->
</div>
 
<!-- contact section -->
<div class="container-fluid panel_contact">
  <article id="contact">
    <div class="row section_header">
      <h1 class="text-center">[ CONTACT ]</h1>
    </div>
    <br>
    <div class="row text-center">  
      <p>For more information or to set up a meeting:</p>
      <p><a href="mailto:chris@processutilites.com">chris@processutilites.com</a></p>
    </div>
    <?php
    include('partials/_social.php')
    ?>
    <br>
    <div class="clearfix"></div>
    
     <?php
    include('partials/_subscribe.php')
    ?>
  <div class="clearfix"></div>
   
    <?php
    include('partials/_purchaseButton.php')
    ?>
    </div>
    <div class="clearfix"></div>
  </article> 
<!-- close container-fluid -->
</div>

<!-- Consulting section------------------------->			
<div class="container-fluid">
<article id="consulting">
	<div class="row section_header">
	  <h1 class="text-center">[ CONSULTING ]</h1>
	  <br>
    <div class="col-xs-4 col-lg-2 avatar"><img src="img/CB.jpg" class="img-circle img-responsive" 
      alt="Chirs Burk Image" width="64px" height="64px" align="right">
    </div>
	  <div class="col-xs-8 col-lg-10">
	    <ul class="contact">
	      <p>Chris Burk</p>
	      <li>10+ years experience in process development, modeling & evaluation
Energy, water, electrochemistry, specialty chemicals, oil & gas.</li>
        <li>Colorado Licensed Professional Engineer</li>
        <li>BS, MEng | Chemical Engineering | Cornell University</li>
      </ul>
    </div>
	</div>
  <br>

  <div class="row">
    <div class="col-xs-7 col-lg-6">
      <ul class="skill">
        <li>Excel development</li>
        <li>VBA, VB.net, Add-ins, User interface design</li>
        <li>Integration with process modeling software</li>
        <br>
        <li>Process modeling</li>
        <li>Techno-economic analysis</li>
        <li>Probabilistic & sensitivity analysis</li>
        <li>Cost estimation</li>
        <br>
        <li>Process design</li>
        <li>Equipment sizing</li>
        <li>Pilot plant design</li>
        <br>
        <li>P&ID development</li>
        <li>PFD & material balance</li>
      </ul>
    </div>

    <div class="col-xs-5 col-lg-6 climber">
      <img src="img/CB2.jpg" height="350px" width="250px" alt="Chris climbing pic">
    </div>
  </div>
  <div class="clearfix"></div>
</article>
<!-- close container-fluid -->
</div>
 
<?php
  include('partials/_footer.php')
?>
 


<!-- close main div container -->  

 </div>
 </main>

</body>
</html>