<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - Profile</title>
     <?php
        include("head.php");
      ?>
  </head>

  <body>
      <?php
        include("studentNav.php");
      ?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3>Your plans:</h3>
                <br>
                <a href="viewPlan.php" type="button" class="btn btn-primary btn-lg btn-block">Primary Plan</a>
                <button type="button" class="btn btn-default btn-lg btn-block">Plan #2</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Plan #3</button>
            
            </div>
            <div class="col-md-2"></div>
        </div>
        <br>  
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
