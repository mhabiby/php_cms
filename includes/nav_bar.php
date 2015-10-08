<!--header-->
<div id="header">
<header class="navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand"><i class="fa fa-home fa-2x"></i>
Med Corp </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
  
       
      <ul class="nav navbar-nav">
        
        <li>
          <a href="#"><i class="fa fa-inbox fa-2x"></i> Inbox <span class="badge">42</span>
        </a>
        </li>
        <li>
           <a href="#"><i class="fa fa-user fa-2x"></i>
 welcome : <?php print($userRow['username']); ?> </a>
            
        </li>
        <li>
          <a href="#"><img src="images/profile_picture.png" class="img-responsive img-circle"        data-toggle="modal"   data-target="#squarespaceModal">
         </a>
        </li>
      </ul>
      
    </nav>
     
  </div>
</header>