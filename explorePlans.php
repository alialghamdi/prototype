<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - Explore Plans</title>
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
                <select class="form-control">
                    <option>SWE</option>
                    <option>COE</option>
                    <option>ICS</option>
                    <option>MIS</option>
                    <option>CISE</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control">
                    <option>Recent</option>
                    <option>Highly Rated</option>
                    <option>Favorite</option>
                </select>
            </div>
            <div class="col-md-6">
                <br>
                <a href="viewPlan.php" type="button" class="btn btn-default btn-lg btn-block">Omar's Plan</a>
                <button type="button" class="btn btn-default btn-lg btn-block">Hamad's Plan</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Ali's Plan</button>
                <button type="button" class="btn btn-default btn-lg btn-block">more...</button>
            </div>
            <div class="col-md-6">
            <br>
                <button type="button" class="btn btn-default btn-lg btn-block">Faisa's Plan</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Naif's Plan</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Faleh's Plan</button>
                <button type="button" class="btn btn-default btn-lg btn-block">more...</button>
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
