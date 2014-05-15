<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - View Stats</title>
     <?php
        include("head.php");
      ?>
  </head>

  <body>
      <?php
        include("chairmanNav.php");
      ?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <select class="form-control">
                    <option>Numbers</option>
                    <option>Average</option>
                </select>
            </div>
            
            <div class="col-md-4">
                <select class="form-control">
                    <option>Course</option>
                    <option>Semester</option>
                    <option>Program</option>
                    <option>Level</option>
                    <option>Approved Plans</option>
                </select>
            </div>
            
            <div class="col-md-4">
                <select class="form-control">
                    <option>SWE363</option>
                    <option>COE202</option>
                    <option>ICS353</option>
                    <option>MIS205</option>
                    <option>CISE307</option>
                </select>
            </div>
            <div class="col-md-12">
                <br>
                <p class="well">Number of enrolled students is 86</p>
            </div>
            
        </div>
        <br>
        </div>  
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
