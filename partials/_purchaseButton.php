   <div class="row order-button-row">
     <br>
    <a itemprop="downloadUrl" href="https://gumroad.com/l/ngIdt" class="btn btn-p1 center-block" role="button">
        <?php
          $nowDate = date("Y-m-d");
          $releaseDate = ('2015-05-31');
          //Uncomment for Diagnostic
          //echo " Now . $nowDate . ";
          //echo "<br><br>";
          //echo " Old . $releaseDate . ";
          //echo "<br><br>";
          
            if ( $nowDate > $releaseDate ) {
              echo 'Buy Now $29.99';
            }
            else {
              echo 'Pre-order Now';
            }
          ?>
        </a>
     <br>
  </div>
 