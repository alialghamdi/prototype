<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - View Plan</title>
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
            <div class="col-md-8">
                <h3>Plan: <span id="rating-up-not-green" class="glyphicon glyphicon-thumbs-up"></span>  
                 <span id="rating-down" class="glyphicon glyphicon-thumbs-down"></span></h3>
                 
                <br>
                <table class="table table-striped">
                    <tr>
                        <td>Semster</td>
                        <td>Courses</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        <td><button class="btn btn-default">PE001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                    </tr>
                </table>
                <a href="editPlan.php" class="btn btn-primary btn-lg btn-block">Edit Plan</a>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Comments</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <textarea class="form-control" rows="3">Write a comment...</textarea><br>
                            <button type="editPlan.php" class="btn btn-primary btn-lg btn-block">Comment</button>
                        </p>
                    </div>
                </div>
                
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
