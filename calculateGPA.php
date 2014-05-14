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
        include("guestNav.php");
      ?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h3>Calculate GPA</h3>
        <div class="form-group">
            <label>Cumulative GPA:</label>
            <input type="text" class="form-control"  name="fname" required>
        </div>
    
        <div class="form-group">  
            <label>Credit Hourse:</label>
            <input type="text" class="form-control" name="lname" required>
        </div>
          
        <label>Grading System:     </label>  
    
            <label class="radio-inline">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                4
            </label>
       
          
        
            <label class="radio-inline">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                5
            </label>
     
          <br>
          <br>
          
        <p>
          <a class="btn btn-lg btn-primary" href="calculateGPA2.php" role="button">Continue &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
