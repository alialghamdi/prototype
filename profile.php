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
            <div class="col-md-6">
                <h3>Ali Alghamdi</h3>
                <br>
                <h4>Level: Senior</h4>
                <h4>Current GPA: 3.9</h4>
                <h4>Advisor: Dr. Moataz Ahmed</h4>
                <h4>Major: Software Engineering</h4>
            
            </div>
            <div class="col-md-6">
                <h3>Your plans:</h3>
                <br>
                <button type="button" class="btn btn-primary btn-lg btn-block">Primary Plan</button>
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
