
	<nav class="navbar navbar-expand-lg navbar-dark bg-nav-1 fixed-top">
	  <a class="navbar-brand" href="<?php echo"$instalasi" ?>">Database Film</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item <?php if($page == "film"){echo "active";} ?>">
	        <a class="nav-link" href="<?php echo $instalasi ?>/film/film.php">Film</a>
	      </li>
	      <li class="nav-item <?php if($page == "genre"){echo "active";} ?>">
	        <a class="nav-link" href="<?php echo $instalasi ?>/genre/genre.php">Genre</a>
	      </li>
	      <li class="nav-item <?php if($page == "user"){echo "active";} ?>">
	        <a class="nav-link" href="<?php echo $instalasi ?>/user/user.php">User</a>
	      </li>
	    </ul>
	  </div>
	</nav>
