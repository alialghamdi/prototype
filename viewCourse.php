<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - SWE 417</title>
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
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SWE 417</h3>
                    </div>
                    <div class="panel-body">
                        <p class="well">Senior Project 1</p>
                        <p class="well">For course resources refer to <a href="http://kfupmresources.com">KFUPM Resources</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reviews</h3>
                        
                    </div>
                    <div class="panel-body">
                        <p>
                            <textarea class="form-control" rows="3">Write a review...</textarea><br>
                            <button type="editPlan.php" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </p>
                        <p class="well"><b>Omar:</b> I love this course. <span id="rating-up" class="glyphicon glyphicon-thumbs-up"></span>  
                        <span id="rating-down" class="glyphicon glyphicon-thumbs-down"></span>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Comments</h3>
                                </div>
                                    <div class="panel-body">
                                        <p class="well"><b>Naif:</b> I agree.</p>
                                        <p class="well"><b>Ali:</b> It is perfect.</p>
                                        <p>
                                            <textarea class="form-control" rows="3">Write a comment...</textarea><br>
                                            <button type="editPlan.php" class="btn btn-primary btn-lg btn-block">Comment</button>
                                        </p>
                                    </div>
                                </div></p>
                        <p class="well"><b>Ali:</b> The only course you use your software techniques in. <span id="rating-up" class="glyphicon glyphicon-thumbs-up"></span>  
                        <span id="rating-down" class="glyphicon glyphicon-thumbs-down"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Qustions</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <textarea class="form-control" rows="3">Ask a question...</textarea><br>
                            <button type="editPlan.php" class="btn btn-primary btn-lg btn-block">Ask</button>
                        </p>
                        <p class="well"><b>Faisal:</b> Who's the best instructor for this course? <span id="rating-up" class="glyphicon glyphicon-thumbs-up"></span>  
                        <span id="rating-down" class="glyphicon glyphicon-thumbs-down"></span>
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Answers</h3>
                                </div>
                                    <div class="panel-body">
                                        <p class="well"><b>Naif:</b> Dr. Moataz, but he's leaving next semster.</p>
                                        <p>
                                            <textarea class="form-control" rows="3">Answer this?</textarea><br>
                                            <button type="editPlan.php" class="btn btn-primary btn-lg btn-block">Answer</button>
                                        </p>
                                    </div>
                                </div>
                        </p>
                    </div>
                </div>
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
