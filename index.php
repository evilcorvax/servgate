<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServerGate Management System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">

    <link rel="stylesheet"  type="text/css" href="css/wmks‐all.css">

      <script type="text/javascript"  src="jquery‐1.8.3.min.js"></script> 
      <script type="text/javascript"  src="jquery‐ui.min.js"></script> 
      <script type="text/javascript"  src="wmks.min.js" type="text/javascript"></script>  


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      

    
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
          <input class="form-control mr-sm-2" type="text" placeholder="Password" aria-label="Password">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign in</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Welcome to ServerGate Management System</h1>
          <p>There is yout list of VM's:</p>
          <ul> 
            <?php
            require('vmController.php');
           for ($i=1;$i<4;$i++) {
            $name = getsumm_vm($ssh,$i)[0];
            echo "<li>$name</li>";
           }

            ?>
          </ul>
          <p><a class="btn btn-primary btn-lg" href="zabbix.php" role="button">Check it from Zabbix &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-5">
            <h2>Start the selected VM</h2>
            <p><input name="one" type="radio" value="with bash"> Start VM with bash</p>
            <p><input name="two" type="radio" value="with zsh"> Start VM with zsh</p>
            <p><input name="three" type="radio" value="logon" > Log onto remote server</p>
            <p><a class="btn btn-secondary" href="start_vm.php" role="button">Start &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <h2>Stop the selected VM</h2>
            <p><input name="one" type="radio" value="dells"> Delete last session</p>
            <p><input name="two" type="radio" value="check_vd"> Check the virtual drive at next session</p>
            <p><input name="three" type="radio" value="delvd" > Delete the virtual drive</p>
            <p><a class="btn btn-secondary" href="stop_vm.php" role="button">Stop &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <h2>Restart the selected VM</h2>
            <p>At your own risk you would restart the VM. Please think twice before continue</p>
            <p><a class="btn btn-secondary" href="restart_vm.php" role="button">Restart &raquo;</a></p>
          </div>
          <div class="col-md-5">
            <h2>Go to the GPIO watchdog</h2>
            <p>You would see a list of pins' condition</p>
            <p><a class="btn btn-secondary" href="gpiocond.php" role="button">Check &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Andrey Shalkauskas 2018</p>
    </footer>


      <script>  
   var  wmks  = WMKS.createWMKS("wmksContainer",{}) 
      .register(WMKS.CONST.Events.CONNECTION_STATE_CHANGE,                
        sfunction(event,data){ 
                      if(data.state ==  cons.ConnectionState.CONNECTED) 
                    { 
                        console.log("connection state change  : connected");
                    } 
      }); 
      wmks.connect("ws://144.76.67.203n");  
    </script> 
        <div id=”wmksContainer”  style=”position:absolute;width:100%;height:100%”></div> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>


 

  