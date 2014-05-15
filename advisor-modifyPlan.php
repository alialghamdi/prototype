<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KFUPM Academic Planner</title>
     <?php
        include("head.php");
      ?>
      <script>
        function allowDrop(ev)
        {
            ev.preventDefault();
        }

        function drag(ev)
        {
            ev.dataTransfer.setData("Text",ev.target.id);
        }

        function drop(ev)
        {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("Text");
            ev.target.appendChild(document.getElementById(data));
        }
      </script>
  </head>

  <body>
      <?php
        include("advisorNav.php");
      ?>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="row">
            <div class="col-md-8" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
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
                        <td><button class="btn btn-default">MATH001</button></td>
                        <td><button class="btn btn-default">ENGL001</button></td>
                        <td><button class="btn btn-default">PHYS001</button></td>
                        <td><button class="btn btn-default">PYP001</button></td>
                        <td><button class="btn btn-default">PYP003</button></td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Courses</h3>
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-default" id="drag1" draggable="true" ondragstart="drag(event)">SWE316</button>
                        <button class="btn btn-default" id="drag2" draggable="true" ondragstart="drag(event)">SWE416</button>
                        <button class="btn btn-default" id="drag3" draggable="true" ondragstart="drag(event)">SWE205</button>
                        <button class="btn btn-default" id="drag4" draggable="true" ondragstart="drag(event)">SWE215</button>
                        <button class="btn btn-default" id="drag5" draggable="true" ondragstart="drag(event)">SWE387</button>
                        <button class="btn btn-default" id="drag6" draggable="true" ondragstart="drag(event)">SWE363</button>
                        <button class="btn btn-default" id="drag7" draggable="true" ondragstart="drag(event)">SWE516</button>
                        <button class="btn btn-default" id="drag8" draggable="true" ondragstart="drag(event)">SWE487</button>
                        <button class="btn btn-default" id="drag9" draggable="true" ondragstart="drag(event)">ICS102</button>
                        <button class="btn btn-default" id="drag10" draggable="true" ondragstart="drag(event)">ICS202</button>
                        <button class="btn btn-default" id="drag11" draggable="true" ondragstart="drag(event)">ICS201</button>
                        <button class="btn btn-default" id="drag12" draggable="true" ondragstart="drag(event)">ICS410</button>
                        <button class="btn btn-default" id="drag13" draggable="true" ondragstart="drag(event)">ICS343</button>
                        <button class="btn btn-default" id="drag14" draggable="true" ondragstart="drag(event)">ICS353</button>
                        
                    </div>
                </div>
                
            </div>
            
            
        </div>
          <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Changes Made</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <textarea class="form-control" rows="3">Write a your comments...</textarea><br>
                        </p>
                    </div>
                </div>
          <a href="advisor-viewPlan.php"  class="btn btn-primary btn-lg btn-block">Commit Edits</a>
        <br>  
      </div>

    </div> <!-- /container -->


    <?php
        include("javascript.php");
    ?>
  </body>
</html>
