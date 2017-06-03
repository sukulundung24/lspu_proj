<div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav">
      <?php 
          $query = "Select * from student_survey_status where id_num='".$_SESSION['username']."'";
          $resp = @mysqli_query($dbc, $query);
          // print_r($resp);
          if($resp){
        if($resp->num_rows>0){
          while($row=mysqli_fetch_array($resp)){
          if($row['status']!='finish'){
        ?>

          <li><a href="survey.php">Take Survey</a></li>

        <?php } else {
          ?>
          <li><a href="#">You have finished taking survey</a></li>
          <?php
        }

          }}
          else {
            echo '<li><a href="survey.php">Take Survey</a></li>';
          }}
        ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>