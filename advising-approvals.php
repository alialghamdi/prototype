<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner - Approvals</title>
     <?php
        include("head.php");
      ?>
  </head>

  <body>
      <?php
        include("advisorNav.php");
      ?>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#Approvals" data-toggle="tab">Approvals</a></li>
            <li><a href="#Apponitments" data-toggle="tab">Apponitments</a></li>
            <li><a href="#Messages" data-toggle="tab">Messages</a></li>
        </ul>
        <div class="jumbotron">
          

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="Approvals">


                <table class="table table-striped">
                    <tr>
                        <th>Student Name</th>
                        <th>Plan</th>
                        <th>Plan Status</th>
                        <th>Approve</th>
                        <th>Profile</th>
                    </tr>
                    <tr>
                        <td>Ahmad Mohammad</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Changed</td>
                        <td><input type="checkbox"></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Hassan Nasser</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Not changed</td>
                        <td><input type="checkbox" checked></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Fahad Emad</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Not changed</td>
                        <td><input type="checkbox" checked></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Saad Waleed</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Changed</td>
                        <td><input type="checkbox" checked></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Ali Faisal</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Not changed</td>
                        <td><input type="checkbox"></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Naif Omar</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Changed</td>
                        <td><input type="checkbox"></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                    <tr>
                        <td>Hamad Faleh</td>
                        <td><a href="advisor-viewPlan.php"><button class="btn btn-default">View Plan</button></a></td>
                        <td>Changed</td>
                        <td><input type="checkbox" checked></td>
                        <td><a href="advisor-viewProfile.php"><button class="btn btn-default">View Profile</button></a></td>
                    </tr>
                </table>


            </div>
            <div class="tab-pane" id="Apponitments">
                <span>Apponitments</span>
            </div>
            <div class="tab-pane" id="Messages">
                <span>Messages</span>
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
