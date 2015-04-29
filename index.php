<!DOCTYPE html>

<html lang="en" class="no-js" prefix="og: http://ogp.me/ns#">

<head>
<?php
  include('partials/_head.php')
?>    
</head>

<body>
<!-- Google Tag Manager -->
<?php
  include('partials/_tag.php')
?>
<!-- End Google Tag Manager -->


<!-- Main content container div -->
<main>
<div class="container-fluid">
<!-- Nav -->
<?php
  include('partials/_nav.php')
?>

<!-- Header section -->
<?php
  include('partials/_header.php')
?>    

<!-- Info graphic / pitch -->
 <article>
    <div class="row">
      <div class="pitchPic">
        <img src="img/PID_picture.png" class="img-responsive" alt="PID Process Utilities" 
        width="1367" height="510">
      </div>
    </div>
 
    <div class="row">
        <h3 class="text-center less-row-space"><span>A set of custom functions,</span></h3>
        <h3 class="text-center less-row-space"><span>taking Process Engineering in Excel to a new level.</span></h3>
    </div>
    <br>
    <div class="row pitch-center">
          <table>
            <tr>
              <th colspan="6"></th>
            </tr>
            <tr>
              <td rowspan="4"><img src="img/left_sq_brace.png" 
              class="img-responsive brackets" width="95" height="95" alt="left brace"></td>
              <td colspan="4">Excel – optimized for process & chemical engineering.</td>
              <td rowspan="4"><img src="img/right_sq_brace.png" 
              class="img-responsive brackets" width="95" height="95" alt="right brace"></td>
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
         <?php
          include('partials/_purchaseButton.php')
          ?>
</article>

<!-- fung-fb provides background image for functions and demo section -->
  <div class="func_bg">
<!-- the functions section -->
    <?php
      include('partials/_functions.php')
    ?>
<!-- end div func-bg -->  
  </div>
<!--  Demo / Screenshots -->
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
  </article>


<!-- ebooks section -->
<div class="panel_darkGrey">
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
          <li><img src="/img/literature-16.png" width="16" height="16" alt="e-book icon"> BUILDING PROCESS CALCULATORS IN EXCEL</li>
          <li><img src="/img/literature-16.png" width="16" height="16" alt="e-book icon"> CONFIGURING EXCEL TO OPMTIMIZE WORK FLOW</li>
          <li><img src="/img/literature-16.png" width="16" height="16" alt="e-book icon"> INTELLIGENT MATERIAL AND ENERGY BALANCES IN EXCEL</li>
          <li><img src="/img/literature-16.png" width="16" height="16" alt="e-book icon"> CHEMICAL PROCESS TECHNOECONOMIC ANALYSIS IN EXCEL</li>
        </ul>
      </div>
    </div>
    <div class="row text-center"><i>Signup below for email update for e^book release information and promotionals </i></div><br>

  </article>   
</div> 
<!-- contact section -->
<div class="panel_contact text-center">
  <article id="contact">
    <div class="row section_header">
      <h1 class="text-center">[ CONTACT ]</h1>
    </div>
    <br>
   
      <?php
      include('partials/_social.php')
      ?>
      <br>
    
    
     <?php
    include('partials/_subscribe.php')
    ?>
   
    <?php
    include('partials/_purchaseButton.php')
    ?>
  
  </article>
</div>


<!-- Consulting section -->			
<article id="consulting">
	<div class="row section_header">
	  <h1 class="text-center">[ CONSULTING ]</h1>
	  <br>
    <div class="col-xs-4 col-lg-2 avatar"><img src="img/CB.jpg" class="img-circle img-responsive" 
      alt="Chirs Burk Image" width="64" height="64">
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
        <li>PFD &amp; material balance</li>
      </ul>
    </div>

    <div class="col-xs-5 col-lg-6 climber">
      <img src="img/CB2.jpg" height="350" width="250" alt="Chris climbing pic">
    </div>
  </div>

</article>

<?php
  include('partials/_footer.php')
?>
 


<!-- close main div container -->  
  </div>
</main>

</body>
</html>