<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner</title>
     <?php
        include("head.php");
      ?>
  </head>

  <body>
      <?php
        include("advisorNav.php");
      ?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
          <a href="advising-approvals.php">Back</a>
        <div class="row">
            <div class="col-md-6">
                <h3>Ahmad Mohammad</h3>
                <br>
                <h4>Level: Junior</h4>
                <h4>Current GPA: 3.98</h4>
                <h4>Advisor: Dr. Moataz Ahmed</h4>
                <h4>Major: Computer Science</h4>
            
            </div>
            <div class="col-md-6">
                <h3>Ahmad's plans:</h3>
                <br>
                <a href="advisor-viewPlan.php" type="button" class="btn btn-primary btn-lg btn-block">Primary Plan</a>
                <button type="button" class="btn btn-default btn-lg btn-block">Plan #2</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Plan #3</button>
            
            </div>
        </div>
        <br>  
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
