   <div class="row order-button-row">
     <br>
    <a itemprop="downloadUrl" href="https://gumroad.com/l/ngIdt" class="btn btn-p1 center-block" role="button">
        <?php
            // $now = new DateTime();
            $dtA = new DateTime('05/14/2015 8:00AM');
            $dtB = new DateTime('06/01/2015 8:00AM');
            
            if ( $dtA > $dtB ) {
              echo 'Buy Now';
            }
            else {
              echo 'Pre-order Now';
            }
        ?>
        </a>
     <br>
  </div>
 