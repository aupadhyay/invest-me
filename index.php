<html>
	<head>
		<title>Evest</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      				</button>
              
     			 	<a class="navbar-brand" href="#">
              <img src="https://cloud.githubusercontent.com/assets/9246693/6094614/396df024-aee6-11e4-9e68-7d7b7a15432c.png" height= "50" width="50"/>
            </a>
            <a class="navbar-brand" href="#">E-VesT</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
        		  	   <li><a href="#">Explore</a></li>
                    <li><a href="#login" data-toggle="modal"> Log In</a></li>
                 </ul>
      			</div>	

  			</div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="jumbotron">
        
				<h1>E-VEST</h1>
			</div>
		</div>



      <div class="modal fade" id="login" role = "dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="h1">Log In</h4>
            </div>
          <div class="modal-body">
            <div id="ack"></div>
            <form action="login.php" id = "myForm"method="POST">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id = "email"name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id = "password"name="password" placeholder="Password">
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id = "submit" name="submit" class="btn btn-success">Log In</button>
            </form>

            </div>
          </div>
        </div>
        </div>

		<script src="js/bootstrap.js"></script>
	</body>
</html>