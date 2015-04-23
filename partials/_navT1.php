<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
      <!-- Define your search form -->
      <form class="navbar-form navbar-left" role="search">
        <!-- Define a button to toggle the search area -->
        <button id='search-button' class='btn btn-default '><span class='glyphicon glyphicon-search'></span></button>
        <!-- Create your entire search form -->
        <div id='search-form' class="form-group">
          <div class="input-group">
            <span id='search-icon' class="input-group-addon"><span class='glyphicon glyphicon-search'></span></span>
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </div>
      </form>
  </div>
</nav>
<script type='text/javascript'>
      // When your page loads
      $(function(){
         // When the toggle areas in your navbar are clicked, toggle them
         $("#search-button, #search-icon").click(function(e){
             e.preventDefault();
             $("#search-button, #search-form").toggle();
         });
      })  
</script>