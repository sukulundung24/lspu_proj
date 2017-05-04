<nav style="margin-top:50px;" class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Help</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $name; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        	<li><a href="registration.php">Create User</a></li>
        	<li><a href="#">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>