<nav style="margin-top:50px;" class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $name; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        	<li><a href="registration.php">Create User</a></li>
          <li><a href="sem-sched.php">Set Semester Schedule</a></li>
        	<li><a href="../php_func/logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>