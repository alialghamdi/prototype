<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - Courses</title>
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
        <div class="row">
            <div class="col-md-6">
                <select class="form-control">
                    <option>SWE</option>
                    <option>COE</option>
                    <option>ICS</option>
                    <option>MIS</option>
                    <option>CISE</option>
                </select>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Course Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Course Name">
                </div>    
            </div>
            <div class="col-md-6">
                <br>
                <a href="viewCourse.php" type="button" class="btn btn-default btn-lg btn-block">SWE 417</a>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 316</button>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 387</button>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 215</button>
            </div>
            <div class="col-md-6">
            <br>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 416</button>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 363</button>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 205</button>
                <button type="button" class="btn btn-default btn-lg btn-block">SWE 516</button>
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
