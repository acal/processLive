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
</div>

<div class="container">
<!-- Info graphic / pitch -->
 <article>
    <div class="row">
      <div class="pitchPic">
        <img src="img/PID_picture.png" class="img-responsive" alt="PID Process Utilities" 
        width="1367" height="510">
      </div>
    </div>
 
    <div class="row">
        <h3 class="text-center pitchLine">A set of custom functions,
        taking Process Engineering in Excel to a new level.</h3>
    </div>
    <br>
    <div class="row pitch-center">
          <table>
            <tr>
              <th colspan="3"><span class="sr-only">What it does...</span></th>
            </tr>
            <tr>
              <td rowspan="4">
                  <img src="img/left_sq_brace.png" 
                  class="img-responsive brackets" width="20" height="172" alt="left brace">
              </td>
              <td colspan="1" class="text-center pitch-line">Excel – <span class="pink-text">
                   optimized</span> for process &amp; chemical engineering.
              </td>
              <td rowspan="4">
                  <img src="img/right_sq_brace.png" 
                  class="img-responsive brackets" width="20" height="172" alt="right brace">
              </td>
            </tr>
            <tr>
              <td class="text-center pitch-line">Be more <span class="orange-text">
                  efficient</span>. Get to the results you need faster.</td>
            </tr>
            <tr>
              <td colspan="1" class="text-center pitch-line">Design <span class="green-text">
              intuitive</span>, usable spreadsheet solutions.</td>
            </tr>
          </table>
        </div>
    <br><br>

        
         <?php
          include('partials/_purchaseButton.php')
          ?>
</article>
<!-- End Div container -->
</div>

<div class="container-fluid">
<!-- fung-bg provides background image for functions and demo section -->
  <div class="func_bg row">
<!-- the functions section -->
    <?php
      include('partials/_functions.php')
    ?>
<!-- end div func-bg -->  
  </div>
<!-- end container -->
 </div>
 <div class="container">
    <!--  Demo / Screenshots -->
    <article id="demo">
        <div class="row panel_demo">
            <h1 class="text-center functions-header">[ Supporting materials ]</h1>
        </div>
        <div class="row panel_demo">
            <br>
            <div class="col-xs-0 col-sm-0 col-lg-1"></div>
            <div class="col-xs-6 col-sm-4 col-lg-4">
                <figure>
                    <div class="screenshot-container">
                        <a href="/help/helpDoc/ProcessUtilitiesHelp.1.01.pdf" target="_blank">
                            <img src="img/Help_SS.png" class="img-responsive" alt="Chris Burk Image">
                        </a>
                    </div>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-8 col-lg-7">
                <h3>Process Utilities Help</h3>
                <p>The process utilites functions and user interface are covered completely in this help file. This file is also accessible from the add-in user interface in standard, searchable Windows format.</p>
            </div>
        </div>
        <div class="row panel_demo">
            <div class="col-xs-0 col-sm-0 col-lg-1"> </div>
            <div class="col-xs-6 col-sm-4 col-lg-4">
                <figure>
                    <div class="screenshot-container">
                        <a href="/help/gettingStarted/gettingStarted.1.0.pdf" target="_blank">
                            <img src="img/GettingStarted_SS.png" class="img-responsive" alt="Chris Burk Image">
                        </a>
                    </div>
                </figure>
            </div>
            <div class="col-xs-6 col-sm-8 col-lg-7">
                <h3>Getting started....</h3>
                <p>An overview of some of Process Utilities' most useful features. </p>
            </div>
        </div>
    <div class="row panel_demo">
      <?php
      include('partials/_purchaseButton.php')
      ?>
    </div>
  </article>
</div>

<!-- ebooks section -->
    <div class="panel_darkGrey container-fluid">
        <article id="ebooks">
            <div class="row section_header">
                <h1 class="text-center functions-header">[ e^BOOKS ]</h1>
                <h4 class="text-center"><i>Coming soon...</i></h4>
            </div>
            <br>
            <div class="container">
            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-0 col-lg-1"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                <figure>
                    <img src="img/ebooks_SS.png" class="img-responsive ebooks-screenshot-container" alt="ebooks by Process Utilities"></a>
                </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <ul class="ebook">
                        <li><img src="img/literature-16.png" width="16" height="16" alt="e-book icon">&nbsp;&nbsp; BUILDING PROCESS CALCULATORS IN EXCEL</li>
                        <li><img src="img/literature-16.png" width="16" height="16" alt="e-book icon">&nbsp;&nbsp; CONFIGURING EXCEL TO OPMTIMIZE WORK FLOW</li>
                        <li><img src="img/literature-16.png" width="16" height="16" alt="e-book icon">&nbsp;&nbsp; INTELLIGENT MATERIAL AND ENERGY BALANCES IN EXCEL</li>
                        <li><img src="img/literature-16.png" width="16" height="16" alt="e-book icon">&nbsp;&nbsp; CHEMICAL PROCESS TECHNOECONOMIC ANALYSIS IN EXCEL</li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="row text-center"><i>Signup below for email update for e^book release information and promotionals </i>
            </div>
            <br>

        </article>
    </div> 
<!-- contact section -->
<div class="panel_contact text-center">
  <article id="contact">
    <div class="row section_header">
      <h1 class="text-center functions-header">[ CONTACT ]</h1>
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
            <article id="consulting" class="panel_consulting">
                <div class="row section_header">
                    <h1 class="text-center functions-header">[ CONSULTING ]</h1>
                    <div class="col-xs-0 col-sm-0 col-lg-2"> </div>
                    <div class="col-xs-4 col-sm-4 col-lg-2 avatar"><img src="img/Avatar3.png" class="img-circle img-responsive" alt="Chirs Burk Image" width="90" height="90">
                        <p class="text-right">Chris Burk &nbsp</p>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-lg-8">
                        <ul class="contact">
                            <li>10+ years experience in process development, modeling &amp; evaluation</li>
                            <li>Energy, water, electrochemistry, specialty chemicals, oil &amp; gas</li>
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
                            <li>Probabilistic &amp; sensitivity analysis</li>
                            <li>Cost estimation</li>
                        </ul>
                    </div>

                    <div class="col-xs-5 col-lg-6 climber">
                        <img src="img/CB2.jpg" height="210" width="150" alt="Chris climbing pic">
                    </div>
                </div>

            </article>

<?php
  include('partials/_footer.php')
?>
 

</div>

</main>

</body>
</html>