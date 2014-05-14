<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - Calculate GPA</title>
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
        <h3>Your cumulative GPA is 3.98</h3>
        <form class="form" role="form">
            <div class="form-group">
                <label>SWE387</label>
                <input type="text" class="form-control" placeholder="Your Grade">
            </div>
            <div class="form-group">
                <label>SWE416</label>
                <input type="text" class="form-control" placeholder="Your Grade">
            </div>
            <div class="form-group">
                <label>SWE417</label>
                <input type="text" class="form-control" placeholder="Your Grade">
            </div>
            <div class="form-group">
                <label>ICS324</label>
                <input type="text" class="form-control" placeholder="Your Grade">
            </div>
            <div class="form-group">
                <label>SWE363</label>
                <input type="text" class="form-control" placeholder="Your Grade">
            </div>
            
        </form>
        <br>  
        <p>
          <a class="btn btn-lg btn-primary" href="calculateKFUPMGPA2.php" role="button">Continute &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
