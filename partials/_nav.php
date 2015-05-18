  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">PROCESS | UTILITIES</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
     <div class="navbar-collapse collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="collapse" data-target=".navbar-collapse" href="index.php"><span class="sr-only">Toggle navigation</span><i class="icon icon-home"></i></a></li>
          <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#func">functions</a></li>
          <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#consulting">consulting</a></li>
          <li><a data-toggle="collapse" data-target=".navbar-collapse" href="https://gumroad.com/l/ngIdt" target="_blank">preorder</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span>
            <span class="sr-only">Search dropdown</span>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
              <?php
              include('partials/_searchBar1.php')
              ?>
              </li>
            </ul>
        </li>
        </ul>
      </div>
  </nav>
  
